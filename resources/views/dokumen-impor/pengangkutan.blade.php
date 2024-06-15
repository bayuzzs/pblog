@extends('layout.dokumen-impor')

@section('dokumen-impor-content')
		<form action="{{ route('dokumen-impor.pengangkutan', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST"
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
										<div class="pr-5">
												<x-select name=kodeTutupPu>
														@if ($pengangkutan)
																<option value="11"
																		{{ !$pengangkutan->kodeTutupPu || $pengangkutan->kodeTutupPu == 11 ? 'selected' : '' }}>BC 1.1</option>
																<option value="12" {{ $pengangkutan->kodeTutupPu == 12 ? 'selected' : '' }}>BC 1.2</option>
																<option value="14" {{ $pengangkutan->kodeTutupPu == 14 ? 'selected' : '' }}>BC 1.4</option>
														@else
																<option value="11" selected>BC 1.1</option>
																<option value="12">BC 1.2</option>
																<option value="14">BC 1.4</option>
														@endif
												</x-select>
										</div>
										<input type="text" name="nomorBc" id="nomorBc"
												value="{{ $pengangkutan ? $pengangkutan->nomorBc : old('nomorBc') }}" placeholder="Masukkan 6 Digit Nomor BC"
												required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalBc">Tanggal BC 1.1/1.2</label>
										<input type="date" name="tanggalBc" id="tanggalBc"
												value="{{ $pengangkutan ? $pengangkutan->tanggalBc : old('tanggalBc') }}" required
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="nomorPosBc">Nomor POS</label>
										<input type="text" name="nomorPosBc" id="nomorPosBc" placeholder="Nomor POS BC" required
												value="{{ $pengangkutan ? $pengangkutan->nomorPosBc : old('nomorPosBc') }}"
												class="block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
										<input type="text" name="nomorSubPosBc" placeholder="Nomor Sub POS BC" required
												value="{{ $pengangkutan ? $pengangkutan->nomorSubPosBc : old('nomorSubPosBc') }}"
												class="block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="nomorPosBc">Cara Pengangkutan</label>
										<div class="col-span-2">
												<x-select name="kodeCaraAngkut">
														@if ($pengangkutan)
																{!! generateCaraAngkutOptions($pengangkutan->kodeCaraAngkut) !!}
														@else
																{!! generateCaraAngkutOptions() !!}
														@endif
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="namaPengangkut">Nama Sarana Pengangkut</label>
										<input type="text" name="namaPengangkut" id="namaPengangkut" placeholder="Nama Pengangkut" required
												value="{{ $pengangkutan ? $pengangkutan->namaPengangkut : old('namaPengangkut') }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="nomorPengangkut">Nomor Voy/Flight</label>
										<input type="text" name="nomorPengangkut" id="nomorPengangkut" placeholder="Nomor Pengangkut" required
												value="{{ $pengangkutan ? $pengangkutan->nomorPengangkut : old('nomorPengangkut') }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
						<div class="space-y-3 md:space-y-10">
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Bendera</label>
										<div class="col-span-2">
												@if ($pengangkutan)
														@if ($pengangkutan->kodeBendera)
																<x-combobox apiUrl="{{ route('api.negara') }}" value="{{ $pengangkutan->kodeBendera }}"
																		name="kodeBendera" fieldName="kodeNegara" searchName="namaNegara" placeholder="Cari Negara">
																</x-combobox>
														@else
																<x-combobox apiUrl="{{ route('api.negara') }}" name="kodeBendera" fieldName="kodeNegara"
																		searchName="namaNegara" placeholder="Cari Negara">
																</x-combobox>
														@endif
												@else
														<x-combobox apiUrl="{{ route('api.negara') }}" name="kodeBendera" fieldName="kodeNegara"
																searchName="namaNegara" placeholder="Cari Negara">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-3 items-center gap-2">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="tanggalTiba">Perkiraan Tanggal Tiba</label>
										<input type="date" name="tanggalTiba" id="tanggalTiba" placeholder="Nomor POS BC" required
												value="{{ $pengangkutan ? $pengangkutan->tanggalTiba : old('tanggalTiba') }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Pelabuhan Muat</label>
										<div class="col-span-2">
												@if ($pengangkutan)
														@if ($pengangkutan->kodePelMuat)
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" value="{{ $pengangkutan->kodePelMuat }}"
																		name="kodePelMuat" fieldName="kodePelabuhan" searchName="namaPelabuhan"
																		placeholder="Cari Pelabuhan">
																</x-combobox>
														@else
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelMuat" fieldName="kodePelabuhan"
																		searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
																</x-combobox>
														@endif
												@else
														<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelMuat" fieldName="kodePelabuhan"
																searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Pelabuhan Transit</label>
										<div class="col-span-2">
												@if ($pengangkutan)
														@if ($pengangkutan->kodePelTransit)
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" value="{{ $pengangkutan->kodePelTransit }}"
																		name="kodePelTransit" fieldName="kodePelabuhan" searchName="namaPelabuhan"
																		placeholder="Cari Pelabuhan">
																</x-combobox>
														@else
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelTransit" fieldName="kodePelabuhan"
																		searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
																</x-combobox>
														@endif
												@else
														<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelTransit" fieldName="kodePelabuhan"
																searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm">Pelabuhan Tujuan</label>
										<div class="col-span-2">
												@if ($pengangkutan)
														@if ($pengangkutan->kodePelTujuan)
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" value="{{ $pengangkutan->kodePelTujuan }}"
																		name="kodePelTujuan" fieldName="kodePelabuhan" searchName="namaPelabuhan"
																		placeholder="Cari Pelabuhan">
																</x-combobox>
														@else
																<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelTujuan" fieldName="kodePelabuhan"
																		searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
																</x-combobox>
														@endif
												@else
														<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelTujuan" fieldName="kodePelabuhan"
																searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-3 items-center">
										<label class="text-xs dark:text-gray-200 md:text-sm" for="kodeTps">Tempat Penimbunan</label>
										<input type="text" name="kodeTps" id="kodeTps" placeholder="Kode TPS atau Tempat Penimbunan" required
												value="{{ $pengangkutan ? $pengangkutan->kodeTps : old('kodeTps') }}"
												class="col-span-2 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>
				</div>
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
				</fo>
		@endsection
