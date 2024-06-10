<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Polibatam Logistik | BC 2.0</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-[arial]">
		<div class="w-[1300px]">
				<p class="text-center font-semibold">PEMBERITAHUAN IMPOR BARANG (PIB)</p>
		</div>
		<div class="w-fit border-2 border-black">
				<div class="grid grid-cols-[repeat(12,_100px)]">
						<div class="col-span-2">
								Kantor Pabean
						</div>
						<div class="col-span-3">
								KPPBC ATAMBUA
						</div>
						<div class="col-span-1"></div>
						<div class="col-span-2 border-2 border-black text-center">
								20/05/2024
						</div>
						<div class="col-span-4"></div>
				</div>

				<div class="grid grid-cols-[repeat(12,_100px)]">
						<div class="col-span-2">
								Nomor Pengajuan
						</div>
						<div class="col-span-3">
								73954833883325733165952678
						</div>
						<div class="col-span-1"></div>
						<div class="col-span-2">
								Tanggal Pengajuan
						</div>
						<div class="col-span-4"></div>
				</div>

				<div class="grid grid-cols-[repeat(12,_100px)]">
						<div class="col-span-2">
								A. JENIS PIB
						</div>
						<div class="col-span-4">
								<div class="grid grid-cols-[50px_100px_100px]">
										<div class="h-6 w-6 border-2 border-black text-center">1</div>
										<div>1. BIASA</div>
										<div>2. BERKALA.</div>
								</div>
						</div>
				</div>

				<div class="grid grid-cols-[repeat(12,_100px)]">
						<div class="col-span-2">
								B. JENIS IMPOR
						</div>
						<div class="col-span-10 grid auto-rows-[minmax(0,_25px)] grid-cols-[50px_repeat(6,_170px)]">
								<div class="col-span-1 h-6 w-6 border-2 border-black text-center">1</div>
								<div>1. UNTUK DIPAKAI</div>
								<div>2. SEMENTARA</div>
								<div>3. REIMPOR</div>
								<div>4. TPB</div>
								<div class="col-span-2">5. PELAYANAN SEGERA</div>
								<div></div>
								<div>6. VOORUITSLAG</div>
								<div>7. GABUNGAN.</div>
						</div>
				</div>
				<div class="grid grid-cols-[repeat(12,_100px)]">
						<div class="col-span-2">
								C. CARA PEMBAYARAN
						</div>
						<div class="col-span-10 grid auto-rows-[minmax(0,auto)] grid-cols-[50px_repeat(6,_170px)] gap-1">
								<div class="col-span-1 h-6 w-6 border-2 border-black text-center">1</div>
								<div>1. BIASA/TUNAI</div>
								<div>2. BERKALA</div>
								<div>3. DENGAN JAMINAN</div>
								<div>5. KONSINYASI (CONSIGNMENT)</div>
								<div>6. USANCE LETTER OF CREDIT</div>
								<div>7. RED CLAUSE LETTER OF CREDIT</div>
								<div></div>
								<div>8. INTER-COMPANY ACCOUNT</div>
								<div>9. GABUNGAN/ LAINNYA.</div>
								<div>10. PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA BERTAHAP</div>
								<div>11. PEMBAYARAN KEMUDIAN (OPEN ACCOUNT) SECARA TUNAI</div>
								<div>12. DILAKUKAN DI DN DENGAN PEMBAYARAN UANG TUNAI</div>
								<div>13. DILAKUKAN DI DN DENGAN PEMBAYARAN MELALUI TELEGRAPH</div>
								<div></div>
								<div>14. DILAKUKAN TANPA PEMBAYARAN</div>
								<div>15. PEMBAYARAN DIMUKA (ADVANCE PAYMENT)</div>
								<div>16. SIGHT LETTER OF CREDIT</div>
								<div>17. INKASO (COLLECTION DRAFT)</div>
						</div>
				</div>
				<div class="border-b-2 border-t-2 border-black font-semibold">
						D. DATA
				</div>
				<div class="grid grid-cols-[repeat(13,_100px)] border-b-2 border-black">
						{{-- sebelah kiri ini ges --}}
						<div class="col-span-7">
								{{-- pengirim --}}
								<div class="border-b-2 border-black">
										<div class="flex justify-between">
												<p class="underline">PENGIRIM</p>
												<p class="border-b-2 border-l-2 border-black px-1 py-1">AU</p>
										</div>
										<div class="grid grid-cols-[150px_auto] py-2">
												<p>1. Nama, Alamat</p>
												<p>TAKEDA SYDNEY DORIS ST, NORTH SYDNEY, NSW 2060</p>
										</div>
										<div class="flex justify-end">
												<p class="min-w-[200px] border-l-2 border-t-2 border-black pr-1 text-right">AUSTRALIA</p>
										</div>
								</div>
								{{-- penjual --}}
								<div class="border-b-2 border-black">
										<div class="flex justify-between">
												<p class="underline">PENJUAL</p>
												<p class="border-b-2 border-l-2 border-black px-1 py-1">AU</p>
										</div>
										<div class="grid grid-cols-[150px_auto] py-2">
												<p>1a. Nama, Alamat</p>
												<p>TAKEDA SYDNEY DORIS ST, NORTH SYDNEY, NSW 2060</p>
										</div>
										<div class="flex justify-end">
												<p class="min-w-[200px] border-l-2 border-t-2 border-black pr-1 text-right">AUSTRALIA</p>
										</div>
								</div>
								{{-- Importir --}}
								<div class="border-b-2 border-black">
										<div class="flex justify-between">
												<p class="underline">IMPORTIR</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>2. Identitas</p>
												<p>0100207170570000</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>3. Nama, Alamat</p>
												<p>CARGILL INDONESIA, WISMA 46 KOTA BNI LT. 26 JL. JEND. SUDIRMAN KAV 1</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>4. Status</p>
												<p></p>
										</div>
										<div class="grid grid-cols-[150px_auto] py-2">
												<p>5. NIB</p>
												<p>81200009822619</p>
										</div>
								</div>
								{{-- Pemilik Barang --}}
								<div class="border-b-2 border-black">
										<div class="flex justify-between">
												<p class="underline">PEMILIK BARANG</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>2a. Identitas</p>
												<p>0100207170570000</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>3a. Nama, Alamat</p>
												<p>CARGILL INDONESIA, WISMA 46 KOTA BNI LT. 26 JL. JEND. SUDIRMAN KAV 1</p>
										</div>
								</div>
								{{-- PPJK --}}
								<div>
										<div class="flex justify-between">
												<p class="underline">PPJK</p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>6. NPWP</p>
												<p></p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>7. Nama, Alamat</p>
												<p></p>
										</div>
										<div class="grid grid-cols-[155px_auto] py-2">
												<p>8. NP-PPJK</p>
												<p></p>
										</div>
								</div>
						</div>
						{{-- sebelah kanan ini ges --}}
						<div class="col-span-6 border-l-2 border-black text-sm">
								<div class="h-12 border-b-2 border-black">
										<p class="font-semibold">G. Nomor dan Tanggal Pendaftaran</p>
								</div>
								<div class="grid grid-cols-[100px_auto_100px] border-b-2 border-black">
										<p>9. Cara</p>
										<p>LAUT</p>
										<p class="border-l-2 border-black text-center">1</p>
								</div>
								<div class="border-b-2 border-black">
										<div class="grid grid-cols-[auto_100px]">
												<p>10. Nama Sarana Pengangkutan & No. Voy/Flight</p>
												<p class="border-b-2 border-l-2 border-black text-center">AU</p>
										</div>
										<div class="px-8">
												<p>TAKEDA SEA</p>
												<p>D4343TKD24</p>
										</div>
										<div class="flex justify-end">
												<p class="min-w-[150px] border-l-2 border-t-2 border-black text-right">AUSTRALIA</p>
										</div>
								</div>
								<div class="grid grid-cols-[200px_auto] border-b-2 border-black">
										<p>11. Perkiraan Tanggal</p>
										<p>21-00-2020</p>
								</div>
								<div class="border-b-2 border-black">
										<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>12. Pelabuhan Muat</p>
												<p>North Sydney</p>
												<p class="border-b-2 border-l-2 border-black text-center">AUNSY</p>
										</div>
										<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>13. Pelabuhan Transit</p>
												<p>North Sydney</p>
												<p class="border-l-2 border-black text-center">AUNSY</p>
										</div>
										<div class="grid grid-cols-[190px_auto_100px] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>14. Pelabuhan Tujuan</p>
												<p>North Sydney</p>
												<p class="border-l-2 border-t-2 border-black text-center">AUNSY</p>
										</div>
								</div>
								<div class="border-b-2 border-black">
										<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>15. Invoice</p>
												<p>No 01/INV-07/2020</p>
												<p>Tgl 27-00-2020</p>
										</div>
										<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>16. Transaksi</p>
												<p>No</p>
												<p>Tgl</p>
										</div>
										<div class="ITEMS grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<p>17. House-Maste</p>
												<p>No</p>
												<p>Tgl</p>
										</div>
										<div class="grid grid-cols-[repeat(3,200px)] grid-rows-[repeat(1,minmax(30px,_auto))]">
												<div>
														<p>18. BC 1.1/1.2</p>
												</div>
												<div>
														<p>No 917380</p>
														<p>Pos. 0091</p>
												</div>
												<div>
														<p>Tgl 01-00-2020</p>
														<p>Sub Pos. LKJD3234</p>
												</div>
										</div>
								</div>
								<div class="border-b-2 border-black">
										<div class="flex justify-between">
												<p>19. Pemenuhan</p>
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
												<p>20. Tempat</p>
												<p class="border-b-2 border-l-2 border-black text-center">GDIM</p>
										</div>
										<div class="px-8">
												<p>GUDANG IMPORTIR</p>
										</div>
								</div>
								<div class="grid grid-cols-[300px_300px] border-b-2 border-black">
										<div class="border-r-2 border-black">
												<div class="grid grid-cols-[auto_100px]">
														<p>21. Valuta</p>
														<p class="border-b-2 border-l-2 border-black text-center">USD</p>
												</div>
												<div class="px-8">
														<p>US DOLLAR</p>
												</div>
										</div>
										<div class="border-r-2 border-black">
												<p>22. NDPBM</p>
												<div class="px-8">
														<p>14,255.00</p>
												</div>
										</div>
								</div>
								<div class="grid grid-cols-[300px_300px] border-b-2 border-black">
										<div class="space-y-2 border-r-2 border-black">
												<p>23. Nilai: 3,000.00</p>
												<p>24. Asuransi DN/LN: 0.00</p>
												<p>25. Freight: 0.00</p>
										</div>
										<div class="border-r-2 border-black">
												<div class="grid grid-cols-[auto_100px]">
														<p>26. Nilai Pabean</p>
														<p class="min-w-[100px] border-b-2 border-l-2 border-black text-center"></p>
												</div>
												<div class="px-8">
														<p>0.00</p>
														<p>RP. 0</p>
												</div>
										</div>
								</div>
						</div>
				</div>
				<div class="grid grid-cols-[440px_440px_210px_200px] grid-rows-[100px] border-b-2 border-black">
						<div class="border-r-2 border-black px-1">
								<p>27. Nomor, Ukuran, dan Tipe</p>
								<div class="px-10">
										<p>Nomor</p>
										<p>Ukuran</p>
										<p>Tipe</p>
								</div>
						</div>
						<div class="border-r-2 border-black px-1">
								<p>28. Jumlah, Jenis, dan Merek</p>
								<div class="px-10">
										<p>Jumlah</p>
										<p>Jenis</p>
										<p>Merek</p>
								</div>
						</div>
						<div class="border-r-2 border-black px-1">
								<p>29. Berat Kotor</p>
								<div class="px-5">
										<p></p>
								</div>
						</div>
						<div class="px-1">
								<p>30. Berat Bersih</p>
								<div class="px-5">
										<p></p>
								</div>
						</div>
				</div>
				<div class="grid grid-cols-[40px_400px_190px_250px_210px_210px] grid-rows-[90px] border-b-2 border-black">
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
								<p>35. - Jumlah dan Jenis Satuan Barang</p>
								<div class="px-4">
										<p>- Berat Bersih (Kg)</p>
								</div>
						</div>
						<div class="px-1">
								<p>36. - Nilai Pabean</p>
								<div class="px-4">
										<p>- Jenis</p>
										<p>- Nilai yang</p>
								</div>
						</div>
				</div>
				{{-- JUDULNYA --}}
				<div
						class="grid grid-cols-[40px_400px_190px_250px_210px_210px] grid-rows-[minmax(90px,_auto)] border-b-2 border-black">
						<div class="border-r-2 border-black text-center">
								<p>1</p>
						</div>
						<div class="border-r-2 border-black px-1">
								<p>Pos Tarif: </p>
								<p>Uraian: </p>
								<p>Merek: </p>
								<p>Tipe: </p>
								<p>Spesifikasi: </p>
								<p>Nama Negara:</p>
						</div>
						<div class="border-r-2 border-black px-1">
								{{-- LET ME ALONE!! --}}
						</div>
						<div class="border-r-2 border-black px-1">
								<p>34. Tarif dan Fasilitas</p>
								<div class="px-5">
										<p>Merek</p>
								</div>
						</div>
						<div class="border-r-2 border-black px-1">
								<p>35. - Jumlah dan Jenis Satuan Barang</p>
								<div class="px-5">
										<p>- Berat Bersih (Kg)</p>
								</div>
						</div>
						<div class="px-1">
								<p>36. - Nilai Pabean</p>
								<div class="px-5">
										<p>- Jenis</p>
										<p>- Nilai yang</p>
								</div>
						</div>
				</div>
				{{-- JUDULNYA END --}}
				<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
						<div class="border-r-2 border-black text-center font-semibold">Jenis Pungutan</div>
						<div class="border-r-2 border-black text-center font-semibold">Dibayar</div>
						<div class="border-r-2 border-black text-center font-semibold">Ditanggung</div>
						<div class="border-r-2 border-black text-center font-semibold">Ditunda</div>
						<div class="border-r-2 border-black text-center font-semibold">Tidak Dipungut</div>
						<div class="border-r-2 border-black text-center font-semibold">Dibebaskan</div>
						<div class="text-center font-semibold">Telah Dilunasi</div>
				</div>
				<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
						<div class="border-r-2 border-black px-1">
								<div class="grid grid-cols-[30px_auto]">
										<p class="border-r-2 border-black text-center">3</p>
										<p class="px-3">BM</p>
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
										<p class="px-3">Cukai</p>
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
										<p class="px-3">PPN</p>
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
										<p class="px-3 font-semibold">TOTAL</p>
								</div>
						</div>
						<div class="border-r-2 border-black px-1 text-right font-semibold">0.0000</div>
						<div class="border-r-2 border-black px-1 text-right font-semibold">0.0000</div>
						<div class="border-r-2 border-black px-1 text-right font-semibold">0.0000</div>
						<div class="border-r-2 border-black px-1 text-right font-semibold">0.0000</div>
						<div class="border-r-2 border-black px-1 text-right font-semibold">0.0000</div>
						<div class="px-1 text-right font-semibold">0.0000</div>
				</div>
				<div class="grid grid-cols-[650px_650px]">
						<div class="border-r-2 border-black px-1">
								<p class="font-semibold">F. Dengan ini saya menyatakan:</p>
								<p class="hanging-indent ml-5 mr-2 text-justify">a. bertanggung jawab atas kebenaran hal-hal yang
										diberitahukan dalam dokumen ini dan keabsahan
										dokumen pelengkap pabean yang menjadi dasar
										pembuatan dokumen ini; dan
								</p>
								<p class="hanging-indent ml-5 mr-2 text-justify">b. sanggup menyiapkan dan menyerahkan barang
										impor untuk diperiksa, serta menyaksikan pemeriksaan fisik. Dalam hal saya tidak memenuhi
										ketentuan ini dalam jangka waktu yang ditetapkan maka saya menguasakannya kepada pengusaha
										Tempat Penimbunan Sementara tempat pemeriksaan atas risiko dan biaya saya.
								</p>
								<div class="text-center">
										<p>..............,Tgl...........-20.....</p>
										<p class="mb-10">Importir/PPJK</p>
										<p>(............................)</p>
								</div>
						</div>
						<div>
								<p class="mb-5 px-1 font-semibold">E. Untuk Pembayaran dan Jaminan:</p>
								<div class="mb-10 grid grid-cols-[110px_40px_repeat(3,_140px)] gap-3 px-3">
										<p>a. Pembayaran</p>
										<div class="border-2 border-black px-1 py-0.5"></div>
										<p>1. Bank</p>
										<p>2. Pos</p>
										<p>3. Kantor Pabean</p>
								</div>
								<div class="mb-12 grid grid-cols-[110px_40px_repeat(3,_140px)] gap-3 px-3">
										<p>b. Jaminan</p>
										<div class="border-2 border-black px-1 py-0.5"></div>
										<p>1. Tunai</p>
										<p>2. Bank Garansi</p>
										<p>3. Custom Bond</p>
										<p></p>
										<p></p>
										<p>4. Lainnya</p>
								</div>
								<div class="px-5">
										<div class="grid grid-cols-[80px_auto_100px] border-2 border-black">
												<div class="border-b-2 border-r-2 border-black"></div>
												<div class="border-b-2 border-r-2 border-black text-center">Nomor</div>
												<div class="border-b-2 border-black text-center">Tanggal</div>
												<div class="border-b-2 border-r-2 border-black px-2">a.</div>
												<div class="border-b-2 border-r-2 border-black text-center"></div>
												<div class="border-b-2 border-black text-center"></div>
												<div class="border-r-2 border-black px-2">b.</div>
												<div class="border-r-2 border-black text-center"></div>
												<div class="border-black text-center"></div>
										</div>
								</div>
						</div>
				</div>
		</div>
</body>

</html>
