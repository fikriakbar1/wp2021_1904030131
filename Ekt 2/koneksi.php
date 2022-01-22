<?php

$host ='localhost';
$user ='root';
$pass ='';
$db   ='wpsmt5';

$conn = mysqli_connect($host , $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

// AMBIL data dari tabel calon mhs
// mysqli_fetch_row();
// mysqli_fetch_assoc();
// mysqli_fetch_array();


//mysqli_fetch_row($result);
//var_dump(mysqli_fetch_row($result));

//while ($camaba =mysqli_fetch_row($result)){
//var_dump($camaba);
//}

?>