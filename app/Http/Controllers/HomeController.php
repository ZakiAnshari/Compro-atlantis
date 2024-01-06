<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramUnggulan;

class HomeController extends Controller
{
    public function index()
    {
        $programunggulans = ProgramUnggulan::all();
        return view('frontend.homepage',['programunggulans' => $programunggulans]);
    }

    public function pendaftaran()
    {
        return view('frontend.pendaftaran');
    }
}
