<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
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
                return view('pages.create-resume.upload.step-4');
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

        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($request->file('resume')->path());
        // .. or ...
        //$pdf = $parser->parseContent(file_get_contents('document.pdf'));

        // extract text of the whole PDF
        $text = $pdf->getText();
        //dd( $text);

        // Store uploaded file
        //$resumePath = $request->file('resume')->store('resumes');
        //dd(storage_path('app/' . $resumePath));
        // Extract text from PDF
        //$text = Pdf::getText(storage_path('app/' . $resumePath));
        //C:\xamppp\htdocs\myrezime\storage\app/resumes/hurQhivuOhw3mtHi6RZpse3NfcAHl7wP98A0eZK7.pdf
        
        //"C:\xamppp\tmp\phpA8F7.tmp"
        // $fileContent = file_get_contents($request->file('resume')->path());
        // //dd($fileContent);
        // $text = Pdf::getText($fileContent);

        // dd($text);
        //go to next page
        return view('pages.create-resume.upload.step-2');
    }

}
