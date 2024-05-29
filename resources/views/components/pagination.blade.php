@props(['data'])
@php
		$search = request('search') ? '&search=' . request('search') : '';
@endphp
<nav class="flex items-center -space-x-px">
		<a href="{{ $data->previousPageUrl() . $search }}"
				class="inline-flex min-h-[38px] min-w-[38px] items-center justify-center gap-x-1.5 border border-gray-200 px-2.5 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
				<svg class="size-3.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
						fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="m15 18-6-6 6-6"></path>
				</svg>
		</a>
		{{-- Pagination page less than 3 --}}
		@if ($data->lastPage() == 2)
				{{-- If Pagination end --}}
				@if ($data->currentPage() == $data->lastPage())
						<a href="{{ $data->url($data->currentPage() - 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() - 1 }}
						</a>
						<a href="{{ $data->url($data->currentPage()) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 bg-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() }}
						</a>
				@else
						<a href="{{ $data->url($data->currentPage()) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 bg-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() }}
						</a>
						<a href="{{ $data->url($data->currentPage() + 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() + 1 }}
						</a>
				@endif
		@else
				{{-- If Pagination not first --}}
				@if ($data->currentPage() == $data->lastPage())
						<a href="{{ $data->url($data->currentPage() - 2) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg focus:bg-gray-300 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-600 dark:text-white dark:focus:bg-gray-500"
								aria-current="page">
								{{ $data->currentPage() - 2 }}
						</a>
						<a href="{{ $data->url($data->currentPage() - 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() - 1 }}
						</a>
						<a href="{{ $data->url($data->currentPage()) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 bg-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() }}
						</a>
						{{-- If Pagination end --}}
				@elseif ($data->currentPage() > 1)
						<a href="{{ $data->url($data->currentPage() - 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg focus:bg-gray-300 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-600 dark:text-white dark:focus:bg-gray-500"
								aria-current="page">
								{{ $data->currentPage() - 1 }}
						</a>
						<a href="{{ $data->url($data->currentPage()) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 bg-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() }}
						</a>
						<a href="{{ $data->url($data->currentPage() + 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() + 1 }}
						</a>
						{{-- if Pagination first --}}
				@else
						<a href="{{ $data->url($data->currentPage()) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 bg-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg focus:bg-gray-300 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-600 dark:text-white dark:focus:bg-gray-500"
								aria-current="page">
								{{ $data->currentPage() }}
						</a>
						<a href="{{ $data->url($data->currentPage() + 1) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() + 1 }}
						</a>
						<a href="{{ $data->url($data->currentPage() + 2) . $search }}"
								class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-gray-200 px-3 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
								{{ $data->currentPage() + 2 }}
						</a>
				@endif
		@endif

		<a href="{{ $data->nextPageUrl() . $search }}"
				class="inline-flex min-h-[38px] min-w-[38px] items-center justify-center gap-x-1.5 border border-gray-200 px-2.5 py-2 text-sm text-gray-800 first:rounded-s-lg last:rounded-e-lg hover:bg-gray-100 focus:bg-gray-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
				<svg class="size-3.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
						viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
						stroke-linejoin="round">
						<path d="m9 18 6-6-6-6"></path>
				</svg>
		</a>
</nav>
