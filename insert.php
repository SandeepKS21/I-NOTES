<?php
 include("inc/db.php"); 
 
if (isset($_POST['submit'])) {
    $t = $_POST['title'];
    $c = $_POST['description'];
    
    
     $sql = "INSERT INTO notes SET notes='$t',description='$c'";
     $result = mysqli_query($con, $sql);

     $msg = true;

     header('location:index.php?msg='.$msg);
        
   
}

else
{
    echo "connection failed";
}
?>


