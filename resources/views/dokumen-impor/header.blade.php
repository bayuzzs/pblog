@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="space-y-5 md:space-y-10">
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Nomor Pengajuan</p>
								</div>
								<div class="col-span-3">
										<p class="text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base">Nomor Pengajuan</p>
								</div>
						</div>
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Pelabuhan Tujuan</p>
								</div>
								<div class="col-span-3">
										<x-combobox apiUrl="{{ route('api.pelabuhan') }}" apiSearchQuery="kodePelabuhan" name="kodePelabuhan"
												item="namaPelabuhan" placeholder="Cari Kode Pelabuhan"></x-combobox>
								</div>
						</div>
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Kantor Pabean</p>
								</div>
								<div class="col-span-3">
										<p class="text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base">Nomor Pengajuan</p>
								</div>
						</div>
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Jenis PIB</p>
								</div>
								<div class="col-span-3">
										{{-- Referensi Kode Jenis PIB/Prosedur PIA CEISA --}}
										<x-select name="jenisPib">
												<option value="1" selected>1 - BIASA</option>
												<option value="2">2 - BERKALA</option>
										</x-select>
								</div>
						</div>
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Jenis Impor</p>
								</div>
								<div class="col-span-3">
										{{-- Referensi Kode Jenis Impor PIA CEISA --}}
										<x-select name="jenisImpor">
												<option value="1" selected>1 - UNTUK DIPAKAI</option>
												<option value="2">2 - SEMENTARA</option>
												<option value="3">3 - REIMPOR</option>
												<option value="4">4 - TPB</option>
												<option value="5">5 - PELAYANAN SEGERA</option>
												<option value="6">6 - VOORUITSLAG</option>
												<option value="7">7 - GABUNGAN</option>
										</x-select>
								</div>
						</div>
						<div class="grid grid-cols-5 items-center gap-5">
								<div class="col-span-2">
										<p class="text-sm dark:text-gray-200 md:text-base">Cara Bayar</p>
								</div>
								<div class="col-span-3">
										<x-select name="caraBayar">
												<option value="1" selected>1 - BIASA/TUNAI</option>
												<option value="2">2 - BERKALA</option>
												<option value="3">3 - DENGAN JAMINAN</option>
												<option value="4">4 - PERHITUNGAN KEMUDIAN</option>
												<option value="5">5 - KONSINYASI (CONSIGNMENT)</option>
												<option value="6">6 - USANCE LETTER OF CREDIT</option>
												<option value="7">7 - RED CLAUSE LETTER OF CREDIT</option>
												<option value="8">8 - INTER-COMPANY ACCOUNT</option>
												<option value="9">9 - GABUNGAN/LAINNYA</option>
												<option value="10">10 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA BERTAHAP</option>
												<option value="11">11 - PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA TUNAI</option>
												<option value="12">12 - DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI</option>
												<option value="13">13 - DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH</option>
												<option value="14">14 - DILAKUKAN TANPA PEMBAYARAN</option>
												<option value="15">15 - PEMBAYARAN DIMUKA (ADVANCE PAYMENT)</option>
												<option value="16">16 - SIGHT LETTER OF CREDIT</option>
												<option value="17">17 - INKASO (COLLECTION DRAFT)</option>
										</x-select>
								</div>
						</div>
				</div>
		</div>
@endsection
