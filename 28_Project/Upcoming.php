<!DOCTYPE html>
<html>
    <head>
        <title>Upcoming</title>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    </head>
    <style>
         body
            {
                background-repeat: none;
                background-size: cover;
            }
            nav
        {
            width: 1350px;
            height: 60px;     
            margin-top: 50px; 
            text-shadow: 5px 5px 5px black, 
               3px 3px 5px black;  
        }
        #navdiv
        {
            width: 250px;
            height: 40px;
            color: white;
            margin-top: 10px;
            float: left;
            margin-left: 200px;
            font-family: 'Nosifer', cursive;
            font-size: x-large;
            letter-spacing: 5px ;
        }
        span
        {
            color: rgba(238, 15, 15, 0.863);
            letter-spacing: 5px ;
        }
        #navdiv:hover
        {
            color: rgba(238, 15, 15, 0.863);
        }
        span:hover
        {
            color: white;
        }
        ul
        {
            font-family: 'Abril Fatface', cursive;
            margin-left: 650px;
            margin-top: -32px;
            font-size: medium;
            text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;
        }
        li
        {
            display: inline-block;
            margin-top: 10px;
            margin-left: 60px;
            width: 100px;
            height: 30px;
            border-radius: 10px;
        }
        #ll
        {
            color: white;
            text-decoration: none;
            font-size: larger; 
            font-family: 'Darker Grotesque', sans-serif;
            background: transparent;
            border-style: none;
        }
        #ll:hover
        {
                
            transition: 0.3s;
            color: red;
        }
        a
            {
                color: white;
                text-decoration: none;
                font-size: larger;
            }
        a:hover
            {
                transition: 0.3s;
                color: red;
            }
        header
        {
            position: fixed;
            z-index: 10000;
        }
        h1
        {
            margin-left:20px;
            text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;
        }
        #Hol
        {
            width: 100%;
            height: 350px;
            margin-left: 0px;
            margin-top: 90px;           
            float: left;
        }
        #HolH1
        {
            font-family: 'Playfair Display', serif;
            margin-left: 40%;
            margin-top: -5px;
            color: white;
            text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;     
        }
        #HolList
        {
            margin-top : 40px;
            display: flex;

        }
        #Hol1
        {   
            height: 280px;
            width: 185px;
            margin-left: 65px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;
        }
        #Hol1:hover .info {
            visibility: visible;
            opacity:1;
        }
        #Hol2
        {
            height: 280px;
            width: 185px;
            margin-left: 65px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;     
         }
        #Hol2:hover .info {
            visibility: visible;
            opacity:1;
        }
        #Hol3
        {
            height: 280px;
            width: 185px;
            margin-left: 65px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;      
        }
        #Hol3:hover .info {
            visibility: visible;
            opacity:1;
        }
        #Hol4
        {
            height: 280px;
            width: 185px;
            margin-left: 65px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;    
        }
        #Hol4:hover .info {
            visibility: visible;
            opacity:1;
        }
        #Hol5
        {
            height: 280px;
            width: 185px;
            margin-left: 65px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;
        }
        #Hol5:hover .info {
            visibility: visible;
            opacity:1;
        }
        .info {
            width: 70%;
            margin-left: 5px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            z-index: 5;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 15px;
            padding: 20px;
            text-align: center;
            font-family: 'Tinos', serif;
        }
    </style>
    <body style="background-image: url(theater-bg.jpg);">
        <div id="menu">
            <header>
            <nav>                
                
                <div id="navdiv">Movie <span>Flex</span></div>
                <ul>
                    <li><b><a href="Home.php" id="m1">Home</a></b></li>
                    <li><b><a href="Upcoming.php" id="m2">Upcoming</a></b></li>
                    <li><b><a href="login.php" id="m2">Login</a></b></li>                
                </ul>
        </nav>
    </header> 
    <div id="Hol">
            <div id="HolH1">
                <h1 >Hollywood Movies</h1>
            </div>    
            <div id="HolList">
                <button id="Hol1" style="background-image: url(32.jpg);">
                    <div class="info">
                        JOHN WICK 4
                    </div>
                </button>
                
                <button id="Hol2" style="background-image: url(33.jpg);">
                    <div class="info">
                        SPIDERMAN: ACROSS THE SPIDERVERSE
                    </div></button>
                <button id="Hol3" style="background-image: url(13.jpg);">
                    <div class="info">
                        WAKANDA FOREVER
                    </div></button>
                <button id="Hol4" style="background-image: url(35.jpg);">
                    <div class="info">
                        AVATAR : THE WAY OF WATER
                    </div>
                </button>
                <button id="Hol5" style="background-image: url(36.jpg);">
                    <div class="info">
                        THE FLASH
                    </div>
                </button>
            </div>            
        </div>
        <div id="Hol" style="margin-top : 50px">
            <div id="HolH1" >
                <h1 >Bollywood Movies</h1>
            </div>    
            <div id="HolList">
                <button id="Hol1" style="background-image: url(21.jpg);">
                    <div class="info">
                        <p>PATHAAN</p>
                    </div>
                </button>
                <button id="Hol2" style="background-image: url(22.jpg);">
                    <div class="info">
                        <p>TEHRAN</p>
                    </div>
                </button>
                <button id="Hol3" style="background-image: url(23.jpg);">
                    <div class="info">
                        <p>ADIPURUSH</p>
                    </div>
                </button>
                <button id="Hol4" style="background-image: url(24.jpg);">
                    <div class="info">
                        <p>MAIDAAN</p>
                    </div>
                </button>
                <button id="Hol5" style="background-image: url(25.jpg);">
                    <div class="info">
                        <p>SELFIEE</p>
                    </div>
                </button>
            </div>            
        </div>
        <div id="Hol" >
            <div id="HolH1">
                <h1 >Mollywood Movies</h1>
            </div>    
            <div id="HolList">
                <button id="Hol1" style="background-image: url(41.jpg);">
                    <div class="info">
                        <p>BILAL</p>
                    </div>
                </button>
                <button id="Hol2" style="background-image: url(42.jpg);">
                    <div class="info">
                        <p>KADUVAAKUNNEL KURUVACHAN</p>
                    </div>
                </button>
                <button id="Hol3" style="background-image: url(43.jpg);">
                    <div class="info">
                        <p>CHRISTOPHER</p>
                    </div>
                </button>
                <button id="Hol4" style="background-image: url(44.jpg);">
                    <div class="info">
                        <p>PADAVETTU</p>
                    </div>
                </button>
                <button id="Hol5" style="background-image: url(45.jpg);">
                    <div class="info">
                        <p>AADUJEEVITHAM</p>
                    </div>
                </button>
            </div>            
        </div>    
    </body>
</html>