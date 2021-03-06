
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>Lane Larochelle | Home </title>
        <link rel="shortcut icon" href="/images/825727_SjZ_icon.ico" />
        <link rel="stylesheet" type="text/css" href="/css/styl3.css"/>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1>Lane Larochelle</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="index.php">Home</a>
                        <li><a href="/html/about.php">About</a>
                        <li><a href="/html/services.html">Services</a>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="showcase">
            <div class="containter">
                <h1>Hello Bonjour Hola</h1>
                <p>I'm Lane Larochelle. I am a Computer Engineering graduate from the University of Saskatchewan. This site is just a play gorund for developing my web programming.</p>
                <p> </p>
                <p>Some of my programming experience includes</p>
            </div>
        </section>
        
        <section id="boxes"> 
            <div class="container">
                <div class="box">
                    <img src="/images/pin.png">
                    <h3>Indoor Tracking</h3>
                    <p>In this project I worked with 2 mechanical engineers and one other computer engineer. The project involved using ESP 8266 chips as both the trackers and trilateration nodes. ESPs were coded using C and calculations were done by looping through and testing connection to the 3 nodes then sending that information to the Raspberry Pi to have the calculations completed on a more capable processor in python, allowing the real time system to stay relevant.</p>
                </div>
                <div class="box">
                    <img src="/images/calendar.png">
                    <h3>Class Scheduling Tool</h3>
                    <p>Using Java and mySQL we were abe to create a smart registration tool for the Computer Engineering program. It would create a timetable as you added and dropped classes, showing conflicts and limiting future options based on your availability.</p>
                </div>              
                <div class="box">
                    <img src="/images/chain.png">
                    <h3>"Block Chain" Chat Room</h3>
                    <p>I put quotations on Block Chain because it wasn't true block chain, we didn't have enough time to remove the server element due to our lack of networking (broadcast) skills. It did however have a consensus checking algorithm which involved pickling and unpickling hashed objects at each client involved in the chat. This project was written 100% in python. </p>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Lane's page, Copyright &copy; 2018</p>
            <img border="0" src="/images/github-mark.png" align="middle">
            <a href="https://github.com/lanelarochelle">lanelarochelle</a>
        </footer>
    </body>
<html>