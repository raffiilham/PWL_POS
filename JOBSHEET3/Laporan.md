# Jawablah pertanyaan berikut sesuai pemahaman materi di atas

1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? 
dan untuk apa saja file migrasi tersebut?
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output
dari fungsi tersebut?
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari 
fungsi tersebut?
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id();
dengan menggunakan $table->id('level_id'); ?
7. Pada migration, Fungsi ->unique() digunakan untuk apa?
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user
menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id
pada tabel m_level menggunakan $tabel->id('level_id') ?
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode 
program Hash::make('1234');?
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa 
kegunaan dari tanda tanya (?) tersebut?
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 
‘m_user’; dan protected $primaryKey = ‘user_id’; ?
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke 
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan

# Jawaban

1. Pada Praktikum 1 - Tahap 5, APP_KEY pada file setting .env Laravel digunakan sebagai kunci enkripsi dan penandatanganan data yang sensitif, seperti sesi pengguna. Fungsi ini penting untuk keamanan aplikasi.

2. Pada Praktikum 1, nilai untuk APP_KEY dapat di-generate menggunakan perintah artisan php artisan key:generate.

3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki dua file migrasi, yaitu create_users_table.php dan create_password_resets_table.php. File migrasi ini digunakan untuk membuat tabel pengguna dan tabel reset password.

4. Kode $table->timestamps(); pada file migrasi menambahkan dua kolom, yaitu created_at dan updated_at, yang secara otomatis akan diisi waktu ketika record dibuat dan diupdate.

5. Fungsi $table->id(); pada file migrasi menghasilkan tipe data kolom primary key yang bertipe big integer dengan sifat auto-increment.

6. Hasil migrasi pada tabel m_level menggunakan $table->id(); dan $table->id('level_id'); tidak berbeda secara substansial. Perbedaan terletak pada penamaan kolom primary key, di mana menggunakan $table->id('level_id'); memberikan nama kolom primary key khusus.

7. Fungsi ->unique() pada migration digunakan untuk menentukan bahwa nilai pada kolom tersebut harus unik di dalam tabel.

8. Pada Praktikum 2.2 - Tahap 2, perbedaan penggunaan $tabel->unsignedBigInteger('level_id') dan $tabel->id('level_id') terletak pada jenis kolom yang dihasilkan. Yang pertama menghasilkan kolom big integer yang tidak auto-increment, sementara yang kedua menghasilkan primary key dengan nama kolom 'level_id'.

9. Class Hash pada Laravel digunakan untuk melakukan hashing, yaitu mengacak nilai teks, seperti password, untuk meningkatkan keamanan. Kode program Hash::make('1234'); digunakan untuk menghasilkan hash dari string '1234'.

10. Pada Praktikum 4 - Tahap 3/5/7, tanda tanya (?) pada query builder digunakan sebagai placeholder untuk parameter yang akan di-bind nanti. Ini membantu mencegah SQL injection dan memungkinkan penggunaan nilai yang aman dalam query.

11. Pada Praktikum 6 - Tahap 3, kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id'; digunakan untuk menentukan nama tabel dan primary key yang digunakan oleh model tersebut.

12. Pilihan antara DB Façade, Query Builder, dan Eloquent ORM tergantung pada kebutuhan dan preferensi pengembang. Eloquent ORM sering dianggap lebih mudah dan ekspresif karena memanfaatkan model dan relasi, sementara DB Façade dan Query Builder memberikan lebih banyak kontrol langsung atas kueri SQL. Pilihan tergantung pada kompleksitas proyek dan kebutuhan pengembangan.