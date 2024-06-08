# ⛽ FuelFinder - Temukan SPBU Terdekat di Bandung ⛽

Selamat datang di **FuelFinder**! Aplikasi web ini dirancang untuk memberikan informasi terkini mengenai lokasi SPBU di Bandung. Dengan fitur Sistem Informasi Geografis (GIS), pengguna dapat melihat penanda lokasi SPBU langsung pada peta, memudahkan mereka untuk menemukan SPBU terdekat dengan cepat dan efisien. Proyek ini dibangun menggunakan Laravel Framework, menggabungkan keahlian dalam pengembangan web dan GIS untuk memberikan solusi yang kompetitif dan berguna.

## ✨ Fitur Utama

-   **Penanda Lokasi SPBU**: Lihat penanda lokasi SPBU di Bandung secara real-time pada peta interaktif.
-   **Detail SPBU**: Dapatkan informasi lengkap mengenai SPBU seperti alamat, jenis bahan bakar yang tersedia, dan jam operasional.
-   **Rute ke SPBU**: Temukan rute tercepat ke SPBU pilihan Anda.

## 🛠️ Teknologi yang Digunakan

-   **Framework**: Laravel
-   **Database**: MySQL
-   **Frontend**: HTML, CSS, JavaScript
-   **GIS**: Leaflet.js

## 🚀 Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi FuelFinder di lokal Anda:

1. **Clone Repository**
    ```bash
    git clone https://github.com/username/FuelFinder.git
    ```
2. **Masuk ke Direktori Proyek**
    ```bash
    cd FuelFinder
    ```
3. **Instalasi Dependensi**
    ```bash
    composer install
    npm install
    npm run dev
    ```
4. **Konfigurasi Lingkungan**

    - Salin file `.env.example` menjadi `.env`
    - Konfigurasikan database di file `.env`

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Migrasi Database**

    ```bash
    php artisan migrate
    ```

6. **Menjalankan Aplikasi**
    ```bash
    php artisan serve
    ```
    Akses aplikasi melalui browser:
    ```url
    http://localhost:8000
    ```

## 🌐 Cara Menggunakan

1. **Beranda**: Pada halaman beranda, Anda akan melihat peta Bandung dengan penanda lokasi SPBU.
2. **Pencarian SPBU**: Gunakan fitur pencarian untuk menemukan SPBU berdasarkan lokasi atau filter.
3. **Detail SPBU**: Klik pada penanda di peta untuk melihat detail SPBU, termasuk alamat lengkap dan informasi lainnya.

## 🎉 Terima Kasih!

Terima kasih telah menggunakan FuelFinder! Kami berharap aplikasi ini dapat membantu Anda menemukan SPBU terdekat di Bandung dengan mudah dan cepat.
