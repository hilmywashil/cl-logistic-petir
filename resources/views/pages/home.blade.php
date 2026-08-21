@extends('layouts.public')

@section('title', 'Solusi Logistik Terpercaya di Seluruh Indonesia')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/world-dotted-map.png" alt="Trimas Petir Logistic" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">TRIMAS PETIR LOGISTIC<br>CEPAT & PRESISI</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Solusi Logistik Terpercaya di Seluruh Indonesia</p>

                    {{-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200" method="GET">
                        <input type="text" class="form-control" disabled name="resi"
                            placeholder="Fitur Lacak Paket akan segera hadir!">
                        <button type="submit" class="btn btn-primary">Lacak Sekarang</button>
                    </form> --}}

                    <form action="{{ route('tracking') }}" class="form-search d-flex align-items-stretch mb-3"
                        data-aos="fade-up" data-aos-delay="200" method="GET">
                        <input type="text" class="form-control" disabled name="resi" placeholder="Masukkan nomor Resi...">
                        <button type="submit" class="btn btn-primary">Lacak Sekarang</button>
                    </form>

                    {{-- <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0"
                                    class="purecounter">232</span>
                                <p>Clients</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0"
                                    class="purecounter">521</span>
                                <p>Projects</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="0"
                                    class="purecounter">1453</span>
                                <p>Support</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0"
                                    class="purecounter">32</span>
                                <p>Workers</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div> --}}

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    {{-- <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt=""> --}}
                </div>

            </div>
        </div>

    </section><!-- /Hero Section -->

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

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="assets/img/about.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>TENTANG KAMI</h3>
                    <p>
                        Petir Logistik hadir untuk membantu kebutuhan pengiriman, transportasi, dan distribusi barang bagi
                        pelanggan personal maupun bisnis. Kami mengutamakan proses yang terkoordinasi, penanganan yang
                        bertanggung jawab, serta komunikasi yang jelas di setiap proses pengiriman.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-stopwatch"></i>
                            <div>
                                <h5>Upaya pengiriman lebih cepat</h5>
                                <p>Menyesuaikan proses pengiriman dengan kebutuhan waktu dan tujuan barang.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-arrows-angle-expand"></i>
                            <div>
                                <h5>Jangkauan selalu siap</h5>
                                <p>Mendukung kebutuhan pengiriman ke berbagai tujuan sesuai dengan rute yang tersedia.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Menangani setiap pengiriman dengan penuh perhatian</h5>
                                <p>Memastikan barang ditangani dengan baik selama proses pengiriman berlangsung.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Layanan Kami<br></span>
            <h2>Layanan Kami</h2>
            <p>Kami menyediakan pilihan layanan logistik untuk mendukung kebutuhan pengiriman dan distribusi barang Anda.
            </p>
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

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Butuh solusi logistik?</h3>
                        <p>Hubungi Petir Logistik
                            dan diskusikan kebutuhan pengiriman bersama tim kami.</p>
                        <a class="cta-btn" href="{{ route('contact') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

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

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                                                                                                                                                                        {
                                                                                                                                                                          "loop": true,
                                                                                                                                                                          "speed": 600,
                                                                                                                                                                          "autoplay": {
                                                                                                                                                                            "delay": 5000
                                                                                                                                                                          },
                                                                                                                                                                          "slidesPerView": "auto",
                                                                                                                                                                          "pagination": {
                                                                                                                                                                            "el": ".swiper-pagination",
                                                                                                                                                                            "type": "bullets",
                                                                                                                                                                            "clickable": true
                                                                                                                                                                          }
                                                                                                                                                                        }
                                                                                                                                                                    </script>
                <div class="swiper-wrapper">

                    @foreach ($testimonials as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset("storage/" . $item->image) }}" class="testimonial-img" alt=""
                                    style="width: 100%; max-width: 100px; aspect-ratio: 1/1; object-fit: cover;">
                                <h3>{{ $item->name }}</h3>
                                <h4>{{ $item->company }}</h4>
                                <div class="stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $item->star)
                                            <i class="bi bi-star-fill"></i>
                                        @else
                                            <i class="bi bi-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{ $item->message }}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
            <p>Pertanyaan yang Sering Diajukan</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara melakukan pengiriman melalui Petir Logistik?</h3>
                            <div class="faq-content">
                                <p>Hubungi tim kami dan sampaikan informasi barang serta tujuan pengiriman untuk mendapatkan
                                    pilihan layanan yang sesuai.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah pengiriman dapat dilacak?</h3>
                            <div class="faq-content">
                                <p>Ya, Anda dapat menggunakan nomor resi untuk mengetahui status dan perkembangan
                                    pengiriman.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah Petir Logistik melayani pengiriman antar kota?</h3>
                            <div class="faq-content">
                                <p>Ya, layanan pengiriman tersedia untuk berbagai tujuan sesuai dengan rute yang tersedia.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah tersedia layanan untuk kebutuhan bisnis?</h3>
                            <div class="faq-content">
                                <p>Ya, kami melayani kebutuhan pengiriman dan distribusi untuk berbagai kebutuhan bisnis.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Barang apa saja yang dapat dikirim?</h3>
                            <div class="faq-content">
                                <p>Jenis barang yang dapat dikirim menyesuaikan ketentuan layanan dan karakteristik barang.
                                    Untuk informasi lebih lanjut, silakan hubungi tim Petir Logistik.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection