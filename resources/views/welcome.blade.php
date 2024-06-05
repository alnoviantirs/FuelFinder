<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Aplikasi Pemetaan Lokasi SPBU Pertamina di Bandung</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <style>
        #map { width: 100%;
        height: 500px;
        position: sticky;
        top: 0; /* Adjust this value based on your layout and preferences */ }

        .icon-size {
        width: 16px;
        height: 16px;
    }
    </style>

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo/pertamina.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#pricing" class="page-scroll"
                                            aria-label="Toggle navigation">Data SPBU</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#map-spbu" class="page-scroll"
                                        aria-label="Toggle navigation">Map</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll"
                                            aria-label="Toggle navigation">Facilities</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ route('contact') }}" aria-label="Toggle navigation">Contact</a>
                                    </li> --}}
                                    
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                                {{-- <a href="javascript:void(0)" class="btn">Get it now</a> --}}
                                <a href="{{ route('login') }}" class="btn">Login Admin</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Aplikasi Pemetaan Lokasi SPBU Pertamina di Bandung</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">Temukan lokasi dan informasi lengkap mengenai SPBU Pertamina di Bandung dengan aplikasi pemetaan lokasi ini.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="https://play.google.com/store/apps/details?id=com.dafturn.mypertamina" class="btn"><i class="lni lni-apple"></i> App Store</a>
