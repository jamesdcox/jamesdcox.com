<?php 
    include $_SERVER['DOCUMENT_ROOT'].'header.php';
?>

<?php 
    include 'navbar-portfolio.php';
?>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
    <?php include 'foliostyles.css' ?>

</style>

<div class="container-fluid" id="main-container">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/reaction-tester.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Reaction Tester</h4>
                        <div class="card-text">
                            How quick is your click? A simple game that tests the users reaction time to clicking on random moving shapes. Try to beat your previous time!
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript</small></div>
                            <div class="col-4 center-stuff">
                            <a href="http://jamesdcox.com/portfolio/reaction-tester" class="btn btn-info btn-sm" target="_blank">Go!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/code-player.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Code Player</h4>
                        <div class="card-text">This web app allows the user to develop their coding skills. Put in your HTML, CSS and JavaScript and see what comes out in real time!
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, JQuery</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/code-player" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/app-landing.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">App Landing Page</h4>
                        <div class="card-text">This page demonstrates a great example of a responsive homepage for your app. It was built using Bootstrap.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, Bootstrap</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/app-landing" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/weather-app.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Weather App</h4>
                        <div class="card-text">Want to know the weather conditons where you are? This web app uses PHP to retrieve data from weather-forecast.com to give live weather conditions for any world city.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, Bootstrap, PHP</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/weather-app" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/send-email.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Email Sender (Mobile App)</h4>
                        <div class="card-text">This working email sender was built using App.js and forms a strong basis for any app built using this great JS UI library.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, JQuery, PHP, App.js</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/email-sender" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/secret-diary.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Secret Diary</h4>
                        <div class="card-text">
                            Got something to say? This web app uses MySQL to store the users log in details, as well as their secret diary entry, into a secure server side database.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, JQuery, Bootstrap, PHP, MySQL</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/secret-diary" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="img/mastermind.png">
                    <div class="card-block">
                        <h4 class="card-title mt-3">Mastermind</h4>
                        <div class="card-text">
                            This classic game is built using JavaScript. Try to crack the secret code. I have included a rules pop up, so check these out before you play.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8"><small>HTML, CSS, JavaScript, JQuery, Bootstrap</small></div>
                            <div class="col-4 center-stuff"><a href="http://jamesdcox.com/portfolio/mastermind" class="btn btn-info btn-sm" target="_blank">Go!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? include $_SERVER['DOCUMENT_ROOT']."footer.php"?>
