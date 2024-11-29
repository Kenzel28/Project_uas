<?php
$minuman = [
    [
        'name' => 'Es Teh Tarik Cincau',
        'link' => 'index.php?page=EsTehTarikCincau',
        'image' => 'assets/image/minuman/resep1.jpeg'
    ],
    [
        'name' => 'Jus Mangga Alpukat',
        'link' => 'index.php?page=JusManggaAlpukat',
        'image' => 'assets/image/minuman/resep2.jpg'
    ],
    [
        'name' => 'Kopi Susu Gula Aren',
        'link' => 'index.php?page=KopiSusuGulaAren',
        'image' => 'assets/image/minuman/resep3.jpg'
    ],
    [
        'name' => 'Milkshake Stroberi',
        'link' => 'index.php?page=MilkshakeStroberi',
        'image' => 'assets/image/minuman/resep4.jpg'
    ],
    [
        'name' => 'Mojito Jeruk Nipis',
        'link' => 'index.php?page=MojitoJerukNipis',
        'image' => 'assets/image/minuman/resep5.jpg'
    ],
    [
        'name' => 'Smoothie Pisang Cokelat',
        'link' => 'index.php?page=SmoothiePisangCokelat',
        'image' => 'assets/image/minuman/resep6.jpg'
    ],
    [
        'name' => 'Teh Tarik Hangat',
        'link' => 'index.php?page=TehTarikHangat',
        'image' => 'assets/image/minuman/resep7.jpg'
    ],
    [
        'name' => 'Wedang Jahe Gula Merah',
        'link' => 'index.php?page=WedangJaheGulaMerah',
        'image' => 'assets/image/minuman/resep8.jpg'
    ],
    [
        'name' => 'Wedang Ronde',
        'link' => 'index.php?page=WedangRonde',
        'image' => 'assets/image/minuman/resep9.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Minuman</h2>
    
    <div class="row text-center">
        <?php foreach ($minuman as $item): ?>
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