<?php
session_start();
$conn = mysqli_connect("localhost","root","","demo");
if(!$conn)
{  
    echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: '.mysqli_connect_error());  
}
$query="SELECT * FROM login";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PASSENGER REGISTRATION</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body
        {
            
            background-image: url('train5.jpg');
           
        }
        
        h1{
            text-align: center;
         width:40%;
           margin-top:-2%;
            color:black;
            padding:1%;
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
margin-left:12%;

width: 1200px;
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
            margin-left:12%;
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
  </head>
  <body>
  <
  <div class="bor">
    <table class="cal">
    <caption><h1>PASSENGER REGISTER</h1></caption>
      <thead>
        <tr>
			<th>USER ID</th>
			<th>E-MAIL</th>
            <th>PASSWORD</th>
        </tr>
      </thead>
	  <tbody>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        
        <tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['password']; ?></td>
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