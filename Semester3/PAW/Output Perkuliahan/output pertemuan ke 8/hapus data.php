<?php
// include database connection file
$koneksi = mysqli_connect("localhost","root","","db_140");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_mubes WHERE id_mubes=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
if(!$result){
    
}
header("Location:Lihat Data.php");
?>