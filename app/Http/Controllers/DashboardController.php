<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\PrestasiAkademik;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $pendaftaranCount = Message::count();
        $prestasiCount = PrestasiAkademik::count();
        $gallerysCount = Gallery::count();
        return view('admin.dashboard',['user_count' => $userCount,'pendaftaran_count' =>  $pendaftaranCount ,'prestasi_Count' => $prestasiCount,'gallerys_Count' => $gallerysCount]);
    }

}
