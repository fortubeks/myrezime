<?php

namespace App\Http\Controllers;

use App\Models\Resume;
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
