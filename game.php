<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LudoStud</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Styles congratulations -->
        <link href="css/congratulations.css" rel="stylesheet">
        <!-- Font  -->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|ZCOOL+KuaiLe|Freckle+Face" rel="stylesheet">
        <!-- Timer -->
        <link href="css/timer/timer.css" rel="stylesheet">
        <!-- animation -->
        <link href="css/animation.css" rel="stylesheet">
        <!-- hourglass -->
        <link href="css/hourglass/hourglass.css" rel="stylesheet">
        <!-- style perso -->
        <link href="css/.css" rel="stylesheet">
        <style>
            .div {
            position: absolute;
            z-index: 9;
            }
            .mydivheader {
            cursor: move;
            z-index: 10;
            }
            .main-card {
            height: 450px;
            }
        </style>
    </head>
    <body class="lighten-3" style="background-image: url('img/Bg.png');background-repeat:repeat;
		background-attachment:fixed;font-family: 'Indie Flower', cursive;">
        <audio id="audio_congrats1">
            <source src="sounds/congrats0.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="audio_congrats0">
            <source src="sounds/congrats1.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="audio_congrats2">
            <source src="sounds/congrats2.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="audio_bg_roof">
            <source src="sounds/plants-vs-zombies-music-the-roof-horde.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <audio id="clickEffect0">
            <source src="sounds/157539__nenadsimic__click.wav" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <!--Main Navigation-->
        <header style="margin-bottom: -30px">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #b3de1d;">
                <!-- Navbar brand -->
                <a style="font-family:Freckle Face;font-size: 30px;color: #3b5998" class="navbar-brand" href="index.php">LudoStud</a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect waves-light" href="index.php">Home
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Concept</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Contact</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jeux</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="#">Schemator</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Vocardulary</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Stableword</a>
                            </div>
                        </li>
                    </ul>
                    <!-- Links -->
                    <button type="button" class=" bounce btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#congratulationModal" onclick="playAudio()">Félicitations</button>
                </div>
                <!-- Collapsible content -->
            </nav>
            <!-- Navbar -->
         

        </header>
        
        <!--Main Navigation-->
        <!--Main layout-->
        <div style="margin-bottom: 50px;" class="  mx-lg-5">
            <div class="container-fluid " style="padding-top: 100px">
                <!-- Heading -->
                <div class=" mb-4 wow fadeIn">
                    <!--Card content-->
                    <div class="card-body d-sm-flex justify-content-between">
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <a href="index.php" style="color:#b3de1d;text-shadow: 0px 1px 2px #222, 0px 1px 2px #333;">Ludostud</a>
                            <span><img style="width:30px;height:20px" src="img/arrow.png"></span>
                            <a href="index.php" style="color: #b3de1d">Games</a>
                            <span><img style="width:30px;height:20px" src="img/arrow.png"></span>
                            <span style="color: #fff;font-style: normal;
                                font-weight: bold;">Schemator</span>
                        </h4>
                        <div id="clockdiv" >
                  <div style="display: none">
                    <span id="days"></span>
                    <div class="smalltext">Days</div>
                  </div>
                  <div style="display: none">
                    <span id="hours"></span>
                    <div class="smalltext">Hours</div>
                  </div>
                  <div>
                    <span id="minutes"></span>
                    <div class="smalltext">Minutes</div>
                  </div>
                  <div>
                    <span id="seconds"></span>
                    <div class="smalltext">Seconds</div>
                  </div>
                </div>
                    </div>
                </div>
                <!-- Heading -->
                <!--Grid row-->
                <div class="row wow fadeIn mb-4" style="margin-top: -20px">
                    <div class="col-md-12 text-center">
                        <h4 id="presentation" style="color: white;display:block">Réalise ce shema. Tu as 10 secondes pour le retenir</h4>
                                                                        <button id="playSchemator" type="button" class="pulse btn waves-effect waves-light" style="background-color:#b3de1d;" onclick="playAudioBg(),hideSchema(),showBoard();">Jouer</button>

                    </div>
                </div>

                    <!--Grid row-->
                    <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-md-4 " >
                        <!-- Blur card -->
                            <div id="schema" class="schema-visible card text-center" style="filter: blur(30px);
  -webkit-filter: blur(30px);">
                                    <!-- Content -->
                                        <img style="width:100%;height:400px" src="https://mysitecoredotblog.files.wordpress.com/2017/03/sitecore_architecture.png?w=742" >     
                            </div>
                        <!-- Blur card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    

                    <div style="visibility:hidden" id ="testCreate" class=" col-md-6" >
                        
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class=" col-md-2" >
                        <div class=" " style="height: 400px ">

                            <div class="tossing" id="hour-glass">
                              <div id="glass"></div>
                              <div id="sand-stream"></div>
                              <div id="top-sand"></div>
                              <div id="bottom-sand"></div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
            <!-- Central Modal  -->
            <div class="modal fade" id="congratulationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fluid" role="document" >
                    <div class="modal-content" >
                        <!-- congrats -->
                        <!-- Modal content-->
                        <div id="congrats" class="congrats col p1" >
                            <div class="congrats-box m2 d2">
                                <div class="cracker solid a1">    </div>
                                <div class="cracker dotted a2"> </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1">
                                    <div class="cracker a3"></div>
                                    <div class="cracker dotted a3"> </div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a2"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m3 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker dotted a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p1">
                                <div class="congrats-box m2 d3">
                                    <div class="cracker solid a1"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a1"></div>
                                    <div class="cracker dotted a2"> </div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m3 d2">
                                    <div class="cracker dotted a4"></div>
                                    <div class="cracker a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m1 d2">
                                    <div class="cracker a2"></div>
                                    <div class="cracker a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m2 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker a1"></div>
                                </div>
                                <div class="congrats-box m1 d3">
                                    <div class="cracker dotted a3"></div>
                                    <div class="cracker dotted a1 container p1"></div>
                                </div>
                                <div class="congrats-box m2 d2">
                                    <div class="cracker solid a1">    </div>
                                    <div class="cracker dotted a2"> </div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1">
                                    <div class="cracker a3"></div>
                                    <div class="cracker dotted a3"> </div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a2"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m3 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker dotted a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p1">
                                <div class="congrats-box m2 d3">
                                    <div class="cracker solid a1"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a1"></div>
                                    <div class="cracker dotted a2"> </div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m3 d2">
                                    <div class="cracker dotted a4"></div>
                                    <div class="cracker a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m1 d2">
                                    <div class="cracker a2"></div>
                                    <div class="cracker a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m2 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker a1"></div>
                                </div>
                                <div class="congrats-box m1 d3">
                                    <div class="cracker dotted a3"></div>
                                    <div class="cracker dotted a1"> </div>
                                    <div class="container p1"></div>
                                </div>
                                <div class="congrats-box m2 d2">
                                    <div class="cracker solid a1">    </div>
                                    <div class="cracker dotted a2"> </div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1">
                                    <div class="cracker a3"></div>
                                    <div class="cracker dotted a3"> </div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a2"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container">
                                <div class="congrats-box m3 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker dotted a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p1">
                                <div class="congrats-box m2 d3">
                                    <div class="cracker solid a1"></div>
                                    <div class="cracker dotted a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m1 d1">
                                    <div class="cracker a1"></div>
                                    <div class="cracker dotted a2"> </div>
                                </div>
                            </div>
                            <div class="congrats-container p2">
                                <div class="congrats-box m3 d2">
                                    <div class="cracker dotted a4"></div>
                                    <div class="cracker a2"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m1 d2">
                                    <div class="cracker a2"></div>
                                    <div class="cracker a3"></div>
                                </div>
                            </div>
                            <div class="congrats-container p3">
                                <div class="congrats-box m2 d4">
                                    <div class="cracker solid a2"></div>
                                    <div class="cracker a1"></div>
                                </div>
                                <div class="congrats-box m1 d3">
                                    <div class="cracker dotted a3"></div>
                                    <div class="cracker dotted a1"></div>
                                </div>
                            </div>
                            <h1 class="congrats-title">Félicitations !!!</h1>
                            <p class="congrats-subtitle pulse">Tu a gagné 50 points</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Central Modal  -->
        </div>
        <!--Main layout-->
        <!--Footer-->
        <!-- Footer -->
<footer class="page-footer font-small  darken-3" style="background-color: #b3de1d;">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Ludostud</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
        <!--Card-->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- script right panel -->
        <script type="text/javascript" src="js/script.js"></script>
        <!-- congratulations -->
        <script type="text/javascript" src="js/congratulations/congratulations.js"></script>
        <!-- timer -->
        <script type="text/javascript" src="js/timer/timer.js"></script>
        <!-- playAudioBg -->
        <script type="text/javascript" src="js/audio_bg/playAudioBg.js"></script>
        <!-- Initializations -->
        <script type="text/javascript">
            // Animations initialization
            new WOW().init();
        </script>
    </body>
</html>