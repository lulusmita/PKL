# Tsel_Inventory

**Tsel_Inventory** adalah aplikasi web yang dikembangkan untuk Internship Web Development &reporting di Telkom Indonesia (PKL) yang berfokus pada pelaporan dan manajemen inventaris.

## Prasyarat

Pastikan telah menginstal:

-   [Git](https://git-scm.com/)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/)
-   [PHP](https://www.php.net/)
-   [MySQL](https://www.mysql.com/)

## Memulai

Ikuti langkah-langkah ini untuk menyiapkan dan menjalankan proyek secara lokal:

1. Klon repositori:

    ```bash
    git clone https://github.com/lulusmita/Research.git
    ```

2. Pindah ke direktori proyek:

    ```bash
    cd Research
    ```

3. Salin file `.env.example` untuk membuat file `.env` baru:

    ```bash
    cp .env.example .env
    ```

4. Instal dependensi PHP menggunakan Composer:

    ```bash
    composer install
    ```

5. Instal dependensi JavaScript menggunakan npm:

    ```bash
    npm install
    ```

6. Generasi kunci aplikasi:

    ```bash
    php artisan key:generate
    ```

7. Jika Anda ingin menyiapkan basis data, jalankan perintah berikut:

    ```bash
    php artisan migrate
    ```

    Jawab 'yes' ketika diminta.

    ```bash
    php artisan db:seed --class=dummy_data_seeder
    ```

8. Kompilasi aset frontend:

    ```bash
    npm run dev
    ```

9. Mulai server pengembangan lokal:

    ```bash
    php artisan serve
    ```

Aplikasi seharusnya sekarang dapat diakses di [http://localhost:8000](http://localhost:8000).

## Menjalankan Aplikasi

Untuk menjalankan aplikasi, jalankan perintah berikut:

1. Kompilasi aset frontend:

    ```bash
    npm run dev
    ```

2. Mulai server pengembangan lokal:

    ```bash
    php artisan serve
    ```

Kunjungi [http://localhost:8000](http://localhost:8000) di browser untuk mengakses aplikasi.
