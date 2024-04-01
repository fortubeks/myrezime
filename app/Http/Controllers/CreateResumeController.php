<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class CreateResumeController extends Controller
{
    public function setResumeOption(Request $request){
        // Create an object from the request data
        $resumeData = (object) $request->all();

        // Store the object in the session
        if (session()->has('resume')) {
            // If it exists, push the new data into it
            session()->push('resume', $resumeData);
        } else {
            // If it doesn't exist, set it as a new session array with the new data
            session()->put('resume', [$resumeData]);
        }
    }
    public function proceed(Request $request){
        $page = $request->page;
        return view('pages.create-resume.'.$page);
    }
    public function previous(Request $request){
        $page = $request->page;
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
}
