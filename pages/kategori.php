<body>
    <div class="container py-5" id="kategori">
        <h2 class="text-center mb-4">Kategori Resep</h2>

        <div class="text-center mb-4">
            <input type="text" id="searchBar" class="form-control w-50 mx-auto" placeholder="Cari nama makanan...">
        </div>

        <div id="searchResultsSection" style="display: none;">
            <div class="container py-4">
                <h3 class="text-center">Hasil Pencarian</h3>
                <div id="searchResultsContainer" class="row"></div>
            </div>
        </div>

        <div id="mainContentSection">
        </div>

        <section id="pembuka" class="py-4">
            <h3 class="text-center">Makanan Pembuka</h3>
            <p class="text-center">Berbagai resep makanan pembuka yang menggugah selera.</p>

            <div class="text-center mb-3">
                <button class="btn btn-success" onclick="window.location.href='index.php?page=pembuka'">Lihat Semua Makanan Pembuka</button>
            </div>

            <div id="carouselPembuka" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="1">
                                    <img src="assets/image/pembuka/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Krim Jagung</h5>
                                        <br><br>
                                        <a href="index.php?page=SupKrimJagung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="2">
                                    <img src="assets/image/pembuka/resep1.jpeg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Bruschetta Tomat Basil</h5>
                                        <br><br>
                                        <a href="index.php?page=BruschettaTomatBasil" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="3">
                                    <img src="assets/image/pembuka/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Guacamole dengan Keripik Tortilla</h5>
                                        <br>
                                        <a href="index.php?page=GuacamoledenganKeripikTortilla" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="4">
                                    <img src="assets/image/pembuka/resep3.jpeg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Lumpia Sayur</h5>
                                        <br><br>
                                        <a href="index.php?page=LumpiaSayur" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="5">
                                    <img src="assets/image/pembuka/resep4.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Lumpia Udang Sayur</h5>
                                        <br><br>
                                        <a href="index.php?page=LumpiaUdangSayur" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="6">
                                    <img src="assets/image/pembuka/resep5.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Risoles Ragout Ayam</h5>
                                        <br><br>
                                        <a href="index.php?page=RisolesRagoutAyam" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="7">
                                    <img src="assets/image/pembuka/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Salad Buah Segar</h5>
                                        <br><br>
                                        <a href="index.php?page=SaladBuahSegar" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="8">
                                    <img src="assets/image/pembuka/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Samosa Isi Daging</h5>
                                        <br><br>
                                        <a href="index.php?page=SamosaIsiDaging" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="9">
                                    <img src="assets/image/pembuka/resep8.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Sayur Asem Jawa</h5>
                                        <br><br>
                                        <a href="index.php?page=SayurAsemJawa" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="10">
                                    <img src="assets/image/pembuka/resep10.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Miso Tofu</h5>
                                        <br><br>
                                        <a href="index.php?page=SupMisoTofu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="11">
                                    <img src="assets/image/pembuka/resep11.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tahu Crispy Sambal Kecap</h5>
                                        <br><br>
                                        <a href="index.php?page=TahuCrispySambalKecap" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="12">
                                    <img src="assets/image/pembuka/resep12.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Zuppa Soup</h5>
                                        <br><br>
                                        <a href="index.php?page=ZuppaSoup" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselPembuka" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselPembuka" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="utama" class="py-4">
            <h3 class="text-center">Makanan Utama</h3>
            <p class="text-center">Resep makanan utama untuk dinikmati bersama keluarga.</p>

            <div class="text-center mb-3">
                <button class="btn btn-success" onclick="window.location.href='index.php?page=utama'">Lihat Semua Makanan Utama</button>
            </div>

            <div id="carouselUtama" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="13">
                                    <img src="assets/image/utama/resep1.jpeg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Ayam Kecap Pedas</h5>
                                        <br><br>
                                        <a href="index.php?page=AyamKecapPedas" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="14">
                                    <img src="assets/image/utama/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ayam Panggang Madu</h5>
                                        <br><br>
                                        <a href="index.php?page=AyamPanggangMadu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="15">
                                    <img src="assets/image/utama/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ikan Bakar Sambal Matah</h5>
                                        <br><br>
                                        <a href="index.php?page=IkanBakarSambalMatah" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="16">
                                    <img src="assets/image/utama/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Nasi Goreng Kampung</h5>
                                        <br><br>
                                        <a href="index.php?page=NasiGorengKampung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="17">
                                    <img src="assets/image/utama/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Nasi Goreng Seafood</h5>
                                        <br><br>
                                        <a href="index.php?page=NasiGorengSeafood" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="18">
                                    <img src="assets/image/utama/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Rendang Daging Sapi</h5>
                                        <br><br>
                                        <a href="index.php?page=RendangDagingSapi" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="19">
                                    <img src="assets/image/utama/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Soto Ayam Lamongan</h5>
                                        <br><br>
                                        <a href="index.php?page=SotoAyamLamongan" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="20">
                                    <img src="assets/image/utama/resep8.jpeg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Spaghetti Aglio e Olio</h5>
                                        <br><br>
                                        <a href="index.php?page=SpaghettiAglioeOlio" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="21">
                                    <img src="assets/image/utama/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Spaghetti Carbonara</h5>
                                        <br><br>
                                        <a href="index.php?page=SpaghettiCarbonara" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselUtama" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselUtama" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="penutup" class="py-4">
            <h3 class="text-center">Makanan Penutup</h3>
            <p class="text-center">Resep makanan penutup yang manis dan lezat.</p>

            <div class="text-center mb-3">
                <button class="btn btn-success" onclick="window.location.href='index.php?page=penutup'">Lihat Semua Makanan Penutup</button>
            </div>

            <div id="carouselPenutup" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="22">
                                    <img src="assets/image/penutup/resep1.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Brownies Kukus</h5>
                                        <br><br>
                                        <a href="index.php?page=BrowniesKukus" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="23">
                                    <img src="assets/image/penutup/resep2.jpeg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Brownies Kukus Cokelat</h5>
                                        <br><br>
                                        <a href="index.php?page=BrowniesKukusCokelat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="24">
                                    <img src="assets/image/penutup/resep3.png" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Es Campur Nusantara</h5>
                                        <br><br>
                                        <a href="index.php?page=EsCampurNusantara" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="25">
                                    <img src="assets/image/penutup/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Es Cendol Khas Bandung</h5>
                                        <br><br>
                                        <a href="index.php?page=EsCendolKhasBandung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="26">
                                    <img src="assets/image/penutup/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Kue Lumpur Kentang</h5>
                                        <br><br>
                                        <a href="index.php?page=KueLumpurKentang" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="27">
                                    <img src="assets/image/penutup/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Pancake Pisang Cokelat</h5>
                                        <br><br>
                                        <a href="index.php?page=PancakePisangCokelat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="28">
                                    <img src="assets/image/penutup/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Puding Cokelat Vla Vanila</h5>
                                        <br><br>
                                        <a href="index.php?page=PudingCokelatVlaVanila" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="29">
                                    <img src="assets/image/penutup/resep8.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Puding Mangga Lapis Susu</h5>
                                        <br><br>
                                        <a href="index.php?page=PudingManggaLapisSusu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="30">
                                    <img src="assets/image/penutup/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Serabi Kuah Kinca</h5>
                                        <br><br>
                                        <a href="index.php?page=SerabiKuahKinca" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselPenutup" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselPenutup" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="minuman" class="py-4">
            <h3 class="text-center">Minuman</h3>
            <p class="text-center">Resep minuman segar untuk menemani aktivitas.</p>

            <div class="text-center mb-3">
                <button class="btn btn-success" onclick="window.location.href='index.php?page=minuman'">Lihat Semua Minuman</button>
            </div>

            <div id="carouselMinuman" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="31">
                                    <img src="assets/image/minuman/resep1.jpeg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Es Teh Tarik Cincau</h5>
                                        <br><br>
                                        <a href="index.php?page=EsTehTarikCincau" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="32">
                                    <img src="assets/image/minuman/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Jus Mangga Alpukat</h5>
                                        <br><br>
                                        <a href="index.php?page=JusManggaAlpukat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="33">
                                    <img src="assets/image/minuman/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Kopi Susu Gula Aren</h5>
                                        <br><br>
                                        <a href="index.php?page=KopiSusuGulaAren" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="34">
                                    <img src="assets/image/minuman/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Milkshake Stroberi</h5>
                                        <br><br>
                                        <a href="index.php?page=MilkshakeStroberi" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="35">
                                    <img src="assets/image/minuman/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Mojito Jeruk Nipis</h5>
                                        <br><br>
                                        <a href="index.php?page=MojitoJerukNipis" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="36">
                                    <img src="assets/image/minuman/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Smoothie Pisang Cokelat</h5>
                                        <br><br>
                                        <a href="index.php?page=SmoothiePisangCokelat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="37">
                                    <img src="assets/image/minuman/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teh Tarik Hangat</h5>
                                        <br><br>
                                        <a href="index.php?page=TehTarikHangat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="38">
                                    <img src="assets/image/minuman/resep8.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Wedang Jahe Gula Merah</h5>
                                        <br><br>
                                        <a href="index.php?page=WedangJaheGulaMerah" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="39">
                                    <img src="assets/image/minuman/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Wedang Ronde</h5>
                                        <br><br>
                                        <a href="index.php?page=WedangRonde" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselMinuman" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselMinuman" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/carousel.js"></script>
</body>