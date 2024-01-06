@extends('layouts.frontend')

@section('title','Struktur-Organisasi')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<section style="margin-top: -44px;">
    <div class="converted">
        <h3 class="text-lg-start ty">STRUKTUR ORGANISASI</h3>
    </div>
    <div class="container">

        <div class="row g-2 g-md-5 mt-4 justify-content-center p-0">
            @forelse  ($strukturorganisasies as $item)
            <div class="col-lg-4 m-0 my-4">
                <div class="card h-100 rounded-4 border-0">
                    <div class="rounded-circle mx-auto" 
                    style="height: 250px; width: 250px; background-image: url('{{ asset('storage/image/'.$item->image)}}'); background-position: center; background-size: cover; border: 5px #7c5afa  solid;">
                    </div>
                    <div class="card-body px-0 px-md-5">
                        <div class="mb-2">
                            <h4 class="card-title  text-center mt-2 df">
                                {{ $item->nama }}
                            </h4>
                            <p class="card-text fw-semibold small lh-sm text-center mt-2">
                                {{ $item->jabatan }}
                            </p>
                            
                            <div class="card-text  lh-sm" 
                            style="text-align: justify;">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ $item->instagram }}" class=" mx-2 fs-5">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="{{ $item->twitter }}" class=" mx-2 fs-5">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="{{ $item->facebook }}" class=" mx-2 fs-5">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{ asset('storage/image/'.$item->image)}}" data-fancybox="gallery" data-caption="{{ $item->nama }}">
                            <img src="{{ asset('storage/image/'.$item->image)}}" width="100%" alt="Smp Gallery">
                            </a>
                    </div>
                </div>
            </div> --}}
            @empty
            <tr>
                <td colspan="12" class="text-center"> Struktur Organisasi Kosong</td>
            </tr>
            @endforelse 
        </div>
    </div>
</section>
@endsection
