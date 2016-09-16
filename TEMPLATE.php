<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="STYLES/STYLESHEET.css"/>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'/>
        
        
    </head>
    <body>
        <header>
            <h1>My Web Page</h1>
            <p>with arbit content</p>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutme.php">About Me</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                
                </ul>
            </nav>
        </header>
        <br>
        
        <div id="container">
                <?php echo $content; ?>
                
            </div>
        <footer>
            
            <section id="copyright">
                
                <div class="wrapper">
                    <div class="social">
                        <a href="https://plus.google.com/"><img src="img/google-plus.png" alt="google plus" width="25"/></a>
                        <a href="https://facebook.com/"><img src="img/facebook.png" alt="facebook" width="25"/></a>
                        <a href="https://www.tumblr.com/"><img src="img/tumblr.png" alt="tumblr" width="25"/></a>
                        </div>
                            &copy; Copyright 2012 by Balraj. All Rights Reserved.
                        </div>
            </section>
            
        </footer>
        
    </body>
</html>