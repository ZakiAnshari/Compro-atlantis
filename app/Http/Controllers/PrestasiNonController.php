<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestasiNonAkademik;

class PrestasiNonController extends Controller
{
    public function index()
    {
        $prestasinonakademiks = PrestasiNonAkademik::Paginate(5);
        return view('admin.prestasi-non-akademik',['prestasinonakademiks' => $prestasinonakademiks]);
    }

    public function add()
    {
        return view('admin.prestasi-non-akademik-add');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'nama' => 'required',
            'bidang' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
        ]);

        PrestasiNonAkademik::create($data);

        return redirect('/prestasi-non-akademik')->with('toast_success','Data Prestasi Non Akademik berhasil di Tambahkan');
    
    }

    public function edit($slug)
    {
        $prestasinonakademiks = PrestasiNonAkademik::where('slug',$slug)->first();
        return view('admin.prestasi-non-akademik-edit',['prestasinonakademiks'=>$prestasinonakademiks]);
    }

    public function update(Request $request,$slug)
    {       
        $prestasinonakademiks = PrestasiNonAkademik::where('slug',$slug)->first();
        $prestasinonakademiks->slug = null;
        $prestasinonakademiks->update($request->all());
        return redirect('/prestasi-non-akademik')->with('toast_success','Data Prestasi Non Akademik berhasil di Edit');
    
    }

    public function delete($slug)
    {
        $prestasinonakademiks = PrestasiNonAkademik::where('slug',$slug)->first();
        return view('admin.prestasi-non-delete',['prestasinonakademiks' => $prestasinonakademiks]);
    }

    public function destroy($slug)
    { 
        $prestasinonakademiks = PrestasiNonAkademik::where('slug',$slug)->first();
        $prestasinonakademiks->delete();
        return redirect('/prestasi-non-akademik')->with('toast_success','Data Prestasi Non Akademik berhasil di Hapus');
    
    }
}
