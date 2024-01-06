@extends('layouts.frontend')
@section('title','Pendaftaran')
@section('content')

    <section>
        <div class="container">
            <h3 class="list my-4">IDENTITAS SAYA</h3>
            <div class="row">
                <div class="col-lg">
                    <div class="h-100 p-4 h-100" style="background-color: #F6F6F6; border-radius: 10px;box-shadow: 4px 4px 6px 0px rgba(0, 0, 0, 0.25);">
                        <div class="mx-3">
                            <span class="stages">TAHAPAN PENDAFTARAN</span>
                            <p class="regulation my-2">1. Format isian formulir ini sesuai dengan arahan sistem pendataan di Kemendikbud, Aplikasi Dapodik.</p>
                            <p class="regulation my-2">2. Mengisi kolom formulir dengan LENGKAP, DATA CALON PESERTA DIDIK BARU, ORANGTUA/WALI.</p>
                            <p class="regulation my-2">3. Setelah melakukan pengisian, check kembali data apakah sudah benar, lalu klik DAFTAR.</p>
                            <p class="regulation my-2">4. Setelah sukses malakukan pendaftaran, silakan cek email yang telah didaftarkan untuk melihat no 
                                pendaftaran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
       
        <div class="container my-5">

            @if (session('status'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            
            <form action="/pendaftaransiswa" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input name="nama" type="username" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="{{ old('nama') }}"  >

                    @if(count($errors)>0)
                        <div style="width:auto;color:red;margin-top:0.25rem;">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3 my-4">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                            <select  name="jeniskelamin" class="form-select form-select-lg mb-3"  aria-label=".form-select-lg example" >
                                <option value="L" selected>Laki - Laki</option>
                                <option value="P">Perempuan</option>
                                <i class="bi bi-chevron-down"></i>
                            </select>
                            
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label"> Agama</label>
                            <select   name="agama" class="form-select form-select-lg mb-3"  aria-label=".form-select-lg example" >
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="dll">Dll</option>
                                <i class="bi bi-chevron-down"></i>
                            </select>
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label">Nama Sekolah Asal</label>
                            <input name="namasekolahasal" type="username" class="form-control" id="exampleFormControlInput1" placeholder="Asal Sekolah" value="{{ old('namasekolahasal') }}"  >

                            @if(count($errors)>0)
                            <div style="width:auto;color:red;margin-top:0.25rem;">
                                {{ $errors->first('namasekolahasal') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label">No.Telp/Handphone Siswa</label>
                            <input name="noteleponsiswa" type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telp/Handphone" value="{{ old('noteleponsiswa') }}"  >

                            @if(count($errors)>0)
                            <div style="width:auto;color:red;margin-top:0.25rem;">
                                {{ $errors->first('noteleponsiswa') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3 my-4">
                            <label for="exampleFormControlInput1" class="form-label">E-mail siswa/wali</label>
                            <input name="emailsiswa" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" value="{{ old('emailsiswa') }}" >
                           
                            @if(count($errors)>0)
                            <div style="width:auto;color:red;margin-top:0.25rem;">
                                {{ $errors->first('emailsiswa') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label">Jenjang pendidikan yang dituju</label>
                            <select name="jenjangpendidikan" class="form-select form-select-lg mb-3"  aria-label=".form-select-lg example" >
                                <option value="SMP">SMP</option>
                                <option value="SMK">SMK</option>
                                <i class="bi bi-chevron-down"></i>
                            </select>
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label">Nama Orangtua/Wali (Ayah/Ibu)</label>
                            <input name="namawali" type="username" class="form-control" id="exampleFormControlInput1" placeholder="Nama Wali" value="{{ old('namawali') }}"  >

                            @if(count($errors)>0)
                            <div style="width:auto;color:red;margin-top:0.25rem;">
                                {{ $errors->first('namawali') }}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 my-5">
                            <label for="exampleFormControlInput1" class="form-label">No. Telp Orangtua/Wali (Ayah/Ibu)</label>
                            <input name="noteleponortu" type="number" class="form-control" id="exampleFormControlInput1" placeholder="No. Telp Wali" value="{{ old('noteleponortu') }}"  >

                            @if(count($errors)>0)
                            <div style="width:auto;color:red;margin-top:0.25rem;">
                                {{ $errors->first('noteleponortu') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <button class="button-list mx-auto my-5">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection