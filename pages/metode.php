<body>
    <div class="container py-5" id="kategori">
        <h2 class="text-center mb-4">Metode Memasak</h2>

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

        <section id="goreng" class="py-4">
            <h3 class="text-center">Goreng</h3>

            <div class="text-center mb-3">
            <button class="btn btn-success" onclick="window.location.href='index.php?page=goreng'">Lihat Semua</button>
            </div>

            <div id="carouselGoreng" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="40">
                                    <img src="assets/image/goreng/resep1.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Ayam Goreng Kalasan</h5>
                                        <br><br>
                                        <a href="index.php?page=AyamGorengKalasan" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="41">
                                    <img src="assets/image/goreng/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Bakwan Jagung</h5>
                                        <br><br>
                                        <a href="index.php?page=BakwanJagung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="42">
                                    <img src="assets/image/goreng/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ceker Ayam Goreng Krispi</h5>
                                        <br><br>
                                        <a href="index.php?page=CekerAyamGorengKrispi" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="43">
                                    <img src="assets/image/goreng/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Cireng</h5>
                                        <br><br>
                                        <a href="index.php?page=Cireng" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="44">
                                    <img src="assets/image/goreng/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Kentang Goreng</h5>
                                        <br><br>
                                        <a href="index.php?page=KentangGoreng" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="45">
                                    <img src="assets/image/goreng/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Mie Goreng Jawa</h5>
                                        <br><br>
                                        <a href="index.php?page=MieGorengJawa" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="46">
                                    <img src="assets/image/goreng/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Nugget Ayam</h5>
                                        <br><br>
                                        <a href="index.php?page=NuggetAyam" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="47">
                                    <img src="assets/image/goreng/resep8.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Pisang Goreng Cokelat</h5>
                                        <br><br>
                                        <a href="index.php?page=PisangGorengCokelat" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="48">
                                    <img src="assets/image/goreng/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Pisang Goreng Madu</h5>
                                        <br><br>
                                        <a href="index.php?page=PisangGorengMadu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="49">
                                    <img src="assets/image/goreng/resep10.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tempe Goreng Tepung</h5>
                                        <br><br>
                                        <a href="index.php?page=TempeGorengTepung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="50">
                                    <img src="assets/image/goreng/resep11.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tempe Mendoan</h5>
                                        <br><br>
                                        <a href="index.php?page=TempeMendoan" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="51">
                                    <img src="assets/image/goreng/resep12.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Udang Goreng Tepung</h5>
                                        <br><br>
                                        <a href="index.php?page=UdangGorengTepung" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselGoreng" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselGoreng" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="panggang" class="py-4">
            <h3 class="text-center">Panggang</h3>

            <div class="text-center mb-3">
            <button class="btn btn-success" onclick="window.location.href='index.php?page=panggang'">Lihat Semua</button>
            </div>

            <div id="carouselPanggang" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="52">
                                    <img src="assets/image/panggang/resep1.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Ayam Panggang Madu</h5>
                                        <br><br>
                                        <a href="index.php?page=AyamPanggangMadu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="53">
                                    <img src="assets/image/panggang/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Brownies Panggang</h5>
                                        <br><br>
                                        <a href="index.php?page=BrowniesPanggang" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="54">
                                    <img src="assets/image/panggang/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ikan Bakar Sambal Kecap</h5>
                                        <br><br>
                                        <a href="index.php?page=IkanBakarSambalKecap" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="55">
                                    <img src="assets/image/panggang/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Pizza Homemade</h5>
                                        <br><br>
                                        <a href="index.php?page=PizzaHomemade" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="56">
                                    <img src="assets/image/panggang/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Sate Daging Kambing</h5>
                                        <br><br>
                                        <a href="index.php?page=SateDagingKambing" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselpanggang" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselpanggang" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="rebus" class="py-4">
            <h3 class="text-center">Rebus</h3>

            <div class="text-center mb-3">
            <button class="btn btn-success" onclick="window.location.href='index.php?page=rebus'">Lihat Semua</button>
            </div>

            <div id="carouselRebus" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="57">
                                    <img src="assets/image/rebus/resep1.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Bakmi Noodles Rebus</h5>
                                        <br><br>
                                        <a href="index.php?page=BakmiNoodlesRebus" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="58">
                                    <img src="assets/image/rebus/resep2.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Bakso Sapi</h5>
                                        <br><br>
                                        <a href="index.php?page=BaksoSapi" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="59">
                                    <img src="assets/image/rebus/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Bubur Ayam</h5>
                                        <br><br>
                                        <a href="index.php?page=BuburAyam" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="60">
                                    <img src="assets/image/rebus/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ikan Kuah Pindang</h5>
                                        <br><br>
                                        <a href="index.php?page=IkanKuahPindang" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="61">
                                    <img src="assets/image/rebus/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Kolak Pisang</h5>
                                        <br><br>
                                        <a href="index.php?page=KolakPisang" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="62">
                                    <img src="assets/image/rebus/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Mi Rebus Jawa</h5>
                                        <br><br>
                                        <a href="index.php?page=MiRebusJawa" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="63">
                                    <img src="assets/image/rebus/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sate Tahu Rebus</h5>
                                        <br><br>
                                        <a href="index.php?page=SateTahuRebus" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="64">
                                    <img src="assets/image/rebus/resep8.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sayur Lodeh</h5>
                                        <br><br>
                                        <a href="index.php?page=SayurLodeh" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="65">
                                    <img src="assets/image/rebus/resep9.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Soto Ayam Lamongan</h5>
                                        <br><br>
                                        <a href="index.php?page=SotoAyamLamongan" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="66">
                                    <img src="assets/image/rebus/resep10.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Bayam Telur Puyuh</h5>
                                        <br><br>
                                        <a href="index.php?page=SupBayamTelurPuyuh" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="67">
                                    <img src="assets/image/rebus/resep11.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Jagung Kuah Susu</h5>
                                        <br><br>
                                        <a href="index.php?page=SupJagungKuahSusu" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="68">
                                    <img src="assets/image/rebus/resep12.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Kacang Merah</h5>
                                        <br><br>
                                        <a href="index.php?page=SupKacangMerah" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="69">
                                    <img src="assets/image/rebus/resep13.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Kembang Kol</h5>
                                        <br><br>
                                        <a href="index.php?page=SupKembangKol" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="70">
                                    <img src="assets/image/rebus/resep14.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Sup Kwetiau Kuah</h5>
                                        <br><br>
                                        <a href="index.php?page=SupKwetiauKuah" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselRebus" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselRebus" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="tumis" class="py-4">
            <h3 class="text-center">Tumis</h3>

            <div class="text-center mb-3">
            <button class="btn btn-success" onclick="window.location.href='index.php?page=tumis'">Lihat Semua</button>
            </div>

            <div id="carouselTumis" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="71">
                                    <img src="assets/image/tumis/resep1.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Ayam Cabai Hijau</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisAyamCabaiHijau" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="72">
                                    <img src="assets/image/tumis/resep2.jpeg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Buncis</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisBuncis" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="73">
                                    <img src="assets/image/tumis/resep3.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Jamur Tiram</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisJamurTiram" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="74">
                                    <img src="assets/image/tumis/resep4.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Kangkung Bawang Putih</h5>
                                        <br>
                                        <a href="index.php?page=TumisKangkungBawangPutih" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="75">
                                    <img src="assets/image/tumis/resep5.jpg" class="card-img-top" alt="Deskripsi 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Sayur Pare</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisSayurPare" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="76">
                                    <img src="assets/image/tumis/resep6.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Tahu Saus Tiram</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisTahuSausTiram" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="77">
                                    <img src="assets/image/tumis/resep7.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Tempe Kacang Panjang</h5>
                                        <br>
                                        <a href="index.php?page=TumisTempeKacangPanjang" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card item" data-id="78">
                                    <img src="assets/image/tumis/resep8.jpg" class="card-img-top" alt="Deskripsi 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tumis Udang Sambal Balado</h5>
                                        <br><br>
                                        <a href="index.php?page=TumisUdangSambalBalado" class="btn btn-primary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-nav" type="button" data-bs-target="#carouselTumis" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-nav" type="button" data-bs-target="#carouselTumis" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/carousel.js"></script>
</body>