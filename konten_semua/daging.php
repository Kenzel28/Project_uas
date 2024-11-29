<?php
$daging = [
    [
        'name' => 'Ayam Goreng Terasi',
        'link' => 'index.php?page=AyamGorengTerasi',
        'image' => 'assets/image/daging/resep1.jpg'
    ],
    [
        'name' => 'Beef Bulgogi (Korean BBQ)',
        'link' => 'index.php?page=BeefBulgogi',
        'image' => 'assets/image/daging/resep2.jpg'
    ],
    [
        'name' => 'Beef Wellington',
        'link' => 'index.php?page=BeefWellington',
        'image' => 'assets/image/daging/resep3.jpg'
    ],
    [
        'name' => 'Daging Gulai Padang',
        'link' => 'index.php?page=DagingGulaiPadang',
        'image' => 'assets/image/daging/resep4.jpg'
    ],
    [
        'name' => 'Daging Kwetiau Siram',
        'link' => 'index.php?page=DagingKwetiauSiram',
        'image' => 'assets/image/daging/resep5.jpg'
    ],
    [
        'name' => 'Daging Sapi Lada Hitam',
        'link' => 'index.php?page=DagingSapiLadaHitam',
        'image' => 'assets/image/daging/resep6.jpg'
    ],
    [
        'name' => 'Daging Sapi Masak Merah',
        'link' => 'index.php?page=DagingSapiMasakMerah',
        'image' => 'assets/image/daging/resep7.jpg'
    ],
    [
        'name' => 'Daging Sapi Tumis Teriyaki',
        'link' => 'index.php?page=DagingSapiTumisTeriyaki',
        'image' => 'assets/image/daging/resep8.jpg'
    ],
    [
        'name' => 'Daging Teriyaki',
        'link' => 'index.php?page=DagingTeriyaki',
        'image' => 'assets/image/daging/resep9.jpeg'
    ],
    [
        'name' => 'Rendang Padang',
        'link' => 'index.php?page=RendangPadang',
        'image' => 'assets/image/daging/resep10.jpg'
    ],
    [
        'name' => 'Sate Kambing Madura',
        'link' => 'index.php?page=SateKambingMadura',
        'image' => 'assets/image/daging/resep11.jpg'
    ],
    [
        'name' => 'Sate Lilit Bali',
        'link' => 'index.php?page=SateLilitBali',
        'image' => 'assets/image/daging/resep12.jpg'
    ],
    [
        'name' => 'Semur Daging Sapi',
        'link' => 'index.php?page=SemurDagingSapi',
        'image' => 'assets/image/daging/resep13.jpg'
    ],
    [
        'name' => 'Steak Daging Sapi Black Pepper',
        'link' => 'index.php?page=SteakDagingSapiBlackPepper',
        'image' => 'assets/image/daging/resep14.jpeg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Bahan Daging</h2>
    
    <div class="row text-center">
        <?php foreach ($daging as $item): ?>
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