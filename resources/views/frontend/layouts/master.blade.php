<!DOCTYPE html>
<html lang="en">
  <head>

    @include('frontend.layouts.head')

  </head>
  <body>

    @include('frontend.layouts.main-headerbar')

    @yield('content')

    @include('frontend.layouts.footer')

    @include('frontend.layouts.footer-scripts')

  </body>
</html>
