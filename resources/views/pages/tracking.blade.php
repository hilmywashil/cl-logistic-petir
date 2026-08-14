@extends('layouts.public')

@section('title', 'Lacak Resi')

@section('content')

    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('assets/img/hero-bg.webp') }});">
        <div class="container position-relative">
            <h1>LACAK RESI</h1>
            <p>Lacak perjalanan kiriman Anda dengan mudah menggunakan nomor resi.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="current">Lacak Resi</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="tracking" class="tracking-section section">
        <div class="container" data-aos="fade-up">
            <div class="tracking-card">
                <div class="section-heading">
                    <h3>Lacak Kiriman</h3>
                    <p>Masukkan nomor resi untuk melihat status dan perjalanan kiriman Anda.</p>
                </div>

                <form id="trackingForm" class="tracking-form">
                    <input type="text" id="trackingNumber" class="form-control"
                        placeholder="Masukkan nomor resi, contoh: PLG123456789" autocomplete="off">
                    <button type="submit" class="btn-track">Lacak Resi</button>
                </form>

                <div id="trackingEmpty" class="tracking-empty">
                    Nomor resi tidak ditemukan. Silakan periksa kembali nomor resi yang Anda masukkan.
                </div>

                <div id="trackingResult" class="tracking-result">
                    <div class="tracking-summary">
                        <div class="tracking-summary-item">
                            <span>Nomor Resi</span>
                            <strong id="resultNumber">PLG123456789</strong>
                        </div>
                        <div class="tracking-summary-item">
                            <span>Status</span>
                            <strong id="resultStatus">Dalam Perjalanan</strong>
                        </div>
                        <div class="tracking-summary-item">
                            <span>Estimasi Tiba</span>
                            <strong id="resultEta">16 Agustus 2026</strong>
                        </div>
                    </div>

                    <div class="tracking-status">
                        <h4>Riwayat Perjalanan</h4>

                        <div class="tracking-timeline">
                            <div class="tracking-item">
                                <div class="tracking-dot"></div>
                                <div class="tracking-content">
                                    <strong>Kiriman sedang dalam perjalanan</strong>
                                    <span>Hub Bandung</span>
                                    <small>14 Agustus 2026, 09:15 WIB</small>
                                </div>
                            </div>

                            <div class="tracking-item">
                                <div class="tracking-dot"></div>
                                <div class="tracking-content">
                                    <strong>Kiriman tiba di hub</strong>
                                    <span>Hub Bandung</span>
                                    <small>13 Agustus 2026, 21:40 WIB</small>
                                </div>
                            </div>

                            <div class="tracking-item">
                                <div class="tracking-dot"></div>
                                <div class="tracking-content">
                                    <strong>Kiriman diberangkatkan</strong>
                                    <span>Hub Jakarta</span>
                                    <small>13 Agustus 2026, 14:20 WIB</small>
                                </div>
                            </div>

                            <div class="tracking-item">
                                <div class="tracking-dot"></div>
                                <div class="tracking-content">
                                    <strong>Kiriman diterima oleh Petir Logistik</strong>
                                    <span>Jakarta</span>
                                    <small>13 Agustus 2026, 10:05 WIB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('trackingForm');
            const input = document.getElementById('trackingNumber');
            const result = document.getElementById('trackingResult');
            const empty = document.getElementById('trackingEmpty');
            const resultNumber = document.getElementById('resultNumber');

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const number = input.value.trim();

                result.classList.remove('show');
                empty.classList.remove('show');

                if (!number) {
                    empty.textContent = 'Silakan masukkan nomor resi terlebih dahulu.';
                    empty.classList.add('show');
                    return;
                }

                if (number.toUpperCase() !== 'PLG123456789') {
                    empty.textContent = 'Nomor resi tidak ditemukan. Gunakan nomor dummy PLG123456789 untuk melihat contoh hasil pelacakan.';
                    empty.classList.add('show');
                    return;
                }

                resultNumber.textContent = number.toUpperCase();
                result.classList.add('show');
            });
        });
    </script>

@endsection