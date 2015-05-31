<?php
include('config.php');
session_start();
require_once 'cps_simple.php';
if(!isset($_SESSION["Name"]))
  header('Location:index.php');

if(isset($_POST['title']))
{
	print_r($_POST);
	extract($_POST);
	
// Search for items with category == 'cars' and car_params/year >= 2010
$query = CPS_Term('Seller', 'type'). CPS_Term($_SESSION['email'], 'email');

// Return documents starting with the first one - offset 0
$offset = 0;

// Return not more than 5 documents
$docs = 5;

// Return these fields from the documents
$list = array(
	'service_id' => 'yes',
	'service_title' => 'yes',
	'service_desc' => 'yes',
	'service_category' => 'yes',
	'service_date' => 'yes',
	'service_date' => 'yes',
	'service_date' => 'yes'	
	
);
function xml2array ( $xmlObject, $out = array () )
{
    foreach ( (array) $xmlObject as $index => $node )
        $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;

    return $out;
}
// Order by year, from largest to smallest
$ordering ;

// Running the query and getting the results
$documents = $cpsSimple->search($query, $offset, $docs, $list);
$mydataarray = xml2array($documents);
function slugify($text)
{ 
  
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
  $text = trim($text, '-');
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = strtolower($text);$text = preg_replace('~[^-\w]+~', '', $text);
  if (empty($text))
  {
    return 'n-a';
  }
  return $text;
}
foreach($mydataarray as $singlearray) {
		//print_r($singlearray);
		$singlearray['service_title'] = $title;
		$singlearray['service_category'] = $category;
		$singlearray['service_desc'] = $desc;
		$singlearray['service_id'] = slugify($title);
		
		$cpsSimple->updateSingle($singlearray['email'], $singlearray);
}
// Looping through results




}

?>
	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Seller Dashboard</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id="mainnav" class="navbar-fixed">
    <ul id="user-dropdown" style="top:auto !important;" class="dropdown-content">
      <li><a href="#">My Account</a></li>
      <li class="divider"></li>
      <li><a href="logout.php">Sign Out</a></li>
    </ul>
    <nav class="cyan lighten-2" id="custom-nav" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo cyan-text text-darken-3 ">OurLogo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#notifcations" class="cyan-text text-darken-3"><i class="mdi-social-notifications-on"></i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="user-dropdown"><?php echo ($_SESSION['Name']);?><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#notifcations" class="cyan-text text-darken-3"><i class="mdi-social-notifications-on"></i></a></li>
          <li><a href="#login" class="cyan-text text-darken-3 modal-trigger">Sign in</a></li>
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
            <ul class="tabs cyan lighten-2">
              <li class="tab col s3"><a class="waves-effect cyan-text text-darken-4 waves-light active" href="#addnew">Add New</a></li>
              <li class="tab col s3"><a class="waves-effect cyan-text text-darken-4  waves-light" href="#history">History</a></li>
              <li class="tab col s3"><a class="waves-effect cyan-text text-darken-4 waves-light" href="#earnings">Earnings</a></li>
            </ul>
          </div>
          <div id="addnew" class="col s12">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="row" style="margin-bottom:0">
                <div class="input-field col s12">
                  <input id="title" name="title" type="text" class="validate" required>
                  <label for="title">Title</label>
                </div>
                <div class="input-field col s12">
                  <select name="category">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="learning">Learning</option>
                    <option value="photography">Photography</option>
                    <option value="content-writing">Content Writing</option>
                    <option value="online">Online</option>
                    <option value="management">Management</option>
                  </select>
                  <label>Category</label>
                </div>
              </div>
              <div class="row">
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="description" name="desc" class="materialize-textarea"></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>
              </div>
              <div class="file-field input-field">
                <input class="file-path validate" type="text" style="margin-left:112px"/>
                 <div class="btn cyan lighten-2" style="left:-13px">
                   <span>Images</span>
                   <input type="file" />
                </div>
              </div>
              <div class="row center">
                <button class="btn cyan waves-effect waves-light" type="submit" style="margin-top:1.3rem" name="action">Save
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </form>
          </div>
          <div id="history" class="col s12">
            <ul class="collapsible popout" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>First</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-maps-place"></i>Second</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Third</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
            </ul>
          </div>
          
        </div>
        <div class="col s12 m4 l4">
          <div class="card-panel z-depth-1">
            <div class="row center">
              <img src="images/yuna.jpg" alt="" class="circle responsive-img">
              <h5>Service Adda</h5>
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
              <a class="waves-effect waves-light btn-large cyan lighten-2" href="#"><i class="mdi-communication-chat left"></i>Contact</a>
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
