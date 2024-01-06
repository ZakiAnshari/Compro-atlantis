<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturorganisasies = StrukturOrganisasi::all();
        return view('frontend.halaman-struktur-organisasi',['strukturorganisasies' => $strukturorganisasies]);
    }
}
