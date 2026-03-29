# Mini Project 1 - Pemrograman Berbasis Web
Nama: Larry Polin Anugrah

NIM: 2409116026

Kelas: A'2024

# Deskripsi Project Website Portfolio
Project ini merupakan website portfolio pribadi yang menggunakan HTML,CSS, Bootstrap 5 dan Vue Js. Website ini dirancang untuk menampilkan profil, minat, keterampilan, pengalaman dan sertifikat yang saya miliki. 

Website ini terdiri dari 3 bagian, yaitu:

* Home
* About Me
* Certificates

# Tampilan dan Penjelasan Code Setiap Section/Fitur

### Fitur Navigasi Bar
<img width="1231" height="67" alt="image" src="https://github.com/user-attachments/assets/2986e47c-3b06-49b2-86a6-87bddc44889a" />
    Pada navigation bar menggunakan komponen Navbar dari Bootstrap 5. Navigation bar ini bersifat responsif, sehingga pada ukuran layar kecil menu akan berubah menjadi tombol collapse (menu kecil). Menu navigasi tersebut terdiri dari Home, About, dan Certificates yang terhubung menggunakan anchor link <a>.

## 1. Home (Hero Section)
<img width="1893" height="898" alt="image" src="https://github.com/user-attachments/assets/17b764bd-73f9-422e-bf4e-110811ed6fc3" />

Pada hero section menggunakan tinggi penuh layar dengan properti CSS `height: 100vh`, sehingga seluruh tampilan yang ditampilkan lebih tertuju kepada identitas pemilik portofolio. Class `hero-section` digunakan untuk styling custom, sedangkan `d-flex align-items-center` dari Bootstrap 5 digunakan untuk memposisikan konten secara vertikal di tengah layar. Lalu terdapat properti `text-white` untuk memastikan warna teks kontras dengan background. 

Background pada hero section menggunakan gambar yang bertemakan coding yang di atur pada CSS `background: url('assets/bg.jpg')`, property `center/cover` digunakan untuk memastikan gambar selalu memenuhi layar tanpa adanya distorsi. Selain properti `position: relative` diperlukan agar overlay dapat ditempatkan secara absolut di atas backgroundnya.

Penggunaan Overlay berfungsi untuk menggelapkan gambar background agar teks dapat terbaca terutama pada gambar profil. Pada bagian tengah section terdapat foto profil dengan bentuk lingkaran yang styling menggunakan CSS. Penggunaan properti `border-radius: 50%` dapat mengubah gambar tersebut menjadi bulat, sedangkan penggunaan properti `object-fit: cover` digunakan untuk menjaga proposi gambar aga tetap rapi.

Selain itu, nama dan deskripsi juga terdapat pada hero section (di bawah foto profil), namun penulisannya menggunakan data binding dari **Vue JS**. Pada teks tersebut menggunakan tag `<h1>` dengan isi `<h1>Halo, Saya {{ nama }}</h1>`, nilai nama tersebut didefinisikan di dalam objek `data()`, sehingga teks pada halaman tersebut bersifat dinamis dan dapat diubah melalui state aplikasi.

## 2. About Me
<img width="1882" height="653" alt="image" src="https://github.com/user-attachments/assets/576d655b-a99d-440d-9ca7-b561ce0b78b4" />

Pada section About Me terdapat informasi yang menampilkan deskripsi diri, keterampilan (skills) dan pengalaman (experiences) dalam satu tampilan yang terstruktur. Section ini dirancang menggunakan Bootstrap 5 Grid System, custom glass-card styling, dan rendering data dinamis menggunakan Vue JS.

Section ini dibungkus di dalam elemen `<section id="about" class="about-section py-5"> `, yang di mana `py-5` meruapakan utility spacing di dalam boostrap sehingga dapat memberikan padding vertikal antar section agar terlihat proporsional. Lalu di dalam section tersebut terdapat elemen `<div class="container">` untuk membatasi lebar konten agar lebih terpusat dan tidak memenuhi layar.

Pada bagian layout menggunakan `<div class="row g-4">` yang berfungsi sebagai pembungkus grid system dengan class `g-4` agar jarak antar kolom menjadi konsisten, lalu di dalam rownya terdapat 2 kolom dengan class `col-md-6`, yang menandakan penggunaan breakpoin `md` agar layout akan terbagi menjadi dua kolom dengan lebar masing-masing 50% ketika ukuran layar medium ke atas.

