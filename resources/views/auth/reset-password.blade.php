<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
		<section class="bg-gray-50">
				<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
						<a href="#" class="mb-6 flex items-center text-2xl font-semibold text-gray-900">
								<img class="mr-2 h-8 w-8" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
								{{ config('app.name') }}
						</a>
						<div class="w-full rounded-lg bg-white p-6 shadow sm:max-w-md sm:p-8 md:mt-0">
								<h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
										Atur Ulang Sandi
								</h2>
								<form class="mt-4 space-y-4 md:space-y-5 lg:mt-5" action="{{ route('password.update') }}" method="POST">
										@csrf
										@error('email')
												<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
										@enderror
										@error('password')
												<p class="mt-2 text-sm text-red-600">{{ $message }}</p>
										@enderror
										<input type="text" name="token" value="{{ $token }}" hidden>
										<div>
												<label for="email" class="mb-2 block text-sm font-medium text-gray-900">Email anda</label>
												<input type="email" name="email" id="email"
														class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-600 focus:ring-blue-600 sm:text-sm"
														value="{{ $email }}" readonly>
										</div>
										<div>
												<label for="password" class="mb-2 block text-sm font-medium text-gray-900">Kata sandi</label>
												<input type="password" name="password" id="password" placeholder="••••••••" required
														class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-600 focus:ring-blue-600 sm:text-sm"
														required>
										</div>
										<div>
												<label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-900">Konfimasi kata
														sandi</label>
												<input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••"
														required
														class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-600 focus:ring-blue-600 sm:text-sm"
														required>
										</div>
										<button type="submit"
												class="w-full rounded-lg bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atur
												Sandi</button>
								</form>
						</div>
				</div>
		</section>
</body>

</html>
