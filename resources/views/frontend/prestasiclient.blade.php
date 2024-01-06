@extends('layouts.frontend')

@section('title','Prestasi')

@section('content')
<script>
    const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
    }

    window.addEventListener("resize", initSlider);
    window.addEventListener("load", initSlider);
</script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>

<style>
        .main .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1rem;
        justify-content: center;
        align-items: center;
    }
    .main .card {
        color: #252a32;
        border-radius: 2px;
        background: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
    }
    .main .card-image {
        position: relative;
        display: block;
        width: 100%;
        padding-top: 70%;
        background: #ffffff;
    }
    .main .card-image img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media only screen and (max-width: 600px) {
        .main .container {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 1rem;
        }
    }
</style>
<section>
    <div class="container">
        <h1 class="list my-4 text-center" style="font-size: x-large;">AKADEMIK</h1>
        
        <div class="table-responsive">
            <table class="table">
                <thead style="color: white;">
                    <tr class="text-center bg-danger my-3">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Prestasi</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse  ($prestasiakademiks as $item)
                    <tr class="text-center" >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->bidang }}</td>
                        <td>{{ $item->prestasi }}</td>
                        <td>{{ $item->Tingkat }}</td>
                        <td>{{ $item->Tahun }}</td>
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
</section>
<br><br><br>
<!-- NON AKADEMIK -->
<section>
    <div class="container">
        <h1 class="list my-4 text-center" style="font-size: x-large;">NON AKADEMIK</h1>
        <div class="table-responsive">
            <table class="table">
                <thead style="color: white;">
                    <tr class="text-center bg-danger my-3">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Prestasi</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse  ($prestasinonakademiks as $item)
                    <tr class="text-center" >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->bidang }}</td>
                        <td>{{ $item->prestasi }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>{{ $item->tahun }}</td>
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
</section>
<br><br><br>
<!-- GALLERY -->
<section>
    <h1 class="list my-4 text-center" style="font-size: x-large;">GALLERY</h1>
    <div class="container">
        <div class="row">
            @forelse  ($gallerys as $item)
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{ asset('storage/image/'.$item->image)}}" data-fancybox="gallery" data-caption="{{ $item->nama }}">
                            <img src="{{ asset('storage/image/'.$item->image)}}" width="100%" alt="Smp Gallery">
                            </a>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td  class="text-center"> Gallery Kosong</td>
            </tr>
            @endforelse 
        </div>
    </div>
</section>


<script>
    $('[data-fancybox="gallery"]').fancybox({
    buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "share",
        "close"
    ],
    loop: false,
    protect: true
});
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>



@endsection
