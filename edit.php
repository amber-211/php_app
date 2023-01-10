<?php
// including the database connection file
include'partials/dbconnect.php';


if(isset($_POST['update']))
{   
    $id = $_POST['id']; 
   $title=$_POST['title'];
    $author_name=$_POST['author_name'];
    $language=$_POST['language']; 
    $category=$_POST['category']; 
    
    // checking empty fields
    if( empty($title)|| empty($author_name) || empty($language) || empty($category) ) {          
        if(empty($title)) {
            echo "<font color='red'>title field is empty.</font><br/>";
        }
        
        if(empty($author_name)) {
            echo "<font color='red'>author name field is empty.</font><br/>";
        }
        
        if(empty($language)) {
            echo "<font color='red'>language field is empty.</font><br/>";
        }       
        if(empty($category)) {
            echo "<font color='red'>category field is empty.</font><br/>";
        }       
    }
     {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE `books` SET `title`='$title',`author_name`='$author_name',`language`='$language',`category`='$category' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM books ORDER BY id DESC"); 

while($res = mysqli_fetch_array($result))
{
    $title = $res['title'];
    $author_name = $res['author_name'];
    $language = $res['language'];
    $category = $res['category'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <a href="index.php">see records</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0" class="table-striped">
            <tr> 
                <td>title </td>
                <td><input type="text" name="title " value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Author_name</td>
                <td><input type="text" name="author_name" value="<?php echo $author_name;?>"></td>
            </tr>
            <tr> 
                <td>language</td>
                <td><input type="text" name="language" value="<?php echo $language;?>"></td>
            </tr>
            <tr> 
                <td>category</td>
                <td><input type="text" name="category" value="<?php echo $category;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>