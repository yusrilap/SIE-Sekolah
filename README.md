# Sistem Informasi Sekolah

Sistem informasi sekolah berbasis laravel 8 dengan template dashboard
[Stisla](https://getstisla.com/)
\

## Fitur

-   CRUD Jurusan
-   CRUD Ekstrakulikuler
-   CRUD Guru
-   CRUD Kelas
-   CRUD User
-   CRUD Jadwal Ekstrakulikuler

## Instalasi

clone project atau download

```bash
  git clone https://github.com/yusrilap/Sistem-Informasi-Sekolah.git
  cd Sistem-Informasi-Sekolah
  npm install
  composer install / composer update
  cp .env.example .env
```

Buka `.env` dan atur database anda

```bash
  DB_PORT=3306
  DB_DATABASE=db_sie_sekolah
  DB_USERNAME=root
  DB_PASSWORD=
```

Install website

```bash
  php artisan key:generate
  php artisan migrate --seed
```

Jalankan website

```bash
  php artisan serve
```

## Default akun untuk testing

Admin

```bash
  email : admin@gmail.com
  password : admin123
```
