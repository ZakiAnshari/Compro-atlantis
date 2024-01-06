@extends('layouts.frontend')

@section('title','Ekstrakulikuler')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<section style="margin-top: -44px;">
    <div class="converted">
        <h3 class="text-lg-start ty">EKSTRAKULIKULER</h3>
    </div>
    <div class="container">
        <div class="row">
            @forelse  ($ekstrakulikuler as $item)
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{ asset('storage/image/'.$item->image)}}" data-fancybox="gallery" data-caption="{{ $item->nama }}">
                            <img src="{{ asset('storage/image/'.$item->image)}}" width="100%" alt="ekstrakulikuler">
                            </a>
                    </div>
                </div>
            </div>
            @empty
            <tr  class="text-center">
                <td colspan="12"> Ekstrakulikuler Kosong</td>
            </tr>
            @endforelse 
        </div>
    </div>
</section>
@endsection
