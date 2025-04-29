<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pemerintah - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #005E7A;
            --secondary-color: #009688;
            --accent-color: #FFC107;
            --light-color: #E8F4F8;
            --dark-color: #333333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
            background-color: #f8f9fa;
            padding-top: 56px;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            margin-right: 0;
            font-weight: 700;
            color: white !important;
        }

        .main-hero-wrapper {
            position: relative;
            background: linear-gradient(rgba(210, 245, 255, 0.8), rgba(255, 255, 255, 0.8));
            padding: 4rem 0;
        }

        .main-hero-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.8;
        }

        .hero-section {
            color: white;
            position: relative;
            z-index: 1;
        }


        .feature-box {
            padding: 2rem;
            border-radius: 8px;
            background-color: white;
            height: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-box i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .card {
            border-radius: 15px;
            border: none;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: auto;
        }

        .carousel-control-prev {
            left: -50px;
        }

        .carousel-control-next {
            right: -50px;
        }

        .bg-teal {
            background-color: #009688;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px 8px 0 0 !important;
        }

        .partner-section {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .partner-section h3 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .partner-item {
            padding: 1rem;
            text-align: center;
        }

        .partner-img {
            max-height: 100px;
            width: auto;
            margin: 0 auto;
            display: block;
        }

        .partner-title {
            color: var(--dark-color);
            font-weight: 600;
            margin-top: 1rem;
        }

        .carousel-indicators {
            position: relative;
            bottom: auto;
            margin: 2rem 0 0;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(0, 94, 122, 0.3);
            border: none;
            margin: 0 8px;
            transition: all 0.3s ease;
        }

        .carousel-indicators .active {
            background-color: var(--primary-color);
            width: 30px;
            border-radius: 6px;
        }

        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        footer h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/picture.png') }}" alt="Logo" height="40">
                <span class="mb-0">Pemerintah Kota Jakarta Selatan</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('/')) active @endif" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('profil*')) active @endif"
                            href="{{ route('profile') }}">Profil Sudinsos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('pelayanan*')) active @endif"
                            href="{{ route('berita') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('berita*')) active @endif"
                            href="{{ route('kontak') }}">Berita</a>
                    </li>
                </ul>
                <div class="social-icons ms-3">
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="main-hero-wrapper">
            <div class="container">
                <div class="hero-section text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://selatan.jakarta.go.id/upload/thumbnail/202504271252_UNTUK_BERITA_20250427_125040_0000.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">154 Anak Yatim dan Duafa Terima Santunan di Hajatan Jagakarsa</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" i class="bi bi-folder"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                    <path
                                        d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z" />
                                </svg></i></li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-building me-2"></i> Tentang Kami</h5>
                    <p>Website resmi Pemerintah Kota Jakarta Selatan untuk memberikan pelayanan dan informasi kepada
                        masyarakat secara transparan dan akuntabel.</p>
                    <div class="social-media mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-address-book me-2"></i> Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Prapanca Raya No.9, Kebayoran
                            Baru, Jakarta Selatan</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 2271-6000</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@example.com</li>
                        <li><i class="fas fa-clock me-2"></i> Senin-Jumat: 08.00 - 16.00 WIB</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5><i class="fas fa-link me-2"></i> Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Kebijakan Privasi</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Syarat dan Ketentuan</a>
                        </li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2"></i>Peta Situs</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>FAQ</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">Hak Cipta &copy; {{ date('Y') }} <a href="#"
                        style="color:rgb(205, 255, 249); font-family: Georgia, 'Times New Roman', Times, serif;">Pemerintah
                        Kota
                        Administrasi Jakarta Selatan</a></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>