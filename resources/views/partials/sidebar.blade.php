<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            
          </ul>
          
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('back_end/dist/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin </div></a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="#" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <a href="/logout" onclick="return confirm('anda yakin mau keluar?')" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/dashboard">Atlantis-Plus</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">AP</a>
          </div>
          <ul class="sidebar-menu">
            
            <li  @if(request()->route()->uri == 'dashboard') class='dropdown active' @else class='dropdown' @endif >
                <a href="/dashboard" class="nav-link">
                  <i class="fas fa-fire"></i>
                  <span>Dashboard</span>
                </a>
            </li>

            <li  @if(request()->route()->uri == 'program-unggulan' || request()->route()->uri == 'program-unggulan-add'||request()->route()->uri == 'program-unggulan-edit/{slug}' ) class='dropdown active' @else class='dropdown' @endif >
              <a class="nav-link " href="/program-unggulan">
                <i class="fas fa-columns"></i> 
                <span>Program Unggulan</span>
              </a>
            </li>

           
            
            <li  @if(request()->route()->uri == 'siswamendaftar' || request()->route()->uri == 'siswamendaftar/{id}') class='dropdown active' @else class='dropdown' @endif>
                <a class="nav-link" href="/siswamendaftar"><i class="fas fa-pencil-ruler"></i> <span>Pendaftaran</span></a>
            </li>
          
            <li  @if(request()->route()->uri == 'prestasi-akademik' || request()->route()->uri == 'prestasi-akademik-add' ||request()->route()->uri == 'prestasi-akademik-edit/{slug}' || request()->route()->uri == 'prestasi-non-akademik' || request()->route()->uri == 'prestasi-non-akademik-edit/{slug}' || request()->route()->uri == 'prestasi-non-akademik-add' ) class='dropdown active'  @endif>
              <a href="#" class="nav-link has-dropdown">
                <i class="far fa-file-alt"></i> 
                <span>Prestasi</span>
              </a>
                <ul class="dropdown-menu">
                  <li  @if(request()->route()->uri == 'prestasi-akademik' || request()->route()->uri == 'prestasi-akademik-add' ||request()->route()->uri == 'prestasi-akademik-edit/{slug}' ) class='dropdown active' @else class='dropdown' @endif>
                    <a class="nav-link" href="/prestasi-akademik">Akademik</a>
                  </li>
                </ul>
                <ul class="dropdown-menu">
                  <li  @if(request()->route()->uri == 'prestasi-non-akademik' ||request()->route()->uri == 'prestasi-non-akademik-edit/{slug}' || request()->route()->uri == 'prestasi-non-akademik-add' ) class='dropdown active' @else class='dropdown' @endif >
                    <a class="nav-link" href="/prestasi-non-akademik">Non Akademik</a>
                  </li>
                </ul>
            </li>

          


            <li @if(request()->route()->uri == 'struktur' || request()->route()->uri == 'struktur-edit/{slug}' || request()->route()->uri == 'struktur-add' ) class='dropdown active' @else class='dropdown' @endif>
              <a class="nav-link" href="/struktur">
                <i class="fas fa-th"></i> 
                <span>Struktur Organisasi</span>
              </a>
            </li>

            <li @if(request()->route()->uri == 'gallery' || request()->route()->uri == 'gallery-edit/{slug}' || request()->route()->uri == 'gallery-add' ) class='dropdown active' @else class='dropdown' @endif >
              <a class="nav-link" href="/gallery"><i class="far fa-square"></i> <span>Gallery</span></a>
            </li>
            
          </ul>

        </aside>
      </div>