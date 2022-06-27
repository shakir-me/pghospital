<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
class NoticeController extends Controller
{
    public function ReportalReport()
      {

    	$reportal =Report::where('type', 'reporter')->get();
    	return view('admin.report.reportal',compact('reportal'));
      }

      public function PatientReport()
        {

      	$patient =Report::where('type', 'patient')->get();
      	return view('admin.report.patient',compact('patient'));
        }
}
