<?php

$connection = mysqli_connect("assignment-2-db.cpcdcyly6o6m.us-east-1.rds.amazonaws.com","admin","admin123");
$db = mysqli_select_db($connection, 'assignment');

if(isset($_POST['delete'])){
    $id = $_POST['ID'];

    $query = "DELETE FROM books WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<script> alert("Date deleted");<script>';
        header("location:retriveList.php");
    }else{
        echo '<script> alert("Data not deleted");<script>';
    }
}


?>
