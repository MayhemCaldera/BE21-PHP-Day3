<?php

require_once 'db_connect.php';
if(isset($_POST["submit"])){ 

    $dish_name = $_POST["name"]; 
    $image = $_POST["image"]; 
    $price = $_POST["price"]; 
    $desc = $_POST["description"]; 

    $sql = "INSERT INTO dishes (name, image, price, description) VALUES ('$dish_name', '$image', '$price', '$desc')";
             


    if(mysqli_query($connect, $sql) == true){ // if the query runs successfully it will show a message and a link to go back to the home page.
        echo  "New record created<br>
         <a href='index.php'>Home</a>";
    }

 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
           <input type="text"  name="name" placeholder= "Add the name of the dish">
           <input type="text"  name="image" placeholder= "Provide an URL to the image">
           <input type="text"  name="price" placeholder= "what does it cost?">
           <input type="text"  name="description" placeholder= "Provide a description about the food">
           <input type="submit"  name="submit" value= "submit">
       </form>

</body>
</html>