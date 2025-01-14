<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MY DAILY</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    body {
      padding-top: 70px;
      /* Mengatur jarak untuk navbar tetap */
    }

    #aboutme {
      background-color: rgb(239, 248, 116);
    }

    /* Background colors for light and dark modes */
    #blogs {
      background-color: #fd0e69;
      /* Light mode */
      color: #2b2323;
      /* Light mode text */
      padding: 2rem;
      border-radius: 8px;
    }

    /* Dark mode */
    [data-bs-theme="dark"] #blogs {
      background-color: #504f4f;
      /* Dark mode background */
      color: #f0f0f0;
      /* Dark mode text */
    }

    /* Card styling for dark mode */
    [data-bs-theme="dark"] .card {
      background-color: #c08181;
      color: #f0f0f0;
      border: none;
    }

    [data-bs-theme="dark"] #aboutme {
      background-color: #502525;
      /* Dark mode background */
      color: #f0f0f0;
      /* Dark mode text */
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top bg-danger text-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MY DAILY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <button id="light-mode" class="btn btn-light">
                <i class="fas fa-sun"></i>
              </button>
            </li>
            <li class="nav-item">
              <button id="dark-mode" class="btn btn-dark">
                <i class="fas fa-moon"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container-fluid mt-2">
    <div class="d-flex justify-content-end">
      <h6>
        Time :
        <span id="tanggal"></span>
        <span id="jam"></span>
      </h6>
    </div>

    <section class="my-5 text-center" id="about-us">
      <h2>Tentang Mey</h2>
      <p>
        Namaku Yohana Maysya, biasa orang memanggilku <strong>MEY</strong>.
        Aku lahir pada tanggal 8 Mei 2005, sebab itu namaku Mey.
        Aku berasal dari kota Jepara, Jawa Tengah. Sekarang umurku menginjak 19 tahun
        Aku mahasiswa dari Universitas Dian Nuswantoro Semarang dengan prodi Teknik Informatika.
        Btw aku anak BEM FIK lhoooo..
      </p>
      <p>
        Aku tuh suka banget nonton film, baca buku, dan pastinya, apalagi kalau ada matcha yang selalu bikin chill. Kalau lagi lapar, nasi goreng jadi pilihan yang nggak pernah gagal memuaskan. Musik juga nggak kalah penting, aku sering dengerin lagu-lagunya Niki, Hindia, dan SZA, karena vibe-nya selalu pas buat nemenin segala suasana. Oh, aku juga suka cerita ke teman-temanku, mau itu hal penting atau nggak, yang penting cerita pokoknya mereka harus tau gebrakanku!!!
      </p>
    </section>

    <section class="my-5" id="services">
      <h2 class="text-center">Layanan</h2>
      <ul>
        <li>
          <strong>Tempat Curhat</strong> Aku tipe orang yang selalu ada buat teman-teman, jadi tempat curhat yang nggak pernah menghakimi. Mau itu masalah besar atau hal kecil, aku selalu siap dengerin dan kasih dukungan. Kadang, ngobrol santai aja juga udah cukup buat ngerasa lega, dan aku senang bisa jadi teman yang bisa dipercaya buat berbagi cerita.
        </li>
        <li>
          <strong>Jasa Antar</strong> Aku juga sering jadi "jasa antar" buat teman-teman, soalnya banyak yang nggak bisa bawa motor. Jadi, kalau ada yang butuh diantar kemana-mana, aku pasti siap bantu. Gak masalah jaraknya jauh atau deket, yang penting aku ketemu temenku. Selalu senang bisa bantu temenku!
        </li>
      </ul>
    </section>

    <section class="my-5 text-center" id="blogs">
      <h2 class="mb-4">Blog</h2>
      <div class="row">
        <!-- Blog Post 1 -->
        <div class="col-6 col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="image/WhatsApp Image 2024-12-02 at 23.14.10_2e7d2f5f.jpg"
              class="card-img-top"
              alt="Gambar 1" />
            <div class="card-body">
              <h5 class="card-title">
                Aku sama temen divisiku
              </h5>
              <p class="text-muted">Diunggah pada 1 Desember 2024</p>
              <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Blog Post 2 -->
        <div class="col-6 col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="image/WhatsApp Image 2024-12-02 at 23.17.56_a41dfd62.jpg"
              class="card-img-top"
              alt="Gambar Blog 2" />
            <div class="card-body">
              <h5 class="card-title">
                BEM FIK
              </h5>
              <p class="text-muted">Diunggah pada 30 November 2024</p>
              <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Blog Post 3 -->
        <div class="col-6 col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="image/WhatsApp Image 2024-12-02 at 23.16.22_9a398fd3.jpg"
              class="card-img-top"
              alt="Gambar Blog 3" />
            <div class="card-body">
              <h5 class="card-title">
                Aku sama temen kelasku
              </h5>
              <p class="text-muted">Diunggah pada 10 November 2024</p>
              <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5 text-center" id="schedule">
      <h2 class="mb-4">Our Schedule</h2>
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>SENIN</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                Sistem Operasi <br>
                12.30 - 15.00 | H.4.9
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>SELASA</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                Pemrograman Berbasis Web <br>
                09.30 - 12.00 | D.2.J
                <hr>
                <p class="card-text">
                    Basis Data <br>
                    14.10 - 15.50 | D.3.M
                  </p>
              </p>
              <hr>
              <p class="card-text">
                Pendidikan Kewarganegaraan <br>
                18.30 - 20.10| AULA E.3
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>RABU</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                Logika Informatika <br>
                09.30 - 12.00 | H.4.5
              </p>
          </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>KAMIS</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                Probabilitas dan Statistik <br>
                09.30 - 12.00 | H.4.12
              </p>
              <hr>
              <p class="card-text">
                Basis Data <br>
                12.30 - 14.10 | H.5.5
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>JUMAT</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                RPL <br>
                09.30 - 12.00 | H.4.5
              </p>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header text-center bg-danger text-white">
              <p>SABTU</p>
            </div>
            <div class="card-body">
              <p class="card-text">
                FREE
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid d-flex align-items-center justify-content-center" style="padding: 8rem 0" id="aboutme">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="data:image/png;base64,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" alt="About Me" class="img-fluid rounded-circle about-img" width="400" height="400" style="object-fit: cover;">
        </div>

        <div class="col-md-8 text-center text-md-start">
          <p class="mb-1">A11.2023.14943</p>
          <h2><b>YOHANA MAYSYA HUTAPEA</b></h2>
          <p>Program Studi Teknik Informatika<br><span onclick="window.open('https://dinus.ac.id/', '_blank')" style="cursor:pointer"><b>Universitas Dian Nuswantoro</b></span></p>
        </div>
      </div>
    </section>


  </main>

  <footer class="text-center py-3">
    <div class="social-icons">
      <i class="bi bi-instagram mx-1 fs-3"></i>
      <i class="bi bi-twitter mx-1 fs-3"></i>
      <i class="bi bi-whatsapp mx-1 fs-3"></i>

    </div>
    <p class="mt-2">Mey &copy; 2024</p>
  </footer>


  <script>
    document
      .getElementById("light-mode")
      .addEventListener("click", function() {
        document.documentElement.setAttribute("data-bs-theme", "light");
      });

    document
      .getElementById("dark-mode")
      .addEventListener("click", function() {
        document.documentElement.setAttribute("data-bs-theme", "dark");
      });

    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
      var waktu = new Date();
      var bulan = waktu.getMonth() + 1;

      setTimeout("tampilWaktu()", 1000);
      document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
      document.getElementById("jam").innerHTML =
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <!-- <script src="assets/js/theme.js"></script> -->
</body>

</html>