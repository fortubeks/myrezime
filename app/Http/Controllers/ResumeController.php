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

class ResumeController extends Controller
{
    public function saveResume(Request $request){
        //$input = $request->except(['_token']);
        $resume = Resume::firstOrCreate(['email' => $request->email], ['first_name' => $request->first_name,
        'last_name' => $request->last_name,'phone' => $request->phone,'address' => $request->address,'state' => $request->state]);

        foreach($request->education as $key => $education){
            if($request->education[$key] === null){
                continue;
            }

            Education::create([
                'resume_id' => $resume->id,
                'degree' => $request->degree[$key],
                'school' => $request->school[$key],
                'duration' => $request->duration[$key],
            ]); 
        }
        foreach($request->skill as $key => $skill){
            if($request->skill[$key] === null){
                continue;
            }

            Skill::create([
                'resume_id' => $resume->id,
                'name' => $request->degree[$key],
            ]); 
        }
        foreach($request->work_experience as $key => $work_experience){
            if($request->work_experience[$key] === null){
                continue;
            }

            WorkExperience::create([
                'resume_id' => $resume->id,
                'job_role' => $request->work_job_role[$key],
                'company' => $request->work_company[$key],
                'about' => $request->work_about[$key],
                'duration' => $request->work_duration[$key],
            ]); 
        }
        //dd($resume);
        return view('pages.create-resume.preview')->with('resume',$resume);
    }

    public function downloadResume(Request $request){
        $resume = Resume::find($request->id);

        $pdf = App::make('dompdf.wrapper');
        $pdf = Pdf::loadView('pages.create-resume.preview-raw', ['resume' => $resume]);
        //return $pdf->download('my-resume.pdf');
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        //return $dompdf->stream('my-resume.pdf');
    }
}
