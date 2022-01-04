<!DOCTYPE html>
<html>
<head>
    <title>pertemuan4</title>
</head>
<body>
    <h1>Membuat array</h1>
     <?php
        $values = array(1,2,3,4,5,9);
        var_dump($values);
        echo("<br>");
        $bulan = array("januari", "februari", "maret", "april");
        var_dump($bulan);

        echo("<br>");
        // mengganti isi value
        $bulan[0]="januari";
        var_dump($bulan);


        echo("<br>");
        // menambahkan  value
        $bulan[]="februari";
        var_dump($bulan);


        echo("<br>");
        // menghapus salah satu value
        unset($bulan[1]);
        var_dump($bulan);

        echo("<br>");
        // mengambil total data array
        var_dump(count($bulan));
     ?>
    <hr>
    <h1>Map dengan array</h1>
    <?php
        $fikri = array(
                    "id" => "fikri",
                    "nama" =>"muhammad fikri akbar",
                    "umur" => "20",
                    );
        var_dump($fikri);

        echo("<br>");
        echo("nama panggilan :" . $fikri["id"]);
        echo("<br>");
        echo("nama lengkap :" . $fikri["nama"]);

    ?>
    <hr>
    <h1>operator matematika</h1>
    <?php
        $tambah = 20+2;
        $kurang = 80-10;
        $kali   = 9*6;
        $bagi = 50/2;
        $modular = 100 % 5;
        
        
        echo "tambah : " . $tambah . "<br>";  
        echo "kurang : " . $kurang . "<br>";  
        echo "kali : " . $kali . "<br>";  
        echo "bagi : " . $bagi . "<br>";  
        echo "modular : " . $modular . "<br>"; 
         
    ?>
    <hr>
    <h1>Increment</h1>
    <?php
    $a = 10;
    $a++;
    $a++;
    echo ($a);       
?>
</body>
</html>