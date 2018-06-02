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
   <link rel="stylesheet" href="gallery.php">
  </head>
  <body>
        <nav class="navbar navbar-dark bg-dark">
                <img src="img/logo.png" alt="" style="width: 150px; margin-left: 50px;"><a class="navbar-brand" href="#" style="margin-left: 0px; font-style: italic">Guest House Fray</a>
                <li class="nav-item active" style="list-style: none; font-style: italic; ">
                        <a class="nav-link" href="index.php">მთავარი <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active" style="list-style: none; font-style: italic;">
                            <a class="nav-link" href="gallery.php">უძრავი ქონება <span class="sr-only">(current)</span></a>
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
              
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 0px; animation-duration: 2s;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slide-1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide-2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide-3.jpg" alt="Third slide" style="display: block">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <div class="card-deck" style="padding: 100px">
                    <div class="card" style="margin-top: 50px;">
                      <img class="card-img-top" src="img/room1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                    <div class="card" style="margin-top: 50px;">
                      <img class="card-img-top" src="img/room2.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      </div>
                      <div class="card-footer" style="margin-top: 50px;">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                    <div class="card" style="margin-top: 50px;">
                      <img class="card-img-top" src="img/room3.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>

                  <footer class="page-footer" style="background-color: #343a40;">
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
                          © 2018 Copyright 
                          <a class="grey-text text-lighten-4 right"></a>
                          </div>
                        </div>
                      </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>