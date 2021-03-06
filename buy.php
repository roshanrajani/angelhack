<?php
if(isset($_GET["slug"]))
{
  $slug=$_GET["slug"];
  require_once 'cps_simple.php';

  include ('config.php');
  // Search for items with category == 'cars' and car_params/year >= 2010
  $query = CPS_Term($slug, 'service_id');

  // Return documents starting with the first one - offset 0
  $offset = 0;

  // Return not more than 5 documents
  $docs = 5;

  // Return these fields from the documents
  $list = array(
    
    'service_title' => 'yes',
    'service_id' => 'yes',
    'service_category' => 'yes',
    'service_desc' => 'yes',
    'Name' => 'yes' 
    
  );

   // Order by year, from largest to smallest
  $ordering ;

  // Running the query and getting the results
  function xml2array ( $xmlObject, $out = array () )
  {
      foreach ( (array) $xmlObject as $index => $node )
          $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;

      return $out;
  }
  $documents = $cpsSimple->search($query, $offset, $docs, $list);
  $mydataarray = xml2array($documents);

  foreach($mydataarray as $singlearray) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Buy at ServiceAdda</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id="mainnav" class="navbar-fixed">
    <nav class="cyan lighten-2" id="custom-nav" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo cyan-text text-darken-3 ">OurLogo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#join" class="cyan-text text-darken-3 modal-trigger">Join</a></li>
          <li><a href="#login" class="cyan-text text-darken-3 modal-trigger">Sign in</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>
  </div>
  
  <div class="parallax-container explore-parallax valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light"><?php echo $singlearray['service_title']; ?></h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/office.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <div id="join" class="modal">
    <div class="modal-content">
      <div class="row center">
        <h5 class="modal-title">Join ServiceAdda</h5>
        <p style="margin-top:0">Your passion will pay you.</p>
        <div class="divider" style="margin-bottom:1rem"></div>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field">
                <input id="join_email" type="email" class="validate">
                <label for="join_email">Email</label>
              </div>
              <div class="input-field">
                <input id="join_name" type="text" class="validate">
                <label for="join_name">Name</label>
              </div>
              <div class="input-field">
                <input id="join_pass" type="password" class="validate">
                <label for="join_pass">Password</label>
              </div>
              <button class="btn cyan waves-effect waves-light" type="submit" style="margin-top:1.3rem" name="action">Sign up
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
          <form class="col s12">
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
      <div class="row">
        
        <div class="col s12 m8 l8">
          <div class="row">
            <div style="height:6rem;">
              <h5 class="header col s12 light" style="font-style:italic;font-weight:500"><?php echo $singlearray['service_title']; ?></h5>
              <p class="right" style="font-size:1.2rem;margin:0">
                in <a href="#"><b><?php echo $singlearray['service_category']; ?></b></a>
              </p>
              
            </div>
          </div>
          <div class="divider"></div>
          <div class="row" style="margin-bottom:0">
            <div class="col m4 l4">
                <i class="cyan-text mdi-action-star-rate" style="font-size:2.5rem;margin-right:-15px;"></i>
                <i class="cyan-text mdi-action-star-rate" style="font-size:2.5rem;margin-right:-15px;"></i>
                <i class="cyan-text mdi-action-star-rate" style="font-size:2.5rem;margin-right:-15px;"></i>
                <i class="cyan-text mdi-action-star-rate" style="font-size:2.5rem;margin-right:-15px;"></i>
            </div>
            <div class="col m4 l4 center">
              <p><b>8</b> Orders in Queue</p>
            </div>
            <div class="col m4 l4 right">
              <p class="right"><b>2</b> days in Average</p>
            </div>
          </div>
          <div class="divider" style="margin-bottom:1rem"></div>
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="row">
            <h5 class="header">Description</h5>
            <p style="text-align:justify">
              <?php echo $singlearray['service_desc']; ?></p>
          </div>
        </div>
        <div class="col s12 m4 l4">
          <div class="card-panel z-depth-1">
            <div class="row center">
              <img src="images/yuna.jpg" alt="" class="circle responsive-img">
              <h5><?php echo $singlearray['Name']; ?></h5>
            </div>
            <div class="divider"></div>
            <div class="row">
              <div class="col m6 l6">
                <h5>From</h5>
                <h6>Hyderabad</h6>
              </div>
              <div class="col m6 l6">
                <h5>Speaks</h5>
                <h6>Hindi, English</h6>
              </div>
            </div>
            <div class="divider"></div>
            <div class="row center" style="margin: auto 0.5rem;">
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="row center">
              <a class="waves-effect waves-light btn-large cyan lighten-2" href="sellerchat.php"><i class="mdi-communication-chat left"></i>Contact</a>
            </div>
          </div>
        </div>
       
      </div>
      
      

    </div>
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

<?
}
}
?>