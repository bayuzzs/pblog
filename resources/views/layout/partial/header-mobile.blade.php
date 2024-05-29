<div
		class="inset-x-0 top-5 z-20 rounded-2xl bg-white px-4 shadow-md dark:border-gray-700 dark:bg-gray-800 sm:px-6 md:px-8 lg:hidden lg:shadow-xl">
		<div class="flex items-center justify-between py-2">
				<!-- Breadcrumb -->
				<ol class="ms-3 flex items-center gap-2 whitespace-nowrap">
						<li>
								<a href="/"
										class="flex items-center gap-1 rounded-full px-1.5 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700">
										<iconify-icon icon="bi:house" class="text-lg"></iconify-icon>
										<iconify-icon icon="simple-line-icons:arrow-right" class="text-xs"></iconify-icon>
								</a>
						</li>
						@foreach (request()->segments() as $segment)
								<li aria-current="{{ $loop->last ? 'page' : 'false' }}">
										<a href="/{{ implode('/', array_slice(request()->segments(), 0, $loop->index + 1)) }}"
												class="{{ $loop->last ? 'font-semibold' : '' }} flex items-center gap-1 rounded-full px-1.5 py-1.5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700">
												{{ $segment }}
												@if (!$loop->last)
														<iconify-icon icon="simple-line-icons:arrow-right" class="text-xs"></iconify-icon>
												@endif
										</a>
								</li>
						@endforeach
				</ol>
				<!-- End Breadcrumb -->

				<!-- Sidebar -->
				<button type="button"
						class="flex items-center justify-center gap-x-1.5 rounded-lg border border-gray-200 px-3 py-2 text-xs text-gray-500 hover:text-gray-600 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
						data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
						<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round">
								<path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13" />
						</svg>
						<span class="sr-only">Sidebar</span>
				</button>
				<!-- End Sidebar -->
		</div>
</div>
