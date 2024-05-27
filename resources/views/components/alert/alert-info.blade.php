@props(['class' => ''])
<div id="dismiss-alert"
		class="{{ $class }} rounded-lg border border-blue-200 bg-blue-100 p-4 text-sm text-blue-800 transition duration-300 hs-removing:translate-x-5 hs-removing:opacity-0 dark:border-blue-900 dark:bg-blue-800/10 dark:text-blue-500"
		role="alert">
		<div class="flex items-center">
				<iconify-icon icon="material-symbols:info-outline" class="text-lg"></iconify-icon>
				<div class="ms-2">
						<div class="text-sm font-medium">
								{{ $slot }}
						</div>
				</div>
				<div class="ms-auto ps-3">
						<div class="-mx-1.5 -my-1.5">
								<button type="button"
										class="inline-flex rounded-lg bg-blue-100 p-1.5 text-blue-500 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-blue-50 dark:bg-transparent dark:text-blue-600 dark:hover:bg-blue-800/50"
										data-hs-remove-element="#dismiss-alert">
										<span class="sr-only">Dismiss</span>
										<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round">
												<path d="M18 6 6 18"></path>
												<path d="m6 6 12 12"></path>
										</svg>
								</button>
						</div>
				</div>
		</div>
</div>
