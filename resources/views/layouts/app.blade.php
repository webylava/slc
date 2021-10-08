<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="{{ url('/') }}/images/favicon.ico" type="image/x-icon">
		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		@stack('app-css')
		<link rel="stylesheet" href="{{ asset('css/media.css') }}">
	</head>
    <body class="font-sans antialiased">
        <div class="flex-col bg-gray-800 w-full md:flex md:flex-row md:min-h-screen">
            <x-sidebar />
            <div class="w-full">
                <!-- Page Heading -->
                <header class="bg-white shadow">
					<div class="mx-8 py-4 flex justify-between gap-4">
						<div>
							<nav class="text-black text-sm font-semibold font-bold" aria-label="Breadcrumb">
							  <ol class="list-none p-0 inline-flex">
									@section('breadcrumb')
									<li class="flex items-center">
									<a href="{{ url('dashboard') }}">Home</a>
									@if(!Route::is('dashboard') )
										 <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
									@endif
									</li>
									@show
							  </ol>
							</nav>  
						</div>
						<div class="text-end">Welcome {{ Auth::user()->name }}</div>
					</div>
                </header>
                <!-- Page Content -->
				<main>
					<x-flash-message />
					{{ $slot }}
                </main>
            </div>
        </div>
        <!-- Scripts -->
        @stack('app-js')
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>