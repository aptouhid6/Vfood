
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.layouts._head')
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	{{-- top Nav --}}
        @include('frontend.layouts._topNav')
        </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        @include('frontend.layouts._mainNav')
    </nav>
    <!-- END nav -->

    @yield('content')

    {{-- newsletter --}}
    @include('frontend.layouts._newsletter')
    {{-- newsletter --}}
    <footer class="ftco-footer ftco-section">
        @include('frontend.layouts._footer')
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

   {{-- js --}}
   @include('frontend.layouts._js')
    
  </body>
</html>