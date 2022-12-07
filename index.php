<!DOCTYPE html>
<html>
  <head>
    <title>Online Book Store</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <body >
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-book-open"></i>
        <h1>Online Book Store</h1>
        <p>Online Bookstore System on Cloud Infrastructure</p>
        <div class="btn-group">
          <a class="btn-item" href="retriveList.php">View Book List</a>
         
        </div>
      </div>
      <form action="insert.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Add New Book</h2>
        </div>
        <div class="info">
          <input class="bName" type="text" name="book_name" placeholder="Book name">
          <input type="text" name="title" placeholder="Title">
          <input type="text" name="author" placeholder="Author">
          <input type="text" name="cost" placeholder="Cost">
        </div>
        <br>
        <button type="submit" href="/">Submit</button>
        <br><br>

        
      </form>
      
     <div>
    
     

    
  </body>
  
</html>
