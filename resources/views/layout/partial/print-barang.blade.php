<div class="grid grid-cols-[40px_400px_200px_240px_210px_210px] grid-rows-[90px] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<p>31. No</p>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>32. Pos Tarif HS</p>
				<p>Uraian Jenis Barang, Merek, Tipe, Spesifikasi Wajib</p>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>33. Keterangan</p>
				<div class="px-5">
						<p>- Fasilitas & No. Urut</p>
						<p>- Persyaratan & No</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>34. Tarif dan Fasilitas</p>
				<div class="px-5">
						<p>Merek</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>35. Jumlah dan Jenis Satuan Barang</p>
		</div>
		<div class="px-1">
				<p>36. - Nilai Pabean</p>
				<div class="px-7">
						<p>- Jenis Nilai</p>
				</div>
		</div>
</div>
@forelse ($barangs as $barang)
		<div
				class="grid grid-cols-[40px_400px_200px_240px_210px_210px] grid-rows-[minmax(90px,_auto)] border-b-2 border-black">
				<div class="border-r-2 border-black text-center">
						<p>{{ $loop->iteration }}</p>
				</div>
				<div class="border-r-2 border-black px-1">
						<p>Pos Tarif: {{ $barang->kodeHS }}</p>
						<p>Uraian: {{ $barang->uraian }}</p>
						<p>Merek: {{ $barang->merk }}</p>
						<p>Tipe: {{ $barang->tipe }}</p>
						<p>Spesifikasi: {{ $barang->spesifikasiLain }}</p>
						<p>Nama Negara: {{ $barang->negara ? $barang->negara->namaNegara : '' }}</p>
				</div>
				<div class="border-r-2 border-black px-5">
						<p>-</p>
				</div>
				<div class="border-r-2 border-black px-6">
						<div class="flex justify-between">
								<p>BM</p>
								<p>-</p>
						</div>
						<div class="flex justify-between">
								<p>PPH</p>
								<p>-</p>
						</div>
						<div class="flex justify-between">
								<p>PPN</p>
								<p>-</p>
						</div>
				</div>
				<div class="border-r-2 border-black px-5">
						<p>{{ $barang->nilaiKemasan }}</p>
						<p>{{ $barang->jenisKemasan->namaKemasan }} ({{ $barang->kodeJenisKemasan }})</p>
						<br>
						<p>{{ $barang->nilaiKemasan }}</p>
						<p>{{ $barang->jenisKemasan->namaKemasan }} ({{ $barang->kodeJenisKemasan }})</p>
				</div>
				<div class="px-1">
						<div class="px-5">
								<p>- {{ $transaksi ? $transaksi->ndpbm * $barang->cif : '0.00' }}</p>
								<p>- {{ $barang->jenisNilai }}</p>
						</div>
				</div>
		</div>
@empty
		<div
				class="grid grid-cols-[40px_400px_200px_240px_210px_210px] grid-rows-[minmax(90px,_auto)] border-b-2 border-black">
				<div class="border-r-2 border-black text-center">
						<p>1</p>
				</div>
				<div class="border-r-2 border-black px-1">
						<p>Pos Tarif: -</p>
						<p>Uraian: -</p>
						<p>Merek: -</p>
						<p>Tipe: -</p>
						<p>Spesifikasi: -</p>
						<p>Nama Negara: -</p>
				</div>
				<div class="border-r-2 border-black px-1">
						{{-- LET ME ALONE!! --}}
				</div>
				<div class="border-r-2 border-black px-1">
						<p>34. Tarif dan Fasilitas</p>
						<div class="px-5">
								<p>BM -</p>
								<p>PPN -</p>
								<p>PPH -</p>
						</div>
				</div>
				<div class="border-r-2 border-black px-1">
						<p>35. - Jumlah dan Jenis Satuan Barang</p>
						<div class="px-5">
								<p>- Berat Bersih (Kg)</p>
						</div>
				</div>
				<div class="px-1">
						<div class="px-5">
						</div>
				</div>
		</div>
@endforelse
