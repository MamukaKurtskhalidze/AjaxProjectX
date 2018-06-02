  <?php 
    include ("admin/db.php");
  ?>

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- Bootstrap CSS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    </head>
    <body>
          <nav class="navbar navbar-dark bg-dark">
                  <img src="img/logo.png" alt="" style="width: 150px; margin-left: 50px;"><a class="navbar-brand" href="#" style="margin-left: 0px; font-style: italic">Guest House Fray</a>
                  <li class="nav-item active" style="list-style: none; font-style: italic; ">
                          <a class="nav-link" href="index.php">მთავარი <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active" style="list-style: none; font-style: italic;">
                              <a class="nav-link" href="#">უძრავი ქონება <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active" style="list-style: none; font-style: italic;">
                                  <a class="nav-link" href="#">კონტაქტი <span class="sr-only">(current)</span></a>
                                </li>
                  <form class="form-inline my-2 my-lg-0" style="margin-right: 20px; padding: 10px;">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          
                        </form>
                        
                        <a href="http://localhost/laravel/156/public/register" class="btn btn-outline-info">Registration</a>
                        <a href="http://localhost/laravel/156/public/login" class="btn btn-outline-primary">Log In</a>
                      
                </nav>
                <h5 style="margin-left: 100px; margin-top: 50px; ">უძრავი ქონების ტიპი</h5>
                  <div class="left-container" style="margin-top: 0;">
                  <form method="post">
                      <select name="realestate" style="width: 250px">
                        <?php 
                          $statement = $connection->prepare("SELECT realestate FROM users");
                          $statement->execute();
                          $result = $statement->fetchAll();
                          echo "<option value='უძრავი ქონების ტიპი'>უძრავი ქონების ტიპი</option>";
                          foreach($result as $row)
                          {
                            echo "<option value='$row[realestate]'>$row[realestate]</option>";
                          }
                        ?>
                      </select>
                      <select name="deal" style="width: 250px;">
                      <?php 
                      $statement = $connection->prepare("SELECT deal FROM users");
                          $statement->execute();
                          $result = $statement->fetchAll();
                          echo "<option value='გარიგების ტიპი'>გარიგების ტიპი</option>";
                          foreach($result as $row)
                          {
                            echo "<option value='$row[deal]'>$row[deal]</option>";
                          }
                          ?>
                          </select>
                          <select name="city" style="width: 250px">
                          <?php 
                      $statement = $connection->prepare("SELECT city FROM users");
                          $statement->execute();
                          $result = $statement->fetchAll();
                          echo "<option value='ქალაქი/რაიონი'>ქალაქი/რაიონი</option>";
                          foreach($result as $row)
                          {
                            echo "<option value='$row[city]'>$row[city]</option>";
                          }
                          ?>
                          </select>
                              </select>

                            <h5 style="margin-top: 20px;">ფასი</h5>
                            <input name="pricefrom" type="number" style="width: 100px; border-radius: 3px;" placeholder="დან">
                            <input name="priceto" type="number" style="width: 100px; border-radius: 3px;" placeholder="მდე">
                            <h5 style="margin-top: 20px;">ფართი(მ2)</h5>
                            <input name="areasizefrom" type="number" style="width: 100px; border-radius: 3px;" placeholder="დან">
                            <input name="areasizeto" type="number" style="width: 100px; border-radius: 3px;" placeholder="მდე">
                            <input type="id" style="width: 205px; margin-top: 10px; border-radius: 3px;" placeholder="ID ან სიტყვა">
                            <input type="submit" name="submit"style="margin-top: 15px; width: 205px;"></input>
                            </form>
                  </div>
                  <div class="right-container" style="display: inline-block; position: absolute; margin-top: -550px; margin-left: 550px; width: 800px; min-height: 400px; " >
                  
    <?php 
    $deal="";
    $city="";
    $realestate="";
    $pricefrom="";
    $priceto="";
    $areasizefrom="";
    $areasizeto="";
  if(isset($_POST['submit'])){
    $deal = $_POST['deal'];
    $city = $_POST['city'];
    $realestate = $_POST['realestate'];
    $pricefrom = $_POST['pricefrom'];
    $priceto = $_POST['priceto'];
    $areasizefrom = $_POST['areasizefrom'];
    $areasizeto = $_POST['areasizeto'];
  }

                      $statement = $connection->prepare("SELECT * FROM users where deal='$deal' or city='$city' or realestate='$realestate' or price >'$pricefrom' and price<'$priceto'
                      or areasize >'$areasizefrom' and price<'$areasizeto'");
                          $statement->execute();
                          $result = $statement->fetchAll();
                          foreach($result as $row)
                          {
                            echo "<img src='img/$row[image]'>";
                            echo "<br>";
                            echo "<span class='realestate'>$row[realestate]</span>";
                            echo "<br>";
                            echo "<span class='type'>$row[deal]</span> <span class='city'>$row[city]</span>";
                            echo "<br>";
                           
                            
                            echo "<span class='areasize'> ფართი $row[areasize]</span> <span class='price'>$row[price]gel</span>";
                            // echo "<span class='price'>$row[price]gel</span>";
                            echo "<br>";
                          }
                          ?>
      
    
    </div>
                    <footer class="page-footer" style="background-color: #343a40; position: relative; ">
                          <div class="container">
                            <div class="row">
                              <div class="col l6 s12">
                                <h5 class="white-text" style="color: aqua;">Footer Content</h5>
                                
                              </div>
                              <div class="col l4 offset-l2 s12">
                                <h5 class="white-text" style="color: aqua;">Links</h5>
                                <ul>
                                  <li><a class="grey-text text-lighten-3" style="font-style: italic; color: coral;  " href="#!">Contact Us</a></li>
                                  <li><a class="grey-text text-lighten-3" style="font-style: italic; color: coral;" href="#!">More About Us</a></li>
                                  <li><a class="grey-text text-lighten-3" style="font-style: italic; color: coral;" href="#!">Benefits</a></li>
                              
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="footer-copyright">
                            <div class="container" style="color: aqua;">
                            © 2018 Copyright Text
                            <a class="grey-text text-lighten-4 right"></a>
                            </div>
                          </div>
                        </footer>
      
    </body>
  </html>