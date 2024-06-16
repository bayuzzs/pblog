<div id="application-sidebar"
		class="hs-overlay fixed left-5 top-5 z-[60] hidden h-[95vh] w-[260px] -translate-x-full transform rounded-2xl bg-white shadow-xl transition-all duration-300 [--auto-close:lg] hs-overlay-open:translate-x-0 dark:bg-gray-800 lg:bottom-0 lg:end-auto lg:block lg:h-full lg:translate-x-0">
		<div class="px-8 pt-7">
				<!-- Logo -->
				<a class="inline-block flex-none rounded-xl text-xl font-semibold focus:opacity-80 focus:outline-none"
						href="{{ route('dashboard') }}" aria-label="Polibatam Logistik">
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
										Beranda
								</x-nav-link>

								<x-nav-link active="{{ request()->routeIs('dokumen-impor*') }}" href="{{ route('dokumen-impor') }}">
										<x-slot:icon>
												<iconify-icon icon="fluent:document-one-page-multiple-24-regular" width="1.5em"
														height="1.5em"></iconify-icon>
										</x-slot:icon>
										Dokumen Impor
								</x-nav-link>
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
