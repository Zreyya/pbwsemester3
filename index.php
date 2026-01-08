<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zreyya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" href="asset/Raiden-Shogun-PNG-Clipart.png">
    <script src="script.js"></script>
    <style>
      body, .navbar, .card, footer, section, .form-control, .bg-white {
        transition: 0.4s ease, color 0.4s ease, 0.4s ease;
      }

      #hero img {
        border: 5px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      }

      .navbar .nav-link {
        color: white;
      }

      .navbar .navbar-brand {
        color: white;
      }

      footer {
        background-color: #305378;
        color: white;
        padding: 15px 0;
        text-align: center;
        width: 100%;
      }
      
      footer p {
        margin: 0;
      }

      .dark-mode {
        background-color: #121212;
        color: #e0e0e0;
      }

      .dark-mode nav.navbar {
        background-color: #1f1f1f !important;
      }

      .navbar-toggler:focus {
        box-shadow: none;
      }

      .dark-mode .card {
        background-color: #454545;
        color: #e0e0e0;
        border: 1px solid #444;
      }

      .dark-mode footer {
        background-color: #1f1f1f;
        color: #ddd;
      }

      .dark-mode .text-body-secondary {
        color: #9eb7d3 !important;
      }

      .dark-mode .text-muted {
        color: #9eb7d3 !important;
      }

      .dark-mode .bg-danger-subtle,
      .dark-mode #gallery,
      .dark-mode #profile{
        background-color: #343030 !important;
        color: #e0e0e0;
      }

      .dark-mode #article,
      .dark-mode #guest,
      .dark-mode #schedule {
        background-color: #2a2a2a !important;
        color: #e0e0e0;
      }

      .dark-mode .form-control,
      .dark-mode .form-check-label {
        background-color: #2a2a2a;
        color: #e0e0e0;
        border: 1px solid #444;
      }

      .dark-mode a.nav-link,
      .dark-mode a.navbar-brand {
        color: #e0e0e0 !important;
      }

      .dark-mode .btn-primary {
        background-color: #3a6ea5;
        border: none;
      }

      .dark-mode .btn-outline-secondary {
        color: #ccc;
        border-color: #666;
      }

      .dark-mode .bg-white {
        background-color: #1e1e1e !important;
        color: #e0e0e0 !important;
      }

      .dark-mode .form-control {
        background-color: #2a2a2a !important;
        color: #f5f5f5 !important;
        border: 1px solid #555 !important;
      }

      .dark-mode .form-control::placeholder {
        color: #bbb !important;
      }

      .dark-mode .form-check-label {
        color: #e0e0e0 !important;
      }

      .dark-mode .form-check-input {
        background-color: #2a2a2a !important;
        border: 1px solid #777 !important;
      }

      .dark-mode .form-check-input:checked {
        background-color: #3a6ea5 !important;
        border-color: #3a6ea5 !important;
      }

      .dark-mode .btn-primary {
        background-color: #3a6ea5 !important;
        border: none !important;
      }

      .dark-mode .btn-outline-secondary {
        color: #ccc !important;
        border-color: #666 !important;
      }

      .dark-mode footer a i {
        color: #e0e0e0 !important;
      }
    </style>
</head>
<body>
    <!-- navigasi bar -->
