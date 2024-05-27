    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title -->
        <title>Responsive Navbar</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #021631;">
            <div class="container">
                <a class="navbar-brand" href="#">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skill">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Home Section -->
        <section id="home" class="home-section d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-white">
                        <h1 style="font-size: 2.5rem;">Hi, Saya</h1>
                        <h2 style="font-size: 3rem; font-weight: bold;">Candra Kusuma Hidayat</h2>
                        <p style="font-size: 1.25rem;">Saya mahasiswa Teknik Informatika<br>Universitas Muhammadiyah Sukabumi</p>
                        <div class="social-icons my-4">
                            <a href="https://www.facebook.com/draa.draa.9406" class="me-3"><i class="fab fa-facebook" style="font-size: 1.5rem;"></i></a>
                            <a href="https://www.instagram.com/candraksmaa_?igsh=MWdkMWR1ZmE1M2FqZQ==" class="me-3"><i class="fab fa-instagram" style="font-size: 1.5rem;"></i></a>
                            <a href="https://twitter.com" class="me-3"><i class="fab fa-twitter" style="font-size: 1.5rem;"></i></a>
                        </div>
                        <a href="#about" class="btn btn-about-me" style="background-color:  #3c59ff; border-color: #3c59ff; color: white; border-radius: 10px; padding: 10px 20px;">About Me</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="assets/img/profile1.jpeg" alt="Your Photo" class="img-fluid rounded-circle" style="max-width: 300px;">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container text-center">
                <div class="row align-items-center mt-4">
                    <div class="col-md-6 text-center">
                        <div class="profile-img-container mb-5">
                            <img src="assets/img/profile2.png" alt="Candra Kusuma Hidayat" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 text-md-start text-white">
                        <h1>About <span style="color: #3c59ff;">Me</span></h1>
                        <p><strong>Nama : </strong><?= esc($about['name']) ?></p>
                        <p><strong>Usia : </strong><?= esc($about['age']) ?></p>
                        <p><strong>Tempat, Tanggal lahir : </strong><?= esc($about['ttl']) ?></p>
                        <p><strong>Alamat : </strong><?= esc($about['address']) ?></p>
                        <p><strong>Telepon : </strong><?= esc($about['telp']) ?></p>
                        <p>Saya adalah seorang mahasiswa Teknik Informatika di Universitas Muhammadiyah Sukabumi. Saya memiliki minat yang besar dalam pengembangan web dan machine learning.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Section -->
        <section id="project" class="project-section">
            <div class="container">
                <h1 class="section-title text-center mb-5"><span style="color: #3c59ff;">My</span> Projects</h1>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="project-card">
                            <img src="assets/img/project1.png" alt="Project 1" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-description">
                                    <p>Sebuah aplikasi web untuk mengelola nilai siswa dengan HTML, CSS, Bootstrap, dan PHP native. Fitur utamanya mencakup pengelolaan data siswa, input nilai, dan laporan nilai.</p>
                                </div>
                            </div>
                        </div>
                        <h5 style="text-align: center;  font-weight: 600; margin-top: 15px;">Sistem Penilaian Siswa</h5>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="project-card">
                            <img src="assets/img/project2.png" alt="Project 2" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-description">
                                    <p>Situs web ini menyajikan informasi lengkap tentang kosan saya. Dibangun dengan HTML, CSS, dan JavaScript, website ini memudahkan pencari kos untuk menemukan informasi tentang fasilitas, harga sewa, dan detail lainnya mengenai kosan saya.</p>
                                </div>
                            </div>
                        </div>
                        <h5 style="text-align: center;  font-weight: 600; margin-top: 15px;">Website Informasi Kosan</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skill Section -->
        <section id="skill" class="skill-section">
            <div class="container">
                <h1 class="section-title text-center">My <span style="color: #3c59ff;">Skills</span></h1>
                <div class="row justify-content-center mt-4 d-none d-md-flex">
                    <div class="col-6 col-md-3 mb-4">
                        <div class="skill-card text-center">
                            <img src="assets/img/html5.png" alt="HTML" class="img-fluid skill-img">
                            <p class="skill-name">HTML</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="skill-card text-center">
                            <img src="assets/img/css3.png" alt="CSS" class="img-fluid skill-img">
                            <p class="skill-name">CSS</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="skill-card text-center">
                            <img src="assets/img/js2.png" alt="JavaScript" class="img-fluid skill-img">
                            <p class="skill-name">JavaScript</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="skill-card text-center">
                            <img src="assets/img/php3.png" alt="PHP" class="img-fluid skill-img">
                            <p class="skill-name">PHP</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel for smaller screens -->
                <div id="skillCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="skill-card text-center">
                                <img src="assets/img/html5.png" alt="HTML" class="img-fluid skill-img">
                                <p class="skill-name">HTML</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="skill-card text-center">
                                <img src="assets/img/css3.png" alt="CSS" class="img-fluid skill-img">
                                <p class="skill-name">CSS</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="skill-card text-center">
                                <img src="assets/img/js2.png" alt="JavaScript" class="img-fluid skill-img">
                                <p class="skill-name">JavaScript</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="skill-card text-center">
                                <img src="assets/img/php3.png" alt="PHP" class="img-fluid skill-img">
                                <p class="skill-name">PHP</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#skillCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#skillCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 style="font-size: 2.5em; font-weight: bold;">Contact <span style="font-size: inherit; font-weight: inherit; color: #3c59ff;">Me</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" style="background-color: #252C41; color: white; border: none;" id="name" name="name" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="phone"></label>
                                <input type="tel" class="form-control" style="background-color: #252C41; color: white; border: none;" id="phone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" style="background-color: #252C41; color: white; border: none;" id="email" name="email" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject"></label>
                            <input type="text" class="form-control" style="background-color: #252C41; color: white; border: none;" id="subject" name="subject" placeholder="Masukkan Subjek Pesan" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message"></label>
                            <textarea class="form-control" style="background-color: #252C41; color: white; border: none;" id="message" name="message" rows="5" placeholder="Masukkan Pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <p>Copyright &copy; 2024 by Candra Kusuma Hidayat | All rights reserved.</p>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>