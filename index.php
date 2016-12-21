<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Bus Bookin</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <!-- Navigation Bar -->

    <div class="navbar-fixed">
        <nav class="white black-text" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><img class="logo-image" src="images/android-logo.png"></a>
                <ul class="right hide-on-med-and-down">
                    <li class="nav-underline"><a href="#">Home</a></li>
                    <li class="nav-underline"><a href="#">About</a></li>
                    <li class="nav-underline"><a href="#">Get in touch</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li>
                        <div class="background" style="background-color:#2979ff;margin-top:-30px;">
                            <br>
                            <div class="userView">
                                <a href="#!" style="margin-left:65px"><img class="logo-image" id="side-nav-logo-image" src="images/android-logo-white.png"></a>
                            </div>
                            <br>
                        </div>
                    </li>
                    <li><a class="wave-effect" href="#!">Home</a></li>
                    <li><a class="wave-effect" href="#!">About</a></li>
                    <li><a class="wave-effect" href="#!">Get in touch</a></li>
                    <li class="divider"></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    <!-- End of Navigation Bar --->

    <div class="section no-pad-bot" id="index-banner">

        <!-- Parallax  -->

        <div class="parallax-container" style="height:380px; margin-top:-22px">
            <div class="parallax"><img style="display:inline; " src="images/slide02.jpg" class="responsive-img" /></div>
        </div>

        <!-- End of Parallax --->

        <div class="container">

            <!-- Search Card --->

            <div class="card content" style="padding:20px;">
                <br>
                <br>

                <div class="row center">
                    <div class="input-field col s12 m4 l4">
                        <select>
                            <option value="" disabled selected>Choose your center</option>
                            <option value="1">Delta 1</option>
                            <option value="2">Delta 2</option>
                            <option value="3">Delta 3</option>
                        </select>
                        <label>Select Center</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <select>
                            <option value="" disabled selected>Choose your bus</option>
                            <option value="1">A Class</option>
                            <option value="2">B Class</option>
                            <option value="3">Local</option>
                        </select>
                        <label>Type of Bus</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <label>Number Of Seats</label>
                    </div>
                </div>
                <div class="row center">
                    <a href="" id="download-button" class="btn-large waves-effect waves-light blue accent-3">Search</a>
                </div>
                <br>
                <br>

            </div>

            <!-- End of Search Card -->

        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon & Other cards   -->

            <div class="row">
                <div class="col s12 m4">
                    <div class="card content medium z-depth-4" style="padding:10px;">
                        <div class="icon-block">
                            <h2 class="center blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Simple</h5>

                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card content medium z-depth-4" style="padding:10px;">
                        <div class="icon-block">
                            <h2 class="center blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Quick</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card content medium z-depth-4" style="padding:10px;">
                        <div class="icon-block">
                            <h2 class="center blue-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy</h5>

                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- End of Cards & Other text --->

        <br>
        <br>


    </div>

    <!-- Footer Section --->

    <footer class="page-footer blue accent-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


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
                Made by <a class="red-text text-lighten-3" href="#">Sunweb</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
            $('select').material_select();


        });
    </script>


</body>

</html>