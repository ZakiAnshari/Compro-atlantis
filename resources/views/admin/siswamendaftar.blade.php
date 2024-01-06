
@extends('layouts.admin')

@section('title','Program Unggulan')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Pendaftaran</h1>
        <div class="mx-3">
          <a href="/cetak-pendaftaran" target="_blank">
            <button class="  btn btn-primary  ">Cetak </button>
          </a>
      </div>
      </div>
        <div class="col">
            <div class="card">
              
              <div class="col-4 col-12 col-md-6 col-lg-4 my-3">
                <form id="search-form">
                  <div class="input-group">
                    <input type="text" name="katakunci" class="form-control" placeholder="Kata kunci">
                    <div class="input-group-append">
                      <button class="btn btn-primary">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
              {{-- .... --}}
              <div class="card-body">
                <div class="table-responsive">
                  
                  <table class="table table-bordered table-md">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Email Siswa</th>
                        <th>Tgl Mendaftar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                        @forelse  ($messages as $item)
                          <tr  >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama}}</td>
                           
                          
                            <td>{{ $item->jeniskelamin }}</td>
                          
                            <td>{{ $item->emailsiswa }}</td>
                            <td>{{ $item->created_at->format('d F Y') }}</td>
                         
                            <td>
                                <a href="/siswamendaftar/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                                <a href="/siswamendaftar-destroy/{{$item->slug}}" onclick="return confirm('anda yakin data di hapus?')" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" data-original-title="Delete">
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

                  <div class="my-3" >
                    {{ $messages->links() }}
                  </div>
                </div>
              </div>
              {{-- ... --}}

              
            
            </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')

@endsection