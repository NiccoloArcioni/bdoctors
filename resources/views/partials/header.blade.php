    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <i class="icofont-mail"></i> <a href="mailto:support@bdoctors.com">Serve aiuto? Clicca qui per contattare il nostro team di supporto</a> 
          </div>
          {{-- <div class="d-flex align-items-center">
            <i class="icofont-phone"></i> Call us now +1 5589 55488 55
          </div> --}}
        </div>
    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Su di noi</a></li>
          <li><a href="#services">Servizi</a></li>  
          <li><a href="#doctors">Dottori</a></li>
          <li><a href="#contact">Contatti</a></li>
          <li><a href="#contact">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> --}}
      <a href="{{ route('register') }}" class="appointment-btn scrollto">Sei un dottore? Iscriviti</a>

    </div>
  </header><!-- End Header -->