<!DOCTYPE html>
<html lang="en">
	
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
	<title>Login | {{ config('app.name') }}</title>
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	@stack('styles')
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang di SSO - {{ config('app.name') }}</h1>
							<p class="lead">
								Single Sign On - {{ config('app.name') }}
							</p>
						</div>
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	@stack('scripts')
</body>
</html>