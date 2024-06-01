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
				<div class="border-b-2 border-gray-200 dark:border-gray-700">
						<nav class="-mb-0.5 flex space-x-6 px-5">
								<a class="{{ request()->routeIs('dokumen-impor.header') ? 'dokumen-impor-nav-active' : '' }} inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none dark:text-gray-500 dark:hover:text-blue-500"
										href="{{ route('dokumen-impor.header', ['nomorAju' => request()->route('nomorAju')]) }}">
										Header
								</a>
								<a class="{{ request()->routeIs('dokumen-impor.entitas') ? 'dokumen-impor-nav-active' : '' }} inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none dark:text-gray-500 dark:hover:text-blue-500"
										href="{{ route('dokumen-impor.entitas', ['nomorAju' => request()->route('nomorAju')]) }}" aria-current="page">
										Entitas
								</a>
								<a class="{{ request()->routeIs('dokumen-impor.dokumen-pendukung') ? 'dokumen-impor-nav-active' : '' }} inline-flex items-center gap-2 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none dark:text-gray-500 dark:hover:text-blue-500"
										href="{{ route('dokumen-impor.dokumen-pendukung', ['nomorAju' => request()->route('nomorAju')]) }}">
										Dokumen Pendukung
								</a>
						</nav>
				</div>
				@yield('dokumen-impor-content')
		</div>
@endsection
