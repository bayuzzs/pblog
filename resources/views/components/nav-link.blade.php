@props(['active' => false, 'href' => '#'])
<li>
		<a class="{{ $active ? 'bg-gray-100 dark:bg-gray-700 dark:text-white' : '' }} flex items-center gap-x-2 rounded-lg px-2.5 py-3.5 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700"
				href="{{ $href }}">
				{{ $icon }}
				{{ $slot }}
		</a>
</li>
