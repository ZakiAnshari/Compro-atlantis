@extends('layouts.admin')

@section('title','Program-Edit')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/program-unggulan" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Program Unggulan</h1>
        </div>
      
        <div class="card my-4">
            
          
            <div class="card-body ">
                
                <form action="/program-unggulan-edit/{{$program->slug}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Masukkan Nama Program</label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Nama" value="{{ $program->name }}"  >
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
                                    @if ($program->image!='')
                                        <img src="{{ asset('storage/image/'.$program->image)}}" width="150"  alt="">
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