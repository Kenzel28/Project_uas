<?php
$panggang = [
    [
        'name' => 'Ayam Panggang Madu',
        'link' => 'index.php?page=AyamPanggangMadu',
        'image' => 'assets/image/panggang/resep1.jpg'
    ],
    [
        'name' => 'Brownies Panggang',
        'link' => 'index.php?page=BrowniesPanggang',
        'image' => 'assets/image/panggang/resep2.jpg'
    ],
    [
        'name' => 'Ikan Bakar Sambal Kecap',
        'link' => 'index.php?page=IkanBakarSambalKecap',
        'image' => 'assets/image/panggang/resep3.jpg'
    ],
    [
        'name' => 'Pizza Homemade',
        'link' => 'index.php?page=PizzaHomemade',
        'image' => 'assets/image/panggang/resep4.jpg'
    ],
    [
        'name' => 'Sate Daging Kambing',
        'link' => 'index.php?page=SateDagingKambing',
        'image' => 'assets/image/panggang/resep5.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Metode Panggang</h2>
    
    <div class="row text-center">
        <?php foreach ($panggang as $item): ?>
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