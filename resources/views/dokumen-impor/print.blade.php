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
		<div class="mx-auto max-w-[1300px] p-5" id="print">
				<p class="text-center font-semibold">PEMBERITAHUAN IMPOR BARANG (PIB)</p>
				<div class="w-fit border-2 border-black print:mx-auto">
						<div class="my-1 grid grid-cols-[repeat(12,_100px)]">
								<div class="col-span-2 px-1">
										Kantor Pabean
								</div>
								<div class="col-span-3">
										{{ $dokumenImpor->kantor ? $dokumenImpor->kantor->namaKantor : '' }}
								</div>
								<div class="col-span-1"></div>
								<div class="col-span-2 border-2 border-black text-center">
										{{-- DISINI TANGGAL AJU BELUM TAU ISI APA --}}
										{{-- {{ date('Y-m-d') }} --}}
								</div>
								<div class="col-span-4"></div>
						</div>

						<div class="my-1 grid grid-cols-[repeat(12,_100px)]">
								<div class="col-span-2 px-1">
										Nomor Pengajuan
								</div>
								<div class="col-span-3">
										{{ $dokumenImpor->nomorAju }}
								</div>
								<div class="col-span-1"></div>
								<div class="col-span-2 text-center">
										Tanggal Pengajuan
								</div>
								<div class="col-span-4"></div>
						</div>

						<div class="my-1 grid grid-cols-[repeat(12,_100px)]">
								<div class="col-span-2 px-1">
										A. JENIS PIB
								</div>
								<div class="col-span-4">
										<div class="grid grid-cols-[50px_100px_100px]">
												{{-- Replace Me --}}
												<div class="h-6 w-6 border-2 border-black text-center">
														{{ $dokumenImpor->jenisPib }}
												</div>
												{{-- Replace Me --}}
												<div>1. BIASA</div>
												<div>2. BERKALA.</div>
										</div>
								</div>
						</div>

						<div class="my-1 grid grid-cols-[repeat(12,_100px)]">
								<div class="col-span-2 px-1">
										B. JENIS IMPOR
								</div>
								<div class="col-span-10 grid auto-rows-[minmax(0,_25px)] grid-cols-[50px_repeat(6,_170px)]">
										{{-- Replace Me --}}
										<div class="col-span-1 h-6 w-6 border-2 border-black text-center">
												{{ $dokumenImpor->jenisImpor }}
										</div>
										{{-- Replace Me --}}
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
						<div class="my-1 grid grid-cols-[repeat(12,_100px)]">
								<div class="col-span-2 px-1">
										C. CARA PEMBAYARAN
								</div>
								<div class="col-span-10 grid auto-rows-[minmax(0,auto)] grid-cols-[50px_repeat(6,_170px)] gap-1">
										{{-- Replace Me --}}
										<div class="col-span-1 h-6 w-6 border-2 border-black text-center">
												{{ $dokumenImpor->caraBayar }}
										</div>
										{{-- Replace Me --}}
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
						<div class="border-b-2 border-t-2 border-black px-1 font-semibold">
								D. DATA
						</div>
						<div class="grid grid-cols-[repeat(13,_100px)] border-b-2 border-black">
								{{-- sebelah kiri ini ges --}}
								@include('layout.partial.print-entitas')
								{{-- sebelah kanan ini ges --}}
								@include('layout.partial.print-transaksi')
						</div>
						@include('layout.partial.print-kemasan-kontainer')
						@include('layout.partial.print-barang')
						<div class="grid grid-cols-[200px_repeat(6,_183px)] border-b-2 border-black">
								<div class="border-r-2 border-black text-center font-semibold">Jenis Pungutan</div>
								<div class="border-r-2 border-black text-center font-semibold">Dibayar</div>
								<div class="border-r-2 border-black text-center font-semibold">Ditanggung</div>
								<div class="border-r-2 border-black text-center font-semibold">Ditunda</div>
								<div class="border-r-2 border-black text-center font-semibold">Tidak Dipungut</div>
								<div class="border-r-2 border-black text-center font-semibold">Dibebaskan</div>
								<div class="text-center font-semibold">Telah Dilunasi</div>
						</div>
						@include('layout.partial.print-pungutan')
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
												<p>{{ $pernyataan ? $pernyataan->tempat : '' }},
														{{ $pernyataan ? generateIndonesiaDate($pernyataan->tanggal) : '' }}</p>
												<p class="mb-14">Importir/PPJK</p>
												<p>{{ $pernyataan ? $pernyataan->nama : '' }}</p>
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
		</div>
		<script>
				window.onload = function() {
						window.print();
				}
		</script>
</body>

</html>
