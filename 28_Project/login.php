<?php 
  include 'db.php';
?>
<?php
    if (isset($_POST['sub_btn']))
    {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO login (uname,email,spassword) values('$username','$email','$password')" ;
        mysqli_query($conn,$sql);

        mysqli_close($conn);
    }
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['log_btn'])){
      $uname = $_POST['uuname'];
      $pass = $_POST['uupass'];
    
      $nov = "select * from login where uname = '$uname' and spassword = '$pass'";
      $result = mysqli_query($conn, $nov);
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      mysqli_select_db($conn, 'project');
      
    
      if($count == 1 )
      {
        echo $row['uname'];
        $_SESSION['uname']=$row['uname'];
    
        echo "<script type='text/javascript'>alert('Login Successful !!!!')</script>";
         header("Location:home.php");
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
        <link rel="stylesheet" href="css/styles.css" ?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <script>
            function login_form() {
                const form = document.getElementById("container");
                form.innerHTML = `
                <form id="login_form" class= "login" method = "post">
                    <select name="Role" id="Role" onchange="log()" required>
                        <option value="user">user</option>
                        <option value="Admin">Admin</option>
                      </select> 
                    <input name = "uuname"type='text'id='input_fld' placeholder='Username' required >                     >
                    <input name = "uupass" type='password'id='input_fld'placeholder='Enter Password' required>
                    <input type='checkbox'Id='chk'><span id="rmr">Remember Password</span>
                    <button type='submit' name="log_btn" id="logbtn">Log in</button></form> 
                `
            }
            function signup_form() {
                const form = document.getElementById("container");
                form.innerHTML = 
                `<form id="signup_form"  name = "RegForm" method="POST">
                    <input name="uname" id="uname" onKeyUp="validateusername()" type='text'class='sinput_fld'placeholder='Username' required="">
                    <div class="red-text" id="name_err"></div>
                    <input name="email" id="email" onkeyup="validateEmail()" type='text'class='sinput_fld'placeholder='Email' required="">
                    <div class="red-text" id="email_err"></div>
                    <input name="password" id="password" onkeyup="validatePassword()" type='password'class='sinput_fld'placeholder='Password' required="">
                    <div class="red-text" id="pass_err"></div>
                    <input name="ConPassword" id="ConPassword" onkeyup="validateRepass()"  type='password'class='sinput_fld'placeholder='Confirm password' required="">
                    <div class="red-text" id="repass_err"></div>
                    <button type='submit' name="sub_btn" id="subtn">Sign Up</button>
                </form>
                `
            }
            function log()
            {
                var op =document.getElementById("Role").value;
                if(op == "Admin")
                {
                    window.location="adminlogin.php";
                }
            }

            function validateusername()
{
      var letters = /^[A-Za-z]*$/;
      var regex = /^\s/;
      var username = document.getElementById("uname");
      if (username.value.match(regex)) {
        document.getElementById("subtn").disabled = true;
        return true;
      }
      if (username.value.match(letters) && username.value.length >= 3) {
        text = "";
        document.getElementById("name_err").innerHTML = text;
        document.getElementById("subtn").disabled = false;
        return false;
      } else {
        text = "Please enter username minimum 3 character allowed"
        document.getElementById("name_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
}


function validateEmail() 
{
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var regex = /^\s/;
  var email = document.getElementById("email");
  if (email.value.match(regex)) {
    text = "Email is required";
    document.getElementById("email_err").innerHTML = text;
    document.getElementById("subtn").disabled = true;
    return true;
  }
  if (email.value.match(filter)) {
    text = "";
    document.getElementById("email_err").innerHTML = text;
    document.getElementById("subtn").disabled = false;
    return false;
  } else {
    text = "Please enter valid email"
    document.getElementById("email_err").innerHTML = text;
    document.getElementById("subtn").disabled = true;
    return true;
  }
}

function validatePassword() 
    {
      var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
      var regex = /^\s/;
      var password = document.getElementById("password");
      if (password.value.match(regex)) {
        text = "Password is required";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
      if (password.value.length <= 6) {
        text = "Password minimum length is 6";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
      if (password.value.length >= 12) {
        text = "Password maximum length is 12";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
      if (password.value.match(pwd_expression)) {
        text = "";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("subtn").disabled = false;
        return false;
      } else {
        text = "Upper case, Lower case, Special character and Numeric letter are required in Password filed";
        document.getElementById("pass_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
    }

    function validateRepass() 
    {
      var regex = /^\s/;
      var password = document.getElementById("password").value;
      var repassword = document.getElementById("ConPassword").value;
      console.log(password);
      console.log(repassword);
      if (repassword == password) {
        text = "";
        document.getElementById("repass_err").innerHTML = text;
        document.getElementById("subtn").disabled = false;
        return false;
      } else {
        text = "Password does not match re-enter password";
        document.getElementById("repass_err").innerHTML = text;
        document.getElementById("subtn").disabled = true;
        return true;
      }
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
            text-shadow: 5px 5px 5px white, 
                        3px 3px 5px white;
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
            color: black;
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
                color: black;
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
            box-shadow: black 0px 8px 24px;

         }
        #lore
         {
            margin-left: 70px;
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
            border-color: black;
            color: black;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #log:hover
         {
            background-color: black;
            color: white;
         }


         /* Login Start*/
         #login_form
         {
            position: absolute;
            margin-top: 150px;
            width: 400px;
            height: 300px;
            color: black;
            font-family: 'Playfair Display', serif;
         }
         #input_fld
         {
            width: 100%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: 10px;
            color: black ;
            font-size: medium;
            margin-left: 50px;
            width: 300px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid black;
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
            color: black;
            font-size: medium;
            margin-left: 50px;
            width: 300px;
	        border: 3px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         option
         {
            background-color: white;
            color: black;
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
            color: black;

         }
         #logbtn
         {
            margin-top: 80px;
            float: left;
            margin-left: -80px;
            height: 50px;
            width: 125px;
             background: transparent; 
            border-style: solid;
            border-color: black;
            color: black;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #logbtn:hover
         {
            color: black;
            border-style: none;
            background: white;
            box-shadow: 0 0 10px black,0 0 40px black,0 0 80px black;
            transition-delay: 0.01s;
         }
         /* Login End */



         #signup
         {
            height: 50px;
            margin-left: -5px;
            width: 125px;
            background: transparent;
            border-style: solid;
            border-color: black;
            color: black;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #signup:hover
         {
            background-color: black;
            color: white;
         }
         #signup_form
         {
            position: absolute;
            margin-top: 150px;
            width: 400px;
            height: 300px;
            font-family: 'Playfair Display', serif;
         }
         .sinput_fld
         {
            width: 100%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: 5px;
            color: black;
            font-size: medium;
            margin-left: 50px;
            width: 300px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         #subtn
         {
            margin-top: 50px;
            float: left;
            margin-left: 140px;
            height: 50px;
            width: 125px;
             background: transparent; 
            border-style: solid;
            border-color: black;
            color: black;
            font-family: 'Playfair Display', serif;
            font-size:larger ;
         }
         #subtn:hover
         {
            color: black;
            border-style: none;
            background: white;
            box-shadow: 0 0 10px black,0 0 40px black,0 0 80px black;
            transition-delay: 0.01s;
         }
    
    </style>
    <body style="background-image: url(bg-13.jpg);">
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
        <div id="login">
            <div id="lore">
                <button id="log" onclick='login_form()'>Login</button>
                <button id="signup" onclick='signup_form()'>Sign Up</button>
            </div>
            <div id="container">
                <form id="login_form" class= "login" method = "post">
                    <select name="Role" id="Role" onchange="log()" required>
                        <option value="user">user</option>
                        <option value="Admin">Admin</option>
                      </select> 
                    <input name = "uuname" type='text'id='input_fld'placeholder='User name' required >                     
                    <input  name = "uupass" type='password'id='input_fld'placeholder='Enter Password' required>
                    <input type='checkbox'Id='chk'><span id="rmr">Remember Password</span>
                    <button type='submit' name="log_btn" id="logbtn">Log in</button></form>    
            </div>
           
                
            
        </div> 
    </body>
    
</html>