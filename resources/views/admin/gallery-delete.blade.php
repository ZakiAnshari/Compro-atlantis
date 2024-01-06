@extends('layouts.admin')
@section('content')

    <div class="main-content">
        <section class="section">
        <div class="section-header"></div>
        <div class="card-header border-bottom" style="border-radius: 10px;">
            <h4 class="my-3 mx-3">Apakah kamu yakin akan menghapus gambar  ..?</h4>
            <div class="card-body">
                <div class="buttons">
                    
                    <a href="/gallery" class="btn btn-icon icon-left btn-danger">
                        <i class="fas fa-times"></i> 
                        Cancel
                    </a>
                    <a href="/gallery-destroy/{{ $gallerys->slug }}" class="btn btn-icon icon-left btn-success">
                        <i class="fas fa-check"></i> 
                        Sure
                    </a> 
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection