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
				<form action="{{ route('dokumen-impor.entitas', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST">
						@csrf
						<div class="grid grid-cols-1 gap-y-14 md:grid-cols-2 md:gap-x-5 lg:gap-x-10">
								{{-- Importir --}}
								<div class="space-y-2 lg:space-y-8">
										<div class="mb-5 grid grid-cols-2">
												<p class="col-span-2 text-lg font-medium dark:text-gray-200">Importir</p>
										</div>
										<div class="grid grid-cols-3 items-center gap-2">
												<x-select name="importirJenisIdentitas" placeholder="Jenis Identitias">
														@if ($importir)
																{!! generateJenisIdentitasOptions($importir->jenisIdentitas) !!}
														@else
																{!! generateJenisIdentitasOptions() !!}
														@endif
												</x-select>
												<input type="text" name="importirNoIdentitas" value="{{ $importir ? $importir->noIdentitas : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Masukkan No Identitas" required>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
												<input type="text" name="importirNama" value="{{ $importir ? $importir->nama : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nama" required>
										</div>

										<div class="grid grid-cols-3">
												<p class="text-sm dark:text-gray-200 md:text-base">Alamat</p>
												<textarea name="importirAlamat"
												  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												  rows="3" placeholder="Alamat" required>{{ $importir ? $importir->alamat : '' }}</textarea>
										</div>
										<div class="grid grid-cols-3 items-center gap-2">
												<x-select name="importirJenisApi" placeholder="Pilih Jenis API">
														<option value="01"
																{{ $importir ? (!$importir->jenisApi || $importir->jenisApi == '01' ? 'selected' : '') : '' }}>
																API U
														</option>
														<option value="02" {{ $importir ? ($importir->jenisApi == '02' ? 'selected' : '') : '' }}>API P
														</option>
												</x-select>
												<input type="text" name="importirNoApi" value="{{ $importir ? $importir->noApi : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nomor API" required>
										</div>
								</div>
								{{-- NPWP Pemusatan --}}
								<div class="space-y-2 lg:space-y-8">
										<div class="mb-5 grid grid-cols-2">
												<p class="col-span-2 text-lg font-medium dark:text-gray-200">NPWP Pemusatan</p>
										</div>
										<div class="grid grid-cols-3 items-center gap-2">
												<x-select name="npwpPemusatanJenisIdentitas" placeholder="Jenis Identitias">
														@if ($npwpPemusatan)
																{!! generateJenisIdentitasOptions($npwpPemusatan->jenisIdentitas) !!}
														@else
																{!! generateJenisIdentitasOptions() !!}
														@endif
												</x-select>
												<input type="text" name="npwpPemusatanNoIdentitas"
														value="{{ $npwpPemusatan ? $npwpPemusatan->noIdentitas : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Masukkan No Identitas" required>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
												<input type="text" name="npwpPemusatanNama" value="{{ $npwpPemusatan ? $npwpPemusatan->nama : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nama" required>
										</div>

										<div class="grid grid-cols-3">
												<p class="text-sm dark:text-gray-200 md:text-base">Alamat</p>
												<textarea name="npwpPemusatanAlamat"
												  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												  rows="3" placeholder="Alamat" required>{{ $npwpPemusatan ? $npwpPemusatan->alamat : '' }}</textarea>
										</div>
								</div>
								{{-- Pemilik Barang --}}
								<div class="space-y-2 lg:space-y-8">
										<div class="mb-5 grid grid-cols-2">
												<p class="col-span-2 text-lg font-medium dark:text-gray-200">Pemilik Barang</p>
										</div>
										<div class="grid grid-cols-3 items-center gap-2">
												<x-select name="pemilikBarangJenisIdentitas" placeholder="Jenis Identitias">
														@if ($pemilikBarang)
																{!! generateJenisIdentitasOptions($pemilikBarang->jenisIdentitas) !!}
														@else
																{!! generateJenisIdentitasOptions() !!}
														@endif
												</x-select>
												<input type="text" name="pemilikBarangNoIdentitas"
														value="{{ $pemilikBarang ? $pemilikBarang->noIdentitas : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Masukkan No Identitas" required>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
												<input type="text" name="pemilikBarangNama" value="{{ $pemilikBarang ? $pemilikBarang->nama : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nama" required>
										</div>

										<div class="grid grid-cols-3">
												<p class="text-sm dark:text-gray-200 md:text-base">Alamat</p>
												<textarea name="pemilikBarangAlamat"
												  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												  rows="3" placeholder="Alamat" required>{{ $pemilikBarang ? $pemilikBarang->alamat : '' }}</textarea>
										</div>
								</div>
								{{-- Pengirim --}}
								<div class="space-y-2 lg:space-y-8">
										<div class="mb-5 grid grid-cols-2">
												<p class="col-span-2 text-lg font-medium dark:text-gray-200">Pengirim</p>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
												<input type="text" name="pengirimNama" value="{{ $pengirim ? $pengirim->nama : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nama" required>
										</div>
										<div class="grid grid-cols-3">
												<p class="text-sm dark:text-gray-200 md:text-base">Alamat</p>
												<textarea name="pengirimAlamat"
												  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												  rows="3" placeholder="Alamat" required>{{ $pengirim ? $pengirim->alamat : '' }}</textarea>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Negara</p>
												<div class="col-span-2">
														@if ($pengirim)
																@if ($pengirim->kodeNegara)
																		<x-combobox apiUrl="{{ route('api.negara') }}" value="{{ $pengirim->kodeNegara }}"
																				name="pengirimKodeNegara" fieldName="kodeNegara" searchName="namaNegara"
																				placeholder="Cari Negara">
																		</x-combobox>
																@else
																		<x-combobox apiUrl="{{ route('api.negara') }}" name="pengirimKodeNegara" fieldName="kodeNegara"
																				searchName="namaNegara" placeholder="Cari Negara">
																		</x-combobox>
																@endif
														@else
																<x-combobox apiUrl="{{ route('api.negara') }}" name="pengirimKodeNegara" fieldName="kodeNegara"
																		searchName="namaNegara" placeholder="Cari Negara">
																</x-combobox>
														@endif
												</div>
										</div>
								</div>
								{{-- Penjual --}}
								<div class="space-y-2 lg:space-y-8">
										<div class="mb-5 grid grid-cols-2">
												<p class="col-span-2 text-lg font-medium dark:text-gray-200">Penjual</p>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
												<input type="text" name="penjualNama" value="{{ $penjual ? $penjual->nama : '' }}"
														class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														placeholder="Nama" required>
										</div>

										<div class="grid grid-cols-3">
												<p class="text-sm dark:text-gray-200 md:text-base">Alamat</p>
												<textarea name="penjualAlamat"
												  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												  rows="3" placeholder="Alamat" required>{{ $penjual ? $penjual->alamat : '' }}</textarea>
										</div>
										<div class="grid grid-cols-3 items-center">
												<p class="text-sm dark:text-gray-200 md:text-base">Negara</p>
												<div class="col-span-2">
														@if ($penjual)
																@if ($penjual->kodeNegara)
																		<x-combobox apiUrl="{{ route('api.negara') }}" value="{{ $penjual->kodeNegara }}"
																				name="penjualKodeNegara" fieldName="kodeNegara" searchName="namaNegara" placeholder="Cari Negara">
																		</x-combobox>
																@else
																		<x-combobox apiUrl="{{ route('api.negara') }}" name="penjualKodeNegara" fieldName="kodeNegara"
																				searchName="namaNegara" placeholder="Cari Negara">
																		</x-combobox>
																@endif
														@else
																<x-combobox apiUrl="{{ route('api.negara') }}" name="penjualKodeNegara" fieldName="kodeNegara"
																		searchName="namaNegara" placeholder="Cari Negara">
																</x-combobox>
														@endif
												</div>
										</div>
								</div>
						</div>
						<div class="mt-10 flex justify-between">
								<button type="button"
										onclick="window.location.href='{{ route('dokumen-impor.header', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
										sebelumnya
								</button>
								<button type="submit"
										class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
										Selanjutnya
								</button>
						</div>
				</form>
		</div>
@endsection
