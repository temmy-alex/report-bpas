<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function download()
    {
        // $pdf =  PDF::loadView('backend.borang.report.pdf_certificate',[
        //     'datas' => $sorted,
        //     'doctor_name' => $doctor_name
        // ] )->setPaper('a4','landscape');

        $pdf = PDF::loadView('report.pdf');
        return $pdf->stream('report-bpas.pdf');
    }
}