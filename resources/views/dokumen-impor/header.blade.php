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

				<form action="{{ route('dokumen-impor.header', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST">
						@csrf
						<div class="space-y-5 md:space-y-10">
								<div class="grid grid-cols-5 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Nomor Pengajuan</p>
										</div>
										<div class="col-span-3">
												<p class="text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base">
														{{ printNomorAju($dokumenImpor->nomorAju) }}</p>
										</div>
								</div>
								<div class="grid grid-cols-5 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Pelabuhan Tujuan</p>
										</div>
										<div class="col-span-3">
												@if ($dokumenImpor->kodePelabuhan)
														<x-combobox apiUrl="{{ route('api.pelabuhan') }}" value="{{ $dokumenImpor->kodePelabuhan }}"
																name="kodePelabuhan" fieldName="kodePelabuhan" searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
														</x-combobox>
												@else
														<x-combobox apiUrl="{{ route('api.pelabuhan') }}" name="kodePelabuhan" fieldName="kodePelabuhan"
																searchName="namaPelabuhan" placeholder="Cari Pelabuhan">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-5 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Kantor Pabean</p>
										</div>
										<div class="col-span-3">
												@if ($dokumenImpor->kodeKantor)
														<x-combobox apiUrl="{{ route('api.kantor') }}" value="{{ $dokumenImpor->kodeKantor }}" name="kodeKantor"
																searchName="namaKantor" fieldName="kodeKantor" placeholder="Cari Kantor">
														</x-combobox>
												@else
														<x-combobox apiUrl="{{ route('api.kantor') }}" name="kodeKantor" fieldName="kodeKantor"
																searchName="namaKantor" placeholder="Cari Kantor">
														</x-combobox>
												@endif
										</div>
								</div>
								<div class="grid grid-cols-5 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Jenis PIB</p>
										</div>
										<div class="col-span-3">
												{{-- Referensi Kode Jenis PIB/Prosedur PIA CEISA --}}
												<x-select name="jenisPib">
														<option value="1" {{ !$dokumenImpor->jenisPib || $dokumenImpor->jenisPib == 1 ? 'selected' : '' }}>1 -
																BIASA</option>
														<option value="2" {{ $dokumenImpor->jenisPib == 2 ? 'selected' : '' }}>2 - BERKALA</option>
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
														{!! generateJenisImporOptions($dokumenImpor->jenisImpor) !!}
												</x-select>
										</div>
								</div>
								<div class="grid grid-cols-5 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Cara Bayar</p>
										</div>
										<div class="col-span-3">
												{{-- Referensi Kode Jenis PIB/Prosedur PIA CEISA --}}
												<x-select name="caraBayar">
														{!! generateCaraBayarOptions($dokumenImpor->caraBayar) !!}
												</x-select>
										</div>
								</div>
								<div class="flex justify-end">
										<button type="submit"
												class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
												Selanjutnya
										</button>
								</div>
						</div>
				</form>
		</div>
@endsection

@push('script-bawah')
		<script></script>
@endpush
