@extends('layout.dashboard')

@section('main-content')
		@auth('petugas')
				<div class="w-full overflow-auto rounded-md bg-white p-5 shadow-md">

						<p class="mb-1 pb-4 font-['Poppins'] font-bold leading-tight tracking-tight text-gray-900 md:text-3xl">
								Daftar Akun Pengimpor
						</p>

						{{-- Alert info start --}}
						<div id="alert-1"
								class="mb-4 flex items-center rounded-lg border border-blue-300 bg-blue-50 p-4 text-blue-800 focus:ring-blue-400"
								role="alert">
								<svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
										viewBox="0 0 20 20">
										<path
												d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
								</svg>
								<span class="sr-only">Info</span>
								<div class="ms-3 text-sm">
										<span class="font-medium">Informasi!</span> Administrator bisa melihat daftar akun pengimpor disini.
								</div>
								<button type="button"
										class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 p-1.5 text-blue-500 hover:bg-blue-200 focus:ring-2 focus:ring-blue-400"
										data-dismiss-target="#alert-1" aria-label="Close">
										<span class="sr-only">Close</span>
										<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
										</svg>
								</button>
						</div>
						{{-- Alert info end --}}

						{{-- Search bar start --}}
						<div class="sticky -top-5 z-10 flex items-center justify-between gap-3 space-y-4 bg-white py-2 md:space-y-0">
								{{-- <label for="table-search" class="sr-only">Search</label> --}}
								<div class="relative w-full">
										<div class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
												<svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
														viewBox="0 0 20 20">
														<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
												</svg>
										</div>
										<input type="text" id="table-search-users"
												class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
												placeholder="Cari akun pengimpor">
								</div>
								<button type="submit"
										class="rounded-lg bg-blue-700 px-10 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cari</button>
						</div>
						{{-- Search bar end --}}

						{{-- Table start --}}
						<div class="shadow sm:rounded-lg">
								<table class="w-full text-left text-sm text-gray-500 rtl:text-right" id="tablegw">
										<thead class="bg-blue-600 text-sm text-white">
												<tr>
														<th scope="col" class="rounded-tl-lg p-4">
														</th>
														<th scope="col" class="px-6 py-3">
																Informasi Akun
														</th>
														<th scope="col" class="px-6 py-3">
																NPWP
														</th>
														<th scope="col" class="px-6 py-3">
																Nama Lengkap
														</th>
														<th scope="col" class="rounded-tr-lg px-6 py-3">
																No. Telepon
														</th>
												</tr>
										</thead>
										<tbody>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
												<tr class="border-b-2 border-blue-100 hover:bg-blue-50">
														<td class="w-4 p-4">

														</td>
														<td scope="row" class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900">
																<img class="h-10 w-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
																		alt="Jese image">
																<div class="ps-3">
																		<div class="text-base font-semibold">Epnooo</div>
																		<div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
																</div>
														</td>
														<td class="px-6 py-4">
																<p href="#" class="font-medium text-blue-600">4342301012</p>
														</td>
														<td class="px-6 py-4">
																Ibnu Hanif Salsabila
														</td>
														<td class="px-6 py-4">
																089623256645
														</td>
												</tr>
										</tbody>
								</table>
						</div>
						{{-- Table end --}}
						<nav class="mt-5 flex justify-end">
								<ul class="inline-flex -space-x-px text-sm">
										<li>
												<a href="#"
														class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-e-0 border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">Previous</a>
										</li>
										<li>
												<a href="#"
														class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">1</a>
										</li>
										<li>
												<a href="#"
														class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">2</a>
										</li>
										<li>
												<a href="#" aria-current="page"
														class="flex h-8 items-center justify-center border border-gray-300 bg-blue-50 px-3 text-blue-600 hover:bg-blue-100 hover:text-blue-700">3</a>
										</li>
										<li>
												<a href="#"
														class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">4</a>
										</li>
										<li>
												<a href="#"
														class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">5</a>
										</li>
										<li>
												<a href="#"
														class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">Next</a>
										</li>
								</ul>
						</nav>

				</div>
		@endauth
@endsection


{{-- @push('script-atas')
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"
				integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/2.0.7/js/dataTables.tailwindcss.js"></script>
@endpush
@push('script-bawah')
		<script>
				new DataTable('#tablegw', {
						paging: false,
						searching: false,
						info: false,
				});
		</script>
@endpush --}}
