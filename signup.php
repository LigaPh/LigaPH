<!DOCTYPE html>
<html>
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <li><a href="login2.php"  ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </div>
  </div>
</nav>
          
<br>
<br>
<br>
          
   <div class="container">
  <div class="col-sm-5 col-sm-offset-3">
  <h2>Sign Up</h2><br>
  <form class="form-horizontal" style="border-color: #808080;" action="/action_page.php">

    <div class="form-group">
      <label class="control-label col-sm-2" for="Username">Username:</label>
      <div class="col-sm-10">
        <input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="Username" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
  </form>
  </div>
 </div>
  </div>
</form>

</body>
</html>
