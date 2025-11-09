# Default Credentials

Setelah menjalankan seeder (`php artisan db:seed` atau `php artisan migrate:fresh --seed`), berikut adalah kredensial default yang tersedia:

## 👤 Pengimpor (Importer)

**Login URL**: http://localhost:8000/pengimpor/login

```
Username: pengimpor
Password: pengimpor
```

**Detail Akun:**

-   NPWP: 1234567890123456
-   Nama Perusahaan: Pengimpor
-   Alamat: Jl. Raya Cibodas No. 1
-   Telepon Perusahaan: 1234567890
-   Nama: Pengimpor
-   Email: babayu@email.com

---

## 👮 Petugas (Officer)

**Login URL**: http://localhost:8000/petugas/login

```
Username: petugas
Password: trpllpi
```

---

## 📊 Data Master yang Di-seed

Database juga akan terisi dengan data master berikut:

-   ✅ **Negara** (Countries) - Data negara untuk transaksi impor
-   ✅ **Valuta** (Currency) - Data mata uang
-   ✅ **Jenis Kemasan** (Packaging Types) - Jenis-jenis kemasan barang
-   ✅ **Satuan Barang** (Item Units) - Satuan untuk barang
-   ✅ **Jenis Dokumen** (Document Types) - Jenis dokumen impor
-   ✅ **Kantor** (Offices) - Data kantor bea cukai
-   ✅ **Pelabuhan** (Ports) - Data pelabuhan
-   ✅ **HS Codes** - Harmonized System codes untuk klasifikasi barang

---

## 🔄 Reset Database

Jika Anda ingin mereset database dan menjalankan ulang seeder:

```bash
docker compose exec app php artisan migrate:fresh --seed
```

**⚠️ WARNING**: Command ini akan menghapus semua data yang ada!

---

## 🔐 Keamanan

**PENTING**: Kredensial di atas adalah untuk development/testing saja!

Untuk production:

1. Ganti semua password default
2. Update file seeder untuk tidak membuat user default
3. Buat user melalui registrasi atau admin panel
4. Gunakan password yang kuat dan unik

---

## 📝 Custom Seeder

Untuk membuat user tambahan, edit file:

```
database/seeders/DatabaseSeeder.php
```

Kemudian jalankan:

```bash
docker compose exec app php artisan db:seed
```