<nav class="navbar navbar-dark navbar-expand-lg sticky-top" style="background-color: #305378">
  <div class="container">
    <a class="navbar-brand" href="#">Zreyya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#article">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        <li class="nav-item">
          <a class="nav-link" href="#guest">GuestBook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_blank">Login</a>
        </li>
        <li class="nav-item">
          <a id="dark" class="nav-link"><i class="bi bi-moon-fill"></i></a>
        </li>
        <li class="nav-item">
          <a id="light" class="nav-link"><i class="bi bi-brightness-high-fill"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- hero -->
    <section id="hero" class="text-center bg-danger-subtle p-5 text-sm-start">
      <div class="container">
        <div class="d-sm-flex align-items-center">
          <img src="asset/125347 (1).JPG" alt="Profile" class="img-fluid me-2" width="200">
          <div>
            <h1 class="fw-bold display-4">Haydar Rafa Satya Putra</h1>
            <p class="lead">Mahasiswa Teknik Informatika | Universitas Dian Nuswantoro</p>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- article
    <section id="article" class="text-center p-5" style="background-color: rgb(99, 99, 163);">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3">Article</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
              <div class="card h-100">
                <img src="asset/html.png" class="card-img-top" alt="html">
                  <div class="card-body">
                    <h5 class="card-title">Belajar HTML</h5>
                    <p class="card-text"> Langkah-langkah membuat dokumen HTML:</p>
                    <ol class="card-text" style="text-align: left;">
                      <li> Buka editor teks (VS Code/Sublime/Notepad).</li>
                      <li> Tuliskan tag dasar <code>&lt;!DOCTYPE html&gt;</code>.</li>
                      <li> Tambahkan tag <code>&lt;html&gt;</code> dan <code>&lt;body&gt;</code>.</li>
                    </ol>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="asset/css.png" class="card-img-top" alt="css">
                  <div class="card-body">
                    <h5 class="card-title">Belajar CSS</h5>
                    <p class="card-text">Langkah-langkah membuat dokumen CSS:</p>
                    <ol class="card-text" style="text-align: left;">
                      <li>Buka editor teks (VS Code/Sublime/Notepad).</li>
                      <li>Tuliskan selektor dan properti CSS.</li>
                      <li>Simpan file dengan ekstensi .css.</li>
                    </ol>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="asset/js.png" class="card-img-top" alt="JavaScript">
                  <div class="card-body">
                    <h5 class="card-title">JavaScript</h5>
                    <p class="card-text">Langkah-langkah membuat dokumen JS:</p>
                    <ol class="card-text" style="text-align: left;">
                      <li>Buka editor teks (VS Code/Sublime/Notepad).</li>
                      <li>Tuliskan kode JavaScript di dalam tag <code>&lt;script&gt;</code>.</li>
                      <li>Simpan file dengan ekstensi .js atau di dalam file HTML.</li>
                    </ol>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section> -->
    <!-- article begin -->
