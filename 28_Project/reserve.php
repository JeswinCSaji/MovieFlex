<?php
include 'db.php';
$id = $_GET['id'];
 $sql = "SELECT * FROM `movies` where id='$id'";
 $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
if (isset($_POST['sub_btn']))
    {
        $rsname = $_POST['rsname'];
        $rscon = $_POST['rscon'];
        $rstheater = $_POST['rstheater'];
        $rsqty = $_POST['rsqty'];
        $rsdate = $_POST['rsdate'];
        $rstime = $_POST['rstime'];
        $rsmovie = $row['title'];

        $bk = "INSERT INTO reserve (bkname,bkcontact,theater,qty,bkdate,bktime,bkmovie) values('$rsname','$rscon','$rstheater','$rsqty','$rsdate','$rstime','$rsmovie')" ;
        mysqli_query($conn,$bk);

      
    }   
?>
<html>
<head>
    <title>BOOKING</title>
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Inter:wght@200&display=swap" rel="stylesheet">
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
    #movname
    {
        font-family: 'Inter', sans-serif;
        margin-left: 40%;
        margin-top: -20px;
        color: white;
        text-shadow: 5px 5px 5px black, 
                        3px 3px 5px black;
    }
    h2
    {
        font-family: 'Inter', sans-serif;
        margin-top: 10px;
        margin-left: 20px;
    }
    p
    {
        margin-top: -45px;
        margin-left: 150px;
        font-size: larger;
    }
    a
    {
        margin-top: -45px;
        position: absolute;
        margin-left: 150px;
        font-size: larger;
    }
    img
    {
        margin-left: 12%;
        margin-top: 3%;
        width: 270px;
        height: 400px;
        box-shadow:black  0px 50px 100px -20px,black 0px 30px 60px -30px,black 0px -2px 6px 0px inset;
    }
    #div1
    {
        margin-left: 40%;
        margin-top: -400px;
        padding-top: 5px;
        width: 550px;
        height: 100px;
        box-shadow: black 0px 2px 4px,black 0px 7px 13px -3px,black 0px -3px 0px inset;
        background-color:white;
    }
    #div2
    {
        padding-top: 10px;
        background-color:white;
        margin-left: 40%;
        margin-top: 30px;
        width: 550px;
        height: 260px;
        box-shadow: black 0px 2px 4px, black 0px 7px 13px -3px, black 0px -3px 0px inset;
    }
    #vname
         {
            width: 50px;
            margin-top: -45px;
            color: black ;
            font-size: medium;
            margin-left: 200px;
            width: 300px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
    #vcontact
         {
            width: 50px;
	        margin:5px 0;
            margin-top: -10px;
            color: black ;
            font-size: medium;
            margin-left: 200px;
            width: 300px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         #vtheater
         {
            width: 70%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: -40px;
            position: absolute;
            color: black;
            font-size: medium;
            margin-left: 200px;
            width: 300px;
	        border: 0.5px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         option
         {
            background-color: white;
            color: black;
         }
         #vqty
         {
            width: 50px;
            margin-top: 50px;
            color: black ;
            font-size: medium;
            margin-left: 40px;
            width: 50px;
	        border-left:0;
	        border-top:0;
	        border-right:0;
	        border-bottom: 1px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         #vdate
         {
            
            margin-top: -25px;
            color: black ;
            font-size: medium;
            margin-left: 120px;
            width: 100px; 
	        border: 1px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         #vtime
         {
            width: 70%;
	        padding:10px 0;
	        margin:5px 0;
            margin-top: -25px;
            color: black;
            font-size: medium;
            margin-left: 400px;
            width: 100px;
	        border: 0.5px solid black;
	        outline:none;
	        background: transparent;
            font-family: 'Playfair Display', serif;
         }
         #sb
{
    width: 150px;
    height: 50px;
    border: 1px solid black;
    margin-top: 80px;
    margin-left: 40px;
    padding: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    font-size: large;
    z-index: 10;
}
</style>
<button type="submit" onclick="window.location.href='home.php';" class="button-71"  id="gbbtn">Go Back</button>
<body style="background-image:url(bg-25.jpg); background-size:cover;">
    <h1 id="movname"><b><?php echo $row['title']?> </b></h1>
    <img src="<?php echo "./img/" . $row['cover_img'] ?>">
    <div id="div1">
        <h2>Duration : </h2><p><?php echo $row['duration']?> hrs </p>
        <h2>Trailer : </h2><a href="<?php echo $row['trailer_yt_link'] ?>"><?php echo $row['title']?></a>
    </div>
    <div id="div2">
        <form method="post" name="rsform">
            <h2>Details : </h2>
            <input type="text" placeholder="Name" id="vname" name="rsname">
            <input type="text" placeholder="Contact" id="vcontact" name="rscon">
            <h2>Theater : </h2>
            <select id="vtheater" name="rstheater">
                <option>Anand Theater</option>
                <option>Abilash Theater</option>
                <option>RD Theater</option>
                <option>Anupama Theater</option>
            </select>
            <input type="text" placeholder="QTY" id="vqty" name="rsqty">
            <input type="date" placeholder="DATE" id="vdate" name="rsdate">
            <select id="vtime" name="rstime">
                <option>09:00 AM</option>
                <option>12:00 PM</option>
                <option>02:00 PM</option>
                <option>10:00 PM</option>
            </select>
            <input type="submit" class="button-71" name="sub_btn" id="sb" onclick="window.location.href='home.php';">
        </form>
    </div>
</body>
</html>