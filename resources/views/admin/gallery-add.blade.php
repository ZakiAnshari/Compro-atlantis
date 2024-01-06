@extends('layouts.admin')

@section('title','Gallery-add')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/gallery" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Gallery</h1>
        </div>
      
        <div class="card my-4">
            
            <div class="card-body ">
                
                <form action="/gallery-add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Masukkan Nama</label>
                        <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required >
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input name="gambar" id="gambar" type="file" class="form-control" required >
                    </div>

                    <div div class="col-sm-12 col-md-7">
                        <button  class="btn btn-icon icon-left btn-success"  type="submit"><i class="fas fa-check"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection