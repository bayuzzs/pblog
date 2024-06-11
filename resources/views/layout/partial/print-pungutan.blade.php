<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">3</p>
						<p class="px-3">BM</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BM']->telahDilunasi : '0.0000' }}
		</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">3</p>
						<p class="px-3">BM KITE</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="px-1 text-right">0.0000</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">3</p>
						<p class="px-3">BMT</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['BMT']->telahDilunasi : '0.0000' }}
		</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">4</p>
						<p class="px-3">Cukai</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['CUKAI']->telahDilunasi : '0.0000' }}
		</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">4</p>
						<p class="px-3">PPN</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPN']->telahDilunasi : '0.0000' }}
		</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">4</p>
						<p class="px-3">PPnBM</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="border-r-2 border-black px-1 text-right">0.0000</div>
		<div class="px-1 text-right">0.0000</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">4</p>
						<p class="px-3">PPH</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['PPH']->telahDilunasi : '0.0000' }}
		</div>
</div>
<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
		<div class="border-r-2 border-black px-1">
				<div class="grid grid-cols-[30px_auto]">
						<p class="border-r-2 border-black text-center">4</p>
						<p class="px-3 font-semibold">TOTAL</p>
				</div>
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->dibayar : '0.0000' }}</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->ditanggungPemerintah : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->ditunda : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->tidakDipungut : '0.0000' }}
		</div>
		<div class="border-r-2 border-black px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->dibebaskan : '0.0000' }}
		</div>
		<div class="px-1 text-right">
				{{ $barangPungutans ? $barangPungutans['total']->telahDilunasi : '0.0000' }}
		</div>
</div>
