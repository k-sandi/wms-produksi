<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <link rel="icon" href="{{url('dashboard2/dist/img/img_scrubber/icon-e.png')}}" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title')</title>
    @include('includes.style')
    @stack('add-style')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
    @include('includes.navbar')

    @include('includes.sidebar')

    @include('includes.setting-panel')
    
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            @yield('content')
			
            @include('includes.footer')

        </div>
        <!-- /Main Content -->
      
  </div>
  <!-- /HK Wrapper -->
    
    @include('includes.script')
    @yield('add-script')
</body>

</html>
