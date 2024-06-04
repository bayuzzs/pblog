@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="grid gap-y-10 lg:grid-cols-2 xl:gap-x-20 2xl:gap-x-64">
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<div class="pr-5">
												<x-select name=kodeTutupPu>
														<option value="11">BC 1.1</option>
														<option value="12">BC 1.2</option>
														<option value="14">BC 1.4</option>
												</x-select>
										</div>
										<input type="text" name="nomorBc" id="nomorBc"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="tanggalBc">Tanggal BC 1.1/1.2</label>
										<input type="date" name="tanggalBc" id="tanggalBc"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs md:text-sm" for="nomorPosBc">Nomor POS</label>
										<input type="text" name="nomorPosBc" id="nomorPosBc" placeholder="Nomor POS BC"
												class="block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
										<input type="text" name="nomorSubPosBc" placeholder="Nomor Sub POS BC"
												class="block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs md:text-sm" for="nomorPosBc">Cara Pengangkutan</label>
										<div class="col-span-2">
												<x-select name="kodeCaraAngkut">
														<option value="1" selected>1 - LAUT</option>
														<option value="2">2 - KERETA API</option>
														<option value="3">3 - DARAT</option>
														<option value="4">4 - UDARA</option>
														<option value="5">5 - POS</option>
														<option value="6">6 - MULTIMODA</option>
														<option value="7">7 - INSTALASI / PIPA</option>
														<option value="8">8 - PERAIRAN</option>
														<option value="9">9 - LAINNYA</option>
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="namaPengangkut">Nama Sarana Pengangkut</label>
										<input type="text" name="namaPengangkut" id="namaPengangkut"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="nomorPengangkut">Nomor Voy/Flight</label>
										<input type="text" name="nomorPengangkut" id="nomorPengangkut"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm" for="tanggalBc">Bendera</label>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs md:text-sm" for="tanggalTiba">Perkiraan Tanggal Tiba</label>
										<input type="date" name="tanggalTiba" id="tanggalTiba" placeholder="Nomor POS BC"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Pelabuhan Muat</label>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Pelabuhan Transit</label>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Pelabuhan Tujuan</label>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs md:text-sm">Tempat Penimbunan</label>
										<div class="col-span-2">
												<x-select>
														<option value="1">GDIM - GUDANG IMPORTIR</option>
												</x-select>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
