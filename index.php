<?php
include("inc/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY NOTES</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">





</head>

<body>
    <?php
    include("inc/nav.php"); 
    ?>

           <?php
            if (isset($_GET['msg']))
            {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your record has been inserted successfully
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>";

            }
            
             ?>



<div class="container my-3">
    <div class="">
            <form action="insert.php" method="POST">
                <h1>ADD NOTES</h1>
                <br>
                <h5>NOTE TITLE</h5>
                <div><input type="text" name="title" class="form-control" required ></div>

                <div class=" my-3 ">
                    <p>Note Description</p>
                    <textarea name="description" cols="174" rows="5" required></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-info">
            </form>


        </div>
    </div>




    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>S. No</th>
                                <th>Note Title</th>
                                <th>Descripation</th>
                                <th>DATE & TIME</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sel = "SELECT*FROM notes";
                            $rs = $con->query($sel);

                            while ($row = $rs->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['notes']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['DATE & TIME'] ?></td>
                                    <td><a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']?> ">Edit</a> 

                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger ml-3" href="del.php?id=<?php echo $row['id']?>">Delete</a></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>