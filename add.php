<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include 'partials/dbconnect.php';


if(isset($_POST['Submit'])) {   
    $title = $_POST['title'];
    $author_name = $_POST['author_name'];
    $language = $_POST['language'];
    $category = $_POST['category'];
        
    // checking empty fields
    if(empty($title) || empty($author_name) || empty($language) || empty($category)) {              
        if(empty($title)) {
            echo "<font color='red'>title field is empty.</font><br/>";
        }
        
        if(empty($author_name)) {
            echo "<font color='red'>Author_name field is empty.</font><br/>";
        }
        
        if(empty($language)) {
            echo "<font color='red'>language field is empty.</font><br/>";
        }
        if(empty($category)) {
            echo "<font color='red'>category field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO books(title,author_name,language,category) VALUES('$title','$author_name','$language','$category')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html