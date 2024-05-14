<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Halaman tidak ditemukan!</title>
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<style>
				.bg-auth {
						background-image: url('{{ asset('images/background/bg-auth.jpg') }}');
						background-size: cover;
						background-position: center;
				}
		</style>
</head>

<body>
		<section class="bg-auth">
				<div class="mx-auto h-screen max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
						<div class="mx-auto max-w-screen-sm text-center">

								<h1 class="mb-4 text-7xl font-extrabold tracking-tight text-blue-600 lg:text-9xl">404
								</h1>
								<p class="mb-4 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">Sesuatu Hilang.
								</p>
								<p class="mb-4 text-lg font-light text-gray-500">Tidak dapat menemukan halaman yang Anda cari. Tetapi jangan
										khawatir, temukan lebih banyak di halaman utama</p>
								<a href="{{ route('home') }}"
										class="my-4 inline-flex rounded-lg bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Kembali
										ke Halaman Utama</a>
						</div>
				</div>
		</section>
</body>

</html>
