<!-- Start Header -->
   <div class="header" id="header">
    <div class="container">
      <a href="{{ url('/') }}" class="logo">{{ $settings->name }}</a>
      <ul class="main-nav">
        <li><a href="{{ url('/frontend/services') }}">Services</a></li>
        <li><a href="{{ url('/frontend/teams') }}">Team Members</a></li>
        <li><a href="{{ url('/frontend/galleries') }}">Gallery</a></li>

        @if (Route::has('login'))
            @auth
               <li><a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a></li>
               <li><a href="{{ route('admin.logout') }}">Log out</a></li>
            @else
               <li><a href="{{ route('login') }}">Log in</a></li>
            @endauth
        @endif
        {{-- <li>
          <a href="#">Other Links</a>
          <!-- Start Megamenu -->
          <div class="mega-menu">
            <div class="image">
              <img src="{{ URL::asset('frontend/imgs/megamenu.png') }}" alt="" />
            </div>
            <ul class="links">
              <li>
                <a href="#testimonials"><i class="far fa-comments fa-fw"></i> Testimonials</a>
              </li>
              <li>
                <a href="#team"><i class="far fa-user fa-fw"></i> Team Members</a>
              </li>
              <li>
                <a href="#services"><i class="far fa-building fa-fw"></i> Services</a>
              </li>
              <li>
                <a href="#our-skills"><i class="far fa-check-circle fa-fw"></i> Our Skills</a>
              </li>
            </ul>
            <ul class="links">
              <li>
                <a href="#video"><i class="far fa-play-circle fa-fw"></i> Top Videos</a>
              </li>
              <li>
                <a href="#stats"><i class="far fa-chart-bar fa-fw"></i> Stats</a>
              </li>
              <li>
                <a href="#discount"><i class="fas fa-percent fa-fw"></i> Request A Discount</a>
              </li>
              <li>
                <a href="#work-steps"><i class="far fa-clipboard fa-fw"></i> How It Works</a>
              </li>
            </ul>
          </div>
          <!-- End Megamenu -->
        </li> --}}
      </ul>
    </div>
  </div>
  <!-- End Header -->


