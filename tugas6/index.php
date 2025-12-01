<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        echo "Deret Bilangan Genap dari 1 sampai 10 : ";
        for($i = 1; $i<=10; $i++){
            if($i % 2 == 0){
                echo "$i ";
            }
        }
        echo "<br><br>";

        echo "<table border='1'>
            <tr>
                <th>bilangan</th>";
        for($i = 1; $i<=10; $i++){
            echo "<th style='background-color: lime'>$i</th>";
        }
        echo "</tr>";
        for($j = 1; $j<=10; $j++){
            echo "<tr>
                <td style='background-color: lime'>$j</td>";
            for($k = 1; $k<=10; $k++){
                $hasil = $j * $k;
                if($hasil % 2 == 1)
                    echo "<td style='background-color: yellow'>$hasil</td>";
                else
                    echo "<td style='background-color: cyan'>$hasil</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>