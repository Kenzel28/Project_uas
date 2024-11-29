<?php
$tips = [
    ["title" => "Tips Memasak Daging", 
        "detail" => "1. Rendam daging dengan bumbu minimal 30 menit sebelum dimasak agar lebih meresap.\n2. Gunakan api besar di awal untuk mengunci jus daging, kemudian kecilkan api agar matang sempurna."],
    ["title" => "Tips Memasak Sayuran", 
        "detail" => "1. Jangan memasak sayuran terlalu lama untuk menjaga nutrisi dan teksturnya.\n2. Tambahkan sedikit garam ke dalam air rebusan untuk menjaga warna hijau sayuran tetap cerah."],
    ["title" => "Tips Menggunakan Minyak", 
        "detail" => "1. Gunakan minyak zaitun untuk memasak dengan api kecil atau sedang, bukan untuk menggoreng.\n2. Pastikan minyak benar-benar panas sebelum menggoreng untuk hasil yang renyah."],
    ["title" => "Tips Memasak Nasi", 
        "detail" => "1. Cuci beras hingga airnya jernih untuk hasil nasi yang pulen.\n2. Gunakan takaran air yang pas, biasanya 1:1,5 untuk beras putih biasa."],
    ["title" => "Tips Memasak Telur", 
        "detail" => "1. Untuk telur rebus dengan kuning yang pas, rebus selama 7-9 menit tergantung tingkat kematangan yang diinginkan.\n2. Tambahkan sedikit cuka ke air rebusan agar cangkang lebih mudah dikupas."],
    ["title" => "Tips Bumbu Masakan", 
        "detail" => "1. Tumis bumbu hingga benar-benar matang untuk mengeluarkan aroma dan rasa maksimal.\n2. Gunakan rempah segar untuk rasa yang lebih kuat dibandingkan rempah kering."],
    ["title" => "Tips Baking atau Membuat Kue", 
        "detail" => "1. Gunakan bahan dengan suhu ruang untuk hasil kue yang lebih sempurna.\n2. Jangan lupa mengayak tepung sebelum digunakan agar adonan lebih ringan."],
    ["title" => "Tips Menggunakan Panci atau Wajan", 
        "detail" => "1. Gunakan wajan anti-lengket untuk memasak bahan-bahan seperti telur dadar.\n2. Jangan mencuci panci panas langsung dengan air dingin untuk mencegah keretakan."],
    ["title" => "Tips Menyimpan Bahan Makanan", 
        "detail" => "1. Simpan daun bawang yang sudah dicuci di freezer agar lebih tahan lama.\n2. Letakkan daging di rak bawah kulkas untuk mencegah kontaminasi bahan lainnya."],
    ["title" => "Tips Membuat Sup", 
        "detail" => "1. Tambahkan garam di akhir proses memasak agar rasa sup lebih seimbang.\n2. Rebus tulang terlebih dahulu untuk menghasilkan kaldu yang kaya rasa."],
    ["title" => "Tips Membuat Gorengan", 
        "detail" => "1. Tambahkan sedikit air jeruk nipis ke dalam adonan tepung untuk gorengan yang lebih renyah.\n2. Goreng dalam minyak yang cukup panas untuk mencegah hasil yang berminyak."],
    ["title" => "Tips Membersihkan Alat Masak", 
        "detail" => "1. Gunakan baking soda dan air hangat untuk membersihkan wajan berlemak.\n2. Jangan gunakan alat logam pada wajan anti-lengket untuk menjaga lapisannya tetap baik."],
    ["title" => "Tips Menyajikan Makanan", 
        "detail" => "1. Tambahkan hiasan seperti daun peterseli atau irisan lemon untuk presentasi yang menarik.\n2. Sajikan makanan di piring hangat agar tetap terasa nikmat lebih lama."],
    ["title" => "Tips Membuat Saus", 
        "detail" => "1. Gunakan mentega dingin di akhir memasak untuk saus yang lebih creamy.\n2. Tambahkan sedikit gula untuk menyeimbangkan rasa saus yang terlalu asam."],
    ["title" => "Tips Membuat Adonan", 
        "detail" => "1. Jangan mengaduk adonan terlalu lama untuk kue kering agar tidak keras.\n2. Tambahkan sedikit air es ke adonan pie untuk kulit yang renyah."]
];
?>

<body>
    <div class="container">
        <h1>Tips Memasak</h1>
        <?php foreach ($tips as $tip): ?>
            <div class="tips-item">
                <div class="tips-header"><?= htmlspecialchars($tip['title']); ?></div>
                <div class="tips-content"><?= nl2br(htmlspecialchars($tip['detail'])); ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
