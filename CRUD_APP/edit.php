<?php
include 'connect.php';

$id=$_GET['updateid'];
$sql="select * from `books` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$author=$row['author'];
$genre=$row['genre'];
$year=$row['year'];

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];

    $sql = "update `books` set  id='$id',title='$title',author='$author',genre='$genre',year='$year' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:view.php');
    }else{
        echo die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Record</title>
  </head>
  <body>

    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter Book Title" name="title" autocomplete="off" value=<?php echo $title;?>>
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control" placeholder="Enter Book Author" name="author" value=<?php echo $author;?>>
        </div>

        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" placeholder="Enter Book Genre" name="genre" value=<?php echo $genre;?>>
        </div>

        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" placeholder="Enter Book Publication Year" name="year" value=<?php echo $year;?>>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </div>
  </body>
</html>
