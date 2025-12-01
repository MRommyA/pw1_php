<?php

echo "hello world";

// single comment

/* 
multi line comment 
*/

echo "<br><h2><strong>Teks Bold</strong></h2><br>";
printf("%d + %d = %d <br>", 5, 10, 5 + 10);

$nama = "Rommy";
$number = 15;
$string1 = 'satu';
$string2 = 'dua' . $string1;
echo "<br>$string2<br>";
$no = '20';
$hasil = $no + 10;
echo "$no + 10 = $hasil<br>";

define('phi', 3.14);
$r = 10;
echo (phi * $r * $r) . "<br>";

@$variabel = 'coba';

$array = array("satu", "dua", "tiga");
$array2 = ["empat", "lima", "enam"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    teks html
    <br>
    <?php echo "teks dari php"; ?>
    <br>
    <form>
        <input type="text" value="<?=$nama?>">
    </form>
</body>
</html>