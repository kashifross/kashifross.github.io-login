<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Login system for fictional website">
  <meta name="keywords" content="You won't find much besides PHP and MySQLi">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>

  <!-- Bootstrap Navbar -->
  
  <!-- <header>
    <nav class="nav-header-main">
      <a class="header-logo" href="index.php">
        <img src="img/logo.png" alt="logo">
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">ABout</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="header-login">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="usn" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>

        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>

      </div>
    </nav> -->

    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
          <a class="navbar-brand" href="#">Shake<b>down</b></a>  		
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="https://kashifross.github.io/#about" class="nav-link">About</a></li>			
            <li class="nav-item active"><a href="https://kashifross.github.io/#projects" class="nav-link">Portfolio</a></li>
            <li class="nav-item"><a href="https://kashifross.github.io/#contact" class="nav-link">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right ml-auto">			
            <li class="nav-item">
              <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
              <ul class="dropdown-menu form-wrapper">					
                <li>
                  <form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                    <div class="form-footer">
                      <a href="#">Forgot Your password?</a>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
              <ul class="dropdown-menu form-wrapper">					
                <li>
                  <form action="/examples/actions/confirmation.php" method="post">
                    <p class="hint-text">Fill in this form to create your account!</p>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="form-group">
                      <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Sign up">
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Login Form -->
        <div class="form-container">
          <form action="includes/login.inc.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" name="usn" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="pwd"  required="required">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login-submit" value="Login">Login</button>
            <div class="form-footer">
              <a href="#">Forgot Your password?</a>
            </div>
          </form>
        </div>
      
  </header>
