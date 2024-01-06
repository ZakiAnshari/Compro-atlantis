
@extends('layouts.admin')

@section('title','Struktur Organisasi')

@section('content')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>Struktur Organisasi</h1>
        <div class="mx-3">
          <a href="/struktur-add">
            <button class="  btn btn-primary  ">
              <i class="bi bi-plus-circle"></i>
            </button>
          </a>
      </div>
    </div>
    <div class="row">
        <div class="col">
         
            <div class="card">
              <div class="card-header">
                <h4>List Organisasi</h4>
              </div>
              
              <div class="card-body ">
               
                <div class=" table-responsive ">
                  <table class="table  table-bordered table-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      @forelse  ($strukturorganisasies as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>{{ $item->jabatan }}</td>
                          <td>
                            <img src="{{ $item->image != null ?  asset('storage/image/'.$item->image) : asset('storage/image/foto.png')  }}" width="200" class="mb-2 mt-4"  alt="">
                          </td>
                          <td >
                            <a href="/struktur-edit/{{$item->slug}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit">
                              <i class="fas fa-pencil-alt"></i>
                            </a>
                          
                            <a  href="/struktur-destroy/{{$item->slug}}" onclick="return confirm('anda yakin data di hapus?')" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" data-original-title="Delete">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      
                        @empty
                        <tr>
                            <td colspan="12" class="text-center"> Data Kosong</td>
                        </tr>
                      @endforelse 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')

@endsection