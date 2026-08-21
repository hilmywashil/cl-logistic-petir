@extends('layouts.public')

@section('title', 'Layanan Kami')

@section('content')

    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/hero-bg.webp);">
        <div class="container position-relative">
            <h1>LAYANAN KAMI</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Layanan Kami</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-map"></i></div>
                    <div>
                        <h4 class="title">Domestic</h4>
                        <p class="description">Layanan pengiriman untuk kebutuhan bisnis dan personal ke berbagai wilayah di
                            Indonesia dengan proses yang terkoordinasi dan mudah dipantau.</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-globe"></i></div>
                    <div>
                        <h4 class="title">International</h4>
                        <p class="description">Solusi pengiriman lintas negara untuk membantu kebutuhan distribusi barang
                            dengan proses yang lebih terarah dan dukungan penanganan dokumen.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-stopwatch"></i></div>
                    <div>
                        <h4 class="title">Same-Day</h4>
                        <p class="description">Pilihan layanan pengiriman untuk kebutuhan yang membutuhkan proses lebih
                            cepat, dengan penyesuaian berdasarkan tujuan dan jenis barang.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Our Services<br></span>
            <h2>Our ServiceS</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid"
                                    style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Features</span>
            <h2>Features</h2>
            <p>Nikmati layanan logistik yang dirancang untuk membantu kebutuhan pengiriman dan distribusi Anda.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Layanan Logistik Cepat, Aman, dan Terpercaya</h3>
                    <p class="fst-italic">
                        Layanan pengiriman yang praktis dan terorganisir untuk membantu kebutuhan logistik personal maupun
                        bisnis Anda.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Proses pengiriman yang mudah</span></li>
                        <li><i class="bi bi-check"></i> <span>Dukungan untuk kebutuhan bisnis</span></li>
                        <li><i class="bi bi-check"></i> <span>Informasi pengiriman yang jelas</span>
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Distribusi yang Terkoordinasi</h3>
                    <p class="fst-italic">
                        Petir Logistik membantu menghubungkan kebutuhan pengiriman Anda dengan layanan transportasi dan
                        distribusi yang sesuai dengan tujuan barang.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Penanganan Pengiriman yang Teliti</h3>
                    <p>Setiap pengiriman membutuhkan penanganan yang tepat. Kami berupaya memberikan pelayanan yang sesuai
                        dengan karakteristik barang dan kebutuhan pengiriman Anda.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Layanan yang dapat disesuaikan</span></li>
                        <li><i class="bi bi-check"></i><span> Dukungan informasi selama proses pengiriman</span></li>
                        <li><i class="bi bi-check"></i> <span>Penanganan barang secara bertanggung jawab</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Penanganan Pengiriman yang Terkoordinasi dan Tepat Waktu</h3>
                    <p class="fst-italic">
                        Kami membantu kebutuhan pengiriman barang untuk berbagai keperluan dengan proses yang terkoordinasi
                        dari awal hingga barang mencapai tujuan.
                    </p>

                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Features Section -->
@endsection