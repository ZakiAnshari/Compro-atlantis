@extends('layouts.admin')

@section('title','Prestasi Non Akademik-add')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/prestasi-non-akademik" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Prestasi Non Akademik</h1>
            
        </div>
        
        <div class="card my-4">
            <div class="card-body ">
                
                <form action="/prestasi-non-akademik-add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required >
                                
                            </div>
                        
                            <div class="form-group">
                                <label>Masukkan Bidang</label>
                                <input name="bidang" id="bidang" type="text" class="form-control" placeholder="Bidang" value="{{ old('bidang') }}" required >
                               
                            </div>
        
                            <div class="form-group">
                                <label>Masukkan Prestasi</label>
                                <input name="prestasi" id="prestasi" type="text" class="form-control" placeholder="Prestasi" value="{{ old('prestasi') }}" required >
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Masukkan Tingkat</label>
                                <input name="tingkat" id="tingkat" type="text" class="form-control" placeholder="Tingkat" value="{{ old('tingkat') }}" required >
                                
                            </div>
        
                            <div class="form-group">
                                <label>Masukkan Tahun</label>
                                <input name="tahun" id="tahun" type="text" class="form-control" placeholder="Tahun" value="{{ old('tahun') }}" required >
                                
                            </div>
                        </div>
                        <div div class="col-sm-12 col-md-7">
                            <button  class="btn btn-icon icon-left btn-success"  type="submit"><i class="fas fa-check"></i> Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection