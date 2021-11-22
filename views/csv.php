<?php 
include('../layouts/head.php');
?>

<?php 
include('../layouts/navbar.php');
?>

<div class="container">
    <h1>Hello, world!</h1>
</div>

<?php

echo "INPUT FILE CSV";
// $file_open = fopen("result.csv", "a");
// $no_rows = count(file("result.csv"));

// if ($no_rows > 1) {
//     $no_rows = ($no_rows-1)+1;
// }
// $luas = persegi($string);

// $form_data = array(
//     'tanggal' => date('Y-m-d H:i'),
//     'bangun' => 'Persegi',
//     'sisi' => (int)$string,
//     'alas' => NULL,
//     'tinggi' => NULL,
//     'jari_jari' => NULL,
//     'hasil' => (int)($luas)
// );
// fputcsv($file_open, $form_data);

echo "OUTPUT FILE CSV";
// ============================================
// if (($open = fopen("result.csv", "r")) !== FALSE) {
//     $array = array();
//     $max = 0;
//     $min = 0;
//     $total = 0.0000000000000000000000001;
//     $persegi = 0;
//     $segitiga = 0;
//     $lingkaran = 0;
//     $i = 0;
//     while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
//         $array[] = $data;
//         if ($data['6'] >= $max) {
//             $max = $data['6'];
//         }
//         if ($data['6'] <= $min || $i == 0) {
//             $min = $data['6'];
//         }
//         $total += $data['6'];
//         if ($data['1'] == 'Persegi') {
//             $persegi += $data['6'];
//         }
//         if ($data['1'] == 'Segitiga') {
//             $segitiga += $data['6'];
//         }
//         if ($data['1'] == 'Lingkaran') {
//             $lingkaran += $data['6'];
//         }
//         $i++;
//     }
//     // if ($total === 0) {

//     $persen_persegi = ($persegi > 0) ? number_format((($persegi / $total) * 100), 2) : '0';
//     $persen_segitiga = ($segitiga > 0) ? number_format((($segitiga / $total) * 100), 2) : '0';
//     $persen_lingkaran = ($lingkaran > 0) ? number_format((($lingkaran / $total) * 100), 2) : '0';
//     // }

//     fclose($open);
// }

?>

<?php 
include('../layouts/foot.php');
?>