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
				@if (checkNomorAjuRoute($segment))
						@continue
				@endif
				<li aria-current="{{ $loop->last ? 'page' : 'false' }}">
						<a href="/{{ implode('/', array_slice(request()->segments(), 0, $loop->index + 1)) }}"
								class="{{ $loop->last ? 'font-semibold' : '' }} flex items-center gap-1 rounded-full px-1.5 py-1.5 text-base text-gray-800 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
								{{ $segment }}
								@if (!$loop->last)
										<iconify-icon icon="simple-line-icons:arrow-right" class="text-xs"></iconify-icon>
								@endif
						</a>
				</li>
		@endforeach
</ol>
<!-- End Breadcrumb -->
