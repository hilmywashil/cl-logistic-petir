@extends('layouts.public')

@section('title', 'Layanan Kami')

@section('content')

    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/hero-bg.webp);">
        <div class="container position-relative">
            <h1>LAYANAN KAMI</h1>
            <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                molestias.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Layanan Kami</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-map"></i></div>
                    <div>
                        <h4 class="title">Domestic</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-globe"></i></div>
                    <div>
                        <h4 class="title">International</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-clock"></i></div>
                    <div>
                        <h4 class="title">Same-Day</h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-1.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Storage</h3>
                        <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                            repellendus temporibus itaqueofficiis odit</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-2.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Logistics</a></h3>
                        <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt
                            molestiae dolor ipsam ducimus occaecati nisi</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-3.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Cargo</a></h3>
                        <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque
                            oluptatem aut et molestiae ut et nihil</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-4.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Trucking</a></h3>
                        <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque
                            oluptatem aut et molestiae ut et nihil</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-5.jpg" alt="" class="img-fluid">
                        </div>
                        <h3>Packaging</h3>
                        <p>Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum onsequuntur
                            maiores beatae consequatur magni voluptates</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/service-6.jpg" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Warehousing</a></h3>
                        <p>Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi quisquam
                            aut nostrum unde et qui est non quo nulla</p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Features</span>
            <h2>Features</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut
                        quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad
                                fugiat</span>.</li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Features Section -->
@endsection