<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    /* disabled the arrow in input number */
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    .bg-auth {
      background-image: url('{{ asset('images/background/bg-auth.jpg') }}');
      background-size: cover;
    }
  </style>
</head>

<body>
  <section class="bg-auth">
    <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:min-h-screen lg:py-0">
      <a href="{{ route('home') }}" class="mb-6 flex flex-col items-center text-2xl font-semibold text-gray-900">
        <img class="max-w-72 mr-2" src="{{ asset('images/logo/polibatam-logistik-caption.png') }}" alt="logo">
      </a>
      <div class="w-full bg-[rgba('255,255,255,0.7')] px-6 pb-6 backdrop-blur sm:max-w-md sm:px-8 sm:pb-8 md:mt-0">
        <div class="mb-4">
          <ul class="-mb-px flex flex-wrap justify-center border-b-2 border-gray-100 text-center text-sm font-medium"
            id="default-tab" data-tabs-toggle="#auth-tab-content" role="tablist">
            {{-- Login Tab --}}
            <li class="-mb-[2px] me-2" role="presentation">
              <button class="inline-block font-['Poppins'] rounded-t-lg border-b-2 p-4" id="profile-tab"
                data-tabs-target="#login" type="button" role="tab" aria-controls="profile"
                aria-selected="{{ session('activeTab') == 'login' ? 'true' : 'false' }}">Masuk</button>
            </li>
            {{-- Login Tab End --}}
            {{-- Register Tab --}}
            <li class="-mb-[2px] me-2" role="presentation">
              <button
                class="inline-block font-['Poppins'] rounded-t-lg border-b-2 p-4 hover:border-gray-300 hover:text-gray-600"
                id="dashboard-tab" data-tabs-target="#register" type="button" role="tab" aria-controls="dashboard"
                aria-selected="{{ session('activeTab') == 'register' ? 'true' : 'false' }}">Daftar</button>
            </li>
            {{-- Register Tab End --}}
          </ul>
        </div>
        <div id="auth-tab-content">
          {{-- Login Tab Content --}}
          <div class="hidden px-4" id="login" role="tabpanel" aria-labelledby="profile-tab">
            <form class="space-y-3 md:space-y-4 lg:mt-5" action="{{ route('login.store') }}" method="POST">
              @csrf
              @session('status')
                <p class="mt-2 text-sm text-green-600">{{ $value }}</p>
              @endsession
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                  </span>
                  <input type="text" id="username" name="username" placeholder="Username"
                    value="{{ old('username') }}" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('username')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" fill="currentColor" viewBox="2 2 20 20">
                      <path fill-rule="evenodd"
                        d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                  <input type="password" id="password" name="password" placeholder="Password" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('password')
                  <p class="mb-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div class="text-md font-medium text-gray-500 dark:text-gray-300">
                Lupa Password? Klik <a href="{{ route('password.request') }}"
                  class="text-blue-700 hover:underline dark:text-blue-500">Disini</a>
              </div>
              <button type="submit"
                class="me-2 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-md font-['Poppins'] text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Masuk</button>
            </form>
          </div>
          {{-- Login Tab Content End --}}
          {{-- Register Tab Content --}}
          <div class="hidden px-4" id="register" role="tabpanel" aria-labelledby="dashboard-tab">
            <form class="space-y-3 md:space-y-4 lg:mt-5" action="{{ route('register.store') }}" method="POST">
              @csrf
              @session('status')
                <p class="mt-2 text-sm text-green-600">{{ $value }}</p>
              @endsession
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" fill="currentColor" viewBox="0 0 22 22">
                      <path fill-rule="evenodd"
                        d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-8-5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm1.942 4a3 3 0 0 0-2.847 2.051l-.044.133-.004.012c-.042.126-.055.167-.042.195.006.013.02.023.038.039.032.025.08.064.146.155A1 1 0 0 0 6 17h6a1 1 0 0 0 .811-.415.713.713 0 0 1 .146-.155c.019-.016.031-.026.038-.04.014-.027 0-.068-.042-.194l-.004-.012-.044-.133A3 3 0 0 0 10.059 14H7.942Z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                  <input type="number" id="npwp" name="npwp" placeholder="Nomor Identitas (NPWP)"
                    value="{{ old('npwp') }}" required
                    class="block w-full min-w-0 flex-1 rounded-none rounded-e-lg border border-gray-300 p-2 text-sm font-light font-['Poppins'] text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('npwp')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              {{-- Accordion Start --}}
              <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                  <button type="button"
                    class="flex w-full items-center justify-between gap-3 rounded-t-lg text-sm font-['Poppins'] border border-gray-200 p-3 text-gray-500 hover:bg-gray-100 rtl:text-right"
                    data-accordion-target="#accordion-collapse-body-1" aria-controls="accordion-collapse-body-1">
                    <span>Data Perusahaan</span>
                    <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                    </svg>
                  </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                  <div class="space-y-3 rounded-b-lg bg-gray-100 p-5">
                    <div>
                      <div class="flex">
                        <span
                          class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                          <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                              clip-rule="evenodd" />
                          </svg>
                        </span>
                        <input type="text" id="namaPerusahaan" name="namaPerusahaan"
                          placeholder="Nama Perusahaan" value="{{ old('namaPerusahaan') }}" required
                          class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                      </div>
                      @error('namaPerusahaan')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </div>
                    <div>
                      <div class="flex">
                        <span
                          class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                          <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                              clip-rule="evenodd" />
                          </svg>
                        </span>
                        <input type="text" id="alamatPerusahaan" name="alamatPerusahaan"
                          placeholder="Alamat Perusahaan" value="{{ old('alamatPerusahaan') }}" required
                          class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                      </div>
                      @error('alamatPerusahaan')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </div>
                    <div>
                      <div class="flex">
                        <span
                          class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                          <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                              clip-rule="evenodd" />
                          </svg>
                        </span>
                        <input type="number" id="teleponPerusahaan" name="teleponPerusahaan"
                          placeholder="Telepon Perusahaan" value="{{ old('teleponPerusahaan') }}" required
                          class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                      </div>
                      @error('teleponPerusahaan')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              {{-- Accordion End --}}
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                  </span>
                  <input type="text" id="nama" name="nama" placeholder="Nama Lengkap"
                    value="{{ old('nama') }}" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('nama')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 22 22">
                      <path
                        d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                    </svg>
                  </span>
                  <input type="number" id="telepon" name="telepon" placeholder="No Telepon"
                    value="{{ old('telepon') }}" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('telepon')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                      <path
                        d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                    </svg>
                  </span>
                  <input type="email" id="email" name="email" placeholder="E-Mail"
                    value="{{ old('email') }}" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('email')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <div class="flex">
                  <span
                    class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                  </span>
                  <input type="text" id="username" name="username" placeholder="Username"
                    value="{{ old('username') }}" required
                    class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                @error('username')
                  <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <div class="gap-2 space-y-3 sm:flex sm:space-y-0">
                  <div class="flex">
                    <span
                      class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                      <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="2 2 20 20">
                        <path fill-rule="evenodd"
                          d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                    <input type="password" id="password" name="password" placeholder="Password" required
                      class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                  </div>
                  <div class="flex">
                    <span
                      class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-200 px-3 text-sm text-gray-900">
                      <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="2 2 20 20">
                        <path fill-rule="evenodd"
                          d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                      placeholder="Konfirmasi Password" required
                      class="block w-full min-w-0 flex-1 font-light font-['Poppins'] rounded-none rounded-e-lg border border-gray-300 p-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                  </div>
                </div>
                @error('password')
                  <p class="mb-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <button type="submit"
                class="me-2 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-md font-['Poppins'] text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Daftar</button>
            </form>
          </div>
          {{-- Register Tab Content End --}}
        </div>
      </div>
    </div>
  </section>
</body>

</html>
