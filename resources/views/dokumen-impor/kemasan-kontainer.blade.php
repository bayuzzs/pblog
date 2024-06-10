@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				@if ($errors->any())
						<x-alert.alert-error class="mb-3">{{ $errors->first() }}</x-alert.alert-error>
				@endif

				@session('error')
						<x-alert.alert-error class="mb-3">{{ $value }}</x-alert.alert-error>
				@endsession

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession
				<div
						class="custom-scrollbar grid gap-y-5 overflow-x-auto md:overflow-x-visible xl:grid-cols-2 xl:gap-x-10 2xl:gap-x-48">
						<form action="{{ route('dokumen-impor.kemasan.destroy', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
								id="kemasan-delete-form">
								@csrf
								@method('DELETE')
								<div class="mb-5 flex justify-between">
										<p class="font-semibold dark:text-white md:text-lg">Kemasan</p>
										<div class="hs-dropdown relative inline-flex">
												<button id="hs-dropdown-kemasan-delete" type="button"
														class="hs-dropdown-toggle inline-flex items-center rounded-full px-1 py-1 text-gray-800 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">
														<iconify-icon icon="charm:menu-kebab" class="text-xl"></iconify-icon>
												</button>
												<div
														class="hs-dropdown-menu duration min-w-48 z-20 mt-2 hidden rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full hs-dropdown-open:opacity-100 dark:divide-gray-700 dark:border dark:border-gray-700 dark:bg-gray-800"
														aria-labelledby="hs-dropdown-kemasan-delete">
														<button type="button" data-hs-overlay="#hs-add-kemasan-modal"
																class="flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
																Tambah Data
														</button>
														<button type="button" onclick="submitDeleteForm('kemasan-delete-form')"
																class="{{ !$kemasans ? 'hidden' : '' }} flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
																Hapus Data
														</button>
												</div>
										</div>
								</div>
								{{-- Table Kemasan start --}}
								<div class="flex h-full flex-col">
										<div class="custom-scrollbar -m-1.5 overflow-x-auto">
												<div class="inline-block min-w-full p-1.5 align-middle">
														<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
																<table class="h-full min-w-full divide-y divide-gray-200 dark:divide-gray-700">
																		<thead class="bg-gray-50 dark:bg-gray-700">
																				<tr>
																						<th scope="col" class="py-3 ps-4">
																								<div class="flex h-5 items-center">
																										<input id="hs-table-checkbox-all" type="checkbox" onclick="checkAllKemasan(this)"
																												class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																								</div>
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Seri
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Jumlah
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Jenis
																						</th>
																						<th scope="col"
																								class="flex px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Merek
																						</th>
																				</tr>
																		</thead>
																		<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																				@forelse ($kemasans as $kemasan)
																						<tr data-json="{{ json_encode($kemasan) }}" onclick="showEditKemasanModal(event)"
																								class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
																								<td class="py-3 ps-4">
																										<div class="flex h-5 items-center">
																												<input type="checkbox" name="kemasanId[]" value="{{ $kemasan->kemasanId }}"
																														onclick="event.stopPropagation();"
																														class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																										</div>
																								</td>
																								<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																										{{ $kemasan->seri }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kemasan->jumlah }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kemasan->jenisKemasan ? $kemasan->kodeJenisKemasan . ' - ' . $kemasan->jenisKemasan->namaKemasan : '' }}
																								</td>
																								<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kemasan->merek }}
																								</td>
																						</tr>
																				@empty
																						<tr>
																								<td colspan="5">
																										<div
																												class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																												<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																												Tidak ada data kemasan
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
								{{-- Table Kemasan end --}}
						</form>
						<form action="{{ route('dokumen-impor.kontainer.destroy', ['nomorAju' => $dokumenImpor->nomorAju]) }}"
								method="POST" id="kontainer-delete-form">
								@csrf
								@method('DELETE')
								<div class="mb-5 flex justify-between">
										<p class="font-semibold dark:text-white md:text-lg">Kontainer</p>
										<div class="hs-dropdown relative inline-flex">
												<button id="hs-dropdown-kontainer-delete" type="button"
														class="hs-dropdown-toggle inline-flex items-center rounded-full px-1 py-1 text-gray-800 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700">
														<iconify-icon icon="charm:menu-kebab" class="text-xl"></iconify-icon>
												</button>
												<div
														class="hs-dropdown-menu duration min-w-48 z-20 mt-2 hidden rounded-lg bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full hs-dropdown-open:opacity-100 dark:divide-gray-700 dark:border dark:border-gray-700 dark:bg-gray-800"
														aria-labelledby="hs-dropdown-kontainer-delete">
														<button type="button" data-hs-overlay="#hs-add-kontainer-modal"
																class="flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
																Tambah Data
														</button>
														<button type="button" onclick="submitDeleteForm('kontainer-delete-form')"
																class="{{ !$kontainers ? 'hidden' : '' }} flex w-full items-center gap-x-3.5 rounded-lg px-3 py-3 text-sm text-gray-800 hover:bg-gray-200 focus:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
																Hapus Data
														</button>
												</div>
										</div>
								</div>
								{{-- Table Kontainer start --}}
								<div class="flex flex-col">
										<div class="custom-scrollbar -m-1.5 overflow-x-auto">
												<div class="inline-block min-w-full p-1.5 align-middle">
														<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
																<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
																		<thead class="bg-gray-50 dark:bg-gray-700">
																				<tr>
																						<th scope="col" class="py-3 ps-4">
																								<div class="flex h-5 items-center">
																										<input id="hs-table-checkbox-all" type="checkbox" onclick="checkAllKontainer(this)"
																												class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																								</div>
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Seri
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Nomor
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								ukuran
																						</th>
																						<th scope="col"
																								class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Jenis
																						</th>
																						<th scope="col"
																								class="flex px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																								Tipe
																						</th>
																				</tr>
																		</thead>
																		<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																				@forelse ($kontainers as $kontainer)
																						<tr data-json="{{ json_encode($kontainer) }}" onclick="showEditKontainerModal(event)"
																								class="cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
																								<td class="py-3 ps-4">
																										<div class="flex h-5 items-center">
																												<input type="checkbox" name="kontainerId[]" value="{{ $kontainer->kontainerId }}"
																														onclick="event.stopPropagation();"
																														class="rounded border-gray-200 text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:ring-offset-gray-800">
																										</div>
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kontainer->seri }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kontainer->nomor }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kontainer->printUkuran() }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kontainer->printJenis() }}
																								</td>
																								<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																										{{ $kontainer->printTipe() }}
																								</td>
																						</tr>
																				@empty
																						<tr>
																								<td colspan="6">
																										<div
																												class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																												<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																												Tidak ada data kontainer
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
								{{-- Table Kontainer end --}}
						</form>
				</div>
				<div class="mt-10 flex justify-between">
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.pengangkutan', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
								sebelumnya
						</button>
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.transaksi', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
								Berikutnya
						</button>
				</div>
		</div>

		{{-- Modal Add Kemasan Start --}}
		<form action="{{ route('dokumen-impor.kemasan.store', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				id="hs-add-kemasan-modal"
				class="hs-overlay custom-scrollbar size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				@csrf
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Tambah Data Kemasan
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
												data-hs-overlay="#hs-add-kemasan-modal">
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
														<input type="number" name="seri"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Seri Kemasan">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="jumlah" class="text-sm md:text-base">Jumlah</label>
														<input type="number" name="jumlah" id="jumlah"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan jumlah kemasan">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="jenis" class="text-sm md:text-base">Jenis</label>
														<div class="col-span-3">
																<x-combobox apiUrl="{{ route('api.jenis-kemasan') }}" name="kodeJenisKemasan"
																		fieldName="kodeJenisKemasan" searchName="namaKemasan" placeholder="Cari Jenis Kemasan">
																</x-combobox>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="merek" class="text-sm md:text-base">Merek</label>
														<input type="text" name="merek" id="merek"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Merek Kemasan">
												</div>
										</div>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
												data-hs-overlay="#hs-add-kemasan-modal">
												Batal
										</button>
										<button type="submit"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
												Tambah
										</button>
								</div>
						</div>
				</div>
		</form>
		{{-- Modal Add Kemasan End --}}
		{{-- Modal Edit Kemasan Start --}}
		<form action="{{ route('dokumen-impor.kemasan.update', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				id="hs-edit-kemasan-modal"
				class="hs-overlay custom-scrollbar size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				@csrf
				@method('PUT')
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Edit Data Kemasan
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
												data-hs-overlay="#hs-edit-kemasan-modal">
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
														<input type="number" name="seri"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Seri Kemasan">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="jumlah" class="text-sm md:text-base">Jumlah</label>
														<input type="number" name="jumlah" id="jumlah"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan jumlah kemasan">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="jenis" class="text-sm md:text-base">Jenis</label>
														<div class="col-span-3">
																<x-combobox apiUrl="{{ route('api.jenis-kemasan') }}" name="kodeJenisKemasan"
																		fieldName="kodeJenisKemasan" searchName="namaKemasan" placeholder="Cari Jenis Kemasan">
																</x-combobox>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="merek" class="text-sm md:text-base">Merek</label>
														<input type="text" name="merek" id="merek"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Merek Kemasan">
												</div>
										</div>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
												data-hs-overlay="#hs-edit-kemasan-modal">
												Batal
										</button>
										<button type="submit"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
												Simpan
										</button>
								</div>
						</div>
				</div>
		</form>
		{{-- Modal Edit Kemasan End --}}
		{{-- Modal Add Kontainer Start --}}
		<form action="{{ route('dokumen-impor.kontainer.store', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				id="hs-add-kontainer-modal"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				@csrf
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Tambah Data Kontainer
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
												data-hs-overlay="#hs-add-kontainer-modal">
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
														<input type="number" name="seri"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Seri">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="nomor" class="text-sm md:text-base">nomor</label>
														<input type="text" name="nomor" id="nomor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan nomor kontainer">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Ukuran</label>
														<div class="col-span-3">
																<x-select name="ukuran">
																		<option value="20" selected>20 Feet</option>
																		<option value="40">40 Feet</option>
																		<option value="45">45 Feet</option>
																		<option value="60">60 Feet</option>
																</x-select>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Jenis</label>
														<div class="col-span-3" name="jenis">
																<x-select name="jenis">
																		<option value="4" selected>4 - Empty</option>
																		<option value="7">7 - LCL</option>
																		<option value="8">8 - FCL</option>
																</x-select>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Tipe</label>
														<div class="col-span-3">
																<x-select name="tipe">
																		{!! generateTipeKontainerOptions() !!}
																</x-select>
														</div>
												</div>
										</div>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
												data-hs-overlay="#hs-add-kontainer-modal">
												Batal
										</button>
										<button type="submit"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
												Tambah
										</button>
								</div>
						</div>
				</div>
		</form>
		{{-- Modal Add Kontainer End --}}
		{{-- Modal Edit Kontainer Start --}}
		<form action="{{ route('dokumen-impor.kontainer.update', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				id="hs-edit-kontainer-modal"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
				@csrf
				@method('PUT')
				<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Edit Data Kontainer
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
												data-hs-overlay="#hs-edit-kontainer-modal">
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
														<input type="number" name="seri"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan Seri">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label for="nomor" class="text-sm md:text-base">nomor</label>
														<input type="text" name="nomor" id="nomor"
																class="col-span-3 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
																placeholder="Masukkan nomor kontainer">
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Ukuran</label>
														<div class="col-span-3">
																<x-select name="ukuran">
																		<option value="20" selected>20 Feet</option>
																		<option value="40">40 Feet</option>
																		<option value="45">45 Feet</option>
																		<option value="60">60 Feet</option>
																</x-select>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Jenis</label>
														<div class="col-span-3" name="jenis">
																<x-select name="jenis">
																		<option value="4" selected>4 - Empty</option>
																		<option value="7">7 - LCL</option>
																		<option value="8">8 - FCL</option>
																</x-select>
														</div>
												</div>
												<div class="grid grid-cols-4 items-center">
														<label class="text-sm md:text-base">Tipe</label>
														<div class="col-span-3">
																<x-select name="tipe">
																		{!! generateTipeKontainerOptions() !!}
																</x-select>
														</div>
												</div>
										</div>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
												data-hs-overlay="#hs-edit-kontainer-modal">
												Batal
										</button>
										<button type="submit"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
												Simpan
										</button>
								</div>
						</div>
				</div>
		</form>
		{{-- Modal Edit Kontainer End --}}
@endsection

@push('script-bawah')
		<script>
				function checkAllKemasan(e) {
						document.getElementsByName("kemasanId[]").forEach((x) => (x.checked = e.checked));
				}

				function checkAllKontainer(e) {
						document.getElementsByName("kontainerId[]").forEach((x) => (x.checked = e.checked));
				}

				function submitDeleteForm($form) {
						document.getElementById($form).submit();
				}

				function showEditKemasanModal(event) {
						// Ambil data json
						const data = JSON.parse(event.currentTarget.getAttribute('data-json'));
						// tangkap modal nya (karena form nya dalam modal)
						const modal = document.querySelector('#hs-edit-kemasan-modal');

						// Isi semua input dalam modal berdasarkan nama atribut dari data-json
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
						HSOverlay.open('#hs-edit-kemasan-modal');
				}

				function showEditKontainerModal(event) {
						// Ambil data json
						const data = JSON.parse(event.currentTarget.getAttribute('data-json'));
						// tangkap modal nya (karena form nya dalam modal)
						const modal = document.querySelector('#hs-edit-kontainer-modal');

						// Isi semua input dalam modal berdasarkan nama atribut dari data-json
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
						HSOverlay.open('#hs-edit-kontainer-modal');
				}
		</script>
@endpush
