@extends('layouts.admin')

@section('title','Struktur-Edit')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/struktur" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Struktur Organisasi</h1>
        </div>
       
        <div class="card my-4">
            
    
            <div class="card-body ">
                
                <form action="/struktur-edit/{{$strukturorganisasies->slug}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ $strukturorganisasies->nama }}"  >
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Masukkan Jabatan</label>
                                <input name="jabatan" id="jabatan" type="text" class="form-control" placeholder="Nama" value="{{ $strukturorganisasies->jabatan }}"  >
                            </div>
                        
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input name="gambar" id="gambar" type="file" class="form-control"  >
                                
                            </div>
                        </div>
    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="currentImage" class="form-label">Current Image</label>
                                <div>
                                    @if ($strukturorganisasies->image!='')
                                        <img src="{{ asset('storage/image/'.$strukturorganisasies->image)}}" width="150"  alt="">
                                    @else
                                        <img src="{{ asset('storage/cover/user.png')}}" width="150"  alt="">
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