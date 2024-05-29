@extends('layout.dashboard')

@section('main-content')
		<div
				class="custom-scrollbar h-[calc(100vh-150px)] w-full overflow-auto rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				<p class="mb-1 font-bold leading-tight tracking-tight text-gray-900 dark:text-gray-200 md:text-3xl">
						Daftar Akun Pengimpor
				</p>

				<x-alert.alert-info><span class="font-semibold">Informasi!</span> Administrator bisa melihat daftar akun pengimpor
						disini.</x-alert.alert-info>
				{{-- Search bar start --}}
				<form action="{{ route('dashboard') }}" method="GET"
						class="sticky -top-5 z-10 mb-2 flex items-center justify-between gap-3 space-y-4 bg-white py-2 dark:bg-gray-800 md:space-y-0">
						<label for="table-search" class="sr-only">Search</label>
						<div class="relative w-full">
								<div class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
										<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
												viewBox="0 0 20 20">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
										</svg>
								</div>
								<input type="text" id="table-search-users" name="search"
										class="block w-full rounded-lg border border-gray-300 bg-transparent p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-700"
										placeholder="Cari akun pengimpor" value="{{ request('search') }}">
						</div>
						<button type="submit"
								class="rounded-lg bg-blue-700 px-10 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cari</button>
				</form>
				{{-- Search bar end --}}

				{{-- Table start --}}
				<div class="flex flex-col">
						<div class="-m-1.5 overflow-x-auto">
								<div class="inline-block min-w-full p-1.5 align-middle">
										<div class="overflow-hidden rounded-lg border shadow dark:border-gray-700 dark:shadow-gray-900">
												<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
														<thead class="bg-gray-50 dark:bg-gray-700">
																<tr>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Informasi
																				Akun
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">NPWP
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Nama
																				Perusahaan
																		</th>
																		<th scope="col"
																				class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-gray-400">No.
																				Telepon
																		</th>
																</tr>
														</thead>
														<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
																@forelse ($pengimpors as $pengimpor)
																		<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
																				<td class="flex items-center px-6 py-4 text-gray-800 dark:text-gray-200">
																						@if ($pengimpor->urlProfile == null)
																								<span
																										class="size-[38px] flex items-center justify-center rounded-full bg-gray-200 text-sm ring-2 ring-white dark:bg-gray-700 dark:ring-gray-800">
																										{{ getInitials($pengimpor->nama) }}
																								</span>
																						@else
																								<img class="h-10 w-10 rounded-full object-cover"
																										src="/storage/avatars/{{ $pengimpor->urlProfile }}" alt="{{ $pengimpor->nama }}">
																						@endif
																						<div class="ps-3">
																								<div class="text-base font-semibold">{{ $pengimpor->nama }}</div>
																								<div class="text-sm text-gray-500">{{ $pengimpor->email }}</div>
																						</div>
																				</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->npwp }}</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->namaPerusahaan }}</td>
																				<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
																						{{ $pengimpor->telepon }}</td>
																		</tr>
																@empty
																		<tr>
																				<td colspan="4">
																						<div
																								class="flex w-full flex-col items-center justify-center whitespace-nowrap px-6 py-4 text-center text-sm text-gray-800 dark:text-gray-200">
																								<iconify-icon icon="iwwa:box" class="text-4xl"></iconify-icon>
																								Tidak ada akun pengimpor
																						</div>
																				</td>
																		</tr>
																@endforelse
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>
				{{-- Table end --}}

				<!-- Pagination -->
				@if ($pengimpors->hasPages())
						<div class="mt-5 flex items-center justify-between px-3">
								<p class="text-sm dark:text-gray-400">
										Daftar <span class="font-semibold">{{ $pengimpors->firstItem() }}</span> ke
										<span class="font-semibold">{{ $pengimpors->lastItem() }}</span>
										dari
										<span class="font-semibold">{{ $pengimpors->total() }}</span> Pengimpor
								</p>
								<x-pagination :data="$pengimpors" />
						</div>
				@endif
				<!-- End Pagination -->
		</div>
@endsection
