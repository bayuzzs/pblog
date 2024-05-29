@props(['name' => '', 'value' => '', 'route' => ''])
<div class="relative rounded-md border-2 border-b-0 border-blue-500">
		<div class="bg-blue-500 py-1 text-center font-semibold text-white">{{ $name }}</div>
		<div class="px-5 py-5 pb-10 pt-5">
				<p class="my-counter text-5xl font-semibold text-blue-500 lg:text-7xl" data-val="{{ $value }}">
						{{ $value }}</p>
				<p class="text-sm text-blue-500 lg:text-base">{{ $name }} Terdata </p>
		</div>
		<a href="{{ $route }}"
				class="absolute -left-[2.5%] bottom-0 block w-[105%] rounded-md bg-red-500 py-1 text-center text-sm text-white hover:bg-red-600 lg:text-base">Kelola
				Data ></a>
</div>
