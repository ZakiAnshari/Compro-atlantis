<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;

class PrestasiclientController extends Controller
{
    public function index()
    {  
        $prestasiakademiks = PrestasiAkademik::all();
        $prestasinonakademiks = PrestasiNonAkademik::all();
        $gallerys = Gallery::all();
        
        return view('frontend.prestasiclient', 
        ['gallerys' => $gallerys,'prestasiakademiks' => $prestasiakademiks,'prestasinonakademiks' => $prestasinonakademiks]);
    }

}
