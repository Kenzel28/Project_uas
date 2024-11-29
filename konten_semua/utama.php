<?php
$makananUtama = [
    [
        'name' => 'Ayam Kecap Pedas',
        'link' => 'index.php?page=AyamKecapPedas',
        'image' => 'assets/image/utama/resep1.jpeg'
    ],
    [
        'name' => 'Ayam Panggang Madu',
        'link' => 'index.php?page=AyamPanggangMadu',
        'image' => 'assets/image/utama/resep2.jpg'
    ],
    [
        'name' => 'Ikan Bakar Sambal Matah',
        'link' => 'index.php?page=IkanBakarSambalMatah',
        'image' => 'assets/image/utama/resep3.jpg'
    ],
    [
        'name' => 'Nasi Goreng Kampung',
        'link' => 'index.php?page=NasiGorengKampung',
        'image' => 'assets/image/utama/resep4.jpg'
    ],
    [
        'name' => 'Nasi Goreng Seafood',
        'link' => 'index.php?page=NasiGorengSeafood',
        'image' => 'assets/image/utama/resep5.jpg'
    ],
    [
        'name' => 'Rendang Daging Sapi',
        'link' => 'index.php?page=RendangDagingSapi',
        'image' => 'assets/image/utama/resep6.jpg'
    ],
    [
        'name' => 'Soto Ayam Lamongan',
        'link' => 'index.php?page=SotoAyamLamongan',
        'image' => 'assets/image/utama/resep7.jpg'
    ],
    [
        'name' => 'Spaghetti Aglio e Olio',
        'link' => 'index.php?page=SpaghettiAglioeOlio',
        'image' => 'assets/image/utama/resep8.jpeg'
    ],
    [
        'name' => 'Spaghetti Carbonara',
        'link' => 'index.php?page=SpaghettiCarbonara',
        'image' => 'assets/image/utama/resep9.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Makanan Utama</h2>
    
    <div class="row text-center">
        <?php foreach ($makananUtama as $item): ?>
            <div class="col-6 col-md-3 mb-3">
                <div class="card item">
                    <div class="card-body">
                    <img src="<?= $item['image']; ?>" class="card-img-top" alt="Deskripsi 1" style = "object-fit: cover;">
                        <h5 class="card-title"><?= $item['name']; ?></h5>
                        <a href="<?= $item['link']; ?>" class="btn btn-primary">Lihat Resep</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
