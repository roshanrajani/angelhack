<?php
  session_start();
  if(isset($_POST["join_submit"]))
  {
    extract($_POST);
    
    include('config.php');

    if(isset($join_type))
    {
      $document = array(
      'type' => 'Seller',
      'Name' => $join_name,
      'email' => $join_email,
      'password'=>$join_pass
      );
      $_SESSION['Name']=$join_name;
      $_SESSION['email']=$join_email;
      $_SESSION['type']='Seller';
      header('Location:sellerdashboard.php');
      
    }
    else
    { $document = array(
      'type' => 'Buyer',
      'Name' => $join_name,
      'password' => $join_pass,
      'email' => $join_email,
      );
      $_SESSION['Name']=$join_name;
      $_SESSION['email']=$join_email;
      $_SESSION['type']="Buyer";
      header('Location:buy.html');
      
    }
    // Insert
    $cpsSimple->insertSingle($join_email,$document);
  }
  $label="Start Selling";
  $label_link="#join";
  $class="modal-trigger";
  $footer1="Join";
  $footer1_link="#join";
  $footer2="Sign In";
  $footer2_link="#login";
  if(isset($_SESSION["Name"]))
  {
      
        $label="Dashboard";
        $label_link="sellerdashboard.php";
        $footer1="Dashboard";
        $footer1_link="sellerdashboard.php";
        $footer2="Welcome ".$_SESSION["Name"];   
        $footer2_link="#";
        $class="";
        define('logged', '1');
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>ServiceAdda</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id="index-banner" class="parallax-container custom-parallax">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center cyan-text text-darken-2 custom-title">ServiceAdda</h1>
        <div class="row center mrg-btm">
          <h5 class="header col s12 light">The marketplace for your needed <b>services</b>.</h5>
        </div>
        <nav class="cyan lighten-1 search-radius">
          <div class="nav-wrapper">
            <form>
              <div class="input-field search-box">
                <input id="search" class="search-radius" type="search" required>
                <label for="search"><i class="mdi-action-search"></i></label>
                <i class="mdi-navigation-close"></i>
              </div>
            </form>
          </div>
        </nav>
        <div class="row center main-btns">
          <a href="#" id="explore-btn" class="btn-large cyan waves-effect waves-light lighten-1 homepage-btn">Explore Services</a>
          <a href='<?php echo($label_link);?>' id="seller-btn" class='btn-large cyan waves-effect waves-light lighten-1 homepage-btn <?php echo($class);?>'><?php echo($label);?></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax cyan lighten-3"><!-- <img src="background1.jpg" alt="Unsplashed background img 2"> --></div>
  </div>
  <div id="mainnav" class="navbar-fixed">
    <nav class="cyan lighten-2" id="custom-nav" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo cyan-text text-darken-3 ">OurLogo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href='<?php echo($footer1_link);?>' class="cyan-text text-darken-3 <?php echo (defined('logged'))?  '' :  'modal-trigger' ?>"><?php echo($footer1);?></a></li>
          <li><a href='<?php echo($footer2_link);?>' class="cyan-text text-darken-3 <?php echo (defined('logged'))?  '' :  'modal-trigger' ?>"><?php echo($footer2);?></a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>
  </div>

  <div id="join" class="modal">
    <div class="modal-content">
      <div class="row center">
        <h5 class="modal-title">Join ServiceAdda</h5>
        <p style="margin-top:0">Your passion will pay you.</p>
        <div class="divider" style="margin-bottom:1rem"></div>
        <div class="row">
          <form class="col s12" method="POST">
            <div class="row">
              <div class="input-field">
                <input id="join_email" name="join_email" type="email" class="validate">
                <label for="join_email">Email</label>
              </div>
              <div class="input-field">
                <input id="join_name"  name="join_name" type="text" class="validate">
                <label for="join_name">Name</label>
              </div>
              <div class="input-field">
                <input id="join_pass" name="join_pass" type="password" class="validate">
                <label for="join_pass">Password</label>
              </div>
              <div class="switch">
                <label style="font-size: 1.2rem;">
                  Buyer
                  <input id="join_type" name="join_type" type="checkbox">
                  <span class="lever"></span>
                  Seller
                </label>
              </div>  
              <button class="btn cyan waves-effect waves-light" type="submit" style="margin-top:1.3rem" name="join_submit">Sign up
                <i class="mdi-content-send right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="login" class="modal">
    <div class="modal-content">
      <div class="row center">
        <h5 class="modal-title">Welcome Back</h5>
        <p style="margin-top:0">Your passion will pay you.</p>
        <div class="divider" style="margin-bottom:1rem"></div>
        <div class="row">
          <form class="col s12" method="post" action="login.php">
            <div class="row">
              <div class="input-field">
                <input id="join_email" type="email" class="validate">
                <label for="join_email">Email</label>
              </div>
              <div class="input-field">
                <input id="join_pass" type="password" class="validate">
                <label for="join_pass">Password</label>
              </div>
              <div>
                <a href="#" class="cyan-text text-darken-2 right">Forgot Password ?</a><br>
              </div>
              <div class="center">
                <button class="btn cyan waves-effect waves-light" type="submit" style="margin-top:1.3rem" name="action">Login
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row center">
        <h4 class="cyan-text text-darken-2 custom-h4">TRENDING SERVICES</h4>
        <h6 class="cyan-text text-darken-2 custom-h6">Choose from our top rated services.</h6>
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="images/office.jpg">
            </div>
            <div class="card-content">
              <span class="card-title cyan-text text-darken-2">Learning</span>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="images/office.jpg">
            </div>
            <div class="card-content">
              <span class="card-title cyan-text text-darken-2">Photography</span>
            </div>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="images/office.jpg">
            </div>
            <div class="card-content">
              <span class="card-title cyan-text text-darken-2">Content Writing</span>
            </div>
          </div>
        </div>
      </div>
      <div class="divider" style="margin:3.5rem 0"></div>
      <div class="row center">
        <h4 class="cyan-text text-darken-2 custom-h4">FEATURED SELLERS</h4>
        <h6 class="cyan-text text-darken-2 custom-h6">Select from out top rated sellers.</h6>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
        <div class="col s6 m4 l4">
          <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content left-align">
              <span class="card-title activator grey-text text-darken-4">Card Title <i class="mdi-navigation-more-vert right"></i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
      </div>
      <!--   Icon Section   -->
      <div class="row center">
        <a class="waves-effect waves-light btn-large cyan lighten-2" href="#"><i class="mdi-action-view-module left"></i>View all services</a>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A marketplace to connect emerging small buisnesses to the world.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer cyan lighter-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Angelhack 2015</h5>
          <p class="grey-text text-lighten-4">This project is developed as part of Angelhack 2015 at Hyderabad.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made in India with <img style="width:20px;height:auto;margin-bottom:-4px" src="images/hearts.gif"/>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/custom.js"></script>

</html>
