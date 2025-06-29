# 🎮 Haftap - Platform Joki Game Professional

<p align="center">
  <img src="/public/img/LOGO HAFTAP.jpg" alt="Haftap Logo" width="200">
</p>

<p align="center">
  <strong>Platform joki game professional yang aman, terpercaya, dan terjangkau</strong>
</p>

## 📋 Tentang Haftap

Haftap adalah aplikasi web berbasis Laravel yang menyediakan layanan joki game untuk berbagai game populer seperti Mobile Legends, PUBG Mobile, Free Fire, dan Valorant. Aplikasi ini memungkinkan pelanggan untuk memesan jasa joki dan memantau status pesanan mereka.

## 🎯 Fitur Utama

### 👤 Pelanggan (Customer)

-   Registrasi dan login akun
-   Memesan jasa joki untuk berbagai game
-   Melihat status pesanan real-time
-   Chat dengan penjoki
-   Upload bukti pembayaran
-   Konfirmasi penyelesaian pesanan

### 🎮 Penjoki (Joki)

-   Login ke sistem
-   Melihat daftar pesanan tersedia
-   Mengambil pesanan
-   Update status pesanan
-   Chat dengan pelanggan
-   Konfirmasi penyelesaian

### 👨‍💼 Admin

-   Kelola semua user (pelanggan dan penjoki)
-   Kelola semua pesanan
-   Lihat laporan dan statistik
-   Manajemen data joki

## 🛠️ Teknologi yang Digunakan

-   **Backend**: Laravel 10.x
-   **Frontend**: Bootstrap 5, Blade Templates
-   **Database**: MySQL
-   **Authentication**: Laravel Breeze
-   **Role Management**: Custom Middleware

## 🚀 Cara Menjalankan Aplikasi

### Prerequisites

-   PHP >= 8.1
-   Composer
-   MySQL
-   Node.js & NPM

### Installation

1. **Clone repository**

    ```bash
    git clone [repository-url]
    cd Joki_Game
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Setup environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure database**

    ```bash
    # Edit .env file dengan konfigurasi database Anda
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=haftap_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Run migrations dan seeders**

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

6. **Build assets**

    ```bash
    npm run build
    ```

7. **Start server**

    ```bash
    php artisan serve
    ```

8. **Akses aplikasi**
    ```
    http://localhost:8000
    ```

## 🎮 Game yang Didukung

-   **Mobile Legends**: Joki rank dari Bronze hingga Mythic
-   **PUBG Mobile**: Joki untuk mencapai tier tinggi
-   **Free Fire**: Joki untuk rank Heroic dan Grandmaster
-   **Valorant**: Joki untuk rank competitive

## 🔐 Role dan Permission

### Customer

-   Membuat pesanan joki
-   Melihat pesanan sendiri
-   Upload bukti pembayaran
-   Chat dengan joki

### Joki

-   Melihat pesanan tersedia
-   Mengambil pesanan
-   Update status pesanan
-   Chat dengan customer

### Admin

-   Kelola semua user
-   Kelola semua pesanan
-   Lihat laporan
-   Manajemen data joki

## 📱 Screenshots

### Halaman Utama

![Home Page](/screenshots/home.png)

### Dashboard Pesanan

![Orders Dashboard](/screenshots/orders.png)

### Halaman Joki

![Joki Page](/screenshots/joki.png)

## 🤝 Contributing

1. Fork repository
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 License

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## 📞 Kontak

-   **Email**: info@haftap.com
-   **WhatsApp**: +62 812-3456-7890
-   **Instagram**: @haftap_joki

---

**Haftap** - Joki Game Professional & Terpercaya 🎮
