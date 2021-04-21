<?php
    
    require_once 'db_connect.php';
    $sql = "SELECT * FROM dishes";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
<a  href="create.php">New Entry</a><br><br>

<div class="row row-cols-1 row-cols-md-2 g-2">

<?php 
    
       foreach ($rows as $row) {
           

            echo '<div class="col"><div class="card" style="width: 18rem;">
            <img src="'.$row['image'].'" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$row['name'].'</h5>
              <p class="card-text">'.$row['description'].'</p>
              <p class="card-text">Preis in €: '.$row['price'].'</p>
              <a class="btn btn-primary" href="delete.php?id='.$row['dish_ID'].'">Delete</a>
            </div>
          </div></div>';



        }
       ?>
       
</div>
</div>
</body>
</html>