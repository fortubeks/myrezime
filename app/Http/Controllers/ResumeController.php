<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use function Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf as SupportPdf;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;

class ResumeController extends Controller
{
    public function index(Resume $model){
        $user = auth()->user();
        return view('dashboard.resumes.index', ['resumes' => $model->where('user_id',$user->id)->get()]);
    }
    public function saveResume(Request $request){
        //$input = $request->except(['_token']);
        $job_role_id = session('job_role_id');
        $resume_url = session('resume_url');
        $resume = Resume::firstOrCreate(['email' => $request->email], ['first_name' => $request->first_name,
        'last_name' => $request->last_name,'phone' => $request->phone,'address' => $request->address,'state' => $request->state,
        'job_role_id' => $job_role_id, 'storage_url' => $resume_url]);
        session()->put('resume',$resume);
        
        //dd($resume);
        return view('pages.create-resume.step-5')->with('resume',$resume);
    }

    public function saveEducationInfo(Request $request){
        $resume = Resume::findorFail($request->resume_id);
        foreach($request->school_name as $key => $education){
            if($request->school_name[$key] === null || isset($request->education_id[$key])){
                continue;
            }

            Education::create([
                'resume_id' => $resume->id,
                'degree' => $request->degree[$key],
                'school_name' => $request->school_name[$key],
                'school_location' => $request->school_location[$key],
                'field_of_study' => $request->field_of_study[$key],
                'month_year' => $request->month[$key],
            ]); 
        }
        return view('pages.create-resume.step-6')->with('resume',$resume);
    }

    public function saveWorkInfo(Request $request){
        $resume = Resume::findorFail($request->resume_id);
        foreach($request->job_role as $key => $work_experience){
            if($request->job_role[$key] === null || isset($request->work_experience[$key])){
                continue;
            }
            //dd($request->all());
            WorkExperience::create([
                'resume_id' => $resume->id,
                'job_role' => $request->job_role[$key],
                'job_type' => $request->job_type[$key],
                'company' => $request->company[$key],
                'about' => $request->about[$key],
                'duration' => $request->duration[$key],
            ]); 
        }
        return view('pages.create-resume.step-7')->with('resume',$resume);
    }

    public function saveSkillsInfo(Request $request){
        $resume = Resume::findorFail($request->resume_id);
        foreach($request->name as $key => $skill){
            if($request->name[$key] === null || isset($request->skill[$key])){
                continue;
            }

            Skill::create([
                'resume_id' => $resume->id,
                'name' => $request->name[$key],
                'years' => $request->years[$key]
            ]); 
        }
        //after collecting all that info, call the api to get more details like About Me etc from the api

        return view('pages.create-resume.preview')->with('resume',$resume);
    }

    public function previewResume(Request $request){
        $resume = Resume::find($request->id);
        return view('pages.create-resume.preview-raw')->with('resume',$resume);
    }

    public function downloadResume(Request $request){
        $resume = Resume::find($request->id);
        
        // Check if the resume exists
        if(!$resume) {
            abort(404, 'Resume not found');
        }
    
        // Create PDF instance with DOMPDF options
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $pdf = new \Dompdf\Dompdf($options);
    
        // Load the view into the PDF
        $view = View::make('pages.create-resume.preview-raw', ['resume' => $resume])->render();
        $pdf->loadHtml($view);
    
        // Render PDF
        $pdf->render();
    
        // Stream or download the PDF
        return $pdf->stream('my-resume.pdf');
    }
}
