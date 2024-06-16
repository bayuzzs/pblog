@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="flex justify-between">
						<p class="font-semibold dark:text-gray-200 md:text-lg">Data Barang</p>
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.barang.add', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="mb-5 inline-flex items-center gap-x-2 rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
								Tambah
						</button>
				</div>
				@if ($errors->any())
						<x-alert.alert-error class="mb-3">{{ $errors->first() }}</x-alert.alert-error>
				@endif

				@session('error')
						<x-alert.alert-error class="mb-3">{{ $value }}</x-alert.alert-error>
				@endsession

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession
				{{-- Table start --}}
				<div class="flex flex-col">
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
																				HS
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Uraian
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Harga
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Satuan
																		</th>
																		<th scope="col"
																				class="px-3 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		</th>
																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																@forelse ($barangs as $barang)
																		<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																				<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																						{{ $loop->iteration }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $barang->kodeHS }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $barang->uraian }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $barang->hargaSatuan }}
																				</td>
																				<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $barang->nilaiSatuan }}
																				</td>
																				<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																						<div class="flex items-center justify-center gap-5">
																								<div class="hs-tooltip [--placement:top]">
																										<button type="button" class="hs-tooltip-toggle"
																												onclick="editBarang('{{ route('dokumen-impor.barang.edit', ['nomorAju' => $dokumenImpor->nomorAju, 'barangId' => $barang->barangId]) }}')">
																												<iconify-icon icon="iconamoon:edit-light" class="text-xl"></iconify-icon>
																												<span
																														class="hs-tooltip-content invisible absolute z-10 inline-block rounded-full bg-blue-600 px-4 py-1.5 text-white opacity-0 transition-opacity duration-200 hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
																														role="tooltip">
																														Edit
																												</span>
																										</button>
																								</div>
																								<div class="hs-tooltip [--placement:top]">
																										<button type="button" class="hs-tooltip-toggle"
																												onclick="deleteBarang('{{ $barang->barangId }}')">
																												<iconify-icon icon="mdi:trash-outline" class="text-xl"></iconify-icon>
																												<span
																														class="hs-tooltip-content invisible absolute z-10 inline-block rounded-full bg-blue-600 px-4 py-1.5 text-white opacity-0 transition-opacity duration-200 hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
																														role="tooltip">
																														Hapus
																												</span>
																										</button>
																								</div>
																						</div>
																				</td>
																		</tr>
																@empty
																		<tr>
																				<td colspan="5">
																						<div
																								class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																								<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																								Tidak ada Data Barang
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
				<div class="mt-10 flex justify-between">
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.transaksi', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
								sebelumnya
						</button>
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.pungutan', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
								Berikutnya
						</button>
				</div>
		</div>

		{{-- Modal Confim Delete Start --}}
		<form id="hs-confirm-delete-modal"
				action="{{ route('dokumen-impor.barang', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden">
				@csrf
				@method('DELETE')
				<input type="hidden" name="barangId" id="barangIdDelete">
				<div
						class="m-3 mt-0 flex min-h-[calc(100%-3.5rem)] items-center opacity-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:mx-auto sm:w-full sm:max-w-lg">
						<div
								class="pointer-events-auto flex w-full flex-col rounded-xl border bg-white shadow-sm dark:border-neutral-700 dark:bg-neutral-800 dark:shadow-neutral-700/70">
								<div class="flex items-center justify-between border-b px-4 py-3 dark:border-neutral-700">
										<h3 class="font-bold text-gray-800 dark:text-white">
												Konfirmasi Hapus
										</h3>
										<button type="button"
												class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-neutral-700"
												data-hs-overlay="#hs-confirm-delete-modal">
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
										<p class="text-gray-800 dark:text-neutral-400">
												Konfirmasi Hapus Data Barang
										</p>
								</div>
								<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
										<button type="button"
												class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800"
												data-hs-overlay="#hs-confirm-delete-modal">
												Batal
										</button>
										<button type="submit"
												class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
												Hapus
										</button>
								</div>
						</div>
				</div>
				</fo>
				{{-- Modal Confim Delete End --}}
		@endsection

		@push('script-bawah')
				<script>
						function editBarang(url) {
								window.location.href = url
						}

						function deleteBarang(barangId) {
								document.getElementById('barangIdDelete').value = barangId
								HSOverlay.open('#hs-confirm-delete-modal')
						}
				</script>
		@endpush
