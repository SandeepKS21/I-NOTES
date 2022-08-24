<?php 
include("inc/db.php");

if(isset($_POST['submit']))
{
    $t=$_POST['title'];
    $c=$_POST['description'];

    $sql="INSERT INTO my_notes SET notes='$t',description='$c'";
    $result=$con->query($sql);
    echo "data inserted";
}

else
{
    echo "data not inserted";
}

?>