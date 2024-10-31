# Laporan hasil percobaan materi CRUD

Nama: Muhammad Wildan Zhafiri

NIM: 235150707111048

## Hasil Percobaan

Berikut adalah hasil dari percobaan CRUD saat dijalankan di browser:

### 1. Halaman Utama (index.php)
![image](https://github.com/user-attachments/assets/70fb2e50-ac5f-4d33-a359-4d26f1d96082)

   *(`index.php`) akan menampilkan data post yang ada didalam database. Untuk menambahkan data baru, ada link "create" yang mengarahkan ke halaman (`create.php`) untuk membuat post baru.*

### 2. Create (Membuat Data Baru)
   ![image](https://github.com/user-attachments/assets/e3d2a74c-bc7a-4efe-8cdc-d00810392a0a)
   
   *Terdapat form untuk menambahkan data baru. Setelah mengisi form dan mengklik "post", data akan tersimpan di database.*

### 3. Read (Menampilkan Data)
   ![image](https://github.com/user-attachments/assets/bcba68e1-8ca9-42f3-a743-0b64a466f2c9)

   *Data yang tersimpan ditampilkan dalam bentuk tabel di halaman utama (`index.php`). Setiap post memiliki opsi untuk "Edit" dan "Delete".*

### 4. Update (Memperbarui Data)
   ![image](https://github.com/user-attachments/assets/6e4b206e-3425-4d27-a9a3-af959064bf14)
   ![image](https://github.com/user-attachments/assets/a3062ace-e352-4629-ac94-faf10819937e)
   ![image](https://github.com/user-attachments/assets/689fcbb1-f85a-4fe4-b83f-db9458089c61)
   
   *Form edit untuk memperbarui data post yang ada. Data yang diperbarui akan disimpan setelah mengklik "Update".*

### 5. Delete (Menghapus Data)
   ![image](https://github.com/user-attachments/assets/8a18b278-ad22-48ff-b037-9dae6caf0293)
   *Data dapat dihapus dengan mengklik tombol "Delete" pada post yang diinginkan. Data tersebut akan dihapus dari database. Sebagai contoh saya mengklik tombol delete pada judul yang kedua. Sehingga pada tampilan 
    (`index.php`) judul kedua hilang.*

## Penjelasan Kode

1. **db.php**
   - File ini berfungsi untuk menghubungkan aplikasi dengan database MySQL.
   - Kode `db.php` mendefinisikan variabel koneksi database (`$host`, `$dbusername`, `$dbpassword`, `$dbname`) dan menggunakan `mysqli_connect()` untuk membuka koneksi.
   - Jika koneksi gagal, akan muncul pesan error.

2. **create.php**
   - File ini menampilkan form untuk menambahkan data baru ke dalam database.
   - Form terdiri dari beberapa input yang akan mengumpulkan data dari pengguna yaitu "title" dan "content".
   - Setelah pengguna mengisi form dan mengklik submit, data akan dikirim ke create_process.php.
  
3. **create_process.php**
   - File ini memproses data yang dikirimkan dari create.php.
   - Data yang diterima akan disimpan ke dalam database menggunakan perintah SQL INSERT INTO.
   - Jika data berhasil disimpan, pengguna akan diarahkan kembali ke index.php.

4. **index.php**
   - File ini digunakan untuk menampilkan semua data yang ada dalam database.
   - Data yang ditampilkan adalah judul blog dan isi kontennya.
   - Setiap data blog yang ditampilkan memiliki tombol "Edit" dan "Delete" untuk melakukan operasi Update dan Delete.

5. **edit.php**
   - Form ini digunakan untuk mengedit data yang ada berdasarkan ID dari post.
   - Data postingan blog diambil dari database dan ditampilkan dalam form agar bisa diperbarui.
   - Setelah pengguna memperbarui data dan mengklik submit, data tersebut dikirim ke edit_process.php.

6. **edit_process.php**
   - File ini memproses perubahan data yang dikirim dari edit.php.
   - Data akan diperbarui di database menggunakan perintah SQL UPDATE.
   - Setelah update berhasil, pengguna akan diarahkan kembali ke index.php.
  
7. **delete.php**
   - File ini digunakan untuk menghapus data dari database berdasarkan ID post.
