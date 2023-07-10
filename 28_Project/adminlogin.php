<?php 
  include 'db.php';
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['log_btn '])){
      $uname = $_POST['uname'];
      $pass = $_POST['password'];
    
      $adm = "select * from users where username = '$uname' and password = '$pass'";
      $result = mysqli_query($conn, $adm);
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      mysqli_select_db($conn, 'project');
      
    
      if($count == 1 )
      {
        echo $row['uname'];
        $_SESSION['uname']=$row['uname'];
    
        echo "<script type='text/javascript'>alert('Login Successful !!!!')</script>";
        header("Location:book.php");
        }
      else {
        echo "<script type='text/javascript'>alert('User not Found!!!!')</script>";
      }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    </head>
    <style>
        .button-71 {
  background-color: white;
  border: 0;
  border-radius: 56px;
  color: black;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}


.button-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .button-71 {
    padding: 16px 48px;
  }
}
    #gbbtn
{
    width: 150px;
    height: 50px;
    border: 1px solid black;
    margin-top: 10px;
    margin-left: 50px;
    border-radius: 30px;
    padding: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    font-size: large;
    z-index: 10;
}
        body
            {
                background-repeat: none;
                background-size: cover;
            }
        nav
        {
            width: 550px;
            height: 60px;     
            margin-top: -50px; 
            text-shadow: 5px 5px 5px black, 
               3px 3px 5px black;  
               margin-left: 520px;
        }
        #navdiv
        {
            width: 250px;
            height: 40px;
            color: white;
            margin-top: 10px;
            float: left;
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

         #login
         {
            height: 530px;
            width: 400px;
            margin-left: 450px;
            margin-top: 20px;
            background-size: cover;
            opacity: 95%;
            border-radius: 20px;
            box-shadow: white 0px 8px 24px;
            box-shadow: white 0px 8px 24px, white , white inset;
         }
        #lore
         {
            margin-left: 130px;
            height: 50px;
            width: 250px;
            margin-top: 30px;
            position: absolute;            
            border-radius: 20px;
         }
         #log
         {
            height: 50px;
            width: 125px;
            background: transparent;
            border-style: solid;
            border-color: white;
            color: white;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #log:hover
         {
            background-color: white;
            color: black;
         }


         /* Login Start*/
         #adlogin_form
         {
            position: absolute;
            margin-top: 150px;
            width: 400px;
            height: 300px;
            
            font-family: 'Playfair Display', serif;
         }
         #input_fld
         {
            width: 100%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: 10px;
            color: white;
            font-size: medium;
            margin-left: 50px;
            width: 300px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid #999;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         select
         {
            width: 70%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: -10px;
            color: white;
            font-size: medium;
            margin-left: 50px;
            width: 300px;
	        border: 1px solid #999;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         option
         {
            background-color: black;
            color: white;
         }
         #chk
         {
            margin-top: 30px;
            margin-left: 50px;
            float: left;
            width: 15px;
            height: 15px;
         }
         #rmr
         {
            margin-left: 20px;
            margin-top: 28px;
            float: left;
            letter-spacing: 0.5px;
            font-size: small;
            color: white;

         }
         #logbtn
         {
            margin-top: 120px;
            float: left;
            margin-left: -80px;
            height: 50px;
            width: 125px;
             background: transparent; 
            border-style: solid;
            border-color: white;
            color: white;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #logbtn:hover
         {
            color: white;
            border-style: none;
            background: black;
            box-shadow: 0 0 10px white,0 0 40px white,0 0 80px white;
            transition-delay: 0.01s;
         }
    </style>
    <body style="background-image: url(bg-83.jpg);">
    <button type="submit" onclick="window.location.href='home.php';" class="button-71"  id="gbbtn">Go Back</button>
        <div id="menu">
            <nav>                
                <header>
                <div id="navdiv">Movie <span>Flex</span></div>
            </header>
        </nav> 
        <div id="login">
            <div id="lore">
                 <button id="log" >Login</button>
            </div>
            <div id="container">
                <form id="adlogin_form" class= "login" method = "post">                  
                    <input name="uname" type='text'id='input_fld'placeholder='Username' required >
                    <input name="password"type='password'id='input_fld'placeholder='Enter Password' required>
                    <input type='checkbox'Id='chk'><span id="rmr">Remember Password</span>
                    <button type='submit' name="log_btn"id="logbtn">Log in</button></form>    
            </div>
           
                
            
        </div> 
    </body>
 
</html>