<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtlantisPlus | @yield('title')</title>
    <link rel="icon" href="{{ asset('front_end/img/2.png') }}">
    <!-- link bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--font goggle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- link style -->
    <link rel="stylesheet" href="{{ asset('front_end/css/style.css') }}">
    <!-- logo title -->
    <link rel="stylesheet" href="" type="image/x-icon">
    <script src="{{ asset('front_end/script.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<!-- NAVBAR -->
<style type="text/css">

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
    
        .dropdown-menu li{
            position: relative;
        }
        .dropdown-menu .submenu{ 
            display: none;
            position: absolute;
            left:100%; top:-7px;
        }
        .dropdown-menu .submenu-left{ 
            right:100%; left:auto;
        }
    
        .dropdown-menu > li:hover{ background-color: #f1f1f1 }
        .dropdown-menu > li:hover > .submenu{
            display: block;
        }
    }	
    /* ============ desktop view .end// ============ */
    
    /* ============ small devices ============ */
    @media (max-width: 991px) {
    
    .dropdown-menu .dropdown-menu{
            margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
    }
    
    }	
    /* ============ small devices .end// ============ */
    
</style>
    
<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
                element.addEventListener('click', function (e) {
                  e.stopPropagation();
                });
            })
    
    
    
            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {
    
                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                            this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                                // hide every submenu as well
                                everysubmenu.style.display = 'none';
                            });
                    })
                });
                
                document.querySelectorAll('.dropdown-menu a').forEach(function(element){
                    element.addEventListener('click', function (e) {
            
                          let nextEl = this.nextElementSibling;
                          if(nextEl && nextEl.classList.contains('submenu')) {	
                              // prevent opening link if link needs to open dropdown
                              e.preventDefault();
                              console.log(nextEl);
                              if(nextEl.style.display == 'block'){
                                  nextEl.style.display = 'none';
                              } else {
                                  nextEl.style.display = 'block';
                              }
    
                          }
                    });
                })
            }
            // end if innerWidth
    
        }); 
        // DOMContentLoaded  end
</script>
<!-- END NAVBAR -->
<style>
      .bottom-bar{
        width: 100%;
        background: #f18930;
        text-align: center;
        padding: 10px 0;
        margin-top: 50px;
    }
    .bottom-bar p{
        color: #343434;
        margin: 0;
        font-size: 16px;
        padding: 7px;
    }
    body{
    display: flex;
    flex-direction: column;
    height: 100vh;
    
}

footer{
    display: flex;
    flex-wrap: wrap;
    margin-top: auto;
    background-color: #2d2e33;
    padding: 30px 10%;
}

ul{
    list-style: none;
}

.footer-col{
    width: 25%;
}

.footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-weight: 400;
    font-size: 22px;
    color: whitesmoke;
    text-transform: capitalize;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    background-color: #CD4B39;
    height: 2px;
    width: 40px;
}

ul li:not(:last-child){
    margin-bottom: 8px;
}

ul li a{
    display: block;
    font-size: 19px;
    text-transform: capitalize;
    color: #bdb6b6;
    text-decoration: none;
    transition: 0.4s;
}

ul li a:hover{
    color: white;
    padding-left: 2px;
}

.links a{
    display: inline-block;
    height: 35px;
    width: 35px;
    color: white;
    background-color: #CD4B39;
    margin: 0 8px 8px 0;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.4s;
}

.links a:hover{
    color: #4d4f55;
    background-color: white;
}

@media(max-width: 740px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        all: unset;
    }
}

@media(max-width: 555px){
    .footer-col{
        width: 100%;
    }
}
</style>
<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white fixed-top p-3">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('front_end/img/2.png') }}" alt="Logo" width="30" class="d-inline-block align-text-top me-3">
                AtlantisPlus
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        
                        <li class="nav-item mx-2">
                            <a  @if(request()->route()->uri == '/') class='nav-link active' @else class='nav-link' @endif  href="/">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2"  >
                            <a  @if(request()->route()->uri == 'pendaftaran') class='nav-link active' @else class='nav-link' @endif href="/pendaftaran"> PENDAFTARAN</a>
                        </li>
                        <!-- <li class="nav-item mx-2">
                            <a class="nav-link" href="#">FREE</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">LMS</a>
                        </li> -->
                        <li class="nav-item dropdown mx-2" >
                            <a  class="nav-link  dropdown-toggle"    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                SEKOLAH
                            </a>
                            <ul class="dropdown-menu"  >
                                <li  >
                                    <a class="dropdown-item text-center" href="#"> SMP </a>
                                    <ul class="submenu dropdown-menu ">
                                        <li>
                                            <a  @if(request()->route()->uri == 'kurikulum') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/kurikulum">Kurikulum</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'keunggulan') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/keunggulan">Keunggulan</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'prestasi') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/prestasi">Prestasi</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'strukturorganisasi') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/strukturorganisasi">Struktur Organisasi</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'agenda') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/agenda">Agenda</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'ekstrakulikuler') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/ekstrakulikuler">Ekstrakurikuler</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a @if(request()->route()->uri == 'fasilitas') class='nav-link active' @else class='nav-link' @endif class="dropdown-item text-center " href="/fasilitas">Fasilitas</a>
                                        </li>
                                    </ul>
                                </li>
                                <hr>
                                <li>
                                    <a class="dropdown-item text-center" href="#"> SMK</a>
                                        <ul class="submenu dropdown-menu ">
                                            <li>
                                                <a class="dropdown-item text-center " href="#">Kurikulum</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a class="dropdown-item text-center " href="#">Keunggulan</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a class="dropdown-item text-center " href="#">Prestasi</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a class="dropdown-item text-center " href="#">Jurusan</a>
                                            </li>
                                            <hr>
                                            <li>
                                                <a class="dropdown-item text-center " href="#">Agenda</a>
                                            </li>
                                        </ul>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/login">LOGIN</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>
    @yield('content')
    <footer>
        <div class="footer-col">
            <h4>Tentang Kami</h4>
            <ul style="padding: 0;">
                <img src="{{ asset('front_end/img/1.png') }}" alt="">
            </ul>
        </div>
        <div class="footer-col">
            <h4>Link Terkait</h4>
            <ul style="padding: 0;">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pendaftaran</a></li>
                <li><a href="#">Sekolah</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4 >Tentang</h4>
            <ul style="padding: 0;">
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Keunggulan</a></li>
                <li><a href="#">Prestasi</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Ikuti Kami</h4>
            <div class="links">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </footer>

</body>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- loading -->
<script>
    $(window).on("load",function(){
        $(".loader-container").fadeOut(1000);
    });
</script>
</html>

