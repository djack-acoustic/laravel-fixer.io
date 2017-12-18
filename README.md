# laravel-fixer.io
Integrasi laravel dengan fixer.io
Fixer.io adalah sebuah website dimana kita dapat mengetahui nilai tukar mata uang saat ini.

Cara menggunakan :
1. git clone https://github.com/djack-acoustic/laravel-fixer.io.git
2. composer install
3. copy .env.example dan pastekan ke folder yang sama dengan nama file baru .env
4. php artisan key:generate
5. php artisan serve

Buka browser kmudian ketikan : 
contoh : 127.0.0.1:8080/rate/USD/IDR

- USD = Mata uang awal
- IDR = Mata uang tujuan
