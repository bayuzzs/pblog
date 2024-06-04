@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<div class="rounded-md border border-gray-200 p-5 dark:border-gray-700">
				<div class="grid grid-cols-1 gap-y-14 md:grid-cols-2 md:gap-x-5 lg:gap-x-10">
						{{-- Importir --}}
						<div class="space-y-2 lg:space-y-8">
								<div class="mb-5 grid grid-cols-2">
										<p class="col-span-2 text-lg font-medium">Importir</p>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="jenisIdentitas" placeholder="Jenis Identitias">
												<option value="0">NPWP 12 DIGIT</option>
												<option value="1">NPWP 10 DIGIT</option>
												<option value="2">PASPOR</option>
												<option value="3">KTP</option>
												<option value="4">LAINNYA</option>
												<option value="5">NPWP 15 DIGIT</option>
										</x-select>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Masukkan No Identitas">
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Nama</p>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nama">
								</div>

								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Alamat</p>
										<textarea name="alamat"
										  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Alamat">
                    </textarea>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="negara" placeholder="Pilih Jenis API">
												<option value="01">API U</option>
												<option value="02">API P</option>
										</x-select>
										<input type="text" name="noApi"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nomor API">
								</div>
						</div>
						{{-- NPWP Pemusatan --}}
						<div class="space-y-2 lg:space-y-8">
								<div class="mb-5 grid grid-cols-2">
										<p class="col-span-2 text-lg font-medium">NPWP Pemusatan</p>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="jenisIdentitas" placeholder="Jenis Identitias">
												<option value="0">NPWP 12 DIGIT</option>
												<option value="1">NPWP 10 DIGIT</option>
												<option value="2">PASPOR</option>
												<option value="3">KTP</option>
												<option value="4">LAINNYA</option>
												<option value="5">NPWP 15 DIGIT</option>
										</x-select>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Masukkan No Identitas">
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Nama</p>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nama">
								</div>

								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Alamat</p>
										<textarea name="alamat"
										  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Alamat">
                    </textarea>
								</div>
						</div>
						{{-- Pemilik Barang --}}
						<div class="space-y-2 lg:space-y-8">
								<div class="mb-5 grid grid-cols-2">
										<p class="col-span-2 text-lg font-medium">Pemilik Barang</p>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<x-select name="jenisIdentitas" placeholder="Jenis Identitias">
												<option value="0">NPWP 12 DIGIT</option>
												<option value="1">NPWP 10 DIGIT</option>
												<option value="2">PASPOR</option>
												<option value="3">KTP</option>
												<option value="4">LAINNYA</option>
												<option value="5">NPWP 15 DIGIT</option>
										</x-select>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Masukkan No Identitas">
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Nama</p>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nama">
								</div>

								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Alamat</p>
										<textarea name="alamat"
										  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Alamat">
                    </textarea>
								</div>
						</div>
						{{-- Pengirim --}}
						<div class="space-y-2 lg:space-y-8">
								<div class="mb-5 grid grid-cols-2">
										<p class="col-span-2 text-lg font-medium">Pemilik Barang</p>
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Nama</p>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nama">
								</div>

								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Alamat</p>
										<textarea name="alamat"
										  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Alamat">
                    </textarea>
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Negara</p>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
						</div>
						{{-- Penjual --}}
						<div class="space-y-2 lg:space-y-8">
								<div class="mb-5 grid grid-cols-2">
										<p class="col-span-2 text-lg font-medium">Penjual</p>
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Nama</p>
										<input type="text" name="nama"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
												placeholder="Nama">
								</div>

								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Alamat</p>
										<textarea name="alamat"
										  class="col-span-2 rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
										  rows="3" placeholder="Alamat">
                    </textarea>
								</div>
								<div class="grid grid-cols-3 items-center">
										<p class="text-sm md:text-base">Negara</p>
										<div class="col-span-2">
												<x-combobox></x-combobox>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
