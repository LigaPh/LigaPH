<!DOCTYPE html>
<html>
<body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/jquery.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Basketball</a></li>
            <li><a href="volleyball.php">Volleyball</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Schedules & Scores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Schedules</a></li>
            <li><a href="#">Scores</a></li>
          </ul>
        </li>

        <li><a href="team.php">Teams</a></li>
        <li><a href="#">Players</a></li>
        <li><a href="#">Game Recap</a></li>
        <li><a href="#">About</a></li>
        </ul>

    </div>
  </div>
</nav>
          
<br>
<br>
<br>

  <center><h2><b>BASKETBALL TOURNAMENTS</b></h2></center>

  <br>  
          <div class="container">
            <div class="col-md-3 col-sm-5 pull-right">    
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
  </div>
</div>
              <br>
                   <div class="container">
                      <div class="table-responsive">
                        <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Event </th>
                                    <th>Organizer</th>
                                    <th>Start Date</th>
                                    <th>Event Location</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>William</td>
                                    <td>Alesna</td>
                                    <td>alesna@example.com</td>
                                    <td>Cebu City</td>
                                    <td>NONE</td>
                                    <td><center><button type="button" class="btn btn-info">Details</button></center></td>
                                  </tr>
                                  <tr>
                                    <td>Honey Lou</td>
                                    <td>Bacalso</td>
                                    <td>bacalso@example.com</td>
                                    <td>Cebu City</td>
                                    <td>NONE</td> 
                                    <td><center><button type="button" class="btn btn-info">Details</button></center></td>            
                                  <tr>
                                    <td>Michael</td>
                                    <td>Lastimoso</td>
                                    <td>lastimoso@example.com</td>
                                    <td>Cebu City</td>
                                    <td>NONE</td>
                                    <td><center><button type="button" class="btn btn-info">Details</button></center></td>
                                 </tr>
                          </tbody>
                   </table>
               </div>
          </div>
      </a>
    </form>
</body>
</html>
