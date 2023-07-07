<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrasi New Member Formasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.jpg') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">midnightart@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 873 8923 2134</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Ormawa PHB<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">About</a></li>
          <li><a href="/">Organization</a></li>
          <li><a href="/">Leader</a></li>
          <li><a href="/blog">Event</a></li>
          <li class="dropdown"><a href="#"><span>Member</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/rana9">Rana9</a></li>
              <li><a href="/hmpti">HMPTI</a></li>
              <li><a href="#">Formasi</a></li>
              <li><a href="/bem">BEM</a></li>
              <li><a href="/bpm">BPM</a></li>
            </ul>
          </li>
          <li><a href="/">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Formasi</h2>
              <p>Register Form For New Member of Formasi </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="#">Member</a></li>
            <li>Formasi</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

              <div class="reply-form">

                <h4>Register Your New Member</h4>
                <form action="/rana9/store" method="GET">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="nim">NIM</label>
                      <input name="nim" type="text" class="form-control" placeholder="Your NIM*">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="first-name-column">Name</label>
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="semester">Semester</label>
                      <input name="semester" type="text" class="form-control" placeholder="Your Semester*">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="prodi">Prodi</label>
                      <input name="prodi" type="text" class="form-control" placeholder="Your Prodi*">
                    </div>
                    <div class="col form-group">
                      <label for="ormawa">Ormawa</label>
                      <textarea name="ormawa" class="form-control" placeholder="Your Ormawa*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                <div class="table-responsive">
                  <table class="table table-stried mb-0">
                    <thead>
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        <th>Prodi</th>
                        <th>Ormawa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $member)
                      <tr>
                        <td>{{ $member->nim }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->semester }}</td>
                        <td>{{ $member->prodi }}</td>
                        <td>{{ $member->ormawa }}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#">Hapus</a></td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
                </div>

              </div>

            </div><!-- End blog comments -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>Ormawa</span>
          </a>
          <p>Organisasi kemahasiswaan atau Ormawa merupakan sebuah organisasi intra pendidikan tinggi, sebagai wadah pengembangan implementasi Tridharma Perguruan Tinggi yang dibentuk dari, oleh, dan untuk mahasiswa atas persetujuan rektor pada tingkat Universitas, Fakultas dan program studi.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">About us</a></li>
            <li><a href="/">Organization</a></li>
            <li><a href="/">Leader</a></li>
            <li><a href="/blog">Event</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Organization</h4>
          <ul>
            <li><a href="https://www.instagram.com/rana9_kmharber/">Rana9</a></li>
            <li><a href="https://www.instagram.com/hmpti_harber/">HMPTI</a></li>
            <li><a href="https://www.instagram.com/formasi_kmharber/">Formasi</a></li>
            <li><a href="https://www.instagram.com/bem_kmharber/">BEM</a></li>
            <li><a href="https://www.instagram.com/bpm_kmharber/">BPM</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jalan Mataram No 9 (belakang terminal) Pesurungan Lor Kota Tegal. <br>
            <strong>Phone:</strong> +62 873 8923 2134<br>
            <strong>Email:</strong> midnight@gmail.com<br>
          </p>

        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Midnight</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Muhammad Abdillah Nur Ziddan Sujito_21090102</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>