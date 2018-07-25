<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>Lane Larochelle | About </title>
        <link rel="shortcut icon" href="/images/825727_SjZ_icon.ico" />
        <link rel="stylesheet" type="text/css" href="/css/styl2.css"/>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1>Lane Larochelle</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a>
                        <li class="current"><a href="/html/about.html">About</a>
                        <li><a href="/html/snake.html">Experiment</a>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="showcase">
            <div class="containter">
                <h1>Web Design At It's Mediocre-ist</h1>
                <p>Once again my name is Lane Larochelle. I am from Ponteix SK which is located 80 km south of Swift Current. I come from a family of 3 brothers, mom's a school teacher, and my dad runs our family farm of both grain and cattle. I graduated with a bachelor of science engineering in the computer engineering discipline from the University of Saskatchewan in April of 2018.</p>
            </div>
        </section>
       
        <section id="newsletter">
            <div class="container">
                <h1>Request a Resume</h1>
                <form method="post" action="" >
                <?php

                $fileWrite = '';    
                $myFile = "emails.txt";
                if(isset($_POST['fileWrite']) && !empty($_POST['fileWrite'])) {
                    $fileWrite = $_POST['fileWrite'].PHP_EOL;
                }
                if($fileWrite) {
                    $fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
                    fwrite($fh, $fileWrite);
                    fclose($fh);
                }
                ?>
                    <!Code for form processing goes here>
                    <input type="email" placeholder="Enter Email..." name="fileWrite" value="">
                    <button type="submit" name="submit" class="button_1">Request</button>
                </form>
            </div>
        </section>
        
        <section id="boxes"> 
            <div class="container">
                <div class="box">
                    <img src="/images/html5.png">
                    <h3>HTML5 Markup</h3>
                    <p>A markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard.</p>
                </div>
                <div class="box">
                    <img src="/images/CSS3.png">
                    <h3>CSS3 Styling</h3>
                    <p>A style sheet language used for describing the presentation of a document written in a markup language.</p>
                </div>              
                <div class="box">
                    <img src="/images/js.png">
                    <h3>JavaScript Interactions</h3>
                    <p> A high-level, interpreted programming language.</p>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Lane's page, Copyright &copy; 2018</p>
        </footer>
    </body>
<html>
