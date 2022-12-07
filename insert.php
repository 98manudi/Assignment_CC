
	<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => books
		$conn = mysqli_connect("assignment-2-db.cpcdcyly6o6m.us-east-1.rds.amazonaws.com","admin","admin123","assignment");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$book_name = $_REQUEST['book_name'];
		$title = $_REQUEST['title'];
		$author = $_REQUEST['author'];
		$cost = $_REQUEST['cost'];
		
		// Performing insert query execution
		$sql = "INSERT INTO books (book_name, title, author, cost) VALUES ('$book_name',
			'$title','$author','$cost')";
		
		if(mysqli_query($conn, $sql)){
            echo '<script type="text/javascript">alert("Book added succesfully!");history.go(-1);</script>';

		} else{
			echo "ERROR! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	?>
