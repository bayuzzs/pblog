<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
		<section class="bg-gray-50">
				<div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
						<a href="/" class="mb-6 flex flex-col items-center text-2xl font-semibold text-gray-900">
								<img class="mr-2 h-8 w-8" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
								{{ config('app.name') }}
						</a>
						<div class="md: -0 w-full rounded-lg bg-white p-6 shadow sm:max-w-md sm:p-8">
								<div class="mb-4 border-b border-gray-200">
										<ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="default-tab"
												data-tabs-toggle="#auth-tab-content" role="tablist">
												{{-- Login Tab --}}
												<li class="me-2" role="presentation">
														<button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab" data-tabs-target="#login"
																type="button" role="tab" aria-controls="profile" aria-selected="false">Login</button>
												</li>
												{{-- Login Tab End --}}
												{{-- Register Tab --}}
												<li class="me-2" role="presentation">
														<button class="inline-block rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
																id="dashboard-tab" data-tabs-target="#register" type="button" role="tab" aria-controls="dashboard"
																aria-selected="false">Register</button>
												</li>
												{{-- Register Tab End --}}
										</ul>
								</div>
								<div id="auth-tab-content">
										{{-- Login Tab Content --}}
										<div class="hidden rounded-lg" id="login" role="tabpanel" aria-labelledby="profile-tab">
												<form class="space-y-3 md:space-y-4 lg:mt-5" action="{{ route('login.store') }}" method="POST">
														@session('status')
																<p class="mt-2 text-sm text-green-600">{{ $value }}</p>
														@endsession
														@csrf
														<label for="username" class="mb-2 block text-sm font-medium text-gray-900">Username</label>
														<div class="flex">
																<span
																		class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
																		<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
																				fill="currentColor" viewBox="0 0 20 20">
																				<path
																						d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
																		</svg>
																</span>
																<input type="text" id="username"
																		class="block w-full min-w-0 flex-1 rounded-none rounded-e-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
														</div>
														<label for="password" class="mb-2 block text-sm font-medium text-gray-900">Password</label>
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
																<input type="password" id="password"
																		class="block w-full min-w-0 flex-1 rounded-none rounded-e-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
														</div>
														<a href="{{ route('password.request') }}" class="mt-2 text-sm text-green-600">Lupa kata sandi?
																klik <u>Disini</u></a>
														<button type="submit"
																class="mb-2 me-2 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Login</button>
												</form>
										</div>
										{{-- Login Tab Content End --}}
										{{-- Register Tab Content --}}
										<div class="hidden rounded-lg bg-gray-50 p-4" id="register" role="tabpanel" aria-labelledby="dashboard-tab">
												<p class="text-sm text-gray-500">This is some placeholder content the <strong
																class="font-medium text-gray-800">Dashboard tab's associated content</strong>. Clicking
														another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
														control the content visibility and styling.</p>
										</div>
										{{-- Register Tab Content End --}}
								</div>
						</div>
				</div>
		</section>
</body>

</html>
