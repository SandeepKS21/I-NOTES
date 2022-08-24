<?php 
include("inc/db.php");

$id=$_GET['id'];
$sh="SELECT*FROM notes WHERE id='$id'";
$rs=$con->query($sh);
$row=$rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("inc/nav.php"); 
    ?>
   <!-- here my-3 means m= margin, y= top & bottom -->
<div class="container my-3">
    <div class="">
            <form action="update.php?id=<?php echo $id ?>" method="POST">
                <h1>ADD NOTES</h1>
                <br>
                <h5>NOTE TITLE</h5>
                <div><input type="text" value="<?php if(isset($row['notes'])) {echo $row ['notes'];} ?>" name="title" class="form-control"></div>

                <div class=" my-3 ">
                    <p>Note Description</p>
                    <textarea name="description" cols="174" rows="5"><?php if(isset($row['description'])) { echo $row['description']; } ?></textarea>
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-info">
            </form>


        </div>
    </div>
</body>
</html>