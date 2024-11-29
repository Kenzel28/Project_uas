<?php
include 'includes/header.php';
include 'includes/navbar.php';

$page = isset($_GET['page']) ? preg_replace('/[^a-zA-Z0-9_\-\/]/', '', $_GET['page']) : 'beranda';

// Direktori untuk tempat file berada
$directories = [
    'pages',
    'konten/makanan_pembuka',
    'konten/makanan_utama',
    'konten/makanan_penutup',
    'konten/minuman',
    'konten/goreng',
    'konten/rebus',
    'konten/tumis',
    'konten/panggang',
    'konten/daging',
    'konten/sayur',
    'konten/seafood',
    'konten_semua'
];

$file_found = false;

foreach ($directories as $dir) {
    $page_path = $dir . '/' . $page . '.php';

    if (file_exists($page_path)) {
        echo "<!-- File included: $page_path -->";
        include $page_path;
        $file_found = true;
        break;
    }    
}

if (!$file_found) {
    echo '<h1>Halaman tidak ditemukan</h1>';
}

include 'includes/footer.php';
?>