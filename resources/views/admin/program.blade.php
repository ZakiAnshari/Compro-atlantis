
@extends('layouts.admin')

@section('title','Program Unggulan')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Program Unggulan</h1>
          <div class="mx-3">
              <a href="/program-unggulan-add">
                <button class="  btn btn-primary  ">
                  <i class="bi bi-plus-circle"></i>
                </button>
              </a>
          </div>
      </div>
        <div class="col">
            <div class="card">
              

              {{-- .... --}}
              <div class="card-body">
                <div class="table-responsive">
                  
                  <table class="table table-bordered table-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                          @forelse  ($programunggulans as $item)
                          <tr  >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name}}</td>
                            <td>
                              <img src="{{ asset('storage/image/'.$item->image)}}" width="100" class="mb-2 mt-4"  alt="">
                            </td>
                            <td>
                                <a href="/program-unggulan-edit/{{$item->slug}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit">
                                  <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="/program-unggulan-destroy/{{$item->slug}}" onclick="return confirm('anda yakin data di hapus?')" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" data-original-title="Delete">
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
              {{-- ... --}}

              
            
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')

@endsection