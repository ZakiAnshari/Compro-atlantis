<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturorganisasies = StrukturOrganisasi::all();
        return view('admin.struktur',['strukturorganisasies' => $strukturorganisasies]);
    }

    public function add()
    {
        return view('admin.struktur-add');
    }

    public function store(Request $request)
    {
        $newName='';
        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->id.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
        }

        $request['image'] = $newName;
        $program = StrukturOrganisasi::create($request->all());
        return redirect('/struktur')->with('toast_success','Data Struktur Organisasi berhasil di tambahkan');
    }

  

    public function edit($slug)
    {
        $strukturorganisasies = StrukturOrganisasi::where('slug',$slug)->first();
        return view('admin.struktur-edit',['strukturorganisasies'=>$strukturorganisasies]);
    }

    public function update(Request $request,$slug)
    {   
        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->id.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
            $request['image'] = $newName;
        }
     
        $strukturorganisasies = StrukturOrganisasi::where('slug',$slug)->first();
        $strukturorganisasies->slug = null;
        $strukturorganisasies->update($request->all());
        return redirect('/struktur')->with('toast_success','Data  Struktur Organisasi  berhasil di Edit');
    }

    public function destroy($slug)
    { 
    
        $strukturorganisasies = StrukturOrganisasi::where('slug',$slug)->first();
        $strukturorganisasies->delete();
        return redirect('/struktur')->with('toast_success','Data Struktur Organisasi berhasil di hapus');
    }

}
