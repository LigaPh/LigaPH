<!DOCTYPE html>
<html>
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="css/bootstrap/js/jquery.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <style>
.fa {
  padding: 5px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


.fa-instagram {
  background: #bb0000;
  color: white;
}

</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php"><img src="logo.png" width="60" height="60"></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="basketball.php">Basketball</a></li>
            <li><a href="volleyball.php">Volleyball</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Schedules & Scores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="schedules.php">Schedules</a></li>
            <li><a href="scores.php">Scores</a></li>
          </ul>
        </li>

        <li><a href="team.php">Teams</a></li>
        <li><a href="players.php">Players</a></li>
        <li><a href="#">Game Recap</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a data-toggle="modal" data-target="#loginModal"></span>Login</a></li>
    </div>
  </div>
</nav>
          
<br>
<br>

   <div class="jumbotron">
    <center><h1>Our Team</h1></center>
    <br>
    <br>
    <br>



 <div class="row">
  <div class="col-md-4">
      <div class="thumbnail">
          <img class="img-responsive" src="michael.jpg" alt="Hustler" style="width:500px;">
          <div class="caption">
          <center><h4>Hustler</h4></center>
          <center><h2>Michael Lastimoso</h2></center>
                <center>
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-google"></a>
                      <a href="#" class="fa fa-linkedin"></a>
                      <a href="#" class="fa fa-twitter"></a> 
                      <a href="#" class="fa fa-instagram"></a>
                              </div>
                                </div>
                                   </div>
                                   </center>
                               
                                    

  <div class="col-md-4">
    <div class="thumbnail">
        <img class="img-responsive" src="honeylou.jpg" alt="Hipster" style="width:100%">
        <div class="caption">
         <center><h4>Hipster</h4></center>
         <center><h2>Honey Lou Bacalso</h2></center>

               <center>
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-google"></a>
                      <a href="#" class="fa fa-linkedin"></a>
                      <a href="#" class="fa fa-twitter"></a> 
                      <a href="#" class="fa fa-instagram"></a>
                              </div>
                                </div>
                                   </div>
                                   </center>

 <div class="col-md-4">
    <div class="thumbnail">
        <img class="img-responsive" src="william.jpg" alt="Hacker" style="width:100%">
        <div class="caption">
        <center><h4>Hacker</h4></center>
        <center><h2>William Harry Ortega</h2></center>
        
                    <center>
                      <a href="#" class="fa fa-facebook"></a>
                      <a href="#" class="fa fa-google"></a>
                      <a href="#" class="fa fa-linkedin"></a>
                      <a href="#" class="fa fa-twitter"></a> 
                      <a href="#" class="fa fa-instagram"></a>
                              </div>
                                </div>
                                   </div>
                                   </center>

</div>
</div>  
</body>
</html>
