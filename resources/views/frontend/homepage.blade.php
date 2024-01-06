@extends('layouts.frontend')
@section('title','Home')
@section('content')

    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-3 order-2 order-md-1">
                    <img src="{{ asset('front_end/img/3.png') }}" alt="" class="float-start my-5" width="275">
                </div>
                <div class="col-lg-6 order-2 order-md-1 text-center my-5 mx-auto ">
                    <h1>ATLANTIS PLUS</h1>
                    <p>Creative and Enterpreneur School</p>
                    <br><br>
                    <button class="button-lg-primary mx-auto my-2">Ayo Mulai
                        <img src="{{ asset('front_end/img/5.png') }}" alt="">
                    </button>
                    <a href="#">
                        <img src="{{ asset('front_end/img/6.png') }}" alt="">
                        <span class="border-bottom">Putar Video Kita</span>
                    </a>
                    <br><br>
                    <div class="border-bottom shadow mx-5"></div>
                    <div class="row ">
                        <div class="col-sm-6 my-4">
                            <div class="float-lg-end">
                                <img src="{{ asset('front_end/img/7.png') }}" alt="" class="mx-2">
                                SMP ATLANTIS PLUS
                            </div>
                        </div>
                    
                        <div class="col-sm-6 my-4">
                            <div class="float-lg-start">
                                <img src="{{ asset('front_end/img/2.png') }}" alt="" class="mx-2">
                                SMK ATLANTIS PLUS
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 order-2 order-md-1 my-5 ">
                    <img src="{{ asset('front_end/img/4.png') }}" alt="" class="float-end" width="195">
                </div>
            </div>
        </div>
    </section>
    <!-- Keunggulan -->
    <section id="keunggulan">
        <div class="container text-center p-5">
            <h2 class="p-4 " style="line-height: 40px;">Program Unggulan</h2>
            <p class="judul">Atlantis Plus</p>
        </div>
        <div class="container">
            <br>
                <div class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">
                        <img src="{{ asset('front_end/img/10.png') }}" alt="">
                    </button>
                    <ul class="image-list">
                        @foreach  ($programunggulans as $item)
                        <div class="label" style=" filter: brightness(100%);">
                            <img class="image-item "  src="{{ asset('storage/image/'.$item->image)}}" alt="img-1"/>
                            <div class="text-block">
                                <h5>{{ $item->name}}</h5>
                            </div>
                        </div>
                        @endforeach
                    </ul>
                    <button id="next-slide" class="slide-button material-symbols-rounded">
                        <img src="{{ asset('front_end/img/9.png') }}" alt="">
                    </button>
                </div>
                <div class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div>
        </div>
        <br><br>
    </section>
    <!-- Vidio -->
    <section>
        <div class=" vidio my-0">
            <a href="" class="position-absolute top-50 start-50 translate-middle">
                <img src="{{ asset('front_end/img/12.png') }}" alt="">
            </a>

        </div>
    </section>
    <br><br>
    <!-- VisiMisi -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <p class="vision my-0">Visi & Misi</p>
                    <h6>Atlantis Plus</h6>
                </div>
                <div class="col-lg-4 col-md-12 my-4">
                    <div class="text-center h-100 p-4" style="background-color: #F6F6F6; border-radius: 30px;">
                        <br>
                        <span class="judul1">VISI</span>
                        <p class="visi my-5">Lorem ipsum dolor sit amet consectetur. Phasellus est elementum ut orci. Cras at vestibulum pharetra sit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 my-4">
                    <div class="text-center h-100 p-4" style="background-color: #F6F6F6; border-radius: 30px;">
                        <br>
                        <span class="judul1">MISI</span>
                        <p class="visi my-5">Lorem ipsum dolor sit amet consectetur. Phasellus est elementum ut orci. Cras at vestibulum pharetra sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!-- creative and enterpreneur -->
    {{-- footer --}}
  
@endsection