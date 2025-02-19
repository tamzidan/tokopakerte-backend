---
# Tokopakerte Backend (Laravel)

Backend API menggunakan Laravel untuk aplikasi autentikasi dengan fitur login, registrasi, dan proteksi rute menggunakan token JWT.

## 🚀 Instalasi & Menjalankan Server

1. **Clone repository ini**
   ```sh
   git clone https://github.com/username/tokopakerte-backend.git
   cd tokopakerte-backend
   ```

2. **Install dependencies**
   ```sh
   composer install
   ```

3. **Buat file environment**
   ```sh
   cp .env.example .env
   ```

4. **Konfigurasi database di `.env`**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate key & migrate database**
   ```sh
   php artisan key:generate
   php artisan migrate --seed
   ```

6. **Jalankan server**
   ```sh
   php artisan serve
   ```

## 🔑 API Endpoints

- **POST** `/api/register` → Registrasi user baru
- **POST** `/api/login` → Login user
- **GET** `/api/user` → Ambil data user (harus autentikasi)
- **POST** `/api/logout` → Logout user

## 📜 Lisensi

Proyek ini menggunakan lisensi MIT.

---
