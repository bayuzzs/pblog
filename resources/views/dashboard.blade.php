@extends('layout.dashboard')

@section('main-content')
  @auth('petugas')
    <div class="bg-white shadow-md rounded-md w-screen p-5">
      <p class="mb-1 font-bold font-['Poppins'] leading-tight tracking-tight pb-4 text-gray-900 md:text-3xl">
        Daftar Akun Pengimpor
      </p>
      {{-- Alert info start --}}
    <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">Informasi!</span> Administrator bisa melihat daftar akun pengimpor disini.
      </div>
    </div>
    {{-- Alert info end--}}
    {{-- Search bar start--}}
      <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        
        
          <label for="table-search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="text" id="table-search-users"
              class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Cari NPWP akun pengimpor">
              <button type="submit" class="text-white absolute end-px top-px bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2   dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
    
          </div>
        </div>
        {{-- Search bar end--}}
        {{-- Table start--}}
      <div class="relative shadow overflow-x-auto sm:rounded-lg">
        
        <table class="w-full text-md text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-md rounded text-white uppercase  bg-blue-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="p-4">
                
              </th>
              <th scope="col" class="px-6 py-3">
                Username & Email
              </th>
              <th scope="col" class="px-6 py-3">
                NPWP
              </th>
              <th scope="col" class="px-6 py-3">
                Nama Lengkap
              </th>
              <th scope="col" class="px-6 py-3">
                No. Telepon
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class=" border-b-2 border-blue-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                
              </td>
              <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Epnooo</div>
                  <div class="font-normal text-gray-500">hanif.sims@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
               <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
                Ibnu Hanif Salsabila
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
            <tr class=" border-b-2 border-blue-100  dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                
              </td>
              <th scope="row"
                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Raramogus</div>
                  <div class="font-normal text-gray-500">simanjuntak@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
                Rahel Simanjuntak
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
            <tr class="
             border-b-2 border-blue-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
              </td>
              <th scope="row"
                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Bayuzzs</div>
                  <div class="font-normal text-gray-500">babayo@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
               Bayu Maulana
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
            <tr class=" border-b-2 border-blue-100 dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                
              </td>
              <th scope="row"
                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">AkbDUAR</div>
                  <div class="font-normal text-gray-500">Hafizzzzz@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
                Akbar Hafiz
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
            <tr class="border-b-2 border-blue-100 dark:bg-gray-800 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                
              </td>
              <th scope="row"
                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Ceceeh</div>
                  <div class="font-normal text-gray-500">theona@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
                Yocelyn Theona Setiawan
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
            <tr class=" dark:bg-gray-800 hover:bg-blue-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                
              </td>
              <th scope="row"
                class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">PaceBagoyang</div>
                  <div class="font-normal text-gray-500">kobo@flowbite.com</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <p href="#" class="font-medium text-blue-600 dark:text-blue-500 ">4342301012</p>
              </td>
              <td class="px-6 py-4">
                Kobo Kanaeru
              </td>
              <td class="px-6 py-4">
                089623256645
              </td>
            </tr>
          </tbody>
        </table>
        {{-- Table end--}}
        {{-- Bottom Navigation table start--}}
        <nav class="flex border-t-2 border-blue-100 flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
              Showing
              <span class="font-semibold text-gray-900 dark:text-white">1-6</span>
              of
              <span class="font-semibold text-gray-900 dark:text-white">60</span>
          </span>
          <ul class="inline-flex items-stretch -space-x-px">
              <li>
                  <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <span class="sr-only">Previous</span>
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                  </a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
              </li>
              <li>
                  <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <span class="sr-only">Next</span>
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                  </a>
              </li>
          </ul>
      </nav>
      {{-- Bottom Navigation table end--}}
      </div>
      

    </div>
  @endauth
@endsection
