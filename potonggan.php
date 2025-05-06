<?php
// Cek apakah parameter 'nama' ada di URL
if (isset($_GET['nama']) && !empty($_GET['nama'])) {
    // Ambil nilai parameter 'nama' dari URL dan amankan dengan htmlspecialchars
    $nama = htmlspecialchars($_GET['nama']);
    echo "Halo, " . $nama;
} else {
    echo "Halo, Aulia Amanah";
}
?>