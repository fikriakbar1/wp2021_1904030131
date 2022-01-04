<!DOCTYPE html>
<html>
<head>
     <title>pertemuan3</title>
</head>
<body>
    <!-- PHP dalam html -->
    <h1>selamat datang, <?php echo "bambang" ?> </h1>

    <!-- tag HTML dalam php  -->
    <?php echo "<h2>di pembelajaran web programing</h2>"; ?>
    <hr>
    <h2>tipe data integer</h2>
    
    <?php
    echo "desimal : "; var_dump(1966); echo "<br>";
    echo "octa : "; var_dump(01234); echo "<br>";
    echo "hexadesimal : "; var_dump(0x1a); echo "<br>";
   
    ?>
    <hr>
    <h2>variable</h2>
<?php 
$namadepan =" fikri ";
$namablk ="akbar";
$mk ="web programing";
$hobi="badminton";
?>

<h4>identitas diri</h4>
<p> nama : <?php echo $namadepan ." ". $namablk ?></p>
<p> mata kuliah : <?php echo $mk ?></p>
<p> hobi : <?php echo $hobi ?></p>
</body>
</html>