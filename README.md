# 🚀 Laravel Starter

Starter project Laravel 13 dengan autentikasi Breeze, UUID, Bootstrap 5 (CoolAdmin), halaman error custom, dan struktur layout yang siap digunakan untuk pengembangan aplikasi internal maupun sistem informasi.

## ✨ Fitur

### Authentication

* Login
* Register
* Forgot Password
* Reset Password
* Email Verification
* Logout

### User Management

* UUID sebagai Primary Key User
* Profile Management
* Update Informasi Profil
* Update Password
* Delete Account

### UI & Layout

* CoolAdmin Bootstrap 5 Theme
* Responsive Layout
* Dashboard Layout
* Sidebar Navigation
* Header Navigation
* Error Pages Custom

### Error Pages

* 403 Forbidden
* 404 Not Found
* 419 Session Expired
* 500 Internal Server Error
* 503 Maintenance Mode

### User Fields

Tabel users telah disiapkan dengan field:

* id (UUID)
* name
* username
* email
* phone
* avatar
* password
* email_verified_at
* created_at
* updated_at

## 📂 Struktur View

```text
resources/views/
│
├── auth/
│   ├── login.blade.php
│   ├── register.blade.php
│   ├── forgot-password.blade.php
│   ├── reset-password.blade.php
│   └── verify-email.blade.php
│
├── dashboard/
│   └── index.blade.php
│
├── profile/
│   ├── edit.blade.php
│   └── partials/
│
├── errors/
│   ├── 403.blade.php
│   ├── 404.blade.php
│   ├── 419.blade.php
│   ├── 500.blade.php
│   └── 503.blade.php
│
├── layouts/
│   ├── app.blade.php
│   ├── auth.blade.php
│   ├── error.blade.php
│   ├── header.blade.php
│   ├── sidebar.blade.php
│   ├── footer.blade.php
│   └── scripts.blade.php
│
└── components/
```

## ⚙️ Requirement

* PHP 8.3+
* Composer 2+
* MySQL / MariaDB
* Node.js 20+
* NPM

## 🚀 Installation

Clone repository:

```bash
git clone https://github.com/JepriAlber/laravel-stater.git
```

Masuk ke folder project:

```bash
cd laravel-stater
```

Install dependency PHP:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Konfigurasi database pada file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_starter
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migration:

```bash
php artisan migrate
```

Jalankan aplikasi:

```bash
php artisan serve
```

Akses aplikasi:

```text
http://127.0.0.1:8000
```

## 🔐 Authentication Flow

```text
Guest
│
├── Login
├── Register
├── Forgot Password
└── Verify Email

Authenticated User
│
├── Dashboard
├── Profile
└── Logout
```

## 🛣️ Route Utama

```text
/               → Redirect Login / Dashboard
/login          → Login
/register       → Register
/dashboard      → Dashboard
/profile        → Profile
```

## 📌 Roadmap

* [ ] User Management
* [ ] Role Management
* [ ] Permission Management
* [ ] Application Settings
* [ ] Activity Log
* [ ] File Upload Manager
* [ ] Audit Trail
* [ ] Dynamic Sidebar Menu
* [ ] Spatie Permission Integration

## 📄 License

Jepri Aber - kantinit.com
