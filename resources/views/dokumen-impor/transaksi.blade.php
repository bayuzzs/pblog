@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="grid gap-y-10 lg:grid-cols-2 xl:gap-x-20 2xl:gap-x-64">
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="tanggalBc">Valuta</label>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="tanggalBc">NDPBM</label>
										<div class="col-span-2">
												<p class="text-xs font-semibold md:text-sm">asdasd</p>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs md:text-sm" for="nomorPosBc">Jenis Transaksi</label>
										<div class="col-span-2">
												<x-select name="kodeJenisTransaksi">
														<option value="IMB">IMB - Transaksi Perdagangan Dengan Imbal Dagang</option>
														<option value="IOA">IOA - Pembayaran Dilakukan Dengan Interoffice Account</option>
														<option value="KMD">KMD - Pembayaran Kemudian</option>
														<option value="KON">KON - Pembayaran Dilakukan Dengan Konsinyasi</option>
														<option value="LAI">LAI - Transaksi Perdagangan Atau Cara Pembayaran Lainnya</option>
														<option value="PMK">PMK - Pembayaran Dilakukan Dimuka</option>
														<option value="RLC">RLC - Pembayaran Dengan Red Clause Letter of Credit</option>
														<option value="SLC">SLC - Pembayaran Dengan Sight Letter Of Credit</option>
														<option value="ULC">ULC - Pembayaran Dengan Usance Letter Of Credit</option>
														<option value="WSI">WSI - Pembayaran Dilakukan Dengan Wesel Inkaso</option>
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="kodeJenisIncoterm">
												<option value="CFR">Cost and Freight</option>
												<option value="CIF">Cost, Insurance and Freight</option>
												<option value="CIP">Carriage and Insurance Paid to</option>
												<option value="CPT">Carriage Paid To</option>
												<option value="DAF">Delivered At Frontier</option>
												<option value="DAP">Delivered At Place</option>
												<option value="DAT">Delivered At Terminal</option>
												<option value="DDP">Delivered Duty Paid</option>
												<option value="DDU">Delivered Duty Unpaid</option>
												<option value="DEQ">Delivered Ex Quay</option>
												<option value="DES">Delivered Ex Ship</option>
												<option value="EXW">Ex Works</option>
												<option value="FAS">Free Alongside Ship</option>
												<option value="FCA">Free Carrier</option>
												<option value="FOB">Free on Board</option>
												<option value="LAN">LAINNYA</option>
										</x-select>
										<input type="number" name="nilaiIncoterm" id="nilaiIncoterm" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs md:text-sm" for="biayaTambahan">Biaya Tambahan</label>
										<input type="number" name="biayaTambahan" id="biayaTambahan" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="diskon">Diskon</label>
										<input type="number" name="diskon" id="diskon" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="diskon">Freight</label>
										<input type="number" name="diskon" id="diskon" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<div class="flex items-center gap-2">
												<label class="text-xs md:text-sm" for="tanggalTiba">Asuransi</label>
												<x-select name="kodeAsuransi">
														<option value="DN" selected>DN</option>
														<option value="LN">LN</option>
												</x-select>
										</div>
										<input type="number" name="diskon" id="diskon" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Voluntary Declaration</label>
										<input type="number" name="nilaiVD" id="nilaiVD" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Rupiah</label>
										<input type="number" name="cif" id="cif" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Berat Kotor (KG)</label>
										<input type="number" name="bruto" id="bruto" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Berat Bersih (KG)</label>
										<input type="number" name="netto	" id="netto	" step="0.01"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
				</div>
		</div>
@endsection
