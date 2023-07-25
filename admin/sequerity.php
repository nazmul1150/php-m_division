<?php

session_start();
if (isset($_SESSION['set'])) {
	echo "";
}
else{
	header('location:../login.php');
}

?>