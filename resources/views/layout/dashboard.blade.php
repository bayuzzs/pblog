<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		@stack('script-atas')
</head>

<body class="bg-[#e1effe]">
		{{-- Navbar Section Start --}}
		@extends('layout.navbar')
		{{-- Navbar Section End --}}

		{{-- Sidebar Section Start --}}
		@extends('layout.sidebar')
		{{-- Sidebar Section End --}}

		{{-- Main content start --}}
		<div class="ml-64 flex h-screen bg-teal-400 p-[6rem_1rem_1rem_1rem]">
				@yield('main-content')
				{{-- <div class="w-full overflow-auto rounded-md bg-white p-5 shadow-md">
						<div class="h-[300px] bg-green-500">s</div>
						<div class="h-[400px] bg-blue-500">s</div>
				</div> --}}
		</div>
		{{-- Main content end --}}

		@stack('script-bawah')

</body>

</html>
