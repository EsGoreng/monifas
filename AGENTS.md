# MONIFAS — Panduan AI untuk Repository

MONIFAS (Platform Pelaporan & Monitoring Fasilitas Infrastruktur) adalah aplikasi web **Laravel server-rendered monolith**. Sumber kebenaran ada di `.kiro/specs/monifas-base-project/` (`requirements.md`, `design.md`, `tasks.md`). Baca spec tersebut sebelum membuat keputusan arsitektur.

## Tech Stack

| Aspek | Teknologi |
|---|---|
| Framework / Bahasa | Laravel 13+, PHP 8.3+ |
| View | Blade + Blade Components internal (`<x-ui.*>`) |
| Interaktivitas | Alpine.js 3 (di-bundle Vite) |
| Styling | Tailwind CSS 4 via Vite (konfigurasi di `resources/css/app.css`, tanpa `tailwind.config.*`) |
| Grafik / Ikon | Chart.js 4 / `mallardduck/blade-lucide-icons` |
| Validasi / Tanggal | Form Request + Validation bawaan / Carbon bawaan |
| Kualitas kode | Laravel Pint, Larastan (PHPStan level ≥ 5) |
| Testing | Pest + pest-plugin-laravel |
| Package manager | Composer, npm |

Alur request: `Router → Controller → Service → View (Blade)`, validasi lewat Form Request. Tidak ada API layer, SPA, atau WebSocket.

## Aturan Wajib

- Semua file PHP di `app/`, `routes/`, `tests/` wajib `declare(strict_types=1);`.
- Controller tipis; logika bisnis di `app/Services/`; validasi di `app/Http/Requests/`.
- Model diletakkan **datar** di `app/Models/` (jangan buat `app/Models/<Namespace>/`).
- Gunakan Form Request, Validation, dan Carbon bawaan Laravel; jangan tambah package validasi/tanggal pihak ketiga.
- Warna UI memakai design token (`bg-primary`, `text-primary-foreground`, `bg-secondary`, `text-foreground`, `bg-background`, dst.) yang didefinisikan di `:root` dan `.dark` pada `resources/css/app.css`.
- Komponen UI = Blade anonymous component di `resources/views/components/ui/` (tanpa PHP class).
- Layout utama: `resources/views/layouts/app.blade.php` (memuat `@vite(['resources/css/app.css', 'resources/js/app.js'])`).
- Route per modul diletakkan di `routes/modules/`; jangan menetapkan prefix `auth`/`dashboard` tanpa persetujuan.
- Gunakan `.gitkeep` untuk direktori kosong; jangan menimpa file yang sudah ada.


## Struktur Modul

Tujuh modul, masing-masing dengan submodul. Kebab-case dipakai di `resources/views/dashboard/`, PascalCase di `app/` dan `tests/`.

| Modul (kebab) | Namespace | Submodul | Kegunaan modul |
|---|---|---|---|
| `users-and-access` | `UsersAndAccess` | `users`, `roles`, `user-addresses` | Manajemen akun pengguna, hak akses berbasis peran, dan alamat pengguna |
| `facility` | `Facility` | `buildings`, `rooms`, `facilities` | Inventaris aset fisik: gedung, ruangan, dan fasilitas di dalamnya |
| `location-and-category` | `LocationAndCategory` | `locations`, `facility-categories`, `damage-categories` | Data master lokasi dan klasifikasi (kategori fasilitas & kerusakan) |
| `reporting` | `Reporting` | `reports`, `report-evidence`, `report-priorities` | Pelaporan kerusakan oleh pengguna, bukti (foto/dokumen), dan penentuan prioritas |
| `maintenance` | `Maintenance` | `officers`, `assignments`, `schedules` | Petugas, penugasan laporan ke petugas, dan penjadwalan perawatan |
| `repair` | `Repair` | `repairs`, `materials`, `costs` | Pencatatan perbaikan, material yang dipakai, dan biaya |
| `supporting` | `Supporting` | `announcements`, `feedback`, `campaigns` | Fitur pendukung: pengumuman, umpan balik, dan kampanye |

### Kegunaan Submodul

