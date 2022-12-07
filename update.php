
      <?php
        $connection = mysqli_connect("localhost","root","",);
        $db = mysqli_select_db($connection, 'book');

        $id = $_POST['ID'];
    
          $book_name = $_REQUEST['book_name'];
          $title = $_REQUEST['title'];
          $author = $_REQUEST['author'];
          $cost = $_REQUEST['cost'];

          $queryUpdate = "UPDATE books SET book_name='$book_name', title='$title', author='$author', cost='$cost' WHERE ID ='$id'";

          if(mysqli_query($connection, $queryUpdate)){
            echo '<script> alert("Book details succesfully updated!");</script';
            header("location:retriveList.php");
            // echo '<script type="text/javascript">alert("Book details succesfully updated!");history.go(-2);</script>';

          }else{
            echo '<script> alert("No Record Found");</script';
          }
        
    ?>

