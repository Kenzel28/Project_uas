<?php
$rebus = [
    [
        'name' => 'Bakmi Noodles Rebus',
        'link' => 'index.php?page=BakmiNoodlesRebus',
        'image' => 'assets/image/rebus/resep1.jpg'
    ],
    [
        'name' => 'Bakso Sapi',
        'link' => 'index.php?page=BaksoSapi',
        'image' => 'assets/image/rebus/resep2.jpg'
    ],
    [
        'name' => 'Bubur Ayam',
        'link' => 'index.php?page=BuburAyam',
        'image' => 'assets/image/rebus/resep3.jpg'
    ],
    [
        'name' => 'Ikan Kuah Pindang',
        'link' => 'index.php?page=IkanKuahPindang',
        'image' => 'assets/image/rebus/resep4.jpg'
    ],
    [
        'name' => 'Kolak Pisang',
        'link' => 'index.php?page=KolakPisang',
        'image' => 'assets/image/rebus/resep5.jpg'
    ],
    [
        'name' => 'Mi Rebus Jawa',
        'link' => 'index.php?page=MiRebusJawa',
        'image' => 'assets/image/rebus/resep6.jpg'
    ],
    [
        'name' => 'Sate Tahu Rebus',
        'link' => 'index.php?page=SateTahuRebus',
        'image' => 'assets/image/rebus/resep7.jpg'
    ],
    [
        'name' => 'Sayur Lodeh',
        'link' => 'index.php?page=SayurLodeh',
        'image' => 'assets/image/rebus/resep8.jpg'
    ],
    [
        'name' => 'Soto Ayam Lamongan',
        'link' => 'index.php?page=SotoAyamLamongan',
        'image' => 'assets/image/rebus/resep9.jpg'
    ],
    [
        'name' => 'Sup Bayam Telur Puyuh',
        'link' => 'index.php?page=SupBayamTelurPuyuh',
        'image' => 'assets/image/rebus/resep10.jpg'
    ],
    [
        'name' => 'Sup Jagung Kuah Susu',
        'link' => 'index.php?page=SupJagungKuahSusu',
        'image' => 'assets/image/rebus/resep11.jpg'
    ],
    [
        'name' => 'Sup Kacang Merah',
        'link' => 'index.php?page=SupKacangMerah',
        'image' => 'assets/image/rebus/resep12.jpg'
    ],
    [
        'name' => 'Sup Kembang Kol',
        'link' => 'index.php?page=SupKembangKol',
        'image' => 'assets/image/rebus/resep13.jpg'
    ],
    [
        'name' => 'Sup Kwetiau Kuah',
        'link' => 'index.php?page=SupKwetiauKuah',
        'image' => 'assets/image/rebus/resep14.jpg'
    ]
];
?>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Semua Metode Rebus</h2>
    
    <div class="row text-center">
        <?php foreach ($rebus as $item): ?>
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