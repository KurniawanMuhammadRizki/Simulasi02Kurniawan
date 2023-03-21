<?php
include 'koneksi.php';
$sql = "UPDATE mhs SET nama='$_POST[nama]', tugas='$_POST[tugas]', uts='$_POST[uts]',
 uas='$_POST[uas]' where nim='$_POST[nim]' ;" ;
if ($conn->query($sql)){
    echo "Data Berhasil Diubah";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: index.php");
?>