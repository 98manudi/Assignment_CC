<!DOCTYPE html>
<html>
  <head>
    <title>Online Book Store</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php
      $connection = mysqli_connect("localhost","root","",);
      $db = mysqli_select_db($connection, 'book');

      $id = $_POST['ID'];

      $query = "SELECT * FROM books WHERE ID='$id'";
      $query_run = mysqli_query($connection, $query);

      if( $query_run){
        while($row = mysqli_fetch_array($query_run)){
          ?>
          <div class="container">
            <div class="jumbtron">
              
              <hr>
              <form action="" method="post">
                <div class="title">
                  <i class="fas fa-pencil-alt"></i> 
                  <h2>Update Book Details</h2>
                </div>
                <div class="info">
                  <input type="hidden" name="ID" value="form-control" value="<?php echo $row['ID']?>">
                  <br> <br>
                  <label for="">Book Name</label>
                  <input class="bName" type="text"  name="book_name" value="<?php echo $row['book_name']?>">
                  <br><br>
                  <label for="">Title</label>
                  <input type="text" name="title" value="<?php echo $row['title']?>" >
                  <br><br>
                  <label for="">Author</label>
                  <input type="text" name="author" value="<?php echo $row['author']?>" >
                  <br><br>
                  <label for="">Cost</label>
                  <input type="text" name="cost" value="<?php echo  $row['cost']?>" >
                  <br><br>
                </div>
                <br>
                <button type="submit" name="update" class="btn btn-primary" >Update</button>
                <br><br>
               

        
      </form>
      <?php
        if(isset($_POST['update'])){
          $id = $_POST['ID'];
          $bookname = $_POST['book_name'];
          $title = $_POST['title'];
          $author = $_POST['author'];
          $cost = $_POST['cost'];

          $query = "update books set book_name='$bookname', title='$title', author='$author', cost='$cost' WHERE ID='$id' ";
          $query_run = mysqli_query($connection, $query);

          if($query_run){
            header("location:retrive.php");
            echo '<script> alert("Data Updated");</script';
            
          }else{
            echo '<script> alert("No Record Found");</script';
          }
        }
        
      ?>
            </div>
          </div>
          <?php

          
        }
      }else{
        echo '<script> alert("No Record Found");</script';
      }
    ?>
  </body>
</html>
