<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>ServiceAdda Explore</title>

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
          <h5 class="header col s12 light">A marketplace to connect emerging small buisnesses to the world.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
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
      <div class="row center">
        <div>
          <nav class="explore-nav">
            <div class="nav-wrapper cyan lighten-2">
              <div>
                <ul class="left hide-on-med-and-down">
                  <li class="active"><a href="#" class="cyan-text text-darken-4">Relevant</a></li>
                  <li><a href="#" class="cyan-text text-darken-4">Featured</a></li>
                  <li><a href="#" class="cyan-text text-darken-4">New</a></li>
                </ul>
              </div>
              <form class="right" style="height:45px">
                <div class="input-field" style="display:inline-block;line-height:45px">
                  <input id="search" type="search" required>
                  <label for="search"><i class="mdi-action-search"></i></label>
                  <i class="mdi-navigation-close"></i>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col hide-on-med-and-down l3">
          <form action="#">
            <p>
              <input type="checkbox" id="all-cat" checked="checked"/>
              <label for="all-cat">All Categories</label>
            </p>
            <p>
              <input type="checkbox" id="learning" checked="checked"/>
              <label for="learning">Learning</label>
            </p>
            <p>
              <input type="checkbox" id="content-writing" checked="checked"/>
              <label for="content-writing">Content Writing</label>
            </p>
            <p>
              <input type="checkbox" id="photography" checked="checked"/>
              <label for="photography">Photography</label>
            </p>
            <p>
              <input type="checkbox" id="online" checked="checked"/>
              <label for="online">Online</label>
            </p>
            <p>
              <input type="checkbox" id="management" checked="checked"/>
              <label for="management">Management</label>
            </p>
          </form>
          <br>
          <div class="divider"></div>
          <form action="#">
            <p>
              <input class="with-gap" name="city" type="radio" id="hyderabad"  />
              <label for="hyderabad">Hyderabad</label>
            </p>
            <p>
              <input class="with-gap" name="city" type="radio" id="bangalore"  />
              <label for="bangalore">Bangalore</label>
            </p>
            <p>
              <input class="with-gap" name="city" type="radio" id="delhi"  />
              <label for="delhi">New Delhi</label>
            </p>
          </form>
          <br>
          <div class="divider"></div>
          <br>
          <div class="switch">
            <label>
            Off
            <input type="checkbox">
            <span class="lever"></span>
            On
            </label>
          </div>
        </div>
        <div class="col l9">
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
