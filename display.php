<?php
session_start();
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn)
{  
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: '.mysqli_connect_error());  
}
$query="SELECT * FROM  trains_display";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>TRAIN DISPLAY</title>
    <link rel="stylesheet" href="style.css">
    <style>
         body
        {
          
        background-image: url('train6.jpg');
           
        }
        h1{
            text-align: center;
            width:50%;
            margin: 1% 0% -2% 25%;
            padding:0.5%;
        }
        tr:hover{
            opacity: 1;
        }
        table 
        {
            width: 100%;
            margin-bottom: 1rem;
            border: 1px solid black;
            margin-top: 3%;
            
        }
        th, td
        {
            border: 1px solid black;
           height:60px;
            color: black;
        }
        th
        {
            background-color:#283747;
            color: white;
        }
        td
        {
            text-align: center;
        }
        
        tbody tr:nth-of-type(even)
        {
            background-color:rgb(177, 176, 177);
            color: black;
            opacity: 0.8;

        }
        tbody tr:nth-of-type(odd)
        {
            background-color: rgb(255, 252,247);
            color: black;
            opacity: 0.8;
        }
        tbody tr:hover
        {
            color: #212529;
            background-color:hsl(300, 22%, 96%) ;
            visibility: 10%;
            opacity: 1;
        }
        .button
        {
            text-decoration:none;
            border:1px solid black;
            padding:0.5% 4% 0.5% 4%;
            font-size:20px;
            background-color:#283747;
            color:white;
            border-radius:3%;
            width: 40%;
            margin-top: 7%;
            margin-left:2%;
        }
        .button:hover,.del:hover,.new:hover
        {
            background-color:white;
            color: #283747;
        }
        .content{
            border:1px solid  black;
            padding:2%;
            color:#fff;
            box-sizing:border-box;
            background:rgba(0,0,0,0.5);
            bottom: 0;
            width: 95%;
            padding: 30px;
            margin:3% 0 0 3%;
        }
        
        #tm-video-container 
        {
           position:fixed;
            max-height: 740px;
            overflow: hidden;
            background-color: #333;
        }

        #tm-video 
        {
            width: 100%;
        
            
           
        }
    </style>
  </head>
  <body>
  
  <div class="content">
    <caption><h1>TRAINS AVAILABLE</h1></caption>
    <table class="cal">
      
      <thead>
        <tr>
			
			<th>TRAIN NAME</th>
			<th>TRAIN NUMBER</th>
			<th>STARTING POINT</th>
			<th>DESTINATION</th>
			<th>ARRIVAL TIME</th>
			<th>DEPARTURE TIME</th>
        </tr>
	  </thead>
	  <tbody>
    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
		<tr>
			
			<td><?php echo $rows['train_name']; ?></td>
			<td><?php echo $rows['train_number']; ?></td>
			<td><?php echo $rows['starting_point']; ?></td>
			<td><?php echo $rows['destination']; ?></td>
            <td><?php echo $rows['arrival']; ?></td>
            <td><?php echo $rows['departure']; ?></td>
		</tr>
    <?php
        }
    ?>	
	  </tbody>
    </table>
    <a href="booking.php" class='button'>  CONTINUE BOOKING  </a>
    <a href="navigate.php" class='button'> HOME </a>
    
    </div> <!--content class-->
  </body>
</html>