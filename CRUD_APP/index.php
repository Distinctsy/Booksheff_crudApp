<?php
include_once 'connect.php';

if(isset ($_POST['submit'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    $sql = "insert into `books` (title,author,genre,year) values ('$title','$author','$genre','$year')";
    $result=mysqli_query($con,$sql);
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

    <title>Books</title>
    
</head>
<body>


<div class="container my-3">
 <h1 style="font-weight: 1000;
        color:blue;">Books</h1>
<form method="post">
    <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter the book Title" name="title" autocomplete="off">
    </div>

    <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control" placeholder="Enter Author's name" name="author">
    </div>

    <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" placeholder="Enter Book Genre" name="genre">
    </div>

     <div class="form-group">
            <label>Year</label>
            <input type="number" class="form-control" placeholder="Enter Publication Year" name="year">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>