@extends('layout.dashboard')

@section('main-content')
		<div class="h-max w-screen rounded-md bg-white p-5 shadow-md">
				<p class="mb-1 pb-4 font-poppins font-bold leading-tight tracking-tight text-gray-900 md:text-3xl">
						Kelola Data Master
				</p>
				{{-- Alert info start --}}
				<div
						class="mb-7 flex items-center rounded-lg border border-blue-300 bg-blue-50 p-4 text-sm text-blue-800 dark:border-blue-800 dark:bg-gray-800 dark:text-blue-400"
						role="alert">
						<svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
								viewBox="0 0 20 20">
								<path
										d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
						</svg>
						<span class="sr-only">Info</span>
						<div>
								<span class="font-medium">Informasi!</span> Berhati-hatilah ketika melalukan perubahan pada data.
						</div>
				</div>
				{{-- Alert info end --}}

				{{-- Table start --}}
				<div class="relative overflow-x-auto pl-5 sm:rounded-lg">
						<div class="relative flex overflow-x-auto sm:rounded-lg">
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="862">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Satuan
														Barang Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Satuan Barang</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="516">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Jenis
														Dokumen Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Jenis Dokumen</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="224">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Jenis
														Kemasan Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Jenis Kemasan</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
						</div>
						<div class="relative flex overflow-x-auto sm:rounded-lg">
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="1532">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Kode HS
														Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Kode HS</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="96">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Valuta
														Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Valuta</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="167">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Negara
														Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Negara</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
						</div>
						<div class="relative flex overflow-x-auto sm:rounded-lg">
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="932">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Pelabuhan
														Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Pelabuhan</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
										<div class="absolute left-[6px] top-0 h-[230px] w-[410px] rounded-lg border-2 border-blue-600 bg-white">
												<span class="absolute pl-5 pt-12 text-center font-poppins text-[96px] font-bold text-blue-600"><span
																class="num" data-val="778">000</span></span>
												<span class="absolute pl-6 pt-40 text-center font-poppins text-2xl font-normal text-blue-600">Kantor
														Terdata</span>
										</div>
										<div class="absolute left-[6px] top-0 h-[60px] w-[410px] rounded-t-lg bg-blue-600">
												<p class="pt-3 text-center font-poppins text-2xl font-bold text-white">Kantor</p>
										</div>
										<button
												class="absolute left-0 top-[215px] h-10 w-[428px] rounded-[5px] bg-rose-500 font-[poppins] text-lg font-medium text-white hover:bg-rose-700">Kelola
												Data ></button>
								</div>
								<div class="relative h-[300px] w-[500px] flex-1">
								</div>
						</div>

				</div>



		</div>
@endsection
