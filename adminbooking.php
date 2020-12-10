<?php
session_start();
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn)
{  
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: '.mysqli_connect_error());  
}
$query="SELECT train_booked.name, train_booked.age, train_booked.gender, train_booked.adhar, train_booked.phone, 
train_booked.train_booked, login.email FROM login JOIN train_booked ON login.id = train_booked.user_id ";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>BOOKINGS DISPLAY</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  <style>
  body
        {
            
            background-image: url('train3.jpg');
           
        }
        
        h1{
            text-align: center;
            width:30%;
           margin-right:200%;
            margin-left:35%;
            margin-top: 1%;
            color:black;
            background-color:#ebf8db;
            opacity: 0.7;
        
        }
        table,th,td{

border: 1px solid #ffffff;
}
.bor{
    background:rgba(0,0,0,0.5);
    padding-top:1%;
    height:700px;
}
table{
margin-top:4%;
margin-left:5%;

          
width: 1400px;
font-family: "Times New Roman", sans-serif;
font-size: 18px;
line-height: 150%;
text-align: center;
}
th{

background:linear-gradient(#d8e4a8,#53650c);
color: #ffffff;

}

td{
    color: #000000;
   

padding:1.7%;

}
tr td{
    background-color:#ebf8db;
}

tr{
    opacity: 0.9;

}
tr.header{
opacity: 1;
}

tr:hover{
opacity: 1;
}
th:first-child, td:first-child{
text-align: left;
}
a
        {
          text-decoration:none;
          font-size:160%; 
          background-color:#ebf8db;
            opacity: 0.7;
            margin-left:5%;
            color:black;
            padding-right:4%;
            padding-left:4%;
           padding-top:1%;
           padding-bottom:1%;
            
        }
    
        a:hover{
            background-color:grey;
        
        }
  </style>
  <div class="bor">
    <table class="cal">
      <h1>PASSENGER BOOKINGS</h1>
      <thead>
        <tr>
			
			<th>NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
			<th>ADHAR</th>
			<th>PHONE</th>
			<th>TRAIN BOOKED</th>
            <th>EMAIL</th>
        </tr>
      </thead>
	  <tbody>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        
        <tr>
			
			<td><?php echo $rows['name']; ?></td>
			<td><?php echo $rows['age']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['adhar']; ?></td>
            <td><?php echo $rows['phone']; ?></td>
            <td><?php echo $rows['train_booked']; ?></td>
            <td><?php echo $rows['email']; ?></td>

		</tr>
    <?php
        }
    ?>	
	  </tbody>
    </table><br><br>
    <a href="adminnavigation.php">Home</a>
    </div>
    
  </body>
</html>