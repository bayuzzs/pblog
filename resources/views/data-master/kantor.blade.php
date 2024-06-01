@extends('layout.dashboard')

@section('main-content')
		<div
				class="custom-scrollbar h-[calc(100vh-150px)] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<div class="flex justify-between">
						<p class="mb-1 font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-200 md:text-3xl">
								Daftar Data Kantor Barang
						</p>
						<div class="hs-dropdown relative inline-flex">
								<button id="hs-dropdown-delete" type="button"
										class="hs-dropdown-toggle inline-flex items-center rounded-full px-1 py-1 text-gray-800 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">
										<iconify-icon icon="charm:menu-kebab" class="text-xl"></iconify-icon>
								</button>
								<div
										class="hs-dropdown-menu duration min-w-48 z-20 mt-2 hidden rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full hs-dropdown-open:opacity-100 dark:divide-gray-700 dark:border dark:border-gray-700 dark:bg-gray-800"
										aria-labelledby="hs-dropdown-delete">
										<button data-hs-overlay="#hs-add-modal"
												class="flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
												Tambah Data
										</button>
										<button onclick="submitDeleteForm()"
												class="{{ !$kantors->items() ? 'hidden' : '' }} flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
												Hapus Data
										</button>
								</div>
						</div>
				</div>

				{{-- Search bar start --}}
				<form action="{{ route('data-master.kantor') }}" method="GET"
						class="sticky -top-5 z-10 mb-2 flex items-center justify-between gap-2 space-y-4 bg-white py-2 dark:bg-gray-800 md:space-y-0">
						<label for="table-search" class="sr-only">Search</label>
						<div class="relative w-full">
								<div class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
										<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
												viewBox="0 0 20 20">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
										</svg>
								</div>
								<input type="text" id="table-search-users" name="search"
										class="block w-full rounded-lg border border-gray-300 bg-transparent p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-700 dark:text-white"
										placeholder="Cari kode Kantor Barang" value="{{ request('search') }}">
						</div>
						<div class="flex gap-1">
								<!-- Select -->
								<select onchange="submitSortForm(event)"
										data-hs-select='{
        "placeholder": "<span class=\"inline-flex items-center\"><svg class=\"flex-shrink-0 size-3.5 me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg></span>",
        "toggleTag": "<button type=\"button\"></button>",
        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2.5 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400",
        "dropdownClasses": "mt-2 z-50 !right-0 min-w-[10rem] max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-gray-700 dark:[&::-webkit-scrollbar-thumb]:bg-gray-500 dark:bg-gray-900 dark:border-gray-700",
        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-gray-200 dark:focus:bg-gray-800",
        "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
        "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
    }'
										class="!left-0 hidden">
										{{-- Let this choose stand alone --}}
										<option value="">Choose</option>
										<x-select-option valueInput="kodeKantor_asc" requestParam="sortOption">Kode Kantor ↑</x-select-option>
										<x-select-option valueInput="kodeKantor_desc" requestParam="sortOption">Kode Kantor ↓</x-select-option>
										<x-select-option valueInput="namaKantor_asc" requestParam="sortOption">Nama Kantor ↑</x-select-option>
										<x-select-option valueInput="namaKantor_desc" requestParam="sortOption">Nama Kantor ↓</x-select-option>
								</select>
								<!-- End Select -->
								<button type="submit"
										class="rounded-lg bg-blue-700 px-7 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cari</button>
						</div>
				</form>
				{{-- Search bar end --}}

				@foreach ($errors->all() as $error)
						<x-alert.alert-error class="mb-3">{{ $error }}</x-alert.alert-error>
				@endforeach

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession

				{{-- Table start --}}
				<form action="{{ route('data-master.kantor') }}" method="POST" class="flex flex-col" id="delete-form" method="POST">
						@csrf
						@method('DELETE')
						<div class="custom-scrollbar -m-1.5 overflow-x-auto">
								<div class="inline-block min-w-full p-1.5 align-middle">
										<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
												<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
														<thead class="bg-gray-50 dark:bg-gray-700">
																<tr>
																		<th scope="col" class="py-3 ps-4">
																				<div class="flex h-5 items-center">
																						<input id="hs-table-checkbox-all" type="checkbox" onclick="checkAll(this)"
																								class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																				</div>
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Kode Kantor
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Nama
																				Kantor
																		</th>

																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																@forelse ($kantors as $kantor)
																		<tr data-json="{{ json_encode($kantor) }}" onclick="showEditModal(event)"
																				class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
																				<td class="py-3 ps-4">
																						<div class="flex h-5 items-center">
																								<input id="hs-table-checkbox-1" type="checkbox" name="kodeKantor[]"
																										value="{{ $kantor->kodeKantor }}" onclick="event.stopPropagation();"
																										class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																						</div>
																				</td>
																				<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																						{{ $kantor->kodeKantor }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $kantor->namaKantor }}
																				</td>

																		</tr>
																@empty
																		<tr>
																				<td colspan="5">
																						<div
																								class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-200">
																								<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																								Tidak ada data Kantor
																						</div>
																				</td>
																		</tr>
																@endforelse
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</form>
				{{-- Table end --}}

				<!-- Pagination -->
				@if ($kantors->hasPages())
						<div class="mt-5 flex items-center justify-between px-3">
								<p class="w-48 break-words text-sm dark:text-gray-400 sm:w-full">
										Data <span class="font-semibold">{{ $kantors->firstItem() }}</span> ke <span
												class="font-semibold">{{ $kantors->lastItem() }}</span> dari total <span
												class="font-semibold">{{ $kantors->total() }}</span> Data Kantor
								</p>
								<x-pagination :data="$kantors" />
						</div>
				@endif
				<!-- End Pagination -->
		</div>

		{{-- Modal Start --}}
		{{-- Modal Add Start --}}
		<div id="hs-add-modal"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<form action="{{ route('data-master.kantor') }}" method="POST">
								@csrf
								<div
										class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
										<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
												<h3 class="font-bold text-gray-800 dark:text-white">
														Tambah Data Kantor
												</h3>
												<button type="button"
														class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
														data-hs-overlay="#hs-add-modal">
														<span class="sr-only">Tutup</span>
														<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																stroke-linejoin="round">
																<path d="M18 6 6 18"></path>
																<path d="m6 6 12 12"></path>
														</svg>
												</button>
										</div>
										<div class="custom-scrollbar overflow-y-auto p-4">
												<div class="grid grid-cols-4 items-center gap-y-3">
														<label for="kodeKantor" class="text-sm dark:text-gray-50">Kode Kantor</label>
														<input type="number" id="kodeKantor" name="kodeKantor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="000" required>
														<label for="namaKantor" class="text-sm dark:text-gray-50">Nama Kantor</label>
														<input type="text" id="namaKantor" name="namaKantor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Nama Kantor" required>
												</div>
										</div>
										<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
												<button type="button"
														class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
														data-hs-overlay="#hs-add-modal">
														Tutup
												</button>
												<button type="submit"
														class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
														Tambah
												</button>
										</div>
								</div>
						</form>
				</div>
		</div>
		{{-- Modal Add end --}}
		{{-- Modal Edit Start --}}
		<div id="hs-edit-modal"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<form action="{{ route('data-master.kantor') }}" method="POST">
								@csrf
								@method('PUT')
								<div
										class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
										<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
												<h3 class="font-bold text-gray-800 dark:text-white">
														Edit Data Kantor
												</h3>
												<button type="button"
														class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
														data-hs-overlay="#hs-edit-modal">
														<span class="sr-only">Tutup</span>
														<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																stroke-linejoin="round">
																<path d="M18 6 6 18"></path>
																<path d="m6 6 12 12"></path>
														</svg>
												</button>
										</div>
										<div class="custom-scrollbar overflow-y-auto p-4">
												<div class="grid grid-cols-4 items-center gap-y-3">
														<label for="kodeKantor" class="text-sm dark:text-gray-50">Kode Kantor</label>
														<input type="number" id="kodeKantor" name="kodeKantor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="000" required>
														<label for="namaKantor" class="text-sm dark:text-gray-50">Nama Kantor</label>
														<input type="text" id="namaKantor" name="namaKantor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Nama Kantor" required>
												</div>
										</div>
										<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
												<button type="button"
														class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
														data-hs-overlay="#hs-edit-modal">
														Batal
												</button>
												<button type="submit"
														class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
														Simpan
												</button>
										</div>
								</div>
						</form>
				</div>
		</div>
		{{-- Modal Edit end --}}
		{{-- Modal End --}}
		{{-- Sort Form --}}
		<form id="sort-form" action="{{ route('data-master.kantor') }}" class="hidden">
				<input type="hidden" name="sortOption">
		</form>
		{{-- Sort Form --}}
