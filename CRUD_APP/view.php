<?php   
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
        <h1 style="font-weight: 1000;
        color:blue;">Bookshelf</h1>
        <button class="btn btn-primary my-3"><a href="index.php" class="text-light">Insert Books</a>
        </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">Year</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


<?php
  $sql="select * from `books`";
  $result=mysqli_query($con,$sql);
  if ($result){
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $title=$row['title'];
    $author=$row['author'];
    $genre=$row['genre'];
    $year=$row['year'];
    echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$title.'</td>
      <td>'.$author.'</td>
      <td>'.$genre.'</td>
      <td>'.$year.'</td>
      <td>
    <button class="btn btn-primary my-1"><a href="edit.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
    </tr>';
    }
  }

  ?>
 
  </tbody>
    </table>
    </div>
</body>
</html>