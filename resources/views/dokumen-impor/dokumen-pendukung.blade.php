@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<button type="button" data-hs-overlay="#hs-add-modal"
				class="mb-5 inline-flex items-center gap-x-2 rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
				Tambah
		</button>
		<x-alert.alert-info class="mb-5">Wajib Melampirkan Dokumen Invoice dan Dokumen B/L atau AWB</x-alert.alert-info>
		{{-- Table start --}}
		<div class="flex flex-col" id="delete-form">
				<div class="custom-scrollbar -m-1.5 overflow-x-auto">
						<div class="inline-block min-w-full p-1.5 align-middle">
								<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
										<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
												<thead class="bg-gray-50 dark:bg-gray-700">
														<tr>
																<th scope="col"
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Seri
																</th>
																<th scope="col"
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Jenis
																</th>
																<th scope="col"
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Nomor
																</th>
																<th scope="col"
																		class="flex px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Tanggal
																</th>
														</tr>
												</thead>
												<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
														{{-- @forelse ($HSs as $hs)
																		<tr data-json="{{ json_encode($hs) }}" onclick="showEditModal(event)"
																				class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
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
																						{{ $hs->isLartas ? 'Ya' : 'Tidak' }}
																				</td>
																		</tr>
																@empty --}}
														<tr>
																<td colspan="5">
																		<div
																				class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																				<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																				Tidak ada Dokumen Pendukung
																		</div>
																</td>
														</tr>
														{{-- @endforelse --}}
												</tbody>
										</table>
								</div>
						</div>
				</div>
		</div>
		{{-- Table end --}}

		{{-- Modal Add Start --}}
		<div id="hs-add-modal"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Dokumen Pendukung
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
												data-hs-overlay="#hs-add-modal">
												<span class="sr-only">Close</span>
												<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round">
														<path d="M18 6 6 18"></path>
														<path d="m6 6 12 12"></path>
												</svg>
										</button>
								</div>
								<div class="overflow-y-auto p-4">
										<div class="space-y-2 lg:space-y-8">
												<div class="grid grid-cols-4 items-center gap-2">
														<label for="seri">Seri</label>
														<p class="col-span-3">1</p>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="jenis" class="text-sm md:text-base">Jenis</label>
														<div class="col-span-3">
																<x-combobox></x-combobox>
														</div>
												</div>

												<div class="grid grid-cols-4 items-center">
														<label for="nomor" class="text-sm md:text-base">Nomor</label>
														<input type="text" name="nomor" id="nomor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan nomor Dokumen">
												</div>
												<div class="grid grid-cols-4 items-center gap-2">
														<label for="tanggal" class="text-sm md:text-base">Tanggal</label>
														<input type="date" name="tanggal" id="tanggal"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
												</div>
										</div>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
												data-hs-overlay="#hs-add-modal">
												Batal
										</button>
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
												Tambah
										</button>
								</div>
						</div>
				</div>
		</div>
		{{-- Modal Add End --}}
@endsection
