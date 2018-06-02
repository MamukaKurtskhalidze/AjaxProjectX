<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO users (realestate, deal, city,  price, areasize, image) 
   VALUES (:realestate, :deal, :city, :price, :areasize,  :image)
  ");
  $result = $statement->execute(
   array(
    ':realestate' => $_POST["realestate"],
    ':deal' => $_POST["deal"],
    ':city' => $_POST["city"],
    ':price' => $_POST["price"],
    ':areasize' => $_POST["areasize"],
    ':image'  => $image
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {             
   $image = $_POST["hidden_user_image"];
  }
  $statement = $connection->prepare(
   "UPDATE users 
   SET realestate = :realestate, deal = :deal, city = :city, price = :price, areasize = :areasize, image = :image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':realestate' => $_POST["realestate"],
    ':deal' => $_POST["deal"],
    ':city' => $_POST["city"],
    ':price' => $_POST["price"],
    ':areasize' => $_POST["areasize"],
    ':image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>