@extends('layouts.admin')

@section('title','Struktur-add')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/struktur" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Struktur Organisasi</h1>
           
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card my-4">
            
           
            <div class="card-body ">
                
                <form action="/struktur-add" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required >
                            </div>
        
                            <div class="form-group">
                                <label>Masukkan Jabatan</label>
                                <input name="jabatan" id="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{ old('jabatan') }}" required >
                            </div>
                        
                            <div class="form-group">
                                <label for="gambar">Image</label>
                                <input name="gambar" id="gambar" type="file" class="form-control" required  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Masukkan Link Instagram</label>
                                <input name="instagram" id="instagram" type="text" class="form-control" placeholder="Link Instagram" value="{{ old('instagram') }}"  >
                            </div>
        
                            <div class="form-group">
                                <label>Masukkan Link Twitter</label>
                                <input name="twitter" id="twitter" type="text" class="form-control" placeholder="Link Twitter" value="{{ old('twitter') }}"  >
                            </div>
        
                            <div class="form-group">
                                <label>Masukkan Link Facebook</label>
                                <input name="facebook" id="facebook" type="text" class="form-control" placeholder="Link Facebook" value="{{ old('facebook') }}"  >
                            </div>
                        </div>
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