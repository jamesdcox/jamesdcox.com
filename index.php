<?php

    ob_start();

    if(!isset($_SESSION)){
        session_start();
    }

    $error = "";

    $userGreeting = "";

    if (array_key_exists("logout", $_GET)) {
        
        
        session_unset();
        setcookie("id","", time() - 60*60);
        $_COOKIE["id"] = "";
        
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])){
        
        header("Location: loggedinpage.php");
        $userGreeting = "Hello, User";
        
        
    }

    if (array_key_exists("submit", $_POST)) {
        
        include "connection.php";
        
        
        if ($_POST['email'] == '') {
            
            $error .= "Email Address required!<br>";
            
        }
            
        if ($_POST['password'] == '') {
            
            $error .= "Password required!<br>";
            
        }
        
        if ($error != "") {
            
            $error = "<p>You have the following error(s) in your form:</p>".$error;
            
        } else {
            
            if (isset($_POST['signUp'])) {
            
            
                $query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {

                    $error = "Email Address taken.";

                } else {


                    $query = "INSERT INTO users (email, password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

                    if (!mysqli_query($link, $query)) {

                        $error = "<p>Your sing up has NOT been successful, please try again later.</p>";

                        } else {

                            $query = "UPDATE users SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."'WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

                            mysqli_query($link, $query);

                            $_SESSION['id'] = mysqli_insert_id($link);

                            if (isset($_POST['stayLoggedIn'])) {

                                setcookie("id", mysqli_insert_id($link), time + 60*60*24*365);

                            }

                            header ("Location: loggedinpage.php");

                        }


                }
                
            } else {
                
                
                $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
                
                $result = mysqli_query($link, $query);
                
                $row = mysqli_fetch_array($result);
                
                if (isset($row)) {
                    
                    $hashedPassword = md5(md5($row['id']).$_POST['password']);
                    
                    if ($hashedPassword == $row['password']) {
                        
                        $_SESSION['id'] = $row['id'];
                        
                        if (isset($_POST['stayLoggedIn'])) {

                                setcookie("id", $row['id'], time + 60*60*24*365);
                        
                        
                    }
                        
                        header ("Location: loggedinpage.php");
                        
                    } else {
                        
                        $error = "Sorry, that email/password combination could not be found.";
                        
                    }
                    
                } else {
                    
                    $error = "Sorry, that email/password combination could not be found.";
                    
                }
                
            }
            
            
        }
        
    }

        

?>
    
    <? include "header.php"?>
  
    <body>
        
        
    <? include "navbar.php"?>
            
        
        <div class="jumbotron jumbotron-fluid" id="jumbotron">
            
            <div class="container">
  

                <div id="error"><?php if ($error != "") { echo '<div class="alert alert-danger" role="alert">'.$error.'
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