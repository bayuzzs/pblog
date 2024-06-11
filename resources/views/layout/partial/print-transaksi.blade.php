<div class="col-span-6 border-l-2 border-black text-sm">
		<div class="h-12 border-b-2 border-black">
				<p class="px-1 font-semibold">G. Nomor dan Tanggal Pendaftaran</p>
		</div>
		<div class="grid grid-cols-[100px_auto_100px] border-b-2 border-black">
				<p class="px-1">9. Cara</p>
				<p>{{ $pengangkutan ? $pengangkutan->printCaraAngkut($pengangkutan->kodeCaraAngkut) : '' }}</p>
				<p class="border-l-2 border-black text-center">{{ $pengangkutan ? $pengangkutan->kodeCaraAngkut : '' }}</p>
		</div>
		<div class="border-b-2 border-black">
				<div class="grid grid-cols-[auto_100px]">
						<p class="px-1">10. Nama Sarana Pengangkutan & No. Voy/Flight</p>
						<p class="border-b-2 border-l-2 border-black text-center">
								{{ $pengangkutan ? $pengangkutan->kodeBendera : '' }}</p>
				</div>
				<div class="min-h-8 px-8">
						<p>{{ $pengangkutan ? $pengangkutan->namaPengangkut : '' }}</p>
						<p>{{ $pengangkutan ? $pengangkutan->nomrPengangkut : '' }}</p>
				</div>
				<div class="flex justify-end">
						<p class="min-h-5 min-w-[150px] border-l-2 border-t-2 border-black text-right">
								{{ $pengangkutan ? ($pengangkutan->negara ? $pengangkutan->negara->namaNegara : '') : '' }}
						</p>
				</div>
		</div>
		<div class="grid grid-cols-[200px_auto] border-b-2 border-black">
				<p class="px-1">11. Perkiraan Tanggal</p>
				<p>{{ $pengangkutan ? $pengangkutan->tanggalTiba : '' }}</p>
		</div>
		<div class="border-b-2 border-black">
				<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="flex items-center px-1">12. Pelabuhan Muat</p>
						<p class="flex items-center">
								{{ $pengangkutan ? ($pengangkutan->pelabuhanMuat ? $pengangkutan->pelabuhanMuat->namaPelabuhan : '') : '' }}
						</p>
						<p class="border-b-2 border-l-2 border-black text-center">
								{{ $pengangkutan ? $pengangkutan->kodePelMuat : '' }}</p>
				</div>
				<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="flex items-center px-1">13. Pelabuhan Transit</p>
						<p class="flex items-center">
								{{ $pengangkutan ? ($pengangkutan->pelabuhanTransit ? $pengangkutan->pelabuhanTransit->namaPelabuhan : '') : '' }}
						</p>
						<p class="border-l-2 border-black text-center">{{ $pengangkutan ? $pengangkutan->kodePelTransit : '' }}
						</p>
				</div>
				<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="flex items-center px-1">14. Pelabuhan Tujuan</p>
						<p class="flex items-center">
								{{ $pengangkutan ? ($pengangkutan->pelabuhanTujuan ? $pengangkutan->pelabuhanTujuan->namaPelabuhan : '') : '' }}
						</p>
						<p class="border-l-2 border-t-2 border-black text-center">
								{{ $pengangkutan ? $pengangkutan->kodePelTujuan : '' }}
						</p>
				</div>
		</div>
		<div class="border-b-2 border-black">
				<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="px-1">15. Invoice</p>
						<p>No</p>
						<p>Tgl</p>
				</div>
				<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="px-1">16. Transaksi</p>
						<p>No</p>
						<p>Tgl</p>
				</div>
				<div class="ITEMS grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<p class="px-1">17. House-Maste</p>
						<p>No</p>
						<p>Tgl</p>
				</div>
				<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
						<div>
								<p class="px-1">18. BC 1.1/1.2</p>
						</div>
						<div>
								<p>No {{ $pengangkutan ? $pengangkutan->nomorBc : '' }}</p>
								<p>Pos. {{ $pengangkutan ? $pengangkutan->nomorPosBc : '' }}</p>
						</div>
						<div>
								<p>Tgl {{ $pengangkutan ? $pengangkutan->tanggalBc : '' }}</p>
								<p>Sub Pos. {{ $pengangkutan ? $pengangkutan->nomorSubPosBc : '' }}</p>
						</div>
				</div>
		</div>
		<div class="border-b-2 border-black">
				<div class="flex justify-between">
						<p class="px-1">19. Pemenuhan</p>
						<p class="min-w-[150px] border-b-2 border-l-2 border-black"></p>
				</div>
				<div class="min-h-[20px]">
						<p></p>
				</div>
				<div class="grid grid-cols-[20px_290px_290px]">
						<span></span>
						<p>No.</p>
						<p>Tgl</p>
				</div>
		</div>
		<div class="border-b-2 border-black">
				<div class="grid grid-cols-[auto_100px]">
						<p class="px-1">20. Tempat</p>
						<p class="border-b-2 border-l-2 border-black text-center">
								{{ $pengangkutan ? $pengangkutan->kodeTps : '' }}
						</p>
				</div>
				<div class="px-8">
						<p class="min-h-4">
								{{ $pengangkutan ? $pengangkutan->kodeTps : '' }}
						</p>
				</div>
		</div>
		<div class="grid grid-cols-[300px_300px] border-b-2 border-black">
				<div class="border-r-2 border-black">
						<div class="grid grid-cols-[auto_100px]">
								<p class="px-1">21. Valuta</p>
								<p class="border-b-2 border-l-2 border-black text-center">
										{{ $transaksi ? $transaksi->kodeValuta : '' }}
								</p>
						</div>
						<div class="px-8">
								<p class="min-h-4">
										{{ $transaksi ? ($transaksi->valuta ? $transaksi->valuta->namaValuta : '') : '' }}
								</p>
						</div>
				</div>
				<div class="border-r-2 border-black">
						<p class="px-1">22. NDPBM</p>
						<div class="px-8">
								<p>
										{{ $transaksi ? $transaksi->ndpbm : '0.00' }}
								</p>
						</div>
				</div>
		</div>
		<div class="grid grid-cols-[300px_300px] border-b-2 border-black">
				<div class="space-y-2 border-r-2 border-black">
						<p class="min-h-4 px-1">23. Nilai: {{ $transaksi ? $transaksi->cif : '0.00' }}</p>
						<p class="min-h-4 px-1">24. Asuransi DN/LN: {{ $transaksi ? $transaksi->nilaiAsuransi : '0.00' }}</p>
						<p class="min-h-4 px-1">25. Freight: {{ $transaksi ? $transaksi->freight : '0.00' }} </p>
				</div>
				<div class="border-r-2 border-black">
						<div class="grid grid-cols-[auto_100px]">
								<p class="px-1">26. Nilai Pabean</p>
								<p class="min-w-[100px] border-b-2 border-l-2 border-black text-center"></p>
						</div>
						<div class="px-8">
								<p>{{ $transaksi ? (float) $transaksi->cif * (float) $transaksi->ndpbm : '0.00' }}</p>
								<p>Rp. {{ $transaksi ? (float) $transaksi->cif * (float) $transaksi->ndpbm : '0' }}</p>
						</div>
				</div>
		</div>
</div>
