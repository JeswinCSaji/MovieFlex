<?php 
  include 'db.php';
  $sql = "select * from reserve";
  $movie = mysqli_query($conn,$sql);
?>
<html>
<head>
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<style>
     body
            {
                background-repeat: none;
                background-size: cover;
                /* opacity: 0.5; */
                
            }
        nav
        {
            width: 550px;
            height: 60px;     
            margin-top: -55px; 
            text-shadow: 5px 5px 5px black, 
               3px 3px 5px black;  
               margin-left: 520px;
               font-family: 'Nosifer', cursive;
        }
        #navdiv
        {
            width: 250px;
            height: 40px;
            color: white;
            margin-top: 10px;
            float: left;
            font-size: x-large;
            letter-spacing: 5px ;
        }
        span
        {
            color: rgba(238, 15, 15, 0.863);
            letter-spacing: 5px ;
            margin-left:180px;
        }
        #navdiv:hover
        {
            color: rgba(238, 15, 15, 0.863);
        }
        span:hover
        {
            color: white;
        }
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
    margin-top: 20px;
    margin-left: 50px;
    border-radius: 30px;
    padding: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    font-size: large;
    z-index: 10;
}
table
{
    margin-top: 100px;
    border: 2px solid black;
    border-collapse: collapse;
    background-color: white;
}
th
{
  border: 2px solid black;
  width: 140px;
  height: 30px;
  font-size: x-large;
  font-family: 'Playfair Display', serif;
}
td
{
    border: 1px solid black;
  height: 70px; 
  padding-left: 30px;
}
</style>
<body style="background-image:url(bg-82.jpg);">
    <button type="submit" onclick="window.location.href='home.php';" class="button-71"  id="gbbtn">Go Back</button>
    <div id="menu">
        <nav>                
            <header>
            <div id="navdiv">Movie <span>Flex</span></div>
        </header>
    </nav>
    <center><table></center>
        <thead>
            <tr>
                <th class="text">ID</th>
                <th class="text">Name</th>
                <th class="text">Contact</th>
                <th class="text">Movie</th>
                <th class="text">Theater</th>
                <th class="text">Quantity</th>
                <th class="text">Date</th>
                <th class="text">Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while($row=$movie->fetch_assoc()){
             ?>
             <tr>
             <td><?php echo $i++ ?></td>
            <td><?php echo $row['bkname'] ?></td>
            <td><?php echo $row['bkcontact'] ?></td>
            <td><?php echo $row['bkmovie'] ?></td>
            <td><?php echo $row['theater'] ?></td>
            <td><?php echo $row['qty'] ?></td>
            <td><?php echo $row['bkdate'] ?></td>
            <td><?php echo $row['bktime'] ?></td>                              
             </tr>
            <?php } ?>
        </tbody>
    </table> 
</body>
</html>