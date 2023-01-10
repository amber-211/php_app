<?php
session_start();
// include 'controller.php';

// $obj = new controller();
include 'partials/dbconnect.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Hey how are you doing? Welcome to myApp You are logged in as <?php echo $_SESSION['username']?>. Aww yeah, you successfully read this important alert message. </p>
      <hr>
      <!-- <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php"> using this link.</a></p> -->
    </div>

    <h3>ADD YOUR BOOK DETAILS</h3>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" class="table-striped">
          <div class="form-group  container-fluid w-100 border">
          <tr> 
                <td>title</td>
                <td><input type="text" name="title" class="form-control"></td>
            </tr>
          </div>
           <div class="form-group">   <tr> 
                <td>author_name</td>
                <td><input type="text" name="author_name" class="form-control"></td>
            </tr></div>
         <div class="form-group">   <tr> 
                <td>language</td>
                <td><input type="text" name="language" class="form-control"></td>
            </tr></div>
         <div class="form-group">    <tr> 
                <td>category</td>
                <td><input type="text" name="category" class="form-control"></td>
            </tr></div>
        
            <tr> 
                <td></td>
                <td><input type="submit"  class="btn btn-primary" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
   


    

  </div>

  
<!-- // echo $obj->table_data('books',0); -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

