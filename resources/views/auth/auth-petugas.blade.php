<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<style>
				/* disabled the arrow in input number */
				/* Chrome, Safari, Edge, Opera */
				input::-webkit-outer-spin-button,
				input::-webkit-inner-spin-button {
						-webkit-appearance: none;
						margin: 0;
				}

				/* Firefox */
				input[type=number] {
						-moz-appearance: textfield;
				}

				.bg-auth {
						background-image: url('{{ asset('images/background/bg-auth.jpg') }}');
						background-size: cover;
				}
		</style>
</head>

<body>
		<section class="bg-auth">
				<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:min-h-screen lg:py-0">
						<a href="{{ route('home') }}" class="mb-6 flex flex-col items-center text-2xl font-semibold text-gray-900">
								<img class="max-w-72 mr-2" src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" alt="logo">
						</a>
						<div class="w-full bg-[rgba('255,255,255,0.7')] px-6 pb-6 backdrop-blur sm:max-w-md sm:px-8 sm:pb-8 md:mt-0">
								<div class="mb-4">
										<ul class="-mb-px flex flex-wrap justify-center border-b-2 border-gray-100 text-center text-sm font-medium"
												id="default-tab" data-tabs-toggle="#auth-tab-content" role="tablist">
												{{-- Login Tab --}}
												<li class="-mb-[2px] me-2" role="presentation">
														<button class="inline-block font-['Poppins'] rounded-t-lg border-b-2 p-4" id="profile-tab" data-tabs-target="#login"
																type="button" role="tab" aria-controls="profile"
																aria-selected="{{ session('activeTab') == 'login' ? 'true' : 'false' }}">Masuk</button>
												</li>
												{{-- Login Tab End --}}
										</ul>
								</div>
								<div id="auth-tab-content">
										{{-- Login Tab Content --}}
										<div class="hidden px-4" id="login" role="tabpanel" aria-labelledby="profile-tab">
												<form class="space-y-3 md:space-y-4 lg:mt-5" action="{{ route('login-petugas.store') }}" method="POST">
														@csrf
														@session('status')
																<p class="mt-2 text-sm text-green-600">{{ $value }}</p>
														@endsession
														<div>
																<div class="flex">
																		<span
																				class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
																				<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
																						fill="currentColor" viewBox="0 0 20 20">
																						<path
																								d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
																				</svg>
																		</span>
																		<input type="text" id="username" name="username" placeholder="Username"
																				value="{{ old('username') }}" required
																				class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
																</div>
																@error('username')
																		<p class="text-sm text-red-600">{{ $message }}</p>
																@enderror
														</div>
														<div>
																<div class="flex">
																		<span
																				class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
																				<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
																						width="24" height="24" fill="currentColor" viewBox="2 2 20 20">
																						<path fill-rule="evenodd"
																								d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
																								clip-rule="evenodd" />
																				</svg>
																		</span>
																		<input type="password" id="password" name="password" placeholder="Password" required
																				class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
																</div>
																@error('password')
																		<p class="mb-2 text-sm text-red-600">{{ $message }}</p>
																@enderror
														</div>
														<button type="submit"
																class="me-2 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-md font-['Poppins'] text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Masuk</button>
												</form>
										</div>
										{{-- Login Tab Content End --}}
								</div>
						</div>
				</div>
		</section>
</body>

</html>
