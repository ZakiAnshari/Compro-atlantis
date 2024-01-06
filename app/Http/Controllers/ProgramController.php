<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ProgramUnggulan;
use Doctrine\DBAL\Schema\View;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ProgramController extends Controller
{

    public function show($id)
    {
        $messages = Message::findOrFail($id);
        return view('admin.showsiswa',['messages' => $messages ]);
    }
    
    public function pendaftaranStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'jeniskelamin' => 'required|string',
            'agama' => 'required|string',
            'namasekolahasal' => 'required|string',
            'noteleponsiswa' => 'required|string',
            'emailsiswa' => 'required|string',
            'jenjangpendidikan' => 'required|string',
            'namawali' => 'required|string',
            'noteleponortu' => 'required|string',
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'status' => 'Pendaftaran telah berhasil di simpan',
        ]);
    }

    public function siswamendaftar(Request $request)
    { 
        $katakunci = $request->katakunci;
        $messages = Message::where('nama','LIKE','%'.$katakunci.'%')
        ->orWhere('jeniskelamin',$katakunci)
        ->orWhere('emailsiswa','LIKE','%'.$katakunci.'%')
        ->orWhere('created_at','LIKE','%'.$katakunci.'%')
        ->Paginate(5);
        
        return view('admin.siswamendaftar',['messages' => $messages ]);
    }

    public function CetakPendaftaran()
    { 
        $messages = Message::all();
        return view('admin.cetak-pendaftaran',['messages' => $messages ]);
    }

    public function delete($slug)
    { 
        $messages = Message::where('slug',$slug)->first();
        return view('admin.pendaftaran-delete',['messages' => $messages]);


        // $messages = Message::where('slug',$slug)->first();
        // $messages->delete();
        // return redirect('messages')->with('status','Data pendaftaran berhasil di hapus');
    }

    public function destroy($slug)
    { 
        $messages = Message::where('slug',$slug)->first();
        $messages->delete();
        return redirect('siswamendaftar')->with('toast_success','Data pendaftaran berhasil di hapus');
    }

    

}
