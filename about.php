<?php 
    if(filter_has_var(INPUT_POST, 'submit')){
         echo 'submitted';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>Lane Larochelle | About </title>
        <link rel="stylesheet" type="text/css" href="styl2.css"/>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1>Lane Larochelle</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a>
                        <li class="current"><a href="about.html">About</a>
                        <li><a href="services.html">Services</a>
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
                <h1>Request a Resume or Quote</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    <!Code for form processing goes here>
                    <input type="email" placeholder="Enter Email..." name="email" value="">
                    <button type="submit" name="submit" class="button_1">Request</button>
                </form>
            </div>
        </section>
        
        <section id="boxes"> 
            <div class="container">
                <div class="box">
                    <img src="html5.png">
                    <h3>HTML5 Markup</h3>
                    <p>A markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard.</p>
                </div>
                <div class="box">
                    <img src="CSS3.png">
                    <h3>CSS3 Styling</h3>
                    <p>A style sheet language used for describing the presentation of a document written in a markup language.</p>
                </div>              
                <div class="box">
                    <img src="php.png">
                    <h3>PHP Scripting</h3>
                    <p>A server-side scripting language designed for web development but also used as a general-purpose programming language.</p>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Lane's page, Copyright &copy; 2018</p>
        </footer>
    </body>
<html>