| Submodul | Kegunaan |
|---|---|
| `users` | CRUD akun pengguna & autentikasi profil |
| `roles` | Definisi peran dan izin akses |
| `user-addresses` | Alamat/lokasi domisili milik pengguna |
| `buildings` | Data gedung |
| `rooms` | Data ruangan di dalam gedung |
| `facilities` | Data fasilitas/aset per ruangan beserta kondisinya |
| `locations` | Master lokasi (area/wilayah) |
| `facility-categories` | Master kategori fasilitas |
| `damage-categories` | Master kategori/jenis kerusakan |
| `reports` | Laporan kerusakan dan status/siklus hidupnya |
| `report-evidence` | Lampiran bukti laporan |
| `report-priorities` | Tingkat prioritas/urgensi laporan |
| `officers` | Data petugas pemeliharaan/teknisi |
| `assignments` | Penugasan laporan ke petugas |
| `schedules` | Jadwal perawatan/perbaikan |
| `repairs` | Catatan pekerjaan perbaikan |
| `materials` | Material/suku cadang yang digunakan |
| `costs` | Biaya perbaikan |
| `announcements` | Pengumuman ke pengguna |
| `feedback` | Masukan/penilaian pengguna |
| `campaigns` | Kampanye/sosialisasi |

Untuk setiap `<modul>/<submodul>` lokasi file:

- Controller: `app/Http/Controllers/<Namespace>/<submodul>/` — menerima request, memanggil Service, mengembalikan view/redirect (tipis).
- Form Request: `app/Http/Requests/<Namespace>/<submodul>/` — validasi & otorisasi input.
- Service: `app/Services/<Namespace>/<submodul>/` — logika bisnis dan akses data.
- View: `resources/views/dashboard/<modul>/<submodul>/partials/` — potongan Blade khusus submodul (tabel, form, dsb.).
- Test: `tests/Feature/<Namespace>/<submodul>/` (alur HTTP/end-to-end) dan `tests/Unit/<Namespace>/<submodul>/` (logika terisolasi).

### Direktori Shared

| Direktori | Kegunaan |
|---|---|
| `app/Models/` | Model Eloquent (datar, tanpa subfolder namespace) |
| `app/DTOs` | Objek pembawa data antar lapisan (Controller ↔ Service) |
| `app/Enums` | Enum PHP untuk nilai tetap (status, tipe, prioritas, dsb.) |
| `app/Constants` | Konstanta aplikasi yang dipakai lintas modul |
| `app/Support` | Helper/utilitas umum yang tidak terikat modul |
| `app/Providers` | Service provider Laravel |
| `app/Console/Commands` | Perintah Artisan kustom (mis. `ScaffoldCommand` untuk generate struktur modul) |
| `resources/views/layouts` | Layout utama halaman (`app.blade.php`) |
| `resources/views/components/ui` | Komponen UI dasar (`<x-ui.*>`: button, input, card, dsb.) |
| `resources/views/components/layout` | Komponen kerangka halaman (sidebar, navbar, header) |
| `resources/views/components/shared` | Komponen bersama lintas modul yang bukan UI dasar |
| `resources/views/auth` | Halaman autentikasi (login, register, dsb.) |
| `resources/views/dashboard` | Halaman dashboard per modul/submodul |
| `resources/js/components` | Komponen Alpine.js |
| `routes/modules` | File route per modul, dimuat dari file route utama |


## Perintah Verifikasi

```sh
composer run dev                  # Laravel server + Vite
php artisan test                  # Pest
./vendor/bin/pint --test          # code style
./vendor/bin/phpstan analyse      # Larastan (level >= 5; paths: app, routes, database)
npm run build                     # hasil di public/build/
php artisan config:cache && php artisan route:cache
```

Konfigurasi tooling: `phpstan.neon`, `pint.json` (preset `laravel`, `declare_strict_types`), `.editorconfig` (PHP/Blade 4 spasi; JS/TS/CSS/JSON 2 spasi), `vite.config.js` (`input` = `app.css` + `app.js`, `refresh: true`).

---

<laravel-boost-guidelines>
# Laravel Application

This repository contains a Laravel application. Complete the following setup before working on the user's request.

## Prerequisites

Verify that PHP and Composer are available:

```sh
php -v
composer -V
```

If either command is unavailable, detect the user's operating system and install the prerequisites with the appropriate command:

macOS:

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.5)"
```

Windows PowerShell:

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.5'))
```

Linux:

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.5)"
```

After installation, ask the user to restart their terminal. If the agent needs the restarted shell to continue, ask the user to reopen their terminal and rerun their original prompt.

## Agent Setup

Install Laravel Boost from the application root before making application changes:

```sh
composer require laravel/boost --dev
php artisan boost:install
```

Boost replaces these bootstrap instructions with guidelines tailored to the application. After installation, read `AGENTS.md` again and continue with the user's original request using the generated guidelines.
</laravel-boost-guidelines>
