<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<style>
				.bg-auth {
						background-image: url('{{ asset('images/background/bg-auth.jpg') }}');
						background-size: cover;
				}
		</style>
</head>

<body>
		<section class="bg-auth flex h-screen items-center">
				<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
						<a href="{{ route('home') }}" class="mb-6 flex flex-col items-center text-2xl font-semibold text-gray-900">
								<img class="max-w-72 mr-2" src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" alt="logo">
						</a>
						<div class="w-full rounded-lg bg-white p-6 shadow sm:max-w-md sm:p-8 md:mt-0">
								<h1 class="mb-1 font-poppins text-lg font-bold leading-tight tracking-tight text-gray-900 md:text-xl">
										Lupa Kata Sandi?
								</h1>
								<p class="text-sm font-light text-gray-600">Ketikkan email akun anda di bawah ini dan kami akan mengirim tautan
										untuk
										mengatur ulang kata sandi anda!</p>
								<form class="mt-4 space-y-4 md:space-y-5 lg:mt-5" action="{{ route('password.email') }}" method="POST">
										@csrf
										<div>
												<label for="email" class="mb-2 block font-poppins text-sm font-medium text-gray-900">Email
														anda</label>
												@session('status')
														<p class="mb-2 block text-sm text-green-600">{{ $value }}</p>
												@endsession
												<input type="email" name="email" id="email"
														class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 font-poppins font-light text-gray-900 focus:border-blue-600 focus:ring-blue-600 sm:text-sm"
														placeholder="contoh@email.com" required>

												@error('email')
														<p class="block text-sm text-red-600">{{ $message }}</p>
												@enderror
										</div>
										<button type="submit"
												class="w-full rounded-lg bg-blue-600 px-5 py-2.5 text-center font-poppins text-sm text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">Atur
												Ulang
												Sandi</button>
										&nbsp
								</form>
								<div class="text-sm font-medium text-gray-500 dark:text-gray-300">
										<a href="{{ route('auth') }}" class="text-blue-700 hover:underline dark:text-blue-500">Kembali ke menu
												awal</a>
								</div>
						</div>
				</div>
		</section>
</body>

</html>
