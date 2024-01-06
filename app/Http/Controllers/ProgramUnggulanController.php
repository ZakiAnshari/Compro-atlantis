<?php

namespace App\Http\Controllers;

use App\Models\ProgramUnggulan;
use Illuminate\Http\Request;

class ProgramUnggulanController extends Controller
{
    public function index()
    {
        $programunggulans = ProgramUnggulan::all();
        return view('admin.program',['programunggulans' => $programunggulans]);
    }

    public function add()
    {
        return view('admin.program-add');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'=> 'required|unique:program_unggulans'
        ]);

        $newName='';

        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
        }

        $request['image'] = $newName;
        $program = ProgramUnggulan::create($request->all());
        return redirect('/program-unggulan')->with('toast_success','Data Program berhasil di tambahkan');
    }

    public function edit($slug)
    {
        $program = ProgramUnggulan::where('slug',$slug)->first();
        return view('admin.program-edit',['program'=>$program]);
    }

    public function update(Request $request,$slug)
    {       
        if($request->file('gambar')){
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName =$request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('image',$newName);
            $request['image'] = $newName;
        }
        $program = ProgramUnggulan::where('slug',$slug)->first();
        $program->slug = null;
        $program->update($request->all());
        return redirect('/program-unggulan')->with('toast_success','Data berhasil di Edit');
    }

    public function delete($slug)
    {
        $program = ProgramUnggulan::where('slug',$slug)->first();
        return view('admin.program-delete',['program' => $program]);
    }

    public function destroy($slug)
    { 
    
        $program = ProgramUnggulan::where('slug',$slug)->first();
        $program->delete();
        return redirect('/program-unggulan')->with('toast_success','Data berhasil di Hapus');
    }
}
