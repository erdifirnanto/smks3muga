<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <h4><img src="{{asset('user/assets/images/logo_muga.png')}}" style="width:80px" alt="">SMK MUGA</h4>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="{{route('dashboard.user')}}">Home</a></li>
            <li class="scroll-to-section dropdown">
              <a href="" class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('sambutan.user')}}">Sambutan</a></li>
                <li><a class="dropdown-item" href="{{route('visimisi.user')}}">Visi Misi</a></li>
                <li><a class="dropdown-item" href="{{route('fasilitas.user')}}">Fasilitas</a></li>
              </ul>
            </li>
            <!-- dropdown start cil-->
            <li class="scroll-to-section dropdown">
              <a href="" class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('berita.user')}}">Berita</a></li>
                <li><a class="dropdown-item" href="{{route('event.user')}}">Event</a></li>
              </ul>
            </li>
            <li class="scroll-to-section"><a href="{{route('jurusan.user')}}">Jurusan</a></li>
            <li class="scroll-to-section"><a href="{{route('ekskul.user')}}">Ekskul</a></li>
            </li>
            <!-- dropdown end yaa cil -->
            <li class="scroll-to-section"><a href="{{route('galeri.user')}}">Galeri</a></li>
            <li class="scroll-to-section"><a href="{{route('kontak.user')}}">Kontak</a></li>
            <li class="scroll-to-section"><a href="{{route('ppdb.user')}}">PPDB</a></li>
            <!-- <li class="scroll-to-section"><div class="main-blue-button"><a href="#contact">Get Your Quote</a></div></li>  -->
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>