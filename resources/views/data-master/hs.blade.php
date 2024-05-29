@extends('layout.dashboard')

@section('main-content')
		<div class="custom-scrollbar h-[75vh] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<div class="flex justify-between">
						<p class="mb-1 font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-200 md:text-3xl">
								Daftar Data HS
						</p>
						<button type="button"
								class="inline-flex items-center gap-x-2 rounded-full border border-transparent bg-blue-600 px-2 py-0.5 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50"
								data-hs-overlay="#hs-add-modal">
								<iconify-icon icon="ic:baseline-plus" class="text-2xl">
						</button>

						<div id="hs-add-modal"
								class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
								<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">\
										<form action="">
												<div
														class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-800 dark:shadow-neutral-700/70">
														<div class="flex items-center justify-between border-b px-4 py-3 dark:border-neutral-700">
																<h3 class="font-bold text-gray-800 dark:text-white">
																		Tambah HS
																</h3>
																<button type="button"
																		class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-neutral-700"
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
														<div class="overflow-y-auto p-4">
																<div class="grid grid-cols-4 items-center gap-y-3">
																		<label for="kodeHSInput" class="text-sm">Kode HS</label>
																		<input type="text"
																				class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
																				placeholder="This is placeholder">
																		<label for="kodeHSInput" class="text-sm">Uraian Barang</label>
																		<input type="text"
																				class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
																				placeholder="This is placeholder">
																		<label for="kodeHSInput" class="text-sm">Uraian Barang (English)</label>
																		<input type="text"
																				class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
																				placeholder="This is placeholder">
																</div>
														</div>
														<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
																<button type="button"
																		class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800"
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
				</div>
				{{-- Search bar start --}}
				<form action="{{ route('data-master.hs') }}" method="GET"
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
										placeholder="Cari kode HS" value="{{ request('search') }}">
						</div>
						<button type="submit"
								class="rounded-lg bg-blue-700 px-10 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cari</button>
				</form>
				{{-- Search bar end --}}

				@error('kodeHS')
						<x-alert.alert-error class="mb-3">{{ $message }}</x-alert.alert-error>
				@enderror

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession

				{{-- Table start --}}
				<form action="{{ route('data-master.hs.delete') }}" method="POST" class="flex flex-col">
						@csrf
						@method('delete')
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
																				Kode HS
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Uraian
																				Barang
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Uraian
																				Barang (English)
																		</th>
																		<th scope="col"
																				class="flex px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Terkena Lartas
																				<div class="{{ !$HSs->items() ? 'hidden' : '' }} hs-dropdown relative inline-flex">
																						<button id="hs-dropdown-delete" type="button"
																								class="hs-dropdown-toggle inline-flex items-center rounded-full px-1 py-1 text-gray-800 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800">
																								<iconify-icon icon="charm:menu-kebab" class="text-base"></iconify-icon>
																						</button>
																						<div
																								class="hs-dropdown-menu duration min-w-28 mt-2 hidden rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full hs-dropdown-open:opacity-100 dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
																								aria-labelledby="hs-dropdown-delete">
																								<button type="submit"
																										class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-red-500 hover:text-white focus:bg-gray-100 focus:outline-none dark:text-neutral-400 dark:focus:bg-neutral-700">
																										Hapus Item
																								</button>
																						</div>
																				</div>
																		</th>
																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																@forelse ($HSs as $hs)
																		<tr class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
																				<td class="py-3 ps-4">
																						<div class="flex h-5 items-center">
																								<input id="hs-table-checkbox-1" type="checkbox" name="kodeHS[]" value="{{ $hs->kodeHS }}"
																										class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																						</div>
																				</td>
																				<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																						{{ $hs->kodeHS }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $hs->uraianBarangBahasa }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $hs->uraianBarangEnglish }}
																				</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $hs->isLartas ? 'True' : 'False' }}
																				</td>
																		</tr>
																@empty
																		<tr>
																				<td colspan="5">
																						<div
																								class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-200">
																								<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																								Tidak ada data HS
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
				@if ($HSs->hasPages())
						<div class="mt-5 flex items-center justify-between px-3">
								<p class="text-sm dark:text-gray-400">
										Data <span class="font-semibold">{{ $HSs->firstItem() }}</span> ke
										<span class="font-semibold">{{ $HSs->lastItem() }}</span>
										dari
										<span class="font-semibold">{{ $HSs->total() }}</span> Data HS
								</p>
								<x-pagination :data="$HSs" />
						</div>
				@endif
				<!-- End Pagination -->
		</div>
@endsection

@push('script-bawah')
		<script>
				function checkAll(e) {
						// console.log(e.checked);
						// document.getElementsByName("kodeHS[]").forEach((x) => (x.checked = e.target.checked));
						document.getElementsByName("kodeHS[]").forEach((x) => (x.checked = e.checked));
				}
		</script>
@endpush
