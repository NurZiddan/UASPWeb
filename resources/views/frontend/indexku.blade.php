<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Organisasi Mahasiswa Poltek Harber</title>
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
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""> -->
        <h1>Ormawa PHB<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Organization</a></li>
          <li><a href="#team">Leader</a></li>
          <li><a href="/blog">Event</a></li>
          <li class="dropdown"><a href="#"><span>Member</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/rana9">Rana9</a></li>
              <li><a href="/hmpti">HMPTI</a></li>
              <li><a href="/formasi">Formasi</a></li>
              <li><a href="/bem">BEM</a></li>
              <li><a href="/bpm">BPM</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Ormawa PHB</span></h2>
          <p>Website untuk memberikan infromasi tentang Ormawa PHB</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=SdHJzDHgMpM" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('frontend/assets/img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Ormawa Terbaik</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Ormawa Teraktif</a></h4>
            </div>
          </div><!--End Icon Box -->
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Organisasi mahasiswa adalah organisasi yang beranggotakan mahasiswa untuk mewadahi bakat, minat dan potensi mahasiswa yang dilaksanakan di dalam kegiatan ko dan ekstra kurikuler. </p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Setiap Organisasi memiliki kegiatan masing-masing</h3>
            <img src="{{ asset('frontend/assets/img/about.png') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>seperti pada gambar diatas merupakan kegiatan dari salah satu organisasi mahasiswa (Ormawa) yaitu dengan melakukan berbagi takjil pada saat bulan Ramadhan 1444H</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Berikut organisasi yang ada di Politeknik Harapan Bersama
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Rana9</li>
                <li><i class="bi bi-check-circle-fill"></i> HMPTI</li>
                <li><i class="bi bi-check-circle-fill"></i> Formasi</li>
                <li><i class="bi bi-check-circle-fill"></i>BEM</li>
                <li><i class="bi bi-check-circle-fill"></i>BPM</li>
              </ul>
              <p>
                Politeknik Harapan Bersama bekerja sama dengan ormawanya setiap ada kegiatan penerimaan mahasiswa baru
              </p>
              <div class="position-relative mt-4">
                <img src="{{ asset('frontend/assets/img/about-2.jpg') }}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=SdHJzDHgMpM" class="glightbox play-btn"></a>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-2.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-5.jpg') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-6.jpg') }}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('frontend/assets/img/stats-img.svg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="736" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Anggota Aktif</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Event</strong> yang sudah terlaksanakan pertahun</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="436" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Struktural</strong> per organisasi</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=SdHJzDHgMpM" class="glightbox play-btn"></a>
        <h3>Ormawa Call To Action</h3>
        <p>Bhavana Samahita</p>
        <a class="cta-btn" href="#">Ormawa Call To Action</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Organization</h2>
          <p>Berikut adalah organisasi-organisasinya</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Rana9</h3>
              <p>Organisasi yang terfokus dalam bidang fotografi.</p>
              <a href="https://www.instagram.com/rana9_kmharber/" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>HMPTI</h3>
              <p>Himpunan Mahasiswa Prodi Teknik Informatika(HMPTI) adalah Himpunan Mahasiswa yang memiliki arti sekumpulan mahasiswa yang memiliki tujuan sama di universitas, akademi atau institut. HIMA merupakan kegiatan ekstrakurikuler yang bisa menjadi wadah untuk belajar mata kuliah, sharing wawasan dengan teman dan dosen serta hal bermanfaat lain.</p>
              <a href="https://www.instagram.com/hmpti_harber/" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Formasi</h3>
              <p>Forum Mahasiswa Islam adalah Forum yang dibentuk untuk membentuk jiwa dan rohani yang islami</p>
              <a href="https://www.instagram.com/formasi_kmharber/" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>BEM</h3>
              <p>Organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat Universitas atau Institut.</p>
              <a href="https://www.instagram.com/bem_kmharber/" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>BPM</h3>
              <p>Lembaga legislatif tertinggi yang berkedudukan dalam organisasi kemahasiswaan Politeknik Harapan Bersama.</p>
              <a href="https://www.instagram.com/bpm_kmharber/" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Leader</h2>
          <p>Berikut Ketua dari setiap ormawa</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('frontend/assets/img/team/team-1.png') }}" class="img-fluid" alt="">
              <h4>Fadhillah Hanum</h4>
              <span>Rana9</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/hannmm24_/"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('frontend/assets/img/team/team-2.png') }}" class="img-fluid" alt="">
              <h4>Bima Arya Fatah</h4>
              <span>HMPTI</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bimaaryafatah23/"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('frontend/assets/img/team/team-3.png') }}" class="img-fluid" alt="">
              <h4>Rayyan</h4>
              <span>Formasi</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/rayy_alacartee/"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('frontend/assets/img/team/team-4.png') }}" class="img-fluid" alt="">
              <h4>Luthfiansyah Aenulkhakim</h4>
              <span>BEM</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/lutfiansyahak/"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('frontend/assets/img/team/team-5.png') }}" class="img-fluid" alt="">
              <h4>Muh Faishal Irfantino</h4>
              <span>BPM</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/faishall6690/"><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Blog yang sudah dilakukan oleh setiap ormawa</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('frontend/assets/img/blog/blog-1.png') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Rana9</p>

              <h2 class="title">
                <a href="blog-details.html">Berbagi Takjil & Galang Dana Bulan Ramadhan 1444H</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/assets/img/blog/blog-author.png') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Bakti Satrio</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">April 8, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('frontend/assets/img/blog/blog-2.png') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">HMPTI</p>

              <h2 class="title">
                <a href="blog-details.html">Webinar [INSIGHTFUL EVENT 2023]</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/assets/img/blog/blog-author-2.png') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Putri Ajeng I</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">April 17, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ asset('frontend/assets/img/blog/blog-3.png') }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Formasi</p>

              <h2 class="title">
                <a href="blog-details.html">Halal Bi Halal "Merajut kebersamaan untuk mempererat silaturahmi dalam kesejukan iman"</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{ asset('frontend/assets/img/blog/blog-author-3.png') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Fika Nur Hasari</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">April 29, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Silahkan kabari kami jika ada kritik dan saran</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>
                    Jalan Mataram No 9 (belakang terminal) Pesurungan Lor Kota Tegal. <br>
                  </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>midnight@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 873 8923 2134</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Sat-Sun: 12AM - 22PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="#hero" class="logo d-flex align-items-center">
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
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Organization</a></li>
            <li><a href="#team">Leader</a></li>
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