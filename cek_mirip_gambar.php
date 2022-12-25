<?php

function cek_mirip_gambar($image1, $image2) {
  // Menghitung hash dari gambar 1 dan 2
  $hash1 = hash_file('md5', $image1);
  $hash2 = hash_file('md5', $image2);

  // Membandingkan hash dari gambar 1 dan 2
  if ($hash1 == $hash2) {
    // Gambar mirip
    echo "Gambar mirip\n";
  } else {
    // Gambar tidak mirip
    echo "Gambar tidak mirip\n";
  }

  // Menyimpan nama file thumbnail 1 dan 2
  $thumbnail1 = 'thumbnail1.jpg';
  $thumbnail2 = 'thumbnail2.jpg';

  // Membuat thumbnail dari gambar 1 dan 2
  $aksiku1 = "convert $image1 -thumbnail 200x200 $thumbnail1";
  $hasil1 = system($aksiku1);
  $aksiku2 = "convert $image2 -thumbnail 200x200 $thumbnail2";
  $hasil2 = system($aksiku2);

  // Menghitung hash dari thumbnail
  $hash1 = hash_file('md5', $thumbnail1);
  $hash2 = hash_file('md5', $thumbnail2);

  // Membandingkan hash dari thumbnail
  if ($hash1 == $hash2) {
    // Gambar mirip
    echo "Gambar mirip\n";
  } else {
    // Gambar tidak mirip
    echo "Gambar tidak mirip\n";
  }

  // Menghapus file thumbnail
  unlink($thumbnail1);
  unlink($thumbnail2);
}

// Menyimpan nama file gambar 1 dan 2
$image1 = 'gambar1.jpg';
$image2 = 'gambar2.jpg';

cek_mirip_gambar($image1, $image2);

?>
