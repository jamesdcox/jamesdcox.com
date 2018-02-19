<?php 
    include $_SERVER['DOCUMENT_ROOT'].'header.php';
?>

<?php 
    include 'navbar-portfolio.php';
?>

<style>

    #container {
        
        margin-top: 85px;
        padding-top: 100px;
        background-color: white;
        padding-bottom: 30px;
        min-height: calc(100vh - 170px);
        
    }
    
    .card-deck {
        
        margin-bottom: 50px;
        
    }
    
    .card-img-top {
    
        height:200px;
        width:100%;
    
    }
    
    .card {
        
        background-color:#F9F9F9;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        
    }
    


</style>

<div class = "container-fluid" id="container">
    
    <div class="container">

        <div class="card-deck">
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="reaction-tester.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">Reaction Tester</h5>
      
                    <p class="card-text">How quick is your click? A simple game that tests the users reaction time to clicking on random moving shapes. Try to beat your previous time!</p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript</p>
      
                    <a href="http://jamesdcox.com/portfolio/reaction-tester" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="code-player.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">Code Player</h5>
      
                    <p class="card-text">Want to learn how to code? This web app allows the user to develop their coding skills. Put in your HTML, CSS and JavaScript and see what comes out in real time!  </p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript, JQuery</p>
      
                    <a href="http://jamesdcox.com/portfolio/code-player" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="app-landing.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">App Landing Page</h5>
      
                    <p class="card-text">This page demonstrates a great example of a responsive homepage for your app. It was built using Bootstrap.</p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript, Bootstrap</p>
      
                    <a href="http://jamesdcox.com/portfolio/app-landing" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>

        </div>

        <div class="card-deck">
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="weather-app.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">Weather App</h5>
      
                    <p class="card-text">Want to know the weather conditons where you are? This web app uses PHP to retrieve data from weather-forecast.com to give live weather conditions for any world city.</p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript, Bootstrap, PHP</p>
                    
                    <a href="http://jamesdcox.com/portfolio/weather-app" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="send-email.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">Email Sender (Mobile App)</h5>
      
                    <p class="card-text">This working email sender was built using App.js and forms a strong basis for any app built using this great JS UI library.</p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript, JQuery, PHP, App.js</p>
      
                    <a href="http://jamesdcox.com/portfolio/email-sender" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>
  
            <div class="card">
    
                <img class="card-img-top rounded-circle box-shadow img-thumbnail samesize" src="secret-diary.png" alt="Card image cap">
    
                <div class="card-body text-center">
      
                    <h5 class="card-title">Secret Diary</h5>
      
                    <p class="card-text">Got something to say? This web app uses MySQL to store the users log in details, as well as their top secret diary entry into a secure server side database.</p>
                    
                    <p><strong>Skills used:</strong> HTML, CSS, JavaScript, JQuery, Bootstrap, PHP, MySQL</p>
      
                    <a href="http://jamesdcox.com/portfolio/secret-diary" class="btn btn-info box-shadow" target="_blank">Take a Look!</a>
    
                </div>
  
            </div>

        </div>
        
    </div>

</div>

<? include $_SERVER['DOCUMENT_ROOT']."footer.php"?>