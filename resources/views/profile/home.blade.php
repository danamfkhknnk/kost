<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TENTREM MULYO</title>
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/style.css" />
    
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <!-- Hapus fluid agar ada space -->
      <div class="container">
        <a class="navbar-brand text-white fs-4 fw-bold" href="#">
          <img class="" src="assets/img/logo/white-crop-removebg.png" alt="">
        </a>
        <button
          class="navbar-toggler text-white"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNav">
          <!-- push navigation link kekanan (margin start) -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kamar">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimoni">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
          </ul>
          <a href="#" class="btn btn-light ms-lg-3 rounded-pill"
            >Login</a
          >
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
      <div class="container">
        <div class="col-12">
          <h1 data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000" class="text-uppercase text-white fw-semibold display-1">
            KOST TENTREM MULYO
          </h1>
          <h5 class="text-uppercase text-white mt-3 mb-4" data-aos="fade-right" data-aos-duration="1100" data-aos-delay="1100">
            Tempat Tinggal Nyaman untuk Kesuksesan Masa Depan
          </h5>
          <div data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1200">
            <a href="assets/compro MRK.pdf" download="companyprofileMRK.pdf" class="btn btn-brand ms-2 mb-2 rounded-pill">
              Pesan Kamar Tersedia
            </a>
            <a href="#contact" class="btn btn-light ms-2 mb-2 rounded-pill">Kontak Kami</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-down"
          data-aos-delay="50">
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Tentang Kami</h1>
              <div class="line"></div>
              <p>
                PT. Company Profile adalah perusahaan yang bergerak di bidang konstruksi yang menghadirkan solusi untuk kebutuhan anda.       
              </p>          
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 text-center" data-aos="fade-down" data-aos-delay="50">
            <img class="img-fluid" src="assets/img/aboutus/about us.jpeg" alt="">
          </div>
          <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
             <div class="d-flex mb-3 pt-3" data-aos="fade-down" data-aos-delay="100">
              <div class="iconbox me-4">
                <i class="ri-verified-badge-line"></i>
              </div>
              <div>
                <h5>Pengalaman dan Keahlian</h5>
                <p>
                  Mempunyai pengalaman dibidang konstruksi.
                </p>
              </div>
            </div>
            <div class="d-flex mb-3" data-aos="fade-down" data-aos-delay="100">
              <div class="iconbox me-4">
                <i class="ri-user-heart-fill"></i>
              </div>
              <div>
                <h5>Kualitas Pelayanan</h5>
                <p>
                  Menyediakan solusi desain dan pembangunan yang inovatif dan berkualitas tinggi.
                </p>
              </div>
            </div>
            <div class="d-flex" data-aos="fade-down" data-aos-delay="100">
              <div class="iconbox me-4">
                <i class="ri-group-2-fill"></i>
              </div>
              <div>
                <h5>Kolaborasi Profesional</h5>
                <p>
                  Bekerja sama dengan klien untuk memahami kebutuhan spesifik dan memastikan hasil yang memuaskan.
                </p>
              </div>
            </div>
            <div class="d-flex" data-aos="fade-down" data-aos-delay="100">
              <div class="iconbox me-4">
                <i class="ri-stairs-fill"></i>
              </div>
              <div>
                <h5>Inovasi dan Keberlanjutan</h5>
                <p>
                  Terus berinovasi dan mengikuti tren terbaru dalam industri untuk memberikan hasil terbaik.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="kamar" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-down"
          data-aos-delay="150">
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Layanan Kami</h1>
              <div class="line"></div>
              <p>
                Kami menawarkan berbagai layanan profesional yang dirancang untuk memenuhi berbagai kebutuhan desain dan pembangunan.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-4 text-center" data-aos="fade-down" data-aos-delay="150">
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="150">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <img class="" src="assets/img/aboutus/about us.jpeg" alt="">
              </div>
              <h5 class="mt-1 mb-1 fs-3">Kamar 1</h5>
              <div class="btn-group">
                <div class="d-flex" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1200">
                  <a href="assets/compro MRK.pdf" download="companyprofileMRK.pdf" class="btn btn-brand rounded-pill">
                    Detail Fasilitas
                  </a>
                  <a href="#contact" class="btn btn-light rounded-pill">Kontak Kami</a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="250">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-shopping-bag-2-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Kualitas Produk</h5>
              <p>
                Kami menyediakan berbagai produk berkualitas tinggi untuk kebutuhan konstruksi dan arsitektur modern.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="350">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-home-heart-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Instalasi & Pemasangan</h5>
              <p>
                Pastikan semua komponen terpasang dengan aman dan sesuai dengan desain yang diinginkan.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="150">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-puzzle-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Custom</h5>
              <p>
                Setiap ruang itu unik. Itulah sebabnya kami menawarkan solusi khusus yang dirancang khusus untuk memenuhi kebutuhan Anda.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="250">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-draft-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Estimasi Biaya dan Material</h5>
              <p>
                Memberikan estimasi biaya proyek yang transparan dan akurat, termasuk perhitungan kebutuhan material yang akurat.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6" data-aos="fade-down"
          data-aos-delay="350">
            <div class="service theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i class="ri-tools-fill"></i>
              </div>
              <h5 class="mt-4 mb-3">Perawatan & Pemeliharaan</h5>
              <p>
                Menyediakan layanan pemeliharaan dan perbaikan rutin untuk menjaga produk dan konstruksi dalam kondisi prima.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECT -->
    <section id="testimoni" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-down"
          data-aos-delay="150">
            <div class="section-title">
              <h1 class="display-4 fw-semibold">Project Kami</h1>
              <div class="line"></div>
              <p>
                Kami bangga menjadi bagian dari berbagai proyek konstruksi dan arsitektur yang mengutamakan inovasi dan kualitas.
              </p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row g-4">
            <!-- Porto 1 -->
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
              <div class="product-item image-zoom">
                <div class="image-zoom-wrapper">
                  <img src="assets/img/project/gmi.jpg" alt="" />
                </div>
                <a
                  href="assets/img/project/gmi.jpg"
                  data-fancybox="gallery"
                  class="iconbox rounded-pill"
                  ><i class="ri-search-2-line"></i
                ></a>
              </div>
            </div>
        
            <!-- Porto 2 -->
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
              <div class="product-item image-zoom">
                <div class="image-zoom-wrapper">
                  <img src="assets/img/project/cura-wellnes.jpg" alt="" />
                </div>
                <a
                  href="assets/img/project/cura-wellnes.jpg"
                  data-fancybox="gallery"
                  class="iconbox rounded-pill"
                  ><i class="ri-search-2-line"></i
                ></a>
              </div>
            </div>
        
            <!-- Porto 3 -->
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
              <div class="product-item image-zoom">
                <div class="image-zoom-wrapper">
                  <img src="assets/img/project/laoban.jpg" alt="" />
                </div>
                <a
                  href="assets/img/project/laoban.jpg
                  data-fancybox="gallery"
                  class="iconbox rounded-pill"
                  ><i class="ri-search-2-line"></i
                ></a>
              </div>
            </div>

            <!-- Porto 4 -->

          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-dark mt-4" id="contact">
      <div class="container">
        <div class="row">
          <div
            class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
            <div class="section-title">
              <h1 class="display-4 text-white fw-semibold">Kontak Kami</h1>
              <div class="line bg-white"></div>
              <p class="text-white">
                Kami selalu siap mendengarkan dan membantu Anda. Jika Anda memiliki pertanyaan tentang layanan kami, memerlukan konsultasi proyek, atau ingin mendiskusikan ide Anda lebih lanjut, jangan ragu untuk menghubungi kami.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-3 col-sm-6">
              <a href="#" id="foothome" class="text-white">PT. Company Profile</a>
              <div class="line"></div>
              <p>
                Kreasi Tanpa Batas untuk Ruang yang Lebih Baik.
              </p>
              <div class="social-icons">
                <a href="#"><i class="ri-whatsapp-fill"></i></a>
              </div>
            </div>
            <div class="service-footer col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">LAYANAN KAMI</h5>
              <div class="line"></div>
              <ul>
                <li>Konsultasi</li>
                <li>Produk Berkualitas</li>
                <li>Instalasi & Pemasangan</li>
                <li>Custom</li>
                <li>Estimasi Biaya & Material</li>
                <li>Perawatan & Pemeliharaan</li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">PRODUK KAMI</h5>
              <div class="line"></div>
              <ul>
                <li><a href="#product">Pintu (Kaca/Aluminium/ACP)</a></li>
                <li><a href="#product">Partisi (Kaca/Aluminium/ACP)</a></li>
                <li><a href="#product">Folding Gate</a></li>
                <li><a href="#product">Rak Serbaguna</a></li>
                <li><a href="#product">Custom Kaca/Aluminium/Besi/ACP</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5 class="mb-0 text-white">KONTAK</h5>
              <div class="line"></div>
              <ul>
                <li>Kota Tangerang - Banten</li>
                <li>ipingunawan.ig@gmail.com</li>
                <li><a href="#">0899-8089-272</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row g-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">© Copyright yosephinegunawan. All Rights Reserved</p>
            </div>
            <div class="author col-auto">
              <p class="mb-0">
                Designed By
                <a
                  href="https://www.linkedin.com/in/yosephinegunawan/"
                  >Yosephine Gunawan
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Floating Button WA -->
    <a href="#" class="whatsapp-btn">
      <i class="ri-whatsapp-fill"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>