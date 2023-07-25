<?php
include('../sequerity.php');
include('../../dbconect.php');


$id=$_REQUEST['id'];

$qul="DELETE FROM `n-&-s` WHERE `id`=$id";

$run = mysqli_query($conn,$qul);
header("location:../home-page-contant3-dataDelete.php");

if ($run) {
	?>
	<script>alert('data delet successfully.');</script>
	<?php
}
else{
	echo "Error".$qul."</br>".mysqli_error($conn);
}

mysqli_close($conn);

 ?>
