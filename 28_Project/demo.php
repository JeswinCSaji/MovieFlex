<?php 
session_start();
  include 'db.php';
$sql = "select * from movies ";
$movie = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <script>
            window.onload = function(){ 
                console.log("dsfdsfsdfds")
                currentSlide(1);
            }
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) 
            {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) 
            {
            showSlides(slideIndex = n);
            }

            function showSlides(n) 
            {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) 
            {
                slideIndex = 1
            }
            if (n < 1) 
            {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) 
            {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) 
            {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
        </script>
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
        #Mov
        {
            width: 80%;
            height: 250px;
            margin-left: 130px;
            margin-top: 90px;
            background-color: black;
            float: left;
        }
        #mov1
        {
           margin-left: 290px;
            height: 250px; 
        }
        #Rec
        {
            width: 100%;
            height: 350px;
            margin-top: 5px;           
            float: left;
        }
        #RecH1
        {
            font-family: 'Playfair Display', serif;
            margin-left: 40%;
            margin-top: -15px;
            color: white;
            text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;
        }
        #RecList
        {
            height: 750px;
            width: 90%;
            margin-left:70px;
            margin-top: 20px; 
            display:flex;
            float:left;
            flex-wrap:wrap;
        }
        #rec1
        {
            height: 280px;
            width: 185px;
            margin-left: 30px;
            background-size: cover;
            border-style:none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;
        }
        #rec1:hover
        {
            border-style: none;
            box-shadow: black 0px 50px 100px -20px, black 0px 30px 60px -30px, black 0px -2px 6px 0px inset;
            margin-top:-30px;
            transition-delay: 0.05s;
        }
        #h31
        {
            width: 200px;
            font-family: 'Playfair Display', serif;
            margin-top: 300px;
            margin-left: -180px;
            color: white;
            text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;
        }
        
    </style>
    <body style="background-image: url(theater-bg.jpg);">
        <div id="menu">
            <header>
            <nav>                
                
                <div id="navdiv">Movie <span>Flex</span></div>
                <ul>
                    <li><a href="Home.php" id="m1">Home</a></li>
                    <li><a href="Upcoming.php" id="m2">Upcoming</a></li>
                    <li><a href="login.php" id="m2">Login</a></li>               
                </ul>
        </nav>
    </header> 
        <div id="Mov">
            <img src=8.jpg id="mov1">
        </div>
        <div id="Rec">
            <div id="RecH1">
                <h1>Recommended Movies</h1>
            </div>
            <div id="RecList">
            <?php while($row=mysqli_fetch_assoc($movie)): ?>
            <button onclick="window.location.href='<?php echo 'reserve.php?id=' . $row['id'] ?>'" id="rec1" style="background-image: url('<?php  echo "./img/" . $row['cover_img'] ?>');"></button><h3 id="h31"><center><?php  echo $row['title'] ?></center></h3>
             <?php endwhile; ?>
            </div>
    </body>
</html>