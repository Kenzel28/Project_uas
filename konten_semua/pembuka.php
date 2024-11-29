<?php
$makananPembuka = [
    [
        'name' => 'Sup Krim Jagung',
        'link' => 'index.php?page=SupKrimJagung',
        'image' => 'assets/image/pembuka/resep9.jpg'
    ],
    [
        'name' => 'Bruschetta Tomat Basil',
        'link' => 'index.php?page=BruschettaTomatBasil',
        'image' => 'assets/image/pembuka/resep1.jpeg'
    ],
    [
        'name' => 'Guacamole dengan Keripik Tortilla',
        'link' => 'index.php?page=GuacamoledenganKeripikTortilla',
        'image' => 'assets/image/pembuka/resep2.jpg'
    ],
    [
        'name' => 'Lumpia Sayur',
        'link' => 'index.php?page=LumpiaSayur',
        'image' => 'assets/image/pembuka/resep3.jpeg'
    ],
    [
        'name' => 'Lumpia Udang Sayur',
        'link' => 'index.php?page=LumpiaUdangSayur',
        'image' => 'assets/image/pembuka/resep4.jpg'
    ],
    [
        'name' => 'Risoles Ragout Ayam',
        'link' => 'index.php?page=RisolesRagoutAyam',
        'image' => 'assets/image/pembuka/resep5.jpg'
    ],
    [
        'name' => 'Salad Buah Segar',
        'link' => 'index.php?page=SaladBuahSegar',
        'image' => 'assets/image/pembuka/resep6.jpg'
    ],
    [
        'name' => 'Samosa Isi Daging',
        'link' => 'index.php?page=SamosaIsiDaging',
        'image' => 'assets/image/pembuka/resep7.jpg'
    ],
    [
        'name' => 'Sayur Asem Jawa',
        'link' => 'index.php?page=SayurAsemJawa',
        'image' => 'assets/image/pembuka/resep8.jpg'
    ],
    [
        'name' => 'Sup Miso Tofu',
        'link' => 'index.php?page=SupMisoTofu',
        'image' => 'assets/image/pembuka/resep10.jpg'
    ],
    [
        'name' => 'Tahu Crispy Sambal Kecap',
        'link' => 'index.php?page=TahuCrispySambalKecap',
        'image' => 'assets/image/pembuka/resep11.jpg'
    ],
    [
        'name' => 'Zuppa Soup',
        'link' => 'index.php?page=ZuppaSoup',
        'image' => 'assets/image/pembuka/resep12.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Makanan Pembuka</h2>
    
    <div class="row text-center">
        <?php foreach ($makananPembuka as $item): ?>
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
