<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class UploadResumeController extends Controller
{

    public function setResumeOption(Request $request){
        session()->put('resume-option', $request->option);
    }
    public function setResumeJobOption(Request $request){
        session()->put('resume-job-option', $request->option);
    }
    public function next(){
        $page = session('next');
        return view('pages.create-resume.'.$page);
    }
    public function previous(){
        $page = session('previous');
        return view('pages.create-resume.'.$page);
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
        $resumePath = $request->file('resume')->store('resumes');

        // Extract text from PDF
        $text = Pdf::getText(storage_path('app/' . $resumePath));

        // Pre-process text, perform NER, extract information, etc.
        // Implement the remaining resume parsing and information extraction logic here

        // Return response or redirect as needed
        return response()->json(['text' => $text]);
    }

}
