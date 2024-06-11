@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<form action="{{ route('dokumen-impor.transaksi', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
				class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				@csrf
				@if ($errors->any())
						<x-alert.alert-error class="mb-3">{{ $errors->first() }}</x-alert.alert-error>
				@endif

				@session('error')
						<x-alert.alert-error class="mb-3">{{ $value }}</x-alert.alert-error>
				@endsession

				@session('success')
						<x-alert.alert-success class="mb-3">{{ $value }}</x-alert.alert-success>
				@endsession
				<div class="grid gap-y-10 lg:grid-cols-2 xl:gap-x-20 2xl:gap-x-64">
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Valuta</label>
										<div class="col-span-2">
												@if ($transaksi)
														@if ($transaksi->kodeValuta)
																<x-combobox apiUrl="{{ route('api.valuta') }}" value="{{ $transaksi->kodeValuta }}" name="kodeValuta"
																		fieldName="kodeValuta" searchName="namaValuta" placeholder="Cari Valuta">
																</x-combobox>
														@else
																<x-combobox apiUrl="{{ route('api.valuta') }}" name="kodeValuta" fieldName="kodeValuta"
																		searchName="namaValuta" placeholder="Cari Valuta">
																</x-combobox>
														@endif
												@else
														<x-combobox apiUrl="{{ route('api.valuta') }}" name="kodeValuta" fieldName="kodeValuta"
																searchName="namaValuta" placeholder="Cari Valuta">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">NDPBM</label>
										<div class="col-span-2">
												<input type="number" name="ndpbm" step="0.0001" placeholder="Masukkan Nilai NDPBM"
														value="{{ $transaksi ? $transaksi->ndpbm : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="nomorPosBc">Jenis Transaksi</label>
										<div class="col-span-2">
												<x-select name="kodeJenisTransaksi">
														@if ($transaksi)
																{!! generateJenisTransaksiOptions($transaksi->kodeJenisTransaksi) !!}
														@else
																{!! generateJenisTransaksiOptions() !!}
														@endif
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="kodeIncoterm">
												@if ($transaksi)
														{!! generateJenisIncotermOptions($transaksi->kodeIncoterm) !!}
												@else
														{!! generateJenisIncotermOptions() !!}
												@endif
										</x-select>
										<input type="number" name="nilaiIncoterm" id="nilaiIncoterm" 00"
												value="{{ $transaksi ? $transaksi->nilaiIncoterm : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="biayaTambahan">Biaya Tambahan</label>
										<input type="number" name="biayaTambahan" id="biayaTambahan" step="0.01"
												value="{{ $transaksi ? $transaksi->biayaTambahan : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="diskon">Diskon</label>
										<input type="number" name="diskon" id="diskon" step="0.01"
												value="{{ $transaksi ? $transaksi->diskon : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="diskon">Freight</label>
										<input type="number" name="freight" step="0.0001" value="{{ $transaksi ? $transaksi->freight : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<div class="flex items-center gap-2">
												<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalTiba">Asuransi</label>
												<x-select name="kodeAsuransi">
														<option value="DN"
																{{ $transaksi ? ($transaksi->kodeAsuransi == 'DN' ? 'selected' : '') : 'selected' }}>
																DN</option>
														<option value="LN" {{ $transaksi ? ($transaksi->kodeAsuransi == 'LN' ? 'selected' : '') : '' }}>LN
														</option>
												</x-select>
										</div>
										<input type="number" name="nilaiAsuransi" step="0.01"
												value="{{ $transaksi ? $transaksi->nilaiAsuransi : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Voluntary Declaration</label>
										<input type="number" name="nilaiVD" id="nilaiVD" step="0.0001"
												value="{{ $transaksi ? $transaksi->nilaiVD : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Rupiah</label>
										<input type="number" name="cif" id="cif" step="0.01"
												value="{{ $transaksi ? $transaksi->cif : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Berat Kotor (KG)</label>
										<input type="number" name="bruto" id="bruto" step="0.0001"
												value="{{ $transaksi ? $transaksi->bruto : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Berat Bersih (KG)</label>
										<input type="number" name="netto" id="netto	" step="0.0001"
												value="{{ $transaksi ? $transaksi->netto : '' }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
				</div>
				@if ($dokumenImpor->isBerwujud)
						<div class="mt-10 flex justify-between">
								<button type="button"
										onclick="window.location.href='{{ route('dokumen-impor.kemasan-kontainer', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
										sebelumnya
								</button>
								<button type="submit"
										class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
										Berikutnya
								</button>
						</div>
				@else
						<div class="mt-10 flex justify-between">
								<button type="button"
										onclick="window.location.href='{{ route('dokumen-impor.dokumen-pendukung', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
										sebelumnya
								</button>
								<button type="submit"
										class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
										Berikutnya
								</button>
						</div>
				@endif
		</form>
@endsection
