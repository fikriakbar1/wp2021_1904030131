
<?php

$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan sistem data dengan rapih
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
