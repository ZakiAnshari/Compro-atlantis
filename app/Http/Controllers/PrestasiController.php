<?php

namespace App\Http\Controllers;

use App\Models\PrestasiAkademik;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasiakademiks = PrestasiAkademik::count();
        $prestasiakademiks = PrestasiAkademik::Paginate(5);
        return view('admin.prestasi-akademik',['prestasiakademiks' => $prestasiakademiks]);
        
    }

    public function add()
    {
        return view('admin.prestasi-akademik-add');
    }

    public function store(Request $request)
    {



        $data = $request->validate([
            'nama' => 'required',
            'nama' => 'required|string',
            'bidang' => 'required',
            'prestasi' => 'required',
            'Tingkat' => 'required',
            'Tahun' => 'required',
        ]);

        PrestasiAkademik::create($data);

        return redirect('/prestasi-akademik')->with('toast_success','Data Prestasi Akademik berhasil di tambahkan');

    }

    public function edit($slug)
    {
        $prestasiakademiks = PrestasiAkademik::where('slug',$slug)->first();
        return view('admin.prestasi-akademik-edit',['prestasiakademiks'=>$prestasiakademiks]);
    }
    
    public function update(Request $request,$slug)
    {       
        $prestasiakademiks = PrestasiAkademik::where('slug',$slug)->first();
        $prestasiakademiks->slug = null;
        $prestasiakademiks->update($request->all());
        return redirect('/prestasi-akademik')->with('toast_success','Data Prestasi Akademik berhasil di Edit');
    }

    public function delete($slug)
    {
        $prestasiakademiks = PrestasiAkademik::where('slug',$slug)->first();
        return view('admin.prestasi-delete',['prestasiakademiks' => $prestasiakademiks]);
    }

    public function destroy($slug)
    { 
        $prestasiakademiks = PrestasiAkademik::where('slug',$slug)->first();
        $prestasiakademiks->delete();
        return redirect('/prestasi-akademik')->with('toast_success','Data Prestasi Akademik berhasil di Hapus');
    }
    
}
