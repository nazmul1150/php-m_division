<?php
include('../sequerity.php');
include('../../dbconect.php');
 ?>

  <?PHP
       // $id= $_REQUEST['id'];
        //$qul="SELECT * FROM `p-saba` WHERE `id`='$id';";
        //$rul=mysqli_query($conn,$qul);
       // $row=mysqli_fetch_assoc($rul);
        ?>
<?php

if (isset($_POST['submit'])) { 
  $sid= $_REQUEST['id'];
  $h1=$_POST['title'];
  $cn1=$_POST['cn1'];
  $cn2=$_POST['cn2'];
  $cn3=$_POST['cn3'];
  $cn4=$_POST['cn4'];

  $file_name=$_FILES['imgs']['name'];
  $file_tmp_name=$_FILES['imgs']['tmp_name'];

  move_uploaded_file($file_tmp_name,"../../img/contant-img/".$file_name);

  $qur = "UPDATE `bumi` SET `title`='$h1',`img`='$file_name',`contant1`='$cn1',`contant2`='$cn2',`contant3`='$cn3',`contant4`='$cn4' WHERE `id`='$sid'";

  //$qur="INSERT INTO `p-saba`(`title`, `img`, `contant1`, `contant2`, `contant3`, `contant4`) VALUES ('$h1','$file_name','$cn1','$cn2','$cn3','$cn4')";

  $run=mysqli_query($conn,$qur);

  if ($run===TRUE) {
    ?>

    <script>
    alert('Data Update successful.');
    window.open('../home-page-contant5-dataupdate.php','_self');
  </script>

    <?php
  }
  else{
    echo "Error".$qur."</br>".mysqli_error($conn);
  }

  
}
mysqli_close($conn);
?>
