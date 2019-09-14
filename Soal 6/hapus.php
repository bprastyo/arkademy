<?php 
include "koneksi.php";
@$id=$_GET['id'];
$hapus=mysqli_query($connect,"DELETE FROM `name` WHERE `name`.`id` = '$id'")or die($connect);
if($hapus){
	header('location:index.php');
}else{

}
?>