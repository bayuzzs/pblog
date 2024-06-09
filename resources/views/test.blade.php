<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Polibatam Logistik | BC 2.0</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-[2000vh">
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
						<div class="col-span-10 grid auto-rows-[minmax(0,_25px)] grid-cols-[50px_repeat(6,_170px)]">
								<div class="col-span-1 h-6 w-6 border-2 border-black text-center">1</div>
								<div>1. BIASA/TUNAI</div>
								<div>2. BERKALA</div>
								<div>3. DENGAN JAMINAN</div>
								<div>9. LAINNYA.</div>
						</div>
				</div>
				<div class="border-b-2 border-t-2 border-black font-semibold">
						D. DATA
				</div>
				<div class="grid grid-cols-[repeat(13,_100px)] border-black">
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
										<div class="grid grid-cols-[190px_auto_100px]">
												<p>12. Pelabuhan Muat</p>
												<p>North Sydney</p>
												<p class="border-b-2 border-l-2 border-black text-center">AUNSY</p>
										</div>
										<div class="grid grid-cols-[190px_auto_100px]">
												<p>13. Pelabuhan Transit</p>
												<p>North Sydney</p>
												<p class="border-l-2 border-black text-center">AUNSY</p>
										</div>
										<div class="grid grid-cols-[190px_auto_100px]">
												<p>14. Pelabuhan Tujuan</p>
												<p>North Sydney</p>
												<p class="border-l-2 border-t-2 border-black text-center">AUNSY</p>
										</div>
								</div>
								<div class="border-b-2 border-black">
										<div class="grid grid-cols-[repeat(3,200px)]">
												<p>15. Invoice</p>
												<p>No 01/INV-07/2020</p>
												<p>Tgl 27-00-2020</p>
										</div>
										<div class="grid grid-cols-[repeat(3,200px)]">
												<p>16. Transaksi</p>
												<p>No</p>
												<p>Tgl</p>
										</div>
										<div class="ITEMS grid grid-cols-[repeat(3,200px)]">
												<p>17. House-Maste</p>
												<p>No</p>
												<p>Tgl</p>
										</div>
										<div class="grid grid-cols-[repeat(3,200px)]">
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
						</div>
				</div>
		</div>
</body>

</html>
