<div class="grid grid-cols-[440px_440px_210px_200px] grid-rows-[100px] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<p>27. Nomor, Ukuran, dan Tipe</p>
				<div class="px-10">
						@forelse ($kontainers as $kontainer)
								<p>- {{ $kontainer->nomor }}, {{ $kontainer->printUkuran($kontainer->ukuran) }},
										{{ $kontainer->printTipe($kontainer->tipe) }}</p>
						@empty
								<p>-</p>
						@endforelse
				</div>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>28. Jumlah, Jenis, dan Merek</p>
				<div class="px-10">
						@forelse ($kemasans as $kemasan)
								<p>- {{ $kemasan->jumlah }}, {{ $kemasan->kodeJenisKemasan }} {{ $kemasan->jenisKemasan->namaKemasan }},
										{{ $kemasan->merek }}</p>
						@empty
								<p>-</p>
						@endforelse
				</div>
		</div>
		<div class="border-r-2 border-black px-1">
				<p>29. Berat Kotor</p>
				<div class="px-5">
						<p>{{ $transaksi ? $transaksi->bruto : '0.00' }}</p>
				</div>
		</div>
		<div class="px-1">
				<p>30. Berat Bersih</p>
				<div class="px-5">
						<p>{{ $transaksi ? $transaksi->netto : '0.00' }}</p>
				</div>
		</div>
</div>
