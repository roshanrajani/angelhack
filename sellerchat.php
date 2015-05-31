<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Seller Chat</title>

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
      <li><a href="#!">Sign Out</a></li>
    </ul>
    <nav class="cyan lighten-2" id="custom-nav" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo cyan-text text-darken-3 ">OurLogo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#notifcations" class="cyan-text text-darken-3"><i class="mdi-social-notifications-on"></i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="user-dropdown">Service Adda<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#notifcations" class="cyan-text text-darken-3"><i class="mdi-social-notifications-on"></i></a></li>
          <!-- <li><a class="dropdown-button" href="#!" data-activates="user-dropdown">Buyer<i class="mdi-navigation-arrow-drop-down right"></i></a></li> -->
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
        <div class="col s12 m7 l7">
          <div>
            <nav class="explore-nav">
              <div class="nav-wrapper cyan lighten-2">
                <div>
                  <ul class="left hide-on-med-and-down">
                    <li class="active"><a href="#" class="cyan-text text-darken-4">Chating to Buyer...</a></li>
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
            <div class="row">
              <div class="card-panel z-depth-1">
                <div id="chatbox" class="row" style="height: 280px;overflow-x: hidden; padding: 0 14px;">
                  <div class="row" style="margin-bottom:0">
                    <div class="col s12 m9 l9">
                      <div class="card-panel grey lighten-5 z-depth-1"  style="padding-bottom: 2px;">
                        <div class="row valign-wrapper">
                          <div class="col s2">
                            <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                          </div>
                          <div class="col s10">
                            <span class="black-text">
                              This is a square image. Add the "circle" class to it to make it appear circular.
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom:0">
                    <div class="col s12 m9 offset-m3 l9 offset-l3">
                      <div class="card-panel grey lighten-5 z-depth-1"  style="padding-bottom: 2px;">
                        <div class="row valign-wrapper">
                          <div class="col s10">
                            <span class="black-text">
                              This is a square image. Add the "circle" class to it to make it appear circular.
                            </span>
                          </div>
                          <div class="col s2">
                            <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom:0">
                    <div class="col s12 m9 l9">
                      <div class="card-panel cyan lighten-2 z-depth-1"  style="padding-bottom: 2px;">
                        <div class="row valign-wrapper">
                          <div class="col s2">
                            <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                          </div>
                          <div class="col s10">
                            <span class="black-text">
                              Payment Request <b>INR 5000</b>.<br>
                              Txn ID: SA123456789
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom:0">
                    <div class="col s12 m9 offset-m3 l9 offset-l3">
                      <div class="card-panel cyan lighten-5 z-depth-1" style="padding-bottom: 2px;">
                        <div class="row valign-wrapper">
                          <div class="col s10">
                            <span class="black-text">
                              Payment Received <b>INR 5000</b>.<br>
                              Timestamp: 31 May 2015 07:35
                            </span>
                          </div>
                          <div class="col s2">
                            <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row valign-wrapper">
                  <div class="col s1 m1 l1">
                    <a class="btn-floating waves-effect waves-light cyan"><i class="mdi-editor-attach-file"></i></a><br><br>
                    <a class="btn-floating waves-effect waves-light cyan"><i class="mdi-action-payment"></i></a>
                  </div>
                  <div class="col s10 m10 l10">
                    <div class="input-field col s12">
                      <textarea id="message" class="materialize-textarea"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col s1 m1 l1">
                    <a id="send" class="btn-floating waves-effect waves-light cyan"><i class="mdi-content-send"></i></a>
                  </div>

                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col s12 m4 offset-m1 l4 offset-l1">
          <div class="card-panel z-depth-1">
            <div class="row center">
              <h5>Chating to...</h5>
              <div class="divider" style="margin-bottom:1rem"></div>
              <img src="images/yuna.jpg" alt="" class="circle responsive-img">
              <h5>Buyer</h5>
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
              <h6>Requested for</h6>
              <a href="buy.html" style="font-size:1.2rem">I will teach you western dance at your home.</a>
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