Selain itu, terdapat Konten Skills dan Experiences yang masing-masing dibungkus di dalam elemen class `glass-card p-4 h-100` agar dapat memberi ruang di dalam card serta memastikan tinggi card mengikuti tinggi kolom agar tampilan seimbang. 

* Skills
  
  <img width="635" height="331" alt="image" src="https://github.com/user-attachments/assets/813615f1-d033-4ad1-94ed-4e2d2e03ed05" />

  Pada bagian Skills dirender secara dinamis dengan Vue JS melalui directive `v-for` yang dapat menunjukkan setiap item yang ada di dalam aray skills yang terdapat pada fungsi `data()` secara otomatis. Nama dan level skill yang ditampilkan menggunakan interpolation `{{ skill.name }}` dan `{{ skill.level }}`.
  Progress bar yang digunakan tidak menggunakan komponen dari default bootstrap, tetapi dibuat secara custom dengan CSS, sehingga perubahan seperti background bar dengan tinggi tertentu dan sudut membulat.
  
* Experiences
  
  <img width="625" height="292" alt="image" src="https://github.com/user-attachments/assets/def67ba2-2871-4cf1-a1ae-002ef5d37375" />

  Pada bagian Experiences juga menggunakan directive `v-for` untuk merendeer daftar pengalaman dari array experiences yang tersimpan pada `data()`. Setiap item tersebut ditampilkan dalam bentuk list menggunakan `<li>` dengan menggunakan interpolation `{{ exp }}`.


Seluruh data yang digunakan pada section about disimpan di dalam instance vue, yang kemudian dihubungkan ke elemn utama menggunakan method `.mount('#app')`. Penggunaan method tersebut berfungsi untuk mengaitkan aplikasi Vue dengan halaman HTML yang memiliki id `app`, sehingga seluruh konten dapat menjadi bagian dari sistem reaktif Vue.

  
## 3. Certificates
<img width="1900" height="697" alt="image" src="https://github.com/user-attachments/assets/56801dec-3a77-443f-93e0-3041516a6ae5" />

Pada section Certificates menggunakan bentuk card modern berbasis grid system Bootstrap. Section ini dibungkus di dalam elemen `<section id="certificates" class="cert-section py-5">`. Struktur utama section ini menggunakan `<div class="container">` untuk menjaga lebar konten agar tidak memenuhi seluruh layar. 

Selain itu, terdapat juga layout daftar sertifikat yang menggunakan `<div class="row g-4">` agar dapat memberikan jarak antar kolom secara konsisten. Lalu setiap card sertifikat ditempatkan di dalam `<div class="col-md-4">` namun pada penggunaan breakpoint ini tampilan dibagi menjadi 3 kolom (33%) jika ukuran layar medium ke atas.

Setiap sertifikat akan ditampilkan secara dinamis dengan menggunakan directive `v-for` agar jumlah card akan otomatis menyesuaikan dengan jumlah data yang tersebut. Data sertifikat seperti judul, deskripsi, dan gambar ditampilkan menggunakan interpolation dan attribute binding. Lalu pada gambar sertifikat dibungkus di dalam elemen `card-img-wrapper` dengan properti `overflow: hidden` dab `object-fit: cover` agar gambar selalu memenuhi area card.

# Teknologi yang digunakan
## 1. HTML
Digunakan untuk struktur halaman website, seperti Navbar, Hero, About, dan Certificates yang dibuat menggunakan elemen semantik.

## 2. CSS
Digunakan untuk mengatur tampilan website agar lebih menairk dan konsisten dengan tema dark.
Penerapannya terdapat pada background image serta overlay di Hero Section, Custome progress bar untuk Skills, Hover Animation pada card dan tombol, Keyframe animation (fade-in), Border radius untuk foto profil berbentuk lingkaran, serta styling button dengan gradiasi warna.

## 3. Bootstrap 5
Digunakan untuk framework CSS untuk mempermudah layouting dan responsive design. Beberapa komponen yang digunakan seperti Navbar, Container, Row, Column (Grid System), Responsive Breakpoints, Utulity Spacing, dan Flex Utilities.

## 4. Vue JS
Digunakan untuk menambahkan interaktivitas dan data rendering dinamis pada website pada website yang bersifat statis. Beberapa fitur yang digunakan seperi Interpolation, Directive, Dynamic Binding, Event Handling, Reactive State, serta Mounting aplikasi.

    
  
    


