<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\WorkExperience;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Spatie\PdfToText\Pdf;

class CreateResumeController extends Controller
{
    public function setResumeOption(Request $request){
        //save
        //get value to store and the value
        $option = $request->option;
        foreach($request->all() as $_option => $value){
            session()->put($_option, $value); 
        }
        //dd(session()->all());
    }
    public function navigate(Request $request){
        //dd(session()->all());
        if($request->page == 1){
            if(session('option') == "new"){
                return view('pages.create-resume.new.step-1');
            }
            elseif(session('option') == "upload"){
                return view('pages.create-resume.upload.step-1');
            }
        }
        if($request->page == 2){
            if(session('option') == "new"){
                if(session('job_option') == 'job-role'){
                    return view('pages.create-resume.new.step-2');
                }
                elseif(session('job_option') == 'job-description'){
                    return view('pages.create-resume.new.step-2-1');
                }
            }
            elseif(session('option') == "upload"){
                
                return view('pages.create-resume.upload.step-2');
            }
        }
        if($request->page == 3){
            if(session('option') == "new"){
                return view('pages.create-resume.new.step-3');
            }
            elseif(session('option') == "upload"){
                if(session('job_option') == 'job-role'){
                    return view('pages.create-resume.upload.step-3');
                }
                elseif(session('job_option') == 'job-description'){
                    return view('pages.create-resume.upload.step-3-1');
                }
            }
        }
        if($request->page == 4){
            if(session('option') == "new"){
                return view('pages.create-resume.new.step-3');
            }
            elseif(session('option') == "upload"){
                //call the api that gets the extracted information
                //save resume in session
                $resume = $this->getExtractedInformationFromCV();
                session()->put('resume',$resume);
                return view('pages.create-resume.step-5')->with('resume',$resume);
            }
        }
        return view('pages.create-resume.begin');
    }
   
    public function selectJobOption(Request $request){
        //depending on the value selected for either job role or job description
        //navigate to the desired page
        //dd(session('resume'));
        $job_option = session('resume')[1]->option;
        if($job_option == "job-role"){
            return view('pages.create-resume.select-job-role');
        }
        else{
            return view('pages.create-resume.add-job-description');
        }
        return view('pages.create-resume.begin');
    }
    public function previewResume(Request $request){
        $resume = Resume::find($request->id);
        return view('pages.create-resume.preview-raw')->with('resume',$resume);
    }

    public function upload(Request $request)
    {
        // Validate file upload
        $request->validate([
            'resume' => 'required|file|mimes:pdf|max:2048', // Maximum file size: 2MB
        ]);

        // Store uploaded file
        $resumePath = $request->file('resume')->store('resumes', 'public');

        $resumeUrl = asset('storage/resumes/' . $resumePath);

        session()->put('resume_url', $resumeUrl); 
        //$resumePath = $request->file('resume')->store('resumes');
        //dd(storage_path('app/' . $resumePath));
        //dd($resumeUrl);

        //go to next page
        return view('pages.create-resume.upload.step-2');
    }

    public function getExtractedInformationFromCV(){
        //check if session has resume url
        //get the session has job-role or job-description
        //send the api call to http://13.39.128.234/api/v1/cvfromfile
        //attach the following raw data with the request to extract information from the cv like education history and skills
        //"cv_url": "https://topuniversestorage.blob.core.windows.net/testapp/1.pdf",
        //"job_description": "Company XYZ is see"
        //if the request returns successfully
        //create a Resume model and fill in the information
        //also the Resume relationships like Education, Skills etc
        //then return the Resume model
        //handle any errors by logging it, wrap it all in a Try Catch
        //dd(session()->all());
        try {
            // Check if session has resume URL
            if (session()->has('resume_url')) {
                // Get session data
                $jobRole = session()->get('job_role');
                $jobDescription = session()->get('job_description');

                // Check if either job role or job description is in session and not null
                if (session()->has('job_role') && session()->get('job_role')) {
                    $jobDescription = session()->get('job_role');
                    $jobDescription = null;
                } elseif (session()->has('job_description') && session()->get('job_description')) {
                    $jobDescription = null;
                    $jobDescription = session()->get('job_description');
                } else {
                    // If both job role and job description are null or not in session, handle the case accordingly
                    return null; // or throw an exception
                }
                //dd($jobDescription);
                // Send API call to extract information from the CV
                // $response = Http::post('http://13.39.128.234/api/v1/cvfromfile', [
                //     'cv_url' => session()->get('resume_url'),
                //     'job_description' => $jobDescription
                // ]);
                $response = Http::get('http://truthshare.com.ng', [
                    'cv_url' => session()->get('resume_url'),
                    'job_description' => $jobDescription
                ]);
        
                // Check if the request returns successfully
                if ($response->successful()) {
                    // Create a Resume model and fill in the information
                    $resume = new Resume();
                    $resume->job_role_id = session('job_role_id');
                    $resume->job_description = $jobDescription;
        
                    // Fill other fields based on response data (assuming response is JSON)
                    //$responseData = $response->json();
                    $responseData = json_decode($this->dummyData());
                    //$resume->fill($responseData);
        
                    // Assuming $responseData contains the extracted_details
                    $name = $responseData->extracted_details->name;

                    // Split the full name into an array of first name and last name
                    $nameParts = explode(' ', $name);
                    $resume->first_name = $nameParts[0];
                    $resume->last_name = end($nameParts);

                    $resume->address = $responseData->extracted_details->contact_info;
                    $resume->about = $responseData->extracted_details->summary;
                    $resume->phone = $responseData->extracted_details->phone_number;
                    $resume->email = $responseData->extracted_details->email;

                    // Save the resume
                    $resume->save();
        
                    // Handle relationships (assuming education, skills, etc. are nested in the response)
                    foreach ($responseData->extracted_details->education as $educationData) {
                        $education = new Education();
                        $education->degree = $educationData->degree;
                        $education->school_name = $educationData->school;
                        $education->school_location = $educationData->location;
                        $education->month_year = $educationData->graduation_year;
                        $education->field_of_study = $educationData->degree;
                        $resume->education()->save($education);
                    }

                    foreach ($responseData->extracted_details->skills as $_skill_name) {
                        $skill = new Skill();
                        $skill->name = $_skill_name;
                        $skill->years = 1;
                        $resume->skills()->save($skill);
                    }

                    foreach ($responseData->extracted_details->experience as $experienceData) {
                        $work_experience = new WorkExperience();
                        $work_experience->company = $experienceData->company;
                        $responsibilitiesString = implode("\n", $experienceData->responsibilities);
                        $work_experience->about = $responsibilitiesString;
                        $work_experience->duration = $experienceData->start_date. ' - '. $experienceData->end_date;
                        $work_experience->job_type = $experienceData->location;
                        $work_experience->job_role = $experienceData->position;
                        $resume->workExperiences()->save($work_experience);
                    }
        
                    // Return the Resume model
                    return $resume;
                } else {
                    // Log the error if the request is unsuccessful
                    logger()->error('CV extraction API request failed: ' . $response->status());
                    return null; // or throw an exception
                }
            } else {
                // Handle the case where session does not have resume URL
                return null; // or throw an exception
            }
        } catch (Exception $e) {
            // Log any errors and handle them gracefully
            logger()->error('Error processing CV extraction: ' . $e->getMessage());
            return null; // or throw an exception
        }
    }

