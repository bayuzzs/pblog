@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="mb-5 flex justify-between">
						<p class="font-semibold dark:text-gray-200 md:text-lg">Total Pungutan</p>
				</div>

				<x-alert.alert-info class="mb-3">
						Pastikan data pungutan sudah sesuai!
				</x-alert.alert-info>

				@if ($errors->any())
						<x-alert.alert-error class="mb-3">{{ $errors->first() }}</x-alert.alert-error>
				@endif

				@session('error')
						<x-alert.alert-error class="mb-3">{{ $value }}</x-alert.alert-error>
				@endsession

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession

				<div class="flex flex-col">
						<div class="custom-scrollbar -m-1.5 overflow-x-auto">
								<div class="inline-block min-w-full p-1.5 align-middle">
										<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
												<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
														<thead class="bg-gray-50 dark:bg-gray-700">
																<tr>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Keterangan
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Dibayar (Rp.)
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Ditanggung Pemerintah (Rp.)
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Ditunda (Rp.)
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Tidak Dipungut (Rp.)
																		</th>
																		<th scope="col"
																				class="px-3 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Dibebaskan (Rp.)
																		</th>
																		<th scope="col"
																				class="px-3 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																				Telah Dilunasi (Rp.)
																		</th>
																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																{{-- BM Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				BM
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BM']->telahDilunasi }}
																		</td>
																</tr>
																{{-- BM End --}}
																{{-- BMT Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				BMT
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['BMT']->telahDilunasi }}
																		</td>
																</tr>
																{{-- BMT End --}}
																{{-- CUKAI Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				CUKAI
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['CUKAI']->telahDilunasi }}
																		</td>
																</tr>
																{{-- CUKAI End --}}
																{{-- CUKAI Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				PPH
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPH']->telahDilunasi }}
																		</td>
																</tr>
																{{-- PPH End --}}
																{{-- PPN Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				PPN
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['PPN']->telahDilunasi }}
																		</td>
																</tr>
																{{-- PPN End --}}
																{{-- TOTAL Start --}}
																<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																		<td class="px-6 py-4 text-sm font-semibold text-gray-800 dark:text-gray-200">
																				TOTAL
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->dibayar }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->ditanggungPemerintah }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->ditunda }}
																		</td>
																		<td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->tidakDipungut }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->dibebaskan }}
																		</td>
																		<td class="px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
																				{{ $barangPungutans['total']->telahDilunasi }}
																		</td>
																</tr>
																{{-- TOTAL End --}}
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>

				<div class="mt-10 flex justify-between">
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.barang', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
								sebelumnya
						</button>
						<button type="button"
								onclick="window.location.href='{{ route('dokumen-impor.pernyataan', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
								class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
								Berikutnya
						</button>
				</div>
		</div>
@endsection
