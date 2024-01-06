@extends('layouts.admin')

@section('title','Gallery-Edit')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/gallery" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Struktur Organisasi</h1>
        </div>
      
        <div class="card my-4">
            <div class="card-body ">
                
                <form action="/gallery-edit/{{$gallerys->slug}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ $gallerys->nama }}"  >
                            </div>

                            {{-- <div id="image-preview" class="image-preview" style="background-image: none; background-size: cover; background-position: center center;">
                                <label for="gambar" id="gambar">Gambar</label>
                                <input type="file" name="gambar" id="image-upload">
                            </div>
                         --}}
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input name="gambar" id="gambar" type="file" class="form-control"  >
                                
                            </div>
                        </div>
    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="currentImage" class="form-label">Current Image</label>
                                <div>
                                    @if ($gallerys->image!='')
                                        <img src="{{ asset('storage/image/'.$gallerys->image)}}" width="200"  alt="">
                                    @endif
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <div div class="col-sm-12 col-md-7">
                        <button href="#" class="btn btn-icon icon-left btn-primary" type="submit">
                            <i class="far fa-edit"></i>Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection