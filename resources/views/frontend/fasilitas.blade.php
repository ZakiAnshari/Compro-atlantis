@extends('layouts.frontend')

@section('title','Fasilitas')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<section style="margin-top: -44px;">
    <div class="converted">
        <h3 class="text-lg-start ty">FASILITAS</h3>
    </div>
    <div class="container">
        <div class="row">
            @forelse  ($fasilitas as $item)
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{ asset('storage/image/'.$item->image)}}" data-fancybox="gallery" data-caption="{{ $item->nama }}">
                            <img src="{{ asset('storage/image/'.$item->image)}}" width="100%" alt="fasilitas">
                            </a>
                    </div>
                </div>
            </div>
            @empty
            <tr  class="text-center">
                <td colspan="12"> Fasilitas Kosong</td>
            </tr>
            @endforelse 
        </div>
    </div>
</section>
@endsection
