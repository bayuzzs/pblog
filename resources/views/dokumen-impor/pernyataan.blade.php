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
				<style>

				</style>

				<form accept="{{ route('dokumen-impor.pernyataan', ['nomorAju' => $dokumenImpor->nomorAju]) }}" method="POST">
						@csrf
						<div class="mb-8">
								<p class="text-sm font-semibold dark:text-gray-200 md:text-base">Dengan ini saya menyatakan:</p>
								<p class="hanging-indent ml-5 text-sm font-semibold dark:text-gray-200 md:text-base">
										a. bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam dokumen ini dan keabsahan dokumen pelengkap
										pabean yang menjadi dasar pembuatan dokumen ini, dan:
								</p>
								<p class="hanging-indent ml-5 text-sm font-semibold dark:text-gray-200 md:text-base">
										b. apabila dalam jangka waktu paling lambat 1 (satu) hari setelah tanggal pemberitahuan kesiapan barang, saya
										tidak hadir untuk menyaksikan pemeriksaan fisik, maka saya menguasakan penyaksian kepada pengusaha TPS dengan
										resiko dan biaya menjadi tanggung jawab saya.
								</p>
						</div>
						<div class="space-y-5 md:space-y-10">
								<div class="grid grid-cols-6 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Tempat</p>
										</div>
										<input type="text" name="tempat" placeholder="Tempat" value="{{ $pernyataan ? $pernyataan->tempat : '' }}"
												required
												class="col-span-4 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-6 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Tanggal</p>
										</div>
										<input type="date" name="tanggal" value="{{ $pernyataan ? $pernyataan->tanggal : '' }}" required
												class="col-span-4 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-6 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Nama</p>
										</div>
										<input type="text" name="nama" placeholder="Nama" value="{{ $pernyataan ? $pernyataan->nama : '' }}"
												required
												class="col-span-4 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
								<div class="grid grid-cols-6 items-center gap-5">
										<div class="col-span-2">
												<p class="text-sm dark:text-gray-200 md:text-base">Jabatan</p>
										</div>
										<input type="text" name="jabatan" placeholder="Jabatan" value="{{ $pernyataan ? $pernyataan->jabatan : '' }}"
												required
												class="col-span-4 block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600">
								</div>
						</div>

						<div class="mt-10 flex justify-between">
								<button type="button"
										onclick="window.location.href='{{ route('dokumen-impor.pungutan', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md border border-blue-600 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
										sebelumnya
								</button>
								<button type="submit"
										onclick="window.location.href='{{ route('dokumen-impor.pernyataan', ['nomorAju' => $dokumenImpor->nomorAju]) }}'"
										class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
										Simpan
								</button>
						</div>
		</div>


		</div>
@endsection
