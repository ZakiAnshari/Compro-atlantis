<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::count();
        $gallerys = Gallery::all();
        return view('admin.gallery',['gallerys' => $gallerys]);
    }

    public function add()
    {
        return view('admin.gallery-add');
    }

    public function store(Request $request)
    {
        $newName='';
        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
        }

        $request['image'] = $newName;
        $gallerys = Gallery::create($request->all());
        return redirect('/gallery')->with('toast_success','Gambar  berhasil di tambahkan');
    }

    public function edit($slug)
    {
        $gallerys = Gallery::where('slug',$slug)->first();
        return view('admin.gallery-edit',['gallerys'=>$gallerys]);
    }


    public function update(Request $request,$slug)
    {       
        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
            $request['image'] = $newName;
        }
        $gallerys = Gallery::where('slug',$slug)->first();
        $gallerys->slug = null;
        $gallerys->update($request->all());
        return redirect('/gallery')->with('toast_success','Data  Struktur Organisasi  berhasil di Edit');
    }

    public function delete($slug)
    {
        $gallerys = Gallery::where('slug',$slug)->first();
        return view('admin.gallery-delete',['gallerys' => $gallerys]);
    }

    public function destroy($slug)
    { 
        $gallerys = Gallery::where('slug',$slug)->first();
        $gallerys->delete();
        return redirect('/gallery')->with('toast_success','Gambar berhasil di hapus');
    }
}
