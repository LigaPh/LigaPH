<!DOCTYPE html>
<html>
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/jquery.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <style>
  
/* Modal Content */

.modal-content {
    margin: auto;
    padding: 10px;
    border: 5px solid #888;
    width: 80%;
   
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
        <li><a href="about.php">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#registerModal"></span>Register</a></li>
        <li><a data-toggle="modal" data-target="#loginModal"></span>Login</a></li>
    </div>
  </div>
</nav>
          
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
      
        <div class="form-group">
        
          <input type="text" class="form-control input-lg" placeholder="Username" required="">
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" placeholder="Password" required="">
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                    <span class="pull-right"><a data-toggle="modal" data-target="#registerModal">Register</a></span>
                    <span><a href="#">Need help?</a></span>
                  </div>
              </form>
          </div>
             <div class="modal-footer">
             <div class="col-md-12">
             <button class= "btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>    
          </div>
        </div>
      </div>
    </div>
 <image class="img-responsive" src="Capture.png" alt="LigaPH" style="width:100%" style ="height:100%"><image class="img-responsive" src="organize.png" alt="LigaPH" style="width:100%" style="height:100%"> 
     
    <div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
    <center>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
      <h1 class="center">Team Registration Form</h1>
      <h5 class="pull-left">Please fill in this form to create an account.</h5>
  <div class="modal-body">
      <form class="center-blocked">
         <div class="container col-md-12">
            <br>

             <label class="pull-left"><b>Team Username</b></label>
              <input type="text" class="form-control" placeholder="Team Username" required=""><br>

              <label class="pull-left"><b>Team Password</b></label> 
                <input type="password" class="form-control" placeholder="Team Password" required=""><br> 

             <label class="pull-left"><b>Retype Team Password</b></label> 
                <input type="password" class="form-control" placeholder="Retype Team Password" required=""><br>

            <label class="pull-left"><b>Team Name</b></label> 
                <input type="text" class="form-control" placeholder="Team Name" required=""><br>  

            <label class="pull-left"><b>Team Coach</b></label>
                 <input type="text" class="form-control" placeholder="Team Coach" required=""><br>
                 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>  
                 <button class="btn btn-primary btn-lg btn-block">Submit</button><br>

              
                    </div>
                    </form>
                </div>

                <div class="modal-footer">
             <div class="col-md-12">
             <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>    
                </div>

                  
              
     
      
</form>

</body>
</html>
