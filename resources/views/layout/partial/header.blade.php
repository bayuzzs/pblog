<header
		class="top-0 z-[48] flex w-full flex-wrap rounded-2xl bg-white text-sm shadow-md dark:bg-gray-800 sm:flex-nowrap sm:justify-start sm:shadow-md lg:sticky lg:shadow-xl">
		<nav class="mx-auto flex w-full basis-full items-center px-4 sm:px-6" aria-label="Global">
				<div class="py me-5 lg:me-0 lg:hidden">
						<!-- Logo -->
						<a class="inline-block flex-none rounded-xl text-xl font-semibold focus:opacity-80 focus:outline-none"
								href="{{ route('dashboard') }}" aria-label="Preline">
								<img class="w-64" src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" alt="Polibatam Logistik">
						</a>
						<!-- End Logo -->
				</div>

				<div class="ms-auto flex w-full items-center justify-end py-2.5 sm:order-3 sm:justify-between sm:gap-x-3 sm:py-4">
						{{-- tombol search --}}
						<div class="sm:hidden">
								<button type="button"
										class="inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700">
										<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
												<circle cx="11" cy="11" r="8" />
												<path d="m21 21-4.3-4.3" />
										</svg>
								</button>
						</div>

						{{-- ini input search nya --}}
						<div class="hidden sm:block">
								<label for="icon" class="sr-only">Search</label>
								<div class="min-w-72 md:min-w-80 relative">
										<div class="pointer-events-none absolute inset-y-0 start-0 z-20 flex items-center ps-4">
												<svg class="size-4 flex-shrink-0 text-gray-400 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
														width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round">
														<circle cx="11" cy="11" r="8" />
														<path d="m21 21-4.3-4.3" />
												</svg>
										</div>
										<input type="text" id="icon" name="icon"
												class="block w-full rounded-lg border-gray-200 px-4 py-2 ps-11 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Search">
								</div>
						</div>
						<div class="flex flex-row items-center justify-end gap-2">
								<button type="button"
										class="inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700">
										<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
												<path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
												<path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
										</svg>
								</button>
								<button type="button"
										class="inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
										data-hs-offcanvas="#hs-offcanvas-right">
										<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
												<path d="M22 12h-4l-3 9L9 3l-3 9H2" />
										</svg>
								</button>
								{{-- button darkmode --}}
								<button type="button"
										class="hs-dark-mode group mr-3 flex h-[2.375rem] w-[2.375rem] items-center justify-center rounded-full font-medium text-gray-600 hover:bg-gray-100 hover:text-blue-600 hs-dark-mode-active:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-500"
										data-hs-theme-click-value="dark">
										<iconify-icon icon="ph:moon-bold" class="text-xl"></iconify-icon>
								</button>
								{{-- button lightmode --}}
								<button type="button"
										class="hs-dark-mode group mr-3 hidden h-[2.375rem] w-[2.375rem] items-center justify-center rounded-full font-medium text-gray-600 hover:bg-gray-100 hover:text-blue-600 hs-dark-mode-active:flex dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-500"
										data-hs-theme-click-value="light">
										<iconify-icon icon="tabler:sun" class="text-xl"></iconify-icon>
								</button>
								<div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
										<button id="hs-dropdown-user" type="button"
												class="inline-flex h-[2.375rem] w-[2.375rem] items-center justify-center gap-x-2 rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700">
												@if (auth()->user()->urlProfile)
														<img class="size-[38px] inline-block rounded-full object-cover ring-2 ring-white dark:ring-gray-800"
																src="/storage/avatars/{{ auth()->user()->urlProfile }}" alt="Image Description">
												@else
														<span
																class="size-[38px] flex items-center justify-center rounded-full bg-gray-200 text-sm ring-2 ring-white dark:bg-gray-700 dark:ring-gray-800">
																{{ getInitials(auth()->user()->nama) }}
														</span>
												@endif
										</button>

										{{-- Ini dropdown user --}}
										<div
												class="hs-dropdown-menu duration min-w-60 hidden rounded-lg bg-white p-2 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:border dark:border-gray-700 dark:bg-gray-800"
												aria-labelledby="hs-dropdown-user">
												<div class="-m-2 rounded-t-lg bg-gray-100 px-5 py-3 dark:bg-gray-800">
														<p class="text-sm text-gray-500 dark:text-gray-400">Masuk Sebagai</p>
														<p class="text-sm font-medium text-gray-800 dark:text-gray-300">
																{{ auth()->user()->email ? auth()->user()->email : 'Petugas' }}
														</p>
												</div>
												{{-- Ini dropdown menu --}}
												<div class="mt-2 py-2 first:pt-0 last:pb-0">
														<ul class="space-y-1.5">
																<li>
																		@auth('pengimpor')
																				<a class="{{ request()->routeIs('settings') ? 'bg-gray-100 dark:bg-gray-700' : '' }} flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
																						href="{{ route('settings') }}">
																						<iconify-icon icon="uil:setting" class="text-lg"></iconify-icon>
																						Pengaturan Akun
																				</a>
																		@endauth
																</li>
																<li>
																		<a class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
																				href="{{ route('auth.logout') }}">
																				<iconify-icon icon="material-symbols:logout" class="text-lg"></iconify-icon>
																				Keluar
																		</a>
																</li>
														</ul>
												</div>
										</div>
								</div>
						</div>
				</div>
		</nav>
</header>
