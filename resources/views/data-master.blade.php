@extends('layout.dashboard')

@section('main-content')
  <div class="bg-white shadow-md rounded-md w-screen h-max p-5">
    <p class="mb-1 font-bold font-['Poppins'] leading-tight tracking-tight pb-4 text-gray-900 md:text-3xl">
      Kelola Data Master 
    </p>
    {{-- Alert info start --}}
    <div
      class="flex items-center p-4 mb-7 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
      role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
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
    <div class="relative   pl-5  overflow-x-auto sm:rounded-lg">
      <div class="relative flex overflow-x-auto sm:rounded-lg">
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="862">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Satuan Barang Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Satuan Barang</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="516">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Jenis Dokumen Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Jenis Dokumen</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="224">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Jenis Kemasan Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Jenis Kemasan</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
      </div>
      <div class="relative flex overflow-x-auto sm:rounded-lg">
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="1532">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Kode HS Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Kode HS</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="96">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Valuta Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Valuta</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="167">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Negara Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Negara</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
      </div>
      <div class="relative flex overflow-x-auto sm:rounded-lg">
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins'] "><span class="num" data-val="932">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Pelabuhan Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Pelabuhan</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
          <div class="w-[410px] h-[230px] left-[6px] rounded-lg top-0 absolute bg-white border-2 border-blue-600">
            <span class="pt-12 pl-5 absolute text-center  text-blue-600 text-[96px] font-bold font-['Poppins']"><span class="num" data-val="778">000</span></span>
            <span class="pt-40 pl-6 absolute text-center text-blue-600 text-2xl font-normal font-['Poppins']">Kantor Terdata</span>
          </div>
          <div class="w-[410px] h-[60px] rounded-t-lg left-[6px] top-0 absolute bg-blue-600">
            <p class="pt-3 text-center text-white text-2xl font-bold font-['Poppins']">Kantor</p>
          </div>
          <button class="w-[428px] h-10 left-0 top-[215px] absolute bg-rose-500 text-white hover:bg-rose-700 font-[poppins] font-medium text-lg rounded-[5px]">Kelola Data ></button>     
        </div>
        <div class="w-[500px] h-[300px] flex-1 relative">
       </div>
      </div>
      
    </div>
    


  </div>
  

@endsection
