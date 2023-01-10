<?php
//including the database connection file
include'partials/dbconnect.php';

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query( $mysqli,"SELECT * FROM books ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>  
    <title>Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <table width='80%' border=0 class="table">
        <div class="m-4">
        <thead class="thead-dark">
        <tr bgcolor='#CCCCCC' >

       
        <th>Title</th>
            <th>Author</th>
            <th>Language</th>
            <th>Category</th>
            <th>Update</th>
      
          
        </tr>
        </thead>
        </div>
    
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['title']."</td>";
            echo "<td>".$res['author_name']."</td>";
            echo "<td>".$res['language']."</td>";  
            echo "<td>".$res['category']."</td>";  
            echo "<td btn btn-primary><a href=\"edit.php?id=$res[id]\" >Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";    
        }
        ?>
    </table>
    <a href="add.html"  class="btn btn-info m-4">Add New Data</a><br/><br/>
</body>
</html>
