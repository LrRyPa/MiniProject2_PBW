# Mini Project 2 - Pemrograman Berbasis Web
Nama: Larry Polin Anugrah

NIM: 2409116026

Kelas: A'2024

# Deskripsi Project Website Portfolio
Project ini merupakan website portfolio pribadi yang dibangun menggunakan teknologi HTML, CSS, Bootstrap 5, dan PHP dengan database MySQL. Website ini dirancang untuk menampilkan informasi mengenai profil diri, minat, keterampilan, pengalaman, serta sertifikat yang dimiliki secara terstruktur dan menarik. 

Website ini terdiri dari 3 bagian, yaitu:

* Home
* About Me
* Certificates

## 1. Home (Hero Section)
<img width="1893" height="898" alt="image" src="https://github.com/user-attachments/assets/17b764bd-73f9-422e-bf4e-110811ed6fc3" />

Pada section ini ditampilkan informasi utama seperti nama, foto profil, serta tagline singkat yang menggambarkan diri pengguna. Struktur halaman dibuat menggunakan elemen <section id="home"> dan didukung oleh class dari Bootstrap seperti container dan text-center agar tampilan berada di tengah dan terlihat rapi.

Data yang ditampilkan pada bagian ini diambil dari database. Informasi tersebut disimpan pada tabel profile, sehingga dapat diubah tanpa harus mengedit kode program.

Pengambilan data dilakukan menggunakan query sebagai berikut:
```
$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1"); 

$data = mysqli_fetch_assoc($profile);
```
Setelah data berhasil diambil, selanjutnya ditampilkan ke halaman menggunakan PHP, seperti pada contoh berikut:
```
<h1 class="fw-bold"><?= $data['nama']; ?></h1>

<p class="lead"><?= $data['tagline']; ?></p> 

<img src="assets/<?= $data['foto']; ?>" class="profile-img">
```
## 2. About Me
<img width="1882" height="653" alt="image" src="https://github.com/user-attachments/assets/576d655b-a99d-440d-9ca7-b561ce0b78b4" />

Pada section About Me digunakan untuk menampilkan informasi lebih lengkap mengenai diri pengguna. Pada section ini ditampilkan deskripsi singkat, daftar keterampilan (skills), serta pengalaman yang pernah dilakukan. Struktur halaman dibangun menggunakan elemen <section id="about"> dan memanfaatkan komponen Bootstrap seperti container, row, dan col untuk mengatur tata letak menjadi dua bagian.

Deskripsi diri diambil dari tabel profile, sedangkan data keterampilan dan pengalaman masing-masing diambil dari tabel skills dan experiences.

Untuk menampilkan deskripsi, digunakan data yang sebelumnya sudah diambil dari tabel profile:

```
<p class="text-light"><?= $data['deskripsi']; ?></p>
```

* Skills
  
  <img width="635" height="331" alt="image" src="https://github.com/user-attachments/assets/813615f1-d033-4ad1-94ed-4e2d2e03ed05" />

    Sedangkan untuk menampilkan daftar keterampilan, digunakan perulangan untuk mengambil seluruh data dari tabel skills:
    ```
    $skills = mysqli_query($conn, "SELECT * FROM skills");
    while ($skill = mysqli_fetch_assoc($skills)) {
     ?> <div>
            <span><?= $skill['nama']; ?></span>
            <span><?= $skill['level']; ?>%</span>
        </div>
    <?php }?>
    ```
  
* Experiences
  
  <img width="625" height="292" alt="image" src="https://github.com/user-attachments/assets/def67ba2-2871-4cf1-a1ae-002ef5d37375" />

    Untuk bagian pengalaman, data diambil dari tabel experiences dan ditampilkan dalam bentuk list:
    ```
    $experiences = mysqli_query($conn, "SELECT * FROM experiences"); 
    while ($exp = mysqli_fetch_assoc($experiences)) { 
    ?> 
        <li><?= $exp['deskripsi']; ?></li> 
    <?php } ?>
    ```
  
## 3. Certificates
<img width="1900" height="697" alt="image" src="https://github.com/user-attachments/assets/56801dec-3a77-443f-93e0-3041516a6ae5" />

Pada section Certificates ditampilkan beberapa informasi seperti judul sertifikat, deskripsi singkat, gambar, serta tautan menuju detail sertifikat. Struktur halaman dibuat menggunakan elemen <section id="certificates"> dan disusun dalam bentuk grid dengan bantuan Bootstrap seperti row dan col-md-4 agar tampilan lebih teratur dan responsif.

Data sertifikat tidak ditulis secara langsung di dalam kode, melainkan diambil dari database yang tersimpan pada tabel certificates. 

Pengambilan data dilakukan menggunakan query berikut:
```
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
```

Selanjutnya, data ditampilkan menggunakan perulangan agar semua sertifikat dapat muncul secara otomatis:
```
<?php while ($cert = mysqli_fetch_assoc($certificates)) { ?>
    <div class="col-md-4">
        <div class="modern-card">

            <img src="assets/<?= $cert['image']; ?>" alt="Certificate">

            <h5><?= $cert['title']; ?></h5>
            <p><?= $cert['description']; ?></p>

            <a href="<?= $cert['link']; ?>">Lihat Detail</a>

        </div>
    </div>
<?php } ?>
```

Gambar sertifikat ditampilkan dengan mengambil nama file yang tersimpan di database, kemudian digabungkan dengan path folder assets/. 


    
  
    


