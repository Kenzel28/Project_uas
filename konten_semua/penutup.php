<?php
$makananPenutup = [
    [
        'name' => 'Brownies Kukus',
        'link' => 'index.php?page=BrowniesKukus',
        'image' => 'assets/image/penutup/resep1.jpg'
    ],
    [
        'name' => 'Brownies Kukus Cokelat',
        'link' => 'index.php?page=BrowniesKukusCokelat',
        'image' => 'assets/image/penutup/resep2.jpeg'
    ],
    [
        'name' => 'Es Campur Nusantara',
        'link' => 'index.php?page=EsCampurNusantara',
        'image' => 'assets/image/penutup/resep3.png'
    ],
    [
        'name' => 'Es Cendol Khas Bandung',
        'link' => 'index.php?page=EsCendolKhasBandung',
        'image' => 'assets/image/penutup/resep4.jpg'
    ],
    [
        'name' => 'Kue Lumpur Kentang',
        'link' => 'index.php?page=KueLumpurKentang',
        'image' => 'assets/image/penutup/resep5.jpg'
    ],
    [
        'name' => 'Pancake Pisang Cokelat',
        'link' => 'index.php?page=PancakePisangCokelat',
        'image' => 'assets/image/penutup/resep6.jpg'
    ],
    [
        'name' => 'Puding Cokelat Vla Vanila',
        'link' => 'index.php?page=PudingCokelatVlaVanila',
        'image' => 'assets/image/penutup/resep7.jpg'
    ],
    [
        'name' => 'Puding Mangga Lapis Susu',
        'link' => 'index.php?page=PudingManggaLapisSusu',
        'image' => 'assets/image/penutup/resep8.jpg'
    ],
    [
        'name' => 'Serabi Kuah Kinca',
        'link' => 'index.php?page=SerabiKuahKinca',
        'image' => 'assets/image/penutup/resep9.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Makanan Penutup</h2>
    
    <div class="row text-center">
        <?php foreach ($makananPenutup as $item): ?>
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