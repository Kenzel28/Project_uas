<?php
$goreng = [
    [
        'name' => 'Ayam Goreng Kalasan',
        'link' => 'index.php?page=AyamGorengKalasan',
        'image' => 'assets/image/goreng/resep1.jpg'
    ],
    [
        'name' => 'Bakwan Jagung',
        'link' => 'index.php?page=BakwanJagung',
        'image' => 'assets/image/goreng/resep2.jpg'
    ],
    [
        'name' => 'Ceker Ayam Goreng Krispi',
        'link' => 'index.php?page=CekerAyamGorengKrispi',
        'image' => 'assets/image/goreng/resep3.jpg'
    ],
    [
        'name' => 'Cireng',
        'link' => 'index.php?page=Cireng',
        'image' => 'assets/image/goreng/resep4.jpg'
    ],
    [
        'name' => 'Kentang Goreng',
        'link' => 'index.php?page=KentangGoreng',
        'image' => 'assets/image/goreng/resep5.jpg'
    ],
    [
        'name' => 'Mie Goreng Jawa',
        'link' => 'index.php?page=MieGorengJawa',
        'image' => 'assets/image/goreng/resep6.jpg'
    ],
    [
        'name' => 'Nugget Ayam',
        'link' => 'index.php?page=NuggetAyam',
        'image' => 'assets/image/goreng/resep7.jpg'
    ],
    [
        'name' => 'Pisang Goreng Cokelat',
        'link' => 'index.php?page=PisangGorengCokelat',
        'image' => 'assets/image/goreng/resep8.jpg'
    ],
    [
        'name' => 'Pisang Goreng Madu',
        'link' => 'index.php?page=PisangGorengMadu',
        'image' => 'assets/image/goreng/resep9.jpg'
    ],
    [
        'name' => 'Tempe Goreng Tepung',
        'link' => 'index.php?page=TempeGorengTepung',
        'image' => 'assets/image/goreng/resep10.jpg'
    ],
    [
        'name' => 'Tempe Mendoan',
        'link' => 'index.php?page=TempeMendoan',
        'image' => 'assets/image/goreng/resep11.jpg'
    ],
    [
        'name' => 'Udang Goreng Tepung',
        'link' => 'index.php?page=UdangGorengTepung',
        'image' => 'assets/image/goreng/resep12.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Metode Goreng</h2>
    
    <div class="row text-center">
        <?php foreach ($goreng as $item): ?>
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