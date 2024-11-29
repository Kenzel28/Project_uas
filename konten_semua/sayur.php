<?php
$sayur = [
    [
        'name' => 'Capcay',
        'link' => 'index.php?page=Capcay',
        'image' => 'assets/image/sayur/resep1.jpg'
    ],
    [
        'name' => 'Capcay Kuah',
        'link' => 'index.php?page=CapcayKuah',
        'image' => 'assets/image/sayur/resep2.jpeg'
    ],
    [
        'name' => 'Gado-Gado',
        'link' => 'index.php?page=GadoGado',
        'image' => 'assets/image/sayur/resep3.jpg'
    ],
    [
        'name' => 'Sate Tahu',
        'link' => 'index.php?page=SateTahu',
        'image' => 'assets/image/sayur/resep4.jpg'
    ],
    [
        'name' => 'Sayur Asem',
        'link' => 'index.php?page=SayurAsem',
        'image' => 'assets/image/sayur/resep5.jpg'
    ],
    [
        'name' => 'Sayur Lodeh',
        'link' => 'index.php?page=SayurLodeh',
        'image' => 'assets/image/sayur/resep6.jpg'
    ],
    [
        'name' => 'Sop Sayur',
        'link' => 'index.php?page=SopSayur',
        'image' => 'assets/image/sayur/resep7.jpg'
    ],
    [
        'name' => 'Tahu Tempe Bacem',
        'link' => 'index.php?page=TahuTempeBacem',
        'image' => 'assets/image/sayur/resep8.jpeg'
    ],
    [
        'name' => 'Tumis Bayam Bawang Putih',
        'link' => 'index.php?page=TumisBayamBawangPutih',
        'image' => 'assets/image/sayur/resep9.jpeg'
    ],
    [
        'name' => 'Tumis Buncis Jamur',
        'link' => 'index.php?page=TumisBuncisJamur',
        'image' => 'assets/image/sayur/resep10.jpeg'
    ],
    [
        'name' => 'Tumis Kangkung',
        'link' => 'index.php?page=TumisKangkung',
        'image' => 'assets/image/sayur/resep11.jpg'
    ],
    [
        'name' => 'Tumis Kangkung Terasi',
        'link' => 'index.php?page=TumisKangkungTerasi',
        'image' => 'assets/image/sayur/resep12.jpg'
    ],
    [
        'name' => 'Tumis Tahu Tempe',
        'link' => 'index.php?page=TumisTahuTempe',
        'image' => 'assets/image/sayur/resep13.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Bahan Sayur</h2>
    
    <div class="row text-center">
        <?php foreach ($sayur as $item): ?>
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