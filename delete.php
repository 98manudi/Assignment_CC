<?php

$connection = mysqli_connect("localhost","root","",);
$db = mysqli_select_db($connection, 'book');

if(isset($_POST['delete'])){
    $id = $_POST['ID'];

    $query = "DELETE FROM books WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<script> alert("Date deleted");<script>';
        header("location:retrive.php");
    }else{
        echo '<script> alert("Data not deleted");<script>';
    }
}


?>