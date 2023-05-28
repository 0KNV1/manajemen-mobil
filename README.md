# Project Title

Car-Management untuk test intern Sekawan Media (Belum sepenuhnya jadi)

## Note

admin=
'name' => 'Admin1',
'email' => 'user@app.com',
'password' => 'password',

manager =
'name' => 'Manager1',
'email' => 'admin@app.com',
'password' => bcrypt('password'),
'roles' => 'MANAGER',

Disini saya menghilangkan /register karena tidak terpakai

database :MySql

php version : 8.1

framework :Laravel

physical data model yang berhubungan dengan fitur pemesanan kendaraan:https://lucid.app/lucidchart/251f3029-69da-4b8f-bf10-dfcd09504903/edit?viewport_loc=-45%2C131%2C1652%2C832%2C0_0&invitationId=inv_1e6a7685-2b31-4cc1-add1-4bd1bcc1eb40

untuk Log Tiap proses dapat dilihat melalui history commit

## Deployment

To deploy this project run

```bash
    composer install
    php artisan key:generate
    php artisan migrate --seed
    php artisan serve
    npm run build or npm run dev
```

# Penggunaan

Berikut adalah langkah-langkah penggunaan proyek ini.

Buka aplikasi di browser Anda dengan mengunjungi http://localhost:8000.

Buat akun pengguna baru atau masuk dengan akun yang sudah ada.

Jelajahi fitur-fitur proyek ini dan gunakan sesuai kebutuhan Anda.

## Features

-   CRUD full in Admin
-   Live previews graphics (on the way)
-   Interesting UI/UX
-   2 roles available
