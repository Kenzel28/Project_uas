<?php
$tumis = [
    [
        'name' => 'Tumis Ayam Cabai Hijau',
        'link' => 'index.php?page=TumisAyamCabaiHijau',
        'image' => 'assets/image/tumis/resep1.jpg'
    ],
    [
        'name' => 'Tumis Buncis',
        'link' => 'index.php?page=TumisBuncis',
        'image' => 'assets/image/tumis/resep2.jpeg'
    ],
    [
        'name' => 'Tumis Jamur Tiram',
        'link' => 'index.php?page=TumisJamurTiram',
        'image' => 'assets/image/tumis/resep3.jpg'
    ],
    [
        'name' => 'Tumis Kangkung Bawang Putih',
        'link' => 'index.php?page=TumisKangkungBawangPutih',
        'image' => 'assets/image/tumis/resep4.jpg'
    ],
    [
        'name' => 'Tumis Sayur Pare',
        'link' => 'index.php?page=TumisSayurPare',
        'image' => 'assets/image/tumis/resep5.jpg'
    ],
    [
        'name' => 'Tumis Tahu Saus Tiram',
        'link' => 'index.php?page=TumisTahuSausTiram',
        'image' => 'assets/image/tumis/resep6.jpg'
    ],
    [
        'name' => 'Tumis Tempe Kacang Panjang',
        'link' => 'index.php?page=TumisTempeKacangPanjang',
        'image' => 'assets/image/tumis/resep7.jpg'
    ],
    [
        'name' => 'Tumis Udang Sambal Balado',
        'link' => 'index.php?page=TumisUdangSambalBalado',
        'image' => 'assets/image/tumis/resep8.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Metode Tumis</h2>
    
    <div class="row text-center">
        <?php foreach ($tumis as $item): ?>
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