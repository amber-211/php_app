<?php
  include 'partials/dbconnect.php';
$sql = "INSERT INTO `categories` ( `category_name`) VALUES ( '$category_name');";
// $sql="SELECT*FROM books INNER JOIN categories ON books.category=categories.id"; 
$result = mysqli_query($mysqli, $sql);
if($mysqli){
    echo "connected";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action="/ab/category.php" method="post">
       
       <div class="form-group">
           <label for="category">category</label>
           <input type="text" class="form-control" id="category" name="category_name">
       </div>
      
        
       <button type="submit" class="btn btn-primary">submit</button>

    </form>
</body>
</html>
