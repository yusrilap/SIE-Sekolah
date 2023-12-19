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
  git clone https://github.com/yusrilap/SIE-Sekolah.git
  cd SIE-Sekolah
  npm install
  composer composer update
  cp .env.example .env
```

Buka `.env` dan ganti nama DB_DATABASE

```bash
  DB_PORT=3306
  DB_DATABASE=db_sie_sekolah
  DB_USERNAME=root
  DB_PASSWORD=
```

Buka localhost dan buat database dengan nama 

```bash
  db_sie_sekolah
```

Install website di terminal vscode

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
