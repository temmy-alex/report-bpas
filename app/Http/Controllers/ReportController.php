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

    public function download($name_file)
    {
        // $pdf =  PDF::loadView('backend.borang.report.pdf_certificate',[
        //     'datas' => $sorted,
        //     'doctor_name' => $doctor_name
        // ] )->setPaper('a4','landscape');

        $pdf = PDF::loadView("report.$name_file");
        return $pdf->stream('report-bpas.pdf');
        // return view('report.pdf_po_bpas');
    }
}
