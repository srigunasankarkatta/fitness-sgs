<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
@stack('styles')
</head>

<body>

    <!-- Loading -->
    {{-- <div class="loader-wrap">
    <div class="multi-icon">      
      <i class="icon icon-weight-lifting"></i>
      <i class="icon icon-yoga-pose"></i>
      <i class="icon icon-exercise"></i>
    </div>
  </div> --}}
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')
    @stack('scripts')
</body>

</html>
