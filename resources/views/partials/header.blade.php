    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <i class="icofont-mail"></i> <a href="mailto:support@bdoctors.com">Serve aiuto? Clicca qui per contattare il nostro team di supporto</a> 
          </div>
        </div>
    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Su di noi</a></li>
          <li><a href="#services">Servizi</a></li>
          @if(Auth::user() == NULL)
          <li> <a class="login-btn" href="{{route('login')}}"><i class="icofont-ui-user"></i> Login</a></li>
          @else
          <li> <a class="login-btn" href="{{ url('/home') }}"><i class="icofont-ui-user"></i> profilo</a></li>
          @endif
        </ul>
      </nav>
      @if(Auth::user() == NULL)
      <a href="{{route('register')}}" class="register-btn scrollto">Sei un dottore? Iscriviti</a>
      @else
      <a href="{{ route('logout') }}" class="register-btn scrollto"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
      @endif
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </header><!-- End Header -->