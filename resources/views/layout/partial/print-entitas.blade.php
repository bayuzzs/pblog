<div class="col-span-7">
		{{-- pengirim --}}
		<div class="border-b-2 border-black">
				<div class="flex justify-between">
						<p class="px-1 underline">PENGIRIM</p>
						<p class="min-h-6 min-w-10 border-b-2 border-l-2 border-black px-1 py-1 text-center">
								{{ $pengirim ? ($pengirim->negara ? $pengirim->negara->kodeNegara : '') : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[150px_auto] py-2">
						<p class="px-1">1. Nama, Alamat</p>
						<p>
								{{ $pengirim ? $pengirim->nama : '' }}{{ $pengirim ? ", $pengirim->alamat" : '' }}
						</p>
				</div>
				<div class="flex justify-end">
						<p class="min-h-6 min-w-[200px] border-l-2 border-t-2 border-black px-1 text-right">
								{{ $pengirim ? ($pengirim->negara ? $pengirim->negara->namaNegara : '') : '' }}
						</p>
				</div>
		</div>
		{{-- penjual --}}
		<div class="border-b-2 border-black">
				<div class="flex justify-between">
						<p class="px-1 underline">PENJUAL</p>
						<p class="min-h-6 min-w-10 border-b-2 border-l-2 border-black px-1 py-1 text-center">
								{{ $penjual ? ($penjual->negara ? $penjual->negara->kodeNegara : '') : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[150px_auto] py-2">
						<p class="px-1">1a. Nama, Alamat</p>
						<p>
								{{ $penjual ? $penjual->nama : '' }}{{ $penjual ? ", $penjual->alamat" : '' }}
						</p>
				</div>
				<div class="flex justify-end">
						<p class="min-h-6 min-w-[200px] border-l-2 border-t-2 border-black px-1 text-right">
								{{ $penjual ? ($penjual->negara ? $penjual->negara->namaNegara : '') : '' }}
						</p>
				</div>
		</div>
		{{-- Importir --}}
		<div class="border-b-2 border-black">
				<div class="flex justify-between">
						<p class="px-1 underline">IMPORTIR</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">2. Identitas</p>
						<p>
								{{ $importir ? $importir->noIdentitas : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">3. Nama, Alamat</p>
						<p>
								{{ $importir ? $importir->nama : '' }}{{ $importir ? ", $importir->alamat" : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">4. Status</p>
						<p></p>
				</div>
				<div class="grid grid-cols-[150px_auto] py-2">
						<p class="px-1">5. NIB</p>
						<p>
								{{ $importir ? $importir->noApi : '' }}
						</p>
				</div>
		</div>
		{{-- Pemilik Barang --}}
		<div class="border-b-2 border-black">
				<div class="flex justify-between">
						<p class="px-1 underline">PEMILIK BARANG</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">2a. Identitas</p>
						<p>
								{{ $pemilikBarang ? $pemilikBarang->noIdentitas : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">3a. Nama, Alamat</p>
						<p>
								{{ $pemilikBarang ? $pemilikBarang->nama : '' }}{{ $pemilikBarang ? ", $pemilikBarang->alamat" : '' }}
						</p>
				</div>
		</div>
		{{-- PPJK --}}
		<div>
				<div class="flex justify-between">
						<p class="px-1 underline">PPJK</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">6. NPWP</p>
						<p>
								-
						</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">7. Nama, Alamat</p>
						<p>
								-
						</p>
				</div>
				<div class="grid grid-cols-[155px_auto] py-2">
						<p class="px-1">8. NP-PPJK</p>
						<p>
								-
						</p>
				</div>
		</div>
</div>