@endsection

@push('script-bawah')
		<script>
				function checkAll(e) {
						document.getElementsByName("kodeKantor[]").forEach((x) => (x.checked = e.checked));
				}

				function submitDeleteForm() {
						document.getElementById('delete-form').submit();
				}

				function submitSortForm(event) {
						const sortForm = document.getElementById('sort-form');
						// fill the sortOption input with current value from dropdown filter
						sortForm.querySelector('input[name="sortOption"]').value = event.currentTarget.value;
						// then submit the form awokawokawok
						sortForm.submit();
				}

				function showEditModal(event) {
						// Ambil data json
						const data = JSON.parse(event.currentTarget.getAttribute('data-json'));

						// tangkap modal nya (karena form nya dalam modal)
						const modal = document.querySelector('#hs-edit-modal');

						// Mengisi semua input dalam modal berdasarkan nama atribut dari data-json
						Object.keys(data).forEach(key => {
								const inputs = modal.querySelectorAll(`[name="${key}"]`);
								inputs.forEach(input => {
										if (input.type === 'radio' || input.type === 'checkbox') {
												input.checked = input.value == data[key];
										} else {
												input.value = data[key];
										}
								});
						});

						// Buka Modal nya
						HSOverlay.open('#hs-edit-modal');
				}
		</script>
@endpush
