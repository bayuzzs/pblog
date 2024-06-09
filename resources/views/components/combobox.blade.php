@props([
    'apiUrl' => '',
    'name' => '',
    'placeholder' => 'Cari Data...',
    'searchName' => '',
    'fieldName' => '',
    'value' => '',
])

<div class="relative"
		data-hs-combo-box='{
  "apiUrl": "{{ $apiUrl }}",
	"apiSearchQuery": "search",
	"outputEmptyTemplate": "<div class=\"py-2 flex w-full flex-col items-center justify-center px-4 text-sm text-gray-800 rounded-lg dark:bg-gray-900 dark:text-gray-200\"><iconify-icon icon=\"iwwa:box\" class=\"text-4xl\"></iconify-icon>Tidak ada data</div>",
	"outputLoaderTemplate": "<div class=\"flex items-center justify-center rounded-lg bg-white px-4 py-2 text-sm text-gray-800 dark:bg-gray-900 dark:text-gray-200\"><div class=\"size-6 inline-block animate-spin rounded-full border-[3px] border-current border-t-transparent text-blue-600 dark:text-blue-500\" role=\"status\" aria-label=\"loading\"><span class=\"sr-only\">Loading...</span></div></div>",
  "outputItemTemplate": "<div class=\"cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-gray-200 dark:focus:bg-gray-800\" data-hs-combo-box-output-item><div class=\"flex justify-between items-center w-full\"><div><span data-hs-combo-box-output-item-field=\"{{ $fieldName }}\" data-hs-combo-box-search-text data-hs-combo-box-value></span><div data-hs-combo-box-output-item-field=\"{{ $searchName }}\" data-hs-combo-box-search-text></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></div></div>"
}'>
		<div class="relative">
				<input
						class="block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
						type="text" data-hs-combo-box-input="" name="{{ $name }}" value="{{ $value }}"
						placeholder="{{ $placeholder }}" required>
				<div class="absolute end-3 top-1/2 -translate-y-1/2" data-hs-combo-box-toggle="">
						<svg class="size-3.5 flex-shrink-0 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg"
								width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="m7 15 5 5 5-5"></path>
								<path d="m7 9 5-5 5 5"></path>
						</svg>
				</div>
		</div>
		<div
				class="absolute z-50 max-h-72 w-full overflow-hidden overflow-y-auto rounded-lg border border-gray-200 bg-white p-1 dark:border-gray-700 dark:bg-gray-900 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-gray-500 [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-gray-700 [&::-webkit-scrollbar]:w-2"
				style="display: none;" data-hs-combo-box-output=""></div>
</div>
