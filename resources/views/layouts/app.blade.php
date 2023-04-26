<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="DISKOMINFOTIK KOTA BLITAR">
	<meta name="keywords" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="shortcut icon" href="" />
	<title>@yield('title') | {{ config('app.name') }}</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	@stack('styles')
</head>
<body>
	<div class="wrapper">
		@include('layouts.components.nav')

		<div class="main">
			@include('layouts.components.navbar')

			<main class="content">
				<div class="container-fluid p-0">

					@yield('content')

				</div>
			</main>

			@include('layouts.components.footer')
		</div>
	</div>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	@stack('scripts')
</body>
</html>
