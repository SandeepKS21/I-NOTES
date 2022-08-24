<?php
include("inc/db.php");

$id=$_GET['id'];
$d="DELETE FROM notes WHERE id='$id'";
$con->query($d);

header("location:index.php");

?>