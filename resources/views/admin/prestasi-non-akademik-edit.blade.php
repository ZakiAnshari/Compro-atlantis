@extends('layouts.admin')

@section('title','Prestasi-Edit')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/prestasi-non-akademik" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Prestasi Non Akademik</h1>
        </div>
       
        <div class="card my-4">
          
            <div class="card-body ">
                
                <form action="/prestasi-non-akademik-edit/{{$prestasinonakademiks->slug}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Masukkan Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama" value="{{ $prestasinonakademiks->nama }}"  >
                            </div>
                            <div class="form-group">
                                <label for="bidang">Masukkan Bidang</label>
                                <input name="bidang" id="bidang" type="text" class="form-control" placeholder="Nama" value="{{ $prestasinonakademiks->bidang }}"  >
                            </div>
                            
                            <div class="form-group">
                                <label for="prestasi">Masukkan Prestasi</label>
                                <input name="prestasi" id="prestasi" type="text" class="form-control" placeholder="Nama" value="{{ $prestasinonakademiks->prestasi }}"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tingkat">Masukkan Tingkat</label>
                                <input name="tingkat" id="tingkat" type="text" class="form-control" placeholder="Tingkat" value="{{ $prestasinonakademiks->tingkat }}"  >
                            </div>
                            <div class="form-group">
                                <label for="tahun">Masukkan Tahun</label>
                                <input name="tahun" id="tahun" type="text" class="form-control" placeholder="Tahun" value="{{ $prestasinonakademiks->tahun }}"  >
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