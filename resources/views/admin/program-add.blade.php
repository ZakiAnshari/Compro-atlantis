@extends('layouts.admin')

@section('title','Program-add')

@section('content')
<div class="main-content">
    
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/program-unggulan" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Program Unggulan</h1>
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
       

        {{-- .... --}}
        <div class="card my-4">
            <div class="card-body ">
                <form action="/program-unggulan-add" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label>Masukkan Nama Program</label>
                        <input name="name" id="name" type="text" class="form-control" placeholder="Nama" value="{{ old('name') }}" >
                    </div>
                
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input name="gambar" id="gambar" type="file" class="form-control" required >
                    </div>

            
                    <button  class="btn btn-icon icon-left btn-success"  type="submit"><i class="fas fa-check"></i> Tambah</button>
                </form>
            </div>
        </div>
        {{-- .... --}}
    </section>
</div>

@endsection