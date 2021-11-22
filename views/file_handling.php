<?php
include('../layouts/head.php');
?>

<?php
include('../layouts/navbar.php');
?>

<div class="container">
    <h1>File Handling</h1>
</div>

<?php

// READ FILE
$myfile = fopen("../file_dummy/file1.txt", "r") or die("Tidak bisa dibuka!");

// cara1
// $filesize = filesize("../file_dummy/file1.txt");
// echo fread($myfile, $filesize);

// cara2, line by line
// echo fgets($myfile) . "<br>";
// echo fgets($myfile) . "<br>";

// cara3, eof -> line
// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }

// cara4, eof -> character
// while (!feof($myfile)) {
//     echo fgetc($myfile);
// }

// cara5
$data = file('../file_dummy/file1.txt');
print_r($data);

fclose($myfile);

// WRITE FILE
// $myfile = fopen("../file_dummy/file3.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);


?>


<?php
include('../layouts/foot.php');
?>