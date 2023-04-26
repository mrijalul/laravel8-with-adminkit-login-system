# Laravel 8 Login Register with AdminKit

Live Demo Admin Template Hope UI Only : https://demo-basic.adminkit.io/

Package :

1. https://packagist.org/packages/laravel/ui
2. https://packagist.org/packages/yajra/laravel-datatables-oracle

First Step :

```
git clone git@github.com:mrijalul/laravel8-with-adminkit-login-system.git
```

OR

```
git clone https://github.com/mrijalul/laravel8-with-adminkit-login-system.git
```

run

```
composer install
```

run

```
npm install
```

run

```
npm run prod
```

buat .env dengan cara copy .env.example

```
cp .env.example .env
```

ganti db_name

```
DB_DATABASE=namaProjectAnda
DB_USERNAME=usernameDBanda
DB_PASSWORD=passwordDBanda
```

run

```
php artisan migrate
```

gunakan <i>\Request::route()->getName()</i> untuk mengenali menu active, cukup menggunakan name pada route

contoh :

```
class="nav-link {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"
```

jika ingin menggunakan seeder, tinggal jalankan perintah

```
php artisan db:seed
```
