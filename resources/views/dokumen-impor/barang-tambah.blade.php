@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<form action="{{ route('dokumen-impor.barang', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
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
										<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalBc">HS</label>
										<div class="col-span-2">
												<x-combobox apiUrl="{{ route('api.hs') }}" name="kodeHS" fieldName="kodeHS" searchName="uraianBarangBahasa"
														placeholder="Cari HS">
												</x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalBc">Pernyataan Lartas</label>
										<div class="col-span-2">
												<x-select name="pernyataanLartas">
														<option value="1" selected>YA</option>
														<option value="0">TIDAK</option>
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Kode</label>
										<input type="text" name="kodeBarang" id="kodeBarang" placeholder="Kode Barang" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm dark:text-gray-200 md:text-base">Uraian</p>
										<textarea name="uraian" required
										  class="col-span-2 rounded-lg border-gray-200 px-2 py-2 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Uraian Barang"></textarea>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Merk</label>
										<input type="text" name="merk" placeholder="Merk Barang" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Tipe</label>
										<input type="text" name="tipe" placeholder="Tipe Barang" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="ukuran">Ukuran</label>
										<input type="number" name="ukuran" id="ukuran" step="0.01" placeholder="Ukuran Barang" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Spesifikasi Lain</label>
										<input type="text" name="spesifikasiLain" id="spesifikasiLain" placeholder="Spesifikasi Lain Barang" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm">Kondisi Barang</label>
										<div class="col-span-2">
												<x-select name="kondisiBarang">
														{!! generateKondisiBarangOptions() !!}
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalBc">Negara Asal</label>
										<div class="col-span-2">
												<x-combobox name="kodeNegara" fieldName="kodeNegara" apiUrl="{{ route('api.negara') }}"
														searchName="namaNegara" placeholder="Cari Negara">
												</x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="beratBersih">Berat Bersih (Kg)</label>
										<input type="number" name="beratBersih" id="beratBersih" step="0.0001" placeholder="0.0000" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="diskon">Satuan</label>
										<div class="col-span-2 grid grid-cols-4 gap-2">
												<input type="number" name="nilaiSatuan" id="nilaiSatuan" placeholder="000"
														class="col-span-1 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
												<div class="col-span-3">
														<x-combobox name="kodeSatuanBarang" apiUrl="{{ route('api.satuan-barang') }}" fieldName="kodeSatuanBarang"
																searchName="namaSatuanBarang" placeholder="Cari Satuan Barang">
														</x-combobox>
												</div>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="diskon">Kemasan</label>
										<div class="col-span-2 grid grid-cols-4 gap-2">
												<input type="number" name="nilaiKemasan" id="nilaiKemasan" placeholder="000"
														class="col-span-1 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
												<div class="col-span-3">
														<x-combobox name="kodeJenisKemasan" apiUrl="{{ route('api.jenis-kemasan') }}"
																fieldName="kodeJenisKemasan" searchName="namaKemasan" placeholder="Cari Jenis Kemasan">
														</x-combobox>
												</div>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Amount DAT</label>
										<input type="number" name="amountDAT" id="amountDAT" step="0.01" placeholder="Masukan nilai DAT"
												required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<div class="flex items-center gap-2">
												<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalTiba">Jenis Nilai</label>
										</div>
										<div class="col-span-2">
												<x-select name="jenisNilai">
														{!! generateJenisNilaiOptions() !!}
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Jatuh Tempo</label>
										<input type="date" name="jatuhTempo" id="jatuhTempo" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Voluntary Declaration</label>
										<input type="number" name="voluntaryDeclaration" id="voluntaryDeclaration" step="0.01"
												placeholder="Masukkan nilai" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">(Biaya Tambahan - Diskon)</label>
										<input type="number" name="biayaTambahanDiskon" id="biayaTambahanDiskon" step="0.01" placeholder="0.00"
												required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">FOB</label>
										<input type="number" name="fob" id="fob" step="0.01" placeholder="0.00" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Harga Satuan</label>
										<input type="number" name="hargaSatuan" id="hargaSatuan" step="0.01" placeholder="0.00" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Freight</label>
										<input type="number" name="freight" id="freight" step="0.01" placeholder="0.00" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Asuransi</label>
										<input type="number" name="asuransi" id="asuransi" step="0.0001" placeholder="0.0000" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">CIF Rupiah</label>
										<input type="number" name="cif" id="cif" step="0.01" placeholder="0.00" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
				</div>
				<button type="button"
						class="mb-5 mt-5 inline-flex items-center gap-x-2 rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
						Pilih Dokumen Fasilitas
				</button>
				{{-- Table Start --}}
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
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Tanggal
																</th>
																<th scope="col"
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		Fasilitas
																</th>
																<th scope="col"
																		class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
																		File
																</th>
														</tr>
												</thead>
												<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
														<tr>
																<td colspan="8">
																		<div
																				class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-400">
																				<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																				Tidak ada Dokumen Pendukung
																		</div>
																</td>
														</tr>
												</tbody>
										</table>
								</div>
						</div>
				</div>
				{{-- Table End --}}
				<div class="mt-5">
						<p class="font-semibold dark:text-gray-200 md:text-lg">Pungutan Barang</p>
						{{-- BM Start --}}
						<div>
								<p class="my-5 font-semibold dark:text-gray-200 md:text-lg">BM</p>
								<div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:gap-10">
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibayar (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMDibayar" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditanggung Pemerintah (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMDitanggungPemerintah" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditunda (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMDitunda" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Tidak Dipungut (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTidakDipungut" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibebaskan (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMDibebaskan" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Telah Dilunasi (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTelahDilunasi" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- BM End --}}
						{{-- BMT Start --}}
						<div>
								<p class="my-5 font-semibold dark:text-gray-200 md:text-lg">BMT</p>
								<div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:gap-10">
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibayar (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTDibayar" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditanggung Pemerintah (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTDitanggungPemerintah" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditunda (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTDitunda" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Tidak Dipungut (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTTidakDipungut" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibebaskan (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTDibebaskan" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Telah Dilunasi (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="BMTTelahDilunasi" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- BMT End --}}
						{{-- CUKAI Start --}}
						<div>
								<p class="my-5 font-semibold dark:text-gray-200 md:text-lg">CUKAI</p>
								<div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:gap-10">
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibayar (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAIDibayar" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditanggung Pemerintah (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAIDitanggungPemerintah" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditunda (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAIDitunda" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Tidak Dipungut (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAITidakDipungut" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibebaskan (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAIDibebaskan" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Telah Dilunasi (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="CUKAITelahDilunasi" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- CUKAI End --}}
						{{-- PPH Start --}}
						<div>
								<p class="my-5 font-semibold dark:text-gray-200 md:text-lg">PPH</p>
								<div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:gap-10">
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibayar (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHDibayar" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditanggung Pemerintah (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHDitanggungPemerintah" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditunda (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHDitunda" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Tidak Dipungut (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHTidakDipungut" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibebaskan (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHDibebaskan" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Telah Dilunasi (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPHTelahDilunasi" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- PPH End --}}
						{{-- PPN Start --}}
						<div>
								<p class="my-5 font-semibold dark:text-gray-200 md:text-lg">PPN</p>
								<div class="grid grid-cols-1 gap-y-2 md:grid-cols-2 md:gap-10">
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibayar (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNDibayar" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditanggung Pemerintah (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNDitanggungPemerintah" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Ditunda (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNDitunda" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
										<div class="space-y-5">
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Tidak Dipungut (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNTidakDipungut" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Dibebaskan (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNDibebaskan" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
												<div class="grid grid-cols-3 items-center">
														<label class="text-xs dark:text-gray-200 md:text-sm">Telah Dilunasi (Rp.)</label>
														<div class="col-span-2">
																<input type="number" name="PPNTelahDilunasi" step="0.0001" placeholder="0.0000" required
																		class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- PPN End --}}
						<div class="mt-10 flex justify-between">
								<button type="button"
										onclick="window.location.href='{{ route('dokumen-impor.barang', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md border border-blue-600 px-10 py-2.5 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
										Batal
								</button>
								<button type="submit"
										class="rounded-md bg-blue-600 px-8 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
										Tambah
								</button>
						</div>
		</form>

@endsection
