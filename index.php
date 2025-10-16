<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bat Hotel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css"> 
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand logo" href="#">Bat Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rooms">Kamar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>                    
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero d-flex justify-content-center align-items-center position-relative overflow-hidden pt-5" style="padding-top: 100px;"> <!-- Added padding-top to push content below navbar -->
        <div class="hero-overlay"></div>
        <div class="container text-center position-relative z-2">
            <div class="hero-content" data-aos="fade-in" data-aos-duration="1200">
                <h1 class="display-3 text-shadow">Selamat Datang di Bat Hotel</h1>
                <p class="lead text-shadow">Nikmati kenyamanan dan pelayanan terbaik di jantung kota.</p>
                <div class="booking-form bg-light p-4 rounded-3 shadow-lg mt-4 mx-auto" style="max-width: 900px;">
                    <h3 class="mb-3">Reservasi Kamar Anda</h3>
                    <form action="#" method="POST" class="row g-3 align-items-end" style="color: black;">
                        <div class="col-md-4"><label for="checkin" class="form-label">Check-in</label><input type="date" id="checkin" name="checkin" class="form-control" required></div>
                        <div class="col-md-4"><label for="checkout" class="form-label">Check-out</label><input type="date" id="checkout" name="checkout" class="form-control" required></div>
                        <div class="col-md-2"><label for="guests" class="form-label">Jumlah Tamu</label><select id="guests" name="guests" class="form-select"><option value="1">1 Tamu</option><option value="2" selected>2 Tamu</option><option value="3">3 Tamu</option><option value="4">4 Tamu</option></select></div>
                        <div class="col-md-2"><button type="submit" class="btn btn-warning w-100">Cek Ketersediaan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <main>
        <section id="about" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 loby" data-aos="fade-right">
                        <img src="gambar/lobby1.jpg" alt="Lobby Hotel" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <h2 class="section-title text-start">Pengalaman Menginap yang Tak Terlupakan</h2>
                        <p class="text-muted">Bat Hotel adalah oase ketenangan di tengah hiruk pikuk kota. Kami mendedikasikan diri untuk memberikan pelayanan personal dan fasilitas premium yang memastikan setiap momen Anda bersama kami menjadi istimewa.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check-circle text-warning me-2"></i>Lokasi Strategis di Pusat Bisnis</li>
                            <li><i class="fas fa-check-circle text-warning me-2"></i>Desain Interior Modern & Elegan</li>
                            <li><i class="fas fa-check-circle text-warning me-2"></i>Sarapan Buffet Internasional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="rooms" class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Temukan Kamar Sempurna Anda</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card room-card h-100 shadow border-0">
                            <img src="https://via.placeholder.com/400x300.png?text=Deluxe+Room" class="card-img-top" alt="Deluxe Room">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Kamar Deluxe</h5>
                                <p class="card-text text-muted">Ideal untuk pelancong bisnis, menawarkan kenyamanan dan ruang kerja yang efisien.</p>
                                <div class="room-amenities my-3">
                                    <span><i class="fas fa-wifi"></i> WiFi</span>
                                    <span><i class="fas fa-tv"></i> TV 4K</span>
                                    <span><i class="fas fa-snowflake"></i> AC</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="room-price">Mulai dari <strong>Rp 850.000</strong> / malam</p>
                                    <a href="#" class="btn btn-warning w-100">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="testimonials" class="py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Kata Mereka Tentang Kami</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="stars">★★★★★</div>
                            <p>"Pelayanan luar biasa! Kamarnya bersih dan pemandangannya indah. Pasti akan kembali lagi saat ke kota ini."</p>
                            <cite>– Budi Santoso</cite>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fasilitas" class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Fasilitas Publil di Bat Tols</h2>
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><img src="gambar/pool1.jpg" class="img-fluid gallery-img" alt="Pool"></div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><img src="gambar/pool1.jpg" class="img-fluid gallery-img" alt="Pool"></div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><img src="gambar/pool1.jpg" class="img-fluid gallery-img" alt="Pool"></div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100"><img src="gambar/pool1.jpg" class="img-fluid gallery-img" alt="Pool"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="logo">Bat Hotels</h5>
                    <p class="text-white-50">Menyediakan akomodasi premium dengan sentuhan personal untuk perjalanan bisnis dan liburan Anda.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Navigasi</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#rooms">Kamar</a></li>
                        <li><a href="#testimonials">Testimoni</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kontak Kami</h5>
                    <ul class="list-unstyled text-white-50">
                        <li><i class="fas fa-map-marker-alt me-2"></i>bat bat</li>
                        <li><i class="fas fa-phone me-2"></i> (021) 123-4567</li>
                        <li><i class="fas fa-envelope me-2"></i> info@batHotels.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Ikuti Kami</h5>
                    <div class="social-media">
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="text-white-50">
            <p class="text-center text-white-50 mb-0">&copy; 2025 Bat Hotel. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800 });
    </script>
</body>
</html>