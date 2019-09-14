<?php
include 'koneksi.php';

      $name = mysqli_real_escape_string($connect, $_POST['name']);
      $work = mysqli_real_escape_string($connect, $_POST['work']);
      $salary = mysqli_real_escape_string($connect, $_POST['salary']);

      $query = mysqli_query($connect,"INSERT INTO `name`(`id`, `name`, `id_work`, `id_salary`) VALUES ('','$name','$work','$salary')")or die(mysqli_error($connect));

      if ($query){
            header('location:index.php');
      	echo "<div class=alert alert-primary role=alert>Data berhasil disimpan</div>";

      }else{
      	echo "<div class=alert alert-danger role=alert>Data berhasil disimpan</div>";
      }


?>


