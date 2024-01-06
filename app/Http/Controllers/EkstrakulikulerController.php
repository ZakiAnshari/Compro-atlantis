<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('frontend.ekstrakulikuler', ['ekstrakulikuler' => $ekstrakulikuler]);
    }
}
