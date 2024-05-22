<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white">
		<div class="px-3 py-3 lg:px-5 lg:pl-3">
				<div class="flex items-center justify-between">
						<div class="flex items-center justify-start rtl:justify-end">
								<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
										type="button"
										class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden">
										<span class="sr-only">Open sidebar</span>
										<svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg">
												<path clip-rule="evenodd" fill-rule="evenodd"
														d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
												</path>
										</svg>
								</button>
								<a href="/" class="ms-2 flex md:me-24">
										<img src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" class="me-3 h-9"
												alt="Polibatam Logistik" />
								</a>
						</div>
						@auth('petugas')
								<div class="flex items-center">
										<div class="ms-3 flex items-center">
												<div>
														<button type="button" class="flex rounded-full text-sm transition duration-75 hover:drop-shadow-md"
																aria-expanded="false" data-dropdown-toggle="dropdown-user">
																<div class="relative h-[50px] w-[170px]">
																		<div class="absolute left-0 top-0 h-[50px] w-[170px] rounded-[5px] border-2 border-rose-500 bg-white">
																		</div>
																		<div class="absolute left-[20px] top-[10px]"><span
																						class="font-['Poppins'] text-lg font-bold text-red-500">Petugas</span>
																		</div>
																		<div class="absolute left-[123px] top-[5px] h-10 w-10 rounded-[5px] bg-rose-500">
																		</div>
																		<div class="absolute left-[136px] top-[10px] font-['Poppins'] rounded-[5px] text-lg font-bold text-white">
																				P</div>
																</div>
														</button>
												</div>
												<div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white pr-5 text-base shadow"
														id="dropdown-user">
														<div class="max-w-xs rounded-lg border border-gray-200 bg-white shadow">
																<a href="#">
																		<img class="rounded-lg" src="{{ asset('images/background/Capture.PNG') }}" alt="" />
																</a>
																<div class="flex flex-col items-center pb-10">

																		<img class="relative top-[-50px] -mb-12 h-36 w-36 rounded-full border-8 border-white"
																				src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image" />
																		<h5 class="mb-1 font-['Poppins'] text-2xl font-bold text-red-500">Pengelola Sistem</h5>
																		<span class="text-base text-gray-500">System Administrator</span>
																		<div class="mt-4 flex md:mt-6">
																				<form action="{{ route('logout') }}" method="post">
																						@csrf <button href="#"
																								class="inline-flex items-center rounded-lg bg-rose-500 px-4 py-2 text-center text-sm font-medium text-white hover:bg-rose-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Log
																								Out</button>
																				</form>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
						@endauth
						@auth('pengimpor')
								<div class="flex items-center">
										<div class="ms-3 flex items-center">
												<div>
														<button type="button" class="flex rounded-full text-sm duration-75 hover:drop-shadow-md"
																aria-expanded="false" data-dropdown-toggle="dropdown-user">
																<div class="relative h-[50px] w-[180px]">
																		<div class="absolute left-0 top-0 h-[50px] w-[180px] rounded-[5px] border-2 border-blue-600 bg-white">
																		</div>
																		<div class="absolute left-[14px] top-[10px]">
																				<span class="font-['Poppins'] text-xl font-bold text-blue-600">
																						Pengimpor
																				</span>
																		</div>
																		<div class="absolute left-[135px] top-[5px] h-10 w-10 rounded-[5px] bg-blue-600">
																		</div>
																		<div class="absolute left-[149px] top-[10px] font-['Poppins'] text-xl font-bold text-white">
																				P</div>
																</div>
														</button>
												</div>
												<div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white pr-5 text-base shadow"
														id="dropdown-user">
														<div class="max-w-xs rounded-lg border border-gray-200 bg-white shadow">
																<a href="#">
																		<img class="rounded-lg" src="{{ asset('images/background/Capture-1.PNG') }}" alt="" />
																</a>
																<div class="flex flex-col items-center pb-10">

																		<img class="relative top-[-50px] -mb-12 h-36 w-36 rounded-full border-8 border-white"
																				src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Bonnie image" />
																		<h5 class="mb-1 font-['Poppins'] text-2xl font-bold text-blue-600">
																				{{ auth('pengimpor')->user()->username }}</h5>
																		<span class="text-base text-gray-500">{{ auth('pengimpor')->user()->email }}</span>
																		<div class="mt-4 flex md:mt-6">
																				<form action="{{ route('logout') }}" method="post">
																						@csrf <button href="#"
																								class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Keluar</button>
																				</form>
																				{{-- modal change password toggle --}}
																				<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
																						class="ms-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Pengaturan</button>

																		</div>
																</div>
														</div>

												</div>
												{{-- modal change password --}}
												<div id="authentication-modal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
														class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
														<div class="relative max-h-full w-full max-w-md p-4">
																<!-- Modal content -->
																<div class="relative rounded-lg bg-white shadow">
																		<!-- Modal header -->
																		<div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
																				<h3 class="font-['Poppins'] text-xl font-bold text-gray-900">
																						Ubah Kata Sandi Akunmu!
																				</h3>
																				<button type="button"
																						class="end-2.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
																						data-modal-hide="authentication-modal">
																						<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
																								viewBox="0 0 14 14">
																								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																										d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
																						</svg>
																						<span class="sr-only">Close modal</span>
																				</button>
																		</div>
																		<!-- Modal body -->
																		<div class="p-4 md:p-5">
																				<p class="text-gray-600">Ketikkan kata sandi lama terlebih dahulu. Lalu anda bisa ketikkan kata
																						sandi anda yang baru!</p>
																				&nbsp;
																				<form class="space-y-4" action="#">
																						<div>
																								<label for="password" class="mb-2 block text-sm font-medium text-gray-900">Kata
																										sandi lama</label>
																								<input type="password" name="password" id="password" placeholder="••••••••"
																										class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
																										required />
																						</div>
																						<div>
																								<label for="password" class="mb-2 block text-sm font-medium text-gray-900">Kata
																										sandi baru</label>
																								<input type="password" name="password" id="password" placeholder="••••••••"
																										class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
																										required />
																						</div>
																						<div>
																								<label for="password" class="mb-2 block text-sm font-medium text-gray-900">Konfirmasi kata sandi
																										baru</label>
																								<input type="password" name="password" id="password" placeholder="••••••••"
																										class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
																										required />
																						</div>
																						&nbsp;
																						<button type="submit"
																								class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center font-['Poppins'] text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
																								Ubah Kata Sandi</button>

																				</form>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
						@endauth
				</div>
		</div>

</nav>
