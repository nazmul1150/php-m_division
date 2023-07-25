<?php

$conn = mysqli_connect('localhost','root','','m_division');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>