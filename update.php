<?php 
include("inc/db.php");
if(isset($_POST['update']))
{
    $id=$_GET['id'];
    $n=$con->real_escape_string($_POST['title']);
    $d=$con->real_escape_string($_POST['description']);
    $dt=$_POST['DATE & TIME'];

    $sql="UPDATE notes SET notes='$n', description='$d' WHERE id='$id'";
    $con->query($sql);

    header("location:index.php");

}
?>