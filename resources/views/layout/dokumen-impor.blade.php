@extends('layout.dashboard')

@section('main-content')
		<div
				class="custom-scrollbar h-[calc(100vh-150px)] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<div>
						<p class="mb-1 font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-200 md:text-xl">
								BC 2.0
						</p>
						<hr class="w-full dark:border-gray-700" />
				</div>
				<div class="custom-scrollbar mb-5 overflow-x-auto overflow-y-auto border-b-2 border-gray-200 dark:border-gray-700">
						<nav class="flex space-x-2 px-5 md:space-x-3 2xl:space-x-6">
								<x-nav-tab routeName="dokumen-impor.header">
										Header
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.entitas">
										Entitas
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.dokumen-pendukung">
										Dokumen Pendukung
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.pengangkutan">
										Pengangkutan
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.kemasan-kontainer">
										Kemasan & Kontainer
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.transaksi">
										Transaksi
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.barang">
										Barang
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.pungutan">
										Pungutan
								</x-nav-tab>
								<x-nav-tab routeName="dokumen-impor.pernyataan">
										Pernyataan
								</x-nav-tab>
						</nav>
				</div>
				@yield('dokumen-impor-content')
		</div>
@endsection
