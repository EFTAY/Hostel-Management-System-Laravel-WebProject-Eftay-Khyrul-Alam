<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Hostle Managment System</title>

	<!-- Site favicon -->

	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/images/home.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
    @include('layouts.backEnd.font.google')
    <!-- CSS -->
	@include('layouts.backEnd.css.main')
	{{-- <!-- Global site tag (gtag.js) - Google Analytics -->
        {{-- Lagbe na eta --}}
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	{{-- <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script> --}}
</head>
<body>
    {{-- Pre Loader file --}}
    {{-- @include('layouts.backEnd.loader') --}}
    {{-- Header file --}}
    @include('layouts.backEnd.nav')
    {{-- Left Bar file --}}
    @include('layouts.backEnd.slideBar')
    {{-- Mobile overly --}}
	<div class="mobile-menu-overlay"></div>
    {{-- Main contain Start --}}
	<div class="main-container">
		<div class="pd-ltr-20">
            {{-- yeild er kaj hocche space creat kora and jar modde shokol variable rakha hoy --}}
            @yield('content')
            {{-- footer team name --}}
			<div class="footer-wrap pd-20 mb-20 card-box">
			Hostle Managment System By <span class="text-success">Eftay</span>
			</div>
		</div>
	</div>
	<!-- js -->
	@include('layouts.backEnd.js.main')
</body>
</html>