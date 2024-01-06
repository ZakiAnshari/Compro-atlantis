
@extends('layouts.admin')

@section('title','Detail')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <div class="section-header-back">
            <a href="/siswamendaftar" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Detail Pendaftaran</h1>
      </div>
      
      <div class="col-12 ">
        <div class="card profile-widget my-5">
          <div class="d-flex justify-content-center profile-widget-header">                     
            <img alt="image" src="{{ asset('back_end/dist/assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
          </div>
          <div class="profile-widget-description pb-0">
            <div class="row">
                
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium"> Nama </label>
                    <input class="form-control" type="text" value="{{ $messages->nama}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Jenis Kelamin </label>
                    <input class="form-control" type="text" value="{{ $messages->jeniskelamin}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Agama </label>
                    <input class="form-control" type="text" value="{{ $messages->agama}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Nama Sekolah Asal </label>
                    <input class="form-control" type="text" value="{{ $messages->namasekolahasal}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">No Telepon Siswa	 </label>
                    <input class="form-control" type="text" value="{{ $messages->noteleponsiswa}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Email Siswa </label>
                    <input class="form-control" type="text" value="{{ $messages->emailsiswa}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Jenjang Pendidikan </label>
                    <input class="form-control" type="text" value="{{ $messages->jenjangpendidikan}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Nama Wali </label>
                    <input class="form-control" type="text" value="{{ $messages->namawali}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">No Telepon Ortu </label>
                    <input class="form-control" type="text" value="{{ $messages->noteleponortu}}" aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-4 my-2 ">
                    <label for="exampleInputEmail1" class="form-label" style="font-size: medium">Tgl Mendaftar </label>
                    <input class="form-control " type="text" value="{{ $messages->created_at->format('d F Y')}}" aria-label="readonly input example" readonly>
                </div>
              
            </div>
          </div>
          
        </div>
       
      </div>
    </section>
</div>
@include('sweetalert::alert')

@endsection