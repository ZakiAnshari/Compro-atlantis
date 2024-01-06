@extends('layouts.admin')

@section('title','Prestasi-Edit')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/prestasi-akademik" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Prestasi</h1>
        </div>
        
        <div class="card my-4">
            
            <div class="card-body ">
                
                <form action="/prestasi-akademik-edit/{{$prestasiakademiks->slug}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ $prestasiakademiks->nama }}"  >
                            </div>
                            <div class="form-group">
                                <label for="bidang">Masukkan Bidang</label>
                                <input name="bidang" id="bidang" type="text" class="form-control" placeholder="Nama" value="{{ $prestasiakademiks->bidang }}"  >
                            </div>
                            
                            <div class="form-group">
                                <label for="prestasi">Masukkan Prestasi</label>
                                <input name="prestasi" id="prestasi" type="text" class="form-control" placeholder="Nama" value="{{ $prestasiakademiks->prestasi }}"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Tingkat">Masukkan Tingkat</label>
                                <input name="Tingkat" id="name" type="text" class="form-control" placeholder="Tingkat" value="{{ $prestasiakademiks->Tingkat }}"  >
                            </div>
                            <div class="form-group">
                                <label for="Tahun">Masukkan Tahun</label>
                                <input name="Tahun" id="Tahun" type="text" class="form-control" placeholder="Nama" value="{{ $prestasiakademiks->Tahun }}"  >
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