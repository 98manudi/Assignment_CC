<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h2>List of Books</h2>
            
            <?php
                $connection = mysqli_connect("assignment-2-db.cpcdcyly6o6m.us-east-1.rds.amazonaws.com","admin","admin123");
                $db = mysqli_select_db($connection, 'assignment');

                $query = "SELECT * FROM books";
                $query_run = mysqli_query($connection, $query);
                ?>

                <table class="table table-bordered" style="background-color:white;">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Cost</th>
                            <th>EDIT</th>
                            <th>DELETE</th>


                        </tr>
                    </thead>
                <?php

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                        ?>
                        <tbody>
                            <tr>
                                <th><?php echo $row['ID'];?> </th>
                                <th><?php echo $row['book_name'];?></th>
                                <th><?php echo $row['author']; ?></th>
                                <th><?php echo $row['cost'];?></th>

                                <form action="retriveBook.php" method="POST">
                                    <input type="hidden" name="ID" value="<?php echo $row['ID']?>">
                                     <th><input type="submit"  name="edit" class="btn btn-success" value="EDIT"></th>
                                </form>

                                <th> <a href="" class="btn btn-danger">DELETE</a></th>
                                
                            </tr>
                        </tbody>
                        <?php
                            
                            
                            
                            
                    }
                }else{
                    echo "No Record Found";
                }
            ?>
            </table>
            <div class="row">
                <a href="index.php" class="btn btn-success" >Add Book Details</a> 
            </div>
        </div>
</html>
