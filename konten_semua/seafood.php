<?php
$seafood = [
    [
        'name' => 'Cumi Asam Manis',
        'link' => 'index.php?page=CumiAsamManis',
        'image' => 'assets/image/seafood/resep1.jpeg'
    ],
    [
        'name' => 'Cumi Goreng Tepung',
        'link' => 'index.php?page=CumiGorengTepung',
        'image' => 'assets/image/seafood/resep2.jpg'
    ],
    [
        'name' => 'Ikan Bakar Jimbaran',
        'link' => 'index.php?page=IkanBakarJimbaran',
        'image' => 'assets/image/seafood/resep3.jpg'
    ],
    [
        'name' => 'Ikan Bakar Kecap',
        'link' => 'index.php?page=IkanBakarKecap',
        'image' => 'assets/image/seafood/resep4.jpeg'
    ],
    [
        'name' => 'Ikan Bumbu Bali',
        'link' => 'index.php?page=IkanBumbuBali',
        'image' => 'assets/image/seafood/resep5.jpg'
    ],
    [
        'name' => 'Ikan Goreng Tepung',
        'link' => 'index.php?page=IkanGorengTepung',
        'image' => 'assets/image/seafood/resep6.jpg'
    ],
    [
        'name' => 'Ikan Gurame Bumbu Kuning',
        'link' => 'index.php?page=IkanGurameBumbuKuning',
        'image' => 'assets/image/seafood/resep7.jpg'
    ],
    [
        'name' => 'Ikan Kerapu Saus Tiram',
        'link' => 'index.php?page=IkanKerapuSausTiram',
        'image' => 'assets/image/seafood/resep8.jpg'
    ],
    [
        'name' => 'Kerang Bakar',
        'link' => 'index.php?page=KerangBakar',
        'image' => 'assets/image/seafood/resep9.jpg'
    ],
    [
        'name' => 'Tumis Kerang Hijau Pedas',
        'link' => 'index.php?page=TumisKerangHijauPedas',
        'image' => 'assets/image/seafood/resep10.jpeg'
    ],
    [
        'name' => 'Udang Saus Padang',
        'link' => 'index.php?page=UdangSausPadang',
        'image' => 'assets/image/seafood/resep11.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Bahan Seafood</h2>
    
    <div class="row text-center">
        <?php foreach ($seafood as $item): ?>
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