<section id="article" class="text-center p-5" style="background-color: rgb(99, 99, 163);">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- gallery -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="asset/1301967432_111154976498917_1753352194958.png" class="d-block w-100" alt="gambar1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Flower Garden</h5>
                    <p>"Bumi luas sekali, tapi untungnya kita ketemu."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="asset/1301967432_138149789228609_1753852018837.png" class="d-block w-100" alt="gambar2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Mount Rinjani</h5>
                    <p>"Tidak apa perjalanannya susah, asalkan puncaknya kamu."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="asset/1301967432_4917917133_1753951497374.png" class="d-block w-100" alt="gambar3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Back To School</h5>
                    <p>"Tak semua usaha itu dipermudah, tapi semua yang berusaha pasti akan berubah."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="asset/1301967432_6854236521_1751096954483-min.png" class="d-block w-100" alt="gambar4">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Katanya Warung</h5>
                    <p>"Asmara t'lah terkalibrasi frekuensi yang sama."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="asset/1301967432_97169485068215_1751640236537-min.png" class="d-block w-100" alt="gambar5">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>-3726 mdpl-</h5>
                    <p>"Kamu adalah keindahan dari semesta dengan bentuk lain."</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    </section>
    <!-- Guest Book -->
    <section id="guest" class="py-5" style="background-color:  rgb(99, 99, 163);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="p-4 bg-white rounded shadow">
              <form action="">
                <div class="mb-3">
                  <h2 class="text-center mb-5">Guest Book</h2>
                  <label for="nama" class="form-label">Nama Lengkap:</label>
                  <input id="nama" class="form-control" type="text" name="namaLengkap">
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Kelamin:</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="L">
                      <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
                      <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat Tinggal:</label>
                  <input id="alamat" class="form-control" type="text" name="alamatTinggal">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email:</label>
                  <input id="email" class="form-control" type="email" name="email">
                </div>
                <div class="mb-3">
                  <label class="form-label">Sosial Media yang Dipakai:</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="sosialMedia" id="facebook" value="Facebook">
                      <label class="form-check-label" for="facebook">Facebook</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="sosialMedia" id="instagram" value="Instagram">
                      <label class="form-check-label" for="instagram">Instagram</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="sosialMedia" id="tiktok" value="Tiktok">
                      <label class="form-check-label" for="tiktok">Tiktok</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="sosialMedia" id="discord" value="Discord">
                      <label class="form-check-label" for="discord">Discord</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="sosialMedia" id="twitter" value="Twitter">
                      <label class="form-check-label" for="twitter">Twitter</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan atau Saran:</label>
                  <textarea id="pesan" class="form-control" name="pesanSaran" rows="5"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <button type="reset" class="btn btn-outline-secondary">Batal</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule -->
    <section id="schedule" class="py-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Senin
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">10:20 - 12:00</h5>
                <p class="mb-0">Basis Data</p>
                <p class="text-muted">Ruang H.5.4</p>
                <hr class="my-3">
                <h5 class="fw-bold mt-2">12:30 - 15:00</h5>
                <p class="mb-0">Logika Informatika</p>
                <p class="text-muted">Ruang H.5.3</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Selasa
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">08:40 - 10:20</h5>
                <p class="mb-0">Basis Data</p>
                <p class="text-muted">Ruang D.2.K</p>
                <hr class="my-3">
                <h5 class="fw-bold mt-2">14:10 - 15:50</h5>
                <p class="mb-0">Pendidikan Kewarganegaraan</p>
                <p class="text-muted">Ruang Alua E3</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Rabu
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">07:00 - 09:30</h5>
                <p class="mb-0">Probabilitas dan Statistik</p>
                <p class="text-muted">Ruang H.5.11</p>
                <hr class="my-3">
                <h5 class="fw-bold mt-2">09:30 - 12:00</h5>
                <p class="mb-0">Sistem Operasi</p>
                <p class="text-muted">Ruang H.3.11</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Kamis
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">08:40 - 10:20</h5>
                <p class="mb-0">Pemrograman Berbasis Web</p>
                <p class="text-muted">Ruang D.2.J</p>
                <hr class="my-3">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Jumat
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">09:30 - 12:00</h5>
                <p class="mb-0">Rekayasa Perangkat Lunak</p>
                <p class="text-muted">Ruang H.3.9</p>
                <hr class="my-3">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Sabtu
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">Libur</h5>
                <p class="mb-0"></p>
                <p class="text-muted"></p>
                <hr class="my-3">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-header bg-danger text-white text-center fw-bold fs-5">
                Minggu
              </div>
              <div class="card-body text-center">
                <h5 class="fw-bold mt-2">Libur</h5>
                <p class="mb-0"></p>
                <p class="text-muted"></p>
                <hr class="my-3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Profile -->
    <section id="profile" class="py-5" style="background-color: rgb(99, 99, 163);">
      <div class="container">
        <div class="card">
          <div class="card-body p-4">
            <h2 class="fw-bold text-center mb-4">Profil Mahasiswa</h2>
            <div class="d-flex flex-column flex-md-row align-items-center gap-4">
              <img src="asset/125347 (1).JPG" alt="Foto Profil" class=" rounded-circle" width="180" height="180" style="object-fit: cover;">
              <div class="flex-grow-1 ">
                <h4 class="fw-semibold mb-3 text-center text-md-start">Haydar Rafa Satya Putra</h4>
                  <table style="border: none;">
                    <tbody>
                      <tr>
                        <th style="width: 150px;">NIM</th>
                        <td>: A11.2024.15700</td>
                      </tr>
                      <tr>
                        <th>Program Studi</th>
                        <td>: Teknik Informatika</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>: zreyrafa@gmail.com</td>
                      </tr>
                      <tr>
                        <th>Telepon</th>
                        <td>: 0877-7618-2392</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>: Jl. Sadewa Utara, Semarang Tengah</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer>
      <div>
        <a href="https://www.instagram.com/zreyya.rap/" target="_blank"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/6287776182392" target="_blank"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <p>Copyright &copy; 2025 Haydar Rafa Satya Putra - All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>