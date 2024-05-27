<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Polibatam Logistik</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		@stack('script-atas')
		<script>
				// This code should be added to <head>.
				// It's used to prevent page load glitches.
				const html = document.querySelector('html');
				const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !
						window.matchMedia('(prefers-color-scheme: dark)').matches);
				const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
						window.matchMedia('(prefers-color-scheme: dark)').matches);

				if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
				else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
				else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
				else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
		</script>
		<script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
</head>

<body class="bg-surface dark:bg-gray-900">


		<!-- ========== MAIN CONTENT ========== -->


		<!-- Sidebar -->
		@include('layout.partial.sidebar')
		<!-- End Sidebar -->

		<!-- Content -->
		<div class="w-full lg:ps-72">
				<div class="space-y-4 p-4 sm:space-y-6 sm:p-6">
						<!-- ========== HEADER ========== -->
						@include('layout.partial.header')
						<!-- ========== END HEADER ========== -->
						<!-- Breadcrumb -->
						@include('layout.partial.breadcumb')
						<!-- End Breadcrumb -->
						@yield('main-content')
				</div>
		</div>
		<!-- End Content -->
		<!-- ========== END MAIN CONTENT ========== -->

		@stack('script-bawah')
</body>

</html>
