@extends('layout.dashboard')

@section('main-content')
		<div class="w-full rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				{{-- Account Information --}}
				<h2 class="mb-1 pb-4 text-lg font-semibold leading-tight tracking-tight text-gray-800 dark:text-gray-200">
						Informasi Akun
				</h2>
				@session('success-update-profile')
						<x-alert.alert-success class="mb-5">Berhasil Ganti Foto Profil</x-alert.alert-success>
				@endsession
				@error('userProfile')
						<x-alert.alert-error class="mb-5">{{ $message }}</x-alert.alert-error>
				@enderror
				<div class="group mb-5 block flex-shrink-0 px-3">
						<div class="flex items-center justify-between">
								<div class="flex items-center">
										@if (auth()->user()->urlProfile)
												<img class="size-[62px] inline-block rounded-full object-cover ring-2 ring-white dark:ring-gray-800"
														src="/storage/avatars/{{ auth()->user()->urlProfile }}" alt="Image Description">
										@else
												<span
														class="size-[62px] flex items-center justify-center rounded-full bg-gray-200 text-lg ring-2 ring-white dark:bg-gray-700 dark:text-white dark:ring-gray-800">
														{{ getInitials(auth()->user()->nama) }}
												</span>
										@endif
										<div class="ms-3">
												<h3 class="font-semibold text-gray-800 dark:text-white">{{ auth()->user()->nama }}</h3>
												<p class="text-sm font-medium text-gray-400 dark:text-gray-500">{{ auth()->user()->npwp }}</p>
										</div>
								</div>
								<button type="button"
										class="ml-10 inline-flex items-center gap-x-2 justify-self-end rounded-lg border border-transparent bg-blue-600 px-2 py-1.5 text-sm text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50"
										data-hs-overlay="#hs-change-avatar">
										Unggah Foto
								</button>
								{{-- Modal Content --}}
								<div id="hs-change-avatar"
										class="hs-overlay size-full pointer-events-none fixed start-0 top-0 z-[80] hidden overflow-y-auto overflow-x-hidden opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
										<div class="m-3 sm:mx-auto sm:w-full sm:max-w-lg">
												<div
														class="pointer-events-auto flex flex-col rounded-xl border bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:shadow-gray-700/70">
														<form action="{{ route('updateProfile.store') }}" method="POST" enctype="multipart/form-data"
																accept="image/*">
																<div class="flex items-center justify-between border-b px-4 py-3 dark:border-gray-700">
																		<h3 class="font-bold text-gray-800 dark:text-white">
																				Unggah Foto Profil
																		</h3>
																		<button type="button"
																				class="size-7 flex items-center justify-center rounded-full border border-transparent text-sm font-semibold text-gray-800 hover:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:text-white dark:hover:bg-gray-700"
																				data-hs-overlay="#hs-change-avatar">
																				<span class="sr-only">Batal</span>
																				<svg class="size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																						viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																						stroke-linejoin="round">
																						<path d="M18 6 6 18"></path>
																						<path d="m6 6 12 12"></path>
																				</svg>
																		</button>
																</div>
																<div class="overflow-y-auto p-4">
																		@csrf
																		<label for="input-file-avatar" id="label-file-avatar"
																				class="flex h-80 w-full cursor-pointer flex-col items-center justify-center rounded-md border-2 border-dashed border-gray-200 bg-white text-gray-300 dark:border-gray-700 dark:bg-gray-800">
																				<svg xmlns="http://www.w3.org/2000/svg" width="5em" viewBox="0 0 24 24">
																						<path fill="currentColor"
																								d="M11 16V7.85l-2.6 2.6L7 9l5-5l5 5l-1.4 1.45l-2.6-2.6V16zm-5 4q-.825 0-1.412-.587T4 18v-3h2v3h12v-3h2v3q0 .825-.587 1.413T18 20z" />
																				</svg>
																				<p class="text-sm font-medium">Unggah File disini (maks 1024KB)</p>
																		</label>
																		<input type="file" name="userProfile" id="input-file-avatar" class="hidden">
																</div>
																<div class="flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-gray-700">
																		<button type="button"
																				class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800"
																				data-hs-overlay="#hs-change-avatar">
																				Batal
																		</button>
																		<button type="submit"
																				class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
																				Unggah
																		</button>
																</div>
														</form>
												</div>
										</div>
								</div>
								{{-- Modal Content --}}
						</div>
				</div>

				<div class="grid grid-cols-1 gap-y-3 lg:grid-cols-2 lg:gap-5">
						<div class="space-y-1">
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Nama Perusahaan</p>
										<p class="col-span-2">{{ auth()->user()->namaPerusahaan }}</p>
								</div>
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Alamat Perusahaan</p>
										<p class="col-span-2">{{ auth()->user()->alamatPerusahaan }}</p>
								</div>
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Telepon Perusahaan</p>
										<p class="col-span-2">{{ auth()->user()->teleponPerusahaan }}</p>
								</div>
						</div>
						<div class="space-y-1">
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Nama Pengguna</p>
										<p class="col-span-2">{{ auth()->user()->username }}</p>
								</div>
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Email</p>
										<p class="col-span-2">{{ auth()->user()->email }}</p>
								</div>
								<div class="grid grid-cols-3 gap-4 p-2 text-sm dark:text-gray-200">
										<p class="col-span-1">Telepon</p>
										<p class="col-span-2">{{ auth()->user()->telepon }}</p>
								</div>
						</div>
				</div>
		</div>
		<div class="w-full rounded-2xl bg-white p-5 shadow-xl dark:bg-gray-800">
				{{-- Account Security --}}
				<h2
						class="mb-1 pb-4 font-poppins text-lg font-semibold leading-tight tracking-tight text-gray-800 dark:text-gray-200">
						Keamanan Akun
				</h2>
				@session('success-reset-password')
						<x-alert.alert-success>{{ $value }}</x-alert.alert-success>
				@endsession
				<form action="{{ route('change-password.store') }}" method="post" class="max-w-lg">
						@csrf
						<div class="flex items-center justify-between p-2 text-sm dark:text-gray-200">
								<label for="hs-toggle-old-password">Kata Sandi Lama</label>
								<div class="max-w-sm lg:max-w-md">
										<div class="relative">
												<input id="hs-toggle-old-password" type="password"
														class="{{ $errors->has('oldPassword') ? 'border-red-500' : '' }} block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														name="oldPassword" placeholder="Masukkan Sandi">
												@error('oldPassword')
														<p class="text-wrap max-w-56 mt-2 text-xs text-red-600">{{ $message }}</p>
												@enderror
												<button type="button" data-hs-toggle-password='{"target": "#hs-toggle-old-password"}'
														class="absolute end-0 top-0 rounded-e-md p-3.5">
														<iconify-icon icon="ph:eye-light" class="block hs-password-active:hidden"></iconify-icon>
														<iconify-icon icon="ph:eye-slash" class="hidden hs-password-active:block"></iconify-icon>
												</button>
										</div>
								</div>
						</div>
						<div class="flex items-center justify-between p-2 text-sm dark:text-gray-200">
								<label for="hs-toggle-new-password">Kata Sandi Baru</label>
								<div class="max-w-sm lg:max-w-md">
										<div class="relative">
												<input id="hs-toggle-new-password" type="password"
														class="{{ $errors->has('newPassword') ? 'border-red-500' : '' }} block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														name="newPassword" placeholder="Masukkan Sandi">
												@error('newPassword')
														<p class="text-wrap max-w-56 mt-2 text-xs text-red-600">{{ $message }}</p>
												@enderror
												<button type="button" data-hs-toggle-password='{"target": "#hs-toggle-new-password"}'
														class="absolute end-0 top-0 rounded-e-md p-3.5">
														<iconify-icon icon="ph:eye-light" class="block hs-password-active:hidden"></iconify-icon>
														<iconify-icon icon="ph:eye-slash" class="hidden hs-password-active:block"></iconify-icon>
												</button>
										</div>
								</div>
						</div>
						<div class="flex items-center justify-between p-2 text-sm dark:text-gray-200">
								<label for="hs-toggle-confirm-password">Konfirmasi Kata Sandi</label>
								<div class="max-w-sm lg:max-w-md">
										<div class="relative">
												<input id="hs-toggle-confirm-password" type="password"
														class="{{ $errors->has('newPassword_confirmation') ? 'border-red-500' : '' }} block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:placeholder-gray-500 dark:focus:ring-gray-600"
														name="newPassword_confirmation" placeholder="Masukkan Sandi">
												@error('newPassword_confirmation')
														<p class="text-wrap max-w-56 mt-2 text-xs text-red-600">{{ $message }}</p>
												@enderror
												<button type="button" data-hs-toggle-password='{"target": "#hs-toggle-confirm-password"}'
														class="absolute end-0 top-0 rounded-e-md p-3.5">
														<iconify-icon icon="ph:eye-light" class="block hs-password-active:hidden"></iconify-icon>
														<iconify-icon icon="ph:eye-slash" class="hidden hs-password-active:block"></iconify-icon>
												</button>
										</div>
								</div>
						</div>
						<button type="submit"
								class="mt-5 block w-full items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-center text-sm text-white hover:bg-blue-600 disabled:pointer-events-none disabled:opacity-50">
								Perbarui Sandi
						</button>
				</form>
		</div>
@endsection


@push('script-bawah')
		<script>
				// Avatar user upload preview
				const avatarInput = document.getElementById("input-file-avatar");
				avatarInput.addEventListener("change", function() {
						const reader = new FileReader();
						reader.addEventListener("load", () => {
								const avatarLabel = document.getElementById("label-file-avatar");
								avatarLabel.innerHTML =
										`<p>Preview</p><img src="${reader.result}" class="w-64 h-64 rounded-full object-cover" />`;
						});
						reader.readAsDataURL(this.files[0]);
				});
		</script>
@endpush
