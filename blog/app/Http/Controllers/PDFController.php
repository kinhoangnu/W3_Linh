<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\User;

class PDFController extends Controller
{
    public function getPDF(){
    	$users = User::all();
        $pdf = PDF::loadView('pdf.user', ['users'=>$users]);
        return $pdf->download('user.pdf');
    }
}