<a href="https://play.google.com/store/apps/details?id=com.dafturn.mypertamina" class="btn btn-alt"><i class="lni lni-play-store"></i> Google Play</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/hero/phone.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

      <!-- Start Pricing Table Area -->
      <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="section-title">
                                <h3 class="wow zoomIn" data-wow-delay=".2s">Data SPBU</h3>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">Lokasi SPBU Di Bandung</h2>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nama SPBU</th>
                                        <th class="text-center">Alamat SPBU</th>
                                        <th class="text-center">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spbus as $key => $spbu)
                                    <tr>
                                        <td>{{$spbu->namaspbu}}</td>
                                        <td>{{$spbu->alamat}}</td>
                                        <td>
                                            <a href="{{ route('spbu.detail', ['id' => $spbu->id]) }}" class="btn btn-warning btn-sm">
                                                <img src="assets/images/location.png" alt="Detail" class="icon-size"> Detail
                                            </a>
                                        </td>         
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    
    <!--/ End Pricing Table Area -->

    <!-- Start Achievement Area -->
    <section id="map-spbu" class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Peta Lokasi SPBU</h2>
                        <h3 class="text-white">{{ \App\Models\SPBU::count() }} Lokasi</h3>
                        <div class="card-body">
                            <!-- Elemen untuk peta -->
                            <div id="map" style="width:100%; height:500px;"></div>
                            <!-- Akhir Elemen untuk peta -->
                        </div>
                        <h2>Jangkauan Peta</h2>
    
                        <p align="justify" style="font-size: 1.2em;">Aplikasi Pemetaan Lokasi SPBU Pertamina di Bandung ini menyediakan informasi lengkap mengenai SPBU di wilayah Bandung. Dengan data lokasi yang diambil dari Google Maps dan informasi terkini dari website resmi Pertamina, aplikasi ini memberikan pemetaan yang akurat serta sejumlah informasi penting, termasuk:</p>
    
                        <p align="justify" style="font-size: 1.2em;">
                            1. Nama SPBU <br>
                            2. Alamat <br>
                            3. Jam Operasional <br>
                            4. Jenis Bahan Bakar <br>
                            5. Telepon <br>
                            6. Fasilitas <br>
                            7. Titik SPBU pada Peta
                        </p>            
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- End Achievement Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Facilities</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Beda Fasilitas Sesuai Warna SPBU
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">SPBU (Stasiun Pengisian Bahan Bakar Umum) memiliki beberapa papan warna dengan kelengkapan pelayanannya disetiap warnanya yang membedakannya</p>
                        <br>
                        <img src="assets/images/info.jpg" alt="Description of the image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <h3>Pengisian BBM</h3>
                        <img src="assets/images/pengisianbbm.jpg" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <h3>Musholla</h3>
                        <img src="assets/images/mushola.jpg" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <h3>Toilet</h3>
                        <img src="assets/images/toilet.jpg" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <h3>Minimarket</h3>
                        <img src="assets/images/minimarket.jpeg" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <h3>Gerai ATM</h3>
                        <img src="assets/images/atm.png" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <h3>Restoran Cepat Saji</h3>
                        <img src="assets/images/cepat.jpg" alt="Description of the image">
                        <p></p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->


    <!-- Start Call To Action Area -->
    {{-- <section class="section call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">You are using free Lite <br>Version of Appvilla
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Please, purchase full version of the template to
                            get all pages, features and commercial license.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".6s">
                            <a href="javascript:void(0)" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Call To Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/pertamina.png" alt="#">
                                </a>
                            </div>
                            <p>Making the world a better place through constructing elegant hierarchies.</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                            </ul>
                            <p class="copyright-text">Designed and Developed by <a href="https://uideck.com/"
                                    rel="nofollow" target="_blank">UIdeck</a>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Solutions</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Marketing</a></li>
                                        <li><a href="javascript:void(0)">Analytics</a></li>
                                        <li><a href="javascript:void(0)">Commerce</a></li>
                                        <li><a href="javascript:void(0)">Insights</a></li>
                                        <li><a href="javascript:void(0)">Promotion</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Support</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Pricing</a></li>
                                        <li><a href="javascript:void(0)">Documentation</a></li>
                                        <li><a href="javascript:void(0)">Guides</a></li>
                                        <li><a href="javascript:void(0)">API Status</a></li>
                                        <li><a href="javascript:void(0)">Live Support</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Company</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">About Us</a></li>
                                        <li><a href="javascript:void(0)">Our Blog</a></li>
                                        <li><a href="javascript:void(0)">Jobs</a></li>
                                        <li><a href="javascript:void(0)">Press</a></li>
                                        <li><a href="javascript:void(0)">Contact Us</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Legal</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)">Catering Services</a></li>
                                        <li><a href="javascript:void(0)">Customer Relations</a></li>
                                        <li><a href="javascript:void(0)">Innovation</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
    <script src="{{ asset('assets/js/app.js') }}"></script>


    <script>
        // Inisialisasi peta menggunakan Leaflet
        var map = L.map('map').setView([-6.2088, 106.8456], 13); // Set initial view to a default location (e.g., Jakarta)
    
        // Menambahkan layer peta dari Google Maps menggunakan Leaflet
        L.tileLayer('https://{s}.google.com/vt?/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
    
        // Menambahkan marker untuk setiap SPBU di dalam database
        @foreach ($spbus as $spbu)
            var marker = L.marker([{{ $spbu->latitude }}, {{ $spbu->longitude }}]).addTo(map);
            marker.bindPopup("<b>{{ $spbu->namaspbu }}</b><br>Alamat : {{ $spbu->alamat }}<br>Jam Operasional : {{ $spbu->jam_operasional }}<br>Jenis Bahan Bakar : {{ $spbu->jenis_bahan_bakar }}<br>Telepon : {{ $spbu->telepon }}<br>Fasilitas : {{ $spbu->fasilitas }}<br>latitude : {{ $spbu->latitude }}<br>Longitude : {{ $spbu->longitude }}").openPopup();
        @endforeach
    
        // Menangkap event klik pada peta
        map.on('click', function onMapClick(e) {
            // Mendapatkan koordinat dari event klik
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
    
            // Mengisi nilai input latitude dan longitude
            document.getElementById('InputLatitude').value = lat;
            document.getElementById('InputLongitude').value = lng;
        });
    </script>
    
</body>

</html>