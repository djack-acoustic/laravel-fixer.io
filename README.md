# laravel-fixer.io
Integrasi laravel dengan fixer.io<br>
Fixer.io adalah sebuah package dimana kita dapat mengetahui nilai tukar mata uang saat ini.

Cara menggunakan :
```git
1. git clone https://github.com/djack-acoustic/laravel-fixer.io.git
```

```bash
2. composer install
```

3. copy .env.example dan pastekan ke folder yang sama dengan nama file baru .env

```bash
4. php artisan key:generate
```

```bash
5. php artisan serve
```

Buka browser kmudian ketikan : <br>
contoh : 127.0.0.1:8080/rate/USD/IDR

- USD = Mata uang awal
- IDR = Mata uang tujuan

<br><br>package : http://fixer.io/
