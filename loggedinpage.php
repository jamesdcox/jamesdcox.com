<?php 

    session_start();

    $error = "";

    if (array_key_exists ("id", $_COOKIE)) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (!array_key_exists("id", $_SESSION)) {
        
        
        header("Location: index.php");
        
        
    }





?>

<? include "header.php"?>
  
    <body>
        
        
    <? include "navbarLoggedIn.php"?>
            
        
        <div class="jumbotron jumbotron-fluid" id="jumbotron">
            
            <div class="container">
  

                <div id="error" class="cursor"><?php if ($error != "") { echo '<div class="alert alert-danger" role="alert">'.$error.'
                </div>'; }?></div>
    
            
                <img id="mylogo" src="Images/JDC_Logo.png">
  
                
                <!--<hr class="my-4">-->
                
                
                <div id="mydescription">
                    
                
                    <h2>Web Design and Development</h2>
                
  
                </div>
                
            
                
            </div>

        </div>
        
        <a id="about" class="anchor"></a>
        
        <div class="container-fluid" id="aboutmecontainer">
        
            
            <div class="aboutmetext">
            
            
                <h3>About Me</h3>
                
                <hr class="my-4">
                
                <p>After working in the Audio Post Production industry in central London for almost 6 years, I decided to take the plunge and pursue a new challenge in what I love to do. I believe my time in this industry has set me up with the key skills required to be a good Web Developer.</p>
                    
                <p>I have taught myself the fundamentals of HTML, CSS, JavaScript, Wordpress, PHP, Python and MySQL using online courses and other resources. I am now looking for my first job in the industry.</p>
            
            
            
            </div>
            
            <div class="aboutmetext" id="textextrapadding">
            
            
                <h3>About This Site</h3>
                
                <hr class="my-4">
                
                <p>This site was set up primarily to showcase what I have learnt so far and to test out new skills that I am learning along the way.</p>
                <p>At certain times some aspects of this site may not work, but please bear with me as I’m setting it up as I go along. My aim is to have a working blog and email contact form set up soon.</p>
            
            
            
            </div>
        
        
        
        </div>
        
        
        <? include "footer.php"?>