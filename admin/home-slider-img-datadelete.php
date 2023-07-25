<?php
include('sequerity.php');
include('../dbconect.php');
 ?>
 <?php

 $sid= $_REQUEST['id'];

  $qur="DELETE FROM `home_slider` WHERE `id`='$sid'";

  $run=mysqli_query($conn,$qur);
  if($run===TRUE){
  ?>

  <script>
    alert('data delete successful.');
    window.open('home-slider-img.php','_self');
  </script>

  <?php
}
else{
  echo "Error :".$qur."</br>".mysqli_error($conn);
}


mysqli_close($conn);
?>
