<div id="application-sidebar"
		class="hs-overlay fixed left-5 top-5 z-[60] hidden h-[95vh] w-[260px] -translate-x-full transform rounded-2xl bg-white shadow-xl transition-all duration-300 [--auto-close:lg] hs-overlay-open:translate-x-0 dark:bg-gray-800 lg:bottom-0 lg:end-auto lg:block lg:h-full lg:translate-x-0">
		<div class="px-8 pt-7">
				<!-- Logo -->
				<a class="inline-block flex-none rounded-xl text-xl font-semibold focus:opacity-80 focus:outline-none"
						href="../templates/admin/index.html" aria-label="Preline">
						<img class="w-52" src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" alt="Polibatam Logistik">
				</a>
				<!-- End Logo -->
		</div>

		<nav class="hs-accordion-group flex w-full flex-col flex-wrap p-6" data-hs-accordion-always-open>
				<ul class="space-y-1.5">
						@auth('pengimpor')
								<x-nav-link active="{{ request()->routeIs('dashboard') }}" href="{{ route('dashboard') }}">
										<x-slot:icon>
												<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round">
														<path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
														<polyline points="9 22 9 12 15 12 15 22" />
												</svg>
										</x-slot:icon>
										Dashboard
								</x-nav-link>

								<li class="hs-accordion" id="users-accordion">
										<button type="button"
												class="hs-accordion-toggle flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-3.5 text-start text-sm text-gray-700 hover:bg-gray-100 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:hs-accordion-active:text-white">
												<iconify-icon icon="gridicons:computer" class="text-lg"></iconify-icon>
												Single Core System

												<svg class="size-4 ms-auto hidden hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" width="24"
														height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round">
														<path d="m18 15-6-6-6 6" />
												</svg>

												<svg class="size-4 ms-auto block hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
														height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round">
														<path d="m6 9 6 6 6-6" />
												</svg>
										</button>

										<div id="users-accordion-child"
												class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
												<ul class="ps-2 pt-2">
														<li>
																<a class="flex items-center gap-x-2 rounded-lg px-2.5 py-3.5 text-sm text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300"
																		href="#">
																		<b>•</b> Dokumen Pabean
																</a>
														</li>
														<li>
																<a class="flex items-center gap-x-2 rounded-lg px-2.5 py-3.5 text-sm text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300"
																		href="#">
																		<b>•</b> Pengajuan Rush Handling
																</a>
														</li>
														<li>
																<a class="flex items-center gap-x-2 rounded-lg px-2.5 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300"
																		href="#">
																		<b>•</b> Dokumen Barang Kiriman
																</a>
														</li>
												</ul>
										</div>
								</li>
						@endauth
						@auth('petugas')
								<x-nav-link active="{{ request()->routeIs('dashboard') }}" href="{{ route('dashboard') }}">
										<x-slot:icon>
												<iconify-icon icon="mdi:account-eye-outline" class="text-lg"></iconify-icon>
										</x-slot:icon>
										Manajemen Pengguna
								</x-nav-link>
								<x-nav-link active="{{ request()->routeIs('data-master*') }}" href="{{ route('data-master.index') }}">
										<x-slot:icon>
												<iconify-icon icon="tabler:database-cog" class="text-lg"></iconify-icon>
										</x-slot:icon>
										Kelola Data Master
								</x-nav-link>
						@endauth
				</ul>
		</nav>
</div>