    public function dummyData(){
        return '{
            "message": "PDF file downloaded and information extracted successfully",
            "extracted_details": {
                "name": "Ajibade Sabeeh",
                "email": "customer@email.com",
                "phone_number": "+2348139589883",
                "contact_info": "9, Balogun Crescent, Oja Oba, Alimosho, Lagos State.",
                "summary": "Skilled and experienced Product Manager with a proven track record of driving the development and enhancement of product offerings. Strong analytical skills, strategic thinking, and a passion for delivering exceptional customer experiences. MBA preferred.",
                "education": [
                    {
                        "degree": "Bachelor of Technology",
                        "school": "Ladoke Akintola University of Technology",
                        "location": "Oyo State",
                        "graduation_year": 2019
                    }
                ],
                "experience": [
                    {
                        "position": "Product Manager",
                        "company": "Company XYZ",
                        "location": "Lagos State, Nigeria",
                        "start_date": "August 2022",
                        "end_date": "Present",
                        "responsibilities": [
                            "Develop and execute a comprehensive product strategy that aligns with the company\'s goals and objectives",
                            "Conduct thorough market research and analysis to identify market trends, customer needs, and competitive landscape",
                            "Collaborate with cross-functional teams including engineering, design, and marketing to define product requirements and roadmap",
                            "Manage the entire product lifecycle from ideation to launch, ensuring timely delivery of high-quality products",
                            "Prioritize product features and enhancements based on customer feedback, market demand, and business priorities",
                            "Champion the user experience by advocating for intuitive and user-friendly product designs",
                            "Define key performance indicators (KPIs) and utilize analytics to measure product performance and identify areas for improvement",
                            "Communicate product updates, roadmap, and strategy effectively to internal stakeholders and external partners",
                            "Coordinate product launches and go-to-market strategies to maximize product adoption and success",
                            "Gather and analyze customer feedback to iterate and improve product offerings"
                        ]
                    }
                ],
                "skills": [
                    "Analytical Skills",
                    "Strategic Thinking",
                    "Market Research",
                    "Product Development",
                    "User Experience",
                    "Data Analysis",
                    "Communication",
                    "Project Management",
                    "Leadership"
                ],
                "additional_skills": [
                    "Agile Development Methodologies",
                    "Product Management Tools",
                    "Data-driven Decision Making",
                    "Cross-functional Collaboration",
                    "Innovation",
                    "Customer Satisfaction",
                    "Market Analysis",
                    "Product Lifecycle Management",
                    "Stakeholder Management",
                    "Problem Solving"
                ],
                "enhancement_suggestions": "To enhance the CV, the candidate can consider adding the following details:\n- Additional work experience in product management roles, preferably in the technology industry\n- Completed MBA or equivalent degree\n- Specific achievements and results from previous product management projects\n- Certifications or training related to product management\n- Any relevant leadership or team management experience\n- Examples of successful product launches or improvements\n- Any experience with agile development methodologies and product management tools\n- Strong references or recommendations from previous employers or colleagues"
            }
        }';
    }

}
