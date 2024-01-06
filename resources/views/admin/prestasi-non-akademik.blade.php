
@extends('layouts.admin')

@section('title','Prestasi Non Akademik')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Prestasi Non Akademik</h1>
            <div class="mx-3">
                <a href="/prestasi-non-akademik-add">
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
                        <h4>List Non Akademik</h4>
                    </div>
                <div class="card-body ">
                    
                    <div class=" table-responsive">
                    <table class="table  table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Bidang</th>
                            <th>Prestasi</th>
                            <th>Tingkat</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody >
                            @forelse  ($prestasinonakademiks as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->bidang }}</td>
                                    <td>{{ $item->prestasi }}</td>
                                    <td>{{ $item->tingkat }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td >
                                        <a href="/prestasi-non-akademik-edit/{{$item->slug}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a  href="/prestasi-non-akademik-destroy/{{$item->slug}}" onclick="return confirm('anda yakin data di hapus?')" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" data-original-title="Delete">
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
                        {{ $prestasinonakademiks->links() }}
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>
@include('sweetalert::alert')

@endsection