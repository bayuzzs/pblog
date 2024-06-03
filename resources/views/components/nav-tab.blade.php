@props(['routeName'])
<a class="{{ request()->routeIs($routeName) ? 'dokumen-impor-nav-active' : '' }} inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 duration-150 hover:border-blue-600 hover:text-blue-600 focus:text-blue-600 focus:outline-none dark:text-gray-500 dark:hover:text-blue-500"
		href="{{ route($routeName, ['nomorAju' => request()->route('nomorAju')]) }}">
		{{ $slot }}
</a>
