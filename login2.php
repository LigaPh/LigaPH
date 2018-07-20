<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<nav class="navbar navbar-inverse navbar-fixed-top container-fluid">  
</head>
<body>
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Basketball</a></li>
            <li><a href="#">Volleyball</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Schedules & Scores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Schedules</a></li>
            <li><a href="#">Scores</a></li>
          </ul>
        </li>
        <li><a href="#">Teams</a></li>
        <li><a href="#">Players</a></li>
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
<br>
<br>
<br>   

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h1 class="text-center">Login</h1>
  </div>
  <div class="modal-body">
      <form class="form col-md-12 center-block">
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" placeholder="Password" required="">
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-lg btn-block">Sign In</button>
          <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
        </div>
      </form>
   </div>
   <div class="modal-footer">
   <div class="col-md-12">
   <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
   </div>    
   </div>
   </div>
   </div>
   </div>

  

 </div>

</body>
</html>

