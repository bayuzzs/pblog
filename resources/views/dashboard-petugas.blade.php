@extends('layout.dashboard')

@section('main-content')
		<div
				class="custom-scrollbar h-[calc(100vh-150px)] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<p class="mb-1 font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-200 md:text-3xl">
						Daftar Akun Pengimpor
				</p>

				<x-alert.alert-info><span class="font-semibold">Informasi!</span> Petugas bisa melihat daftar akun pengimpor
						disini.</x-alert.alert-info>
				{{-- Search bar start --}}
				<form action="{{ route('dashboard') }}" method="GET"
						class="sticky -top-5 z-10 mb-2 flex items-center justify-between gap-3 space-y-4 bg-white py-2 dark:bg-gray-800 md:space-y-0">
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
										class="block w-full rounded-lg border border-gray-300 bg-transparent p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-700"
										placeholder="Cari akun pengimpor" value="{{ request('search') }}">
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
										<x-filter-option valueInput="nama_asc" requestParam="sortOption">Pengimpor ↑</x-filter-option>
										<x-filter-option valueInput="nama_desc" requestParam="sortOption">Pengimpor ↓</x-filter-option>
										<x-filter-option valueInput="npwp_asc" requestParam="sortOption">Nomor NPWP ↑</x-filter-option>
										<x-filter-option valueInput="npwp_desc" requestParam="sortOption">Nomor NPWP ↓
										</x-filter-option>
										<x-filter-option valueInput="namaPerusahaan_asc" requestParam="sortOption">Perusahaan ↑</x-filter-option>
										<x-filter-option valueInput="namaPerusahaan_desc" requestParam="sortOption">Perusahaan ↓</x-filter-option>
								</select>
								<!-- End Select -->
								<button type="submit"
										class="rounded-lg bg-blue-700 px-7 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cari</button>
						</div>
				</form>
				{{-- Search bar end --}}

				{{-- Table start --}}
				<div class="flex flex-col">
						<div class="-m-1.5 overflow-x-auto">
								<div class="inline-block min-w-full p-1.5 align-middle">
										<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
												<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
														<thead class="bg-gray-50 dark:bg-gray-700">
																<tr>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Informasi
																				Akun
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">NPWP
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Nama
																				Perusahaan
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">No.
																				Telepon
																		</th>
																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																@forelse ($pengimpors as $pengimpor)
																		<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																				<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																						@if ($pengimpor->urlProfile == null)
																								<span
																										class="size-[38px] flex items-center justify-center rounded-full bg-gray-200 text-sm ring-2 ring-white dark:bg-gray-700 dark:ring-gray-800">
																										{{ getInitials($pengimpor->nama) }}
																								</span>
																						@else
																								<img class="h-10 w-10 rounded-full object-cover"
																										src="/storage/avatars/{{ $pengimpor->urlProfile }}" alt="{{ $pengimpor->nama }}">
																						@endif
																						<div class="ps-3">
																								<div class="text-base font-semibold">{{ $pengimpor->nama }}</div>
																								<div class="text-sm text-gray-500">{{ $pengimpor->email }}</div>
																						</div>
																				</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->npwp }}</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->namaPerusahaan }}</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->telepon }}</td>
																		</tr>
																@empty
																		<tr>
																				<td colspan="4">
																						<div
																								class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																								<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																								Tidak ada akun pengimpor
																						</div>
																				</td>
																		</tr>
																@endforelse
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>
				{{-- Table end --}}
				<form id="sort-form" action="{{ route('dashboard') }}" class="hidden">
						<input type="hidden" name="sortOption">
				</form>
				@push('script-bawah')
						<script>
								function submitSortForm(event) {
										const sortForm = document.getElementById('sort-form');
										// fill the sortOption input with current value from dropdown filter
										sortForm.querySelector('input[name="sortOption"]').value = event.currentTarget.value;
										// then submit the form awokawokawok
										sortForm.submit();
								}
						</script>
				@endpush
				<!-- Pagination -->
				@if ($pengimpors->hasPages())
						<div class="mt-5 flex items-center justify-between px-3">
								<p class="text-sm dark:text-gray-400">
										Daftar <span class="font-semibold">{{ $pengimpors->firstItem() }}</span> ke
										<span class="font-semibold">{{ $pengimpors->lastItem() }}</span>
										dari
										<span class="font-semibold">{{ $pengimpors->total() }}</span> Pengimpor
								</p>
								<x-pagination :data="$pengimpors" />
						</div>
				@endif
				<!-- End Pagination -->
		</div>
@endsection
