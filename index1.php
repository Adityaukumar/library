<?php
  session_start();
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['rollno']);
  	header("location: index.php");
  }
  $count=1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>User HomePage</title>
                                     <!--BOOTSTRAP-->
	<link rel="stylesheet"   href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>  
    @import url('https://fonts.googleapis.com/css?family=copse');
        body{
            background-color:#f7f7f7;
            background-repeat:no-repeat;
            background-attachment:none;
            background-size:100%;
        } 
        /* .container-fluid{
          background-color:whitesmoke;
        } */
.navbar{
  margin-left:3.8x;
}
.navbar-brand{
  font-style:normal;
  font-size:2.5em; 
  margin-left:20px;
}
.nav-link{
  font-family:'copse';
  font-size:1.77em;
  margin-left:0px;
}
.article{
	color:white;
}
.header{
	color:white;
}
table td{
  color:white;
  margin-right:300px;
}
table {
  margin-right:300px;
}
marquee{
 font-size:1em;
  color:#3892db;
}
a{
  font-family:'copse';
  color:white;
  text-decoration:none;
}
a:hover{
    text-decoration:none;
    color:white;
}
.submit{
background-color:#3498db;
color:white;
border:1px solid #3498db;
width:20%;
padding:10px 20px;
font-size:1.1em;
cursor:pointer;
margin:10px;
transition:1s;
position:relative;
overflow:hidden;
}
.submit:hover{
  border:1px solid #3498db;
color:#3892db;
background:white;
font-family:sans-serif,Times;
font-size:1.13em;
}
u{
  text-decoration-color:violet;
}
h3{
 font-family:'copse';
    color:white;
}
#notif{
    color:white;
}
.badge{
    position: relative;
    left: 50px;
    bottom: 20px;
    background-color: red
}
#title{
    position: relative;
    left: 60px;
}
.show{
  right: 0px;
}
</style>
</head>
<body>
 <!--GNI LIBBRARY logo-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar" href="index.php">
     <div class="logo"><img src="gni.jpg" width="160" height="80" class="d-inline-block align-top" alt="GNI">
         </div> </a>  
  <div class="container-fluid">
         <a href="index.php"><h2>Home</h2></a>
                   
	<div class="header"><h1><a href="index1.php" id='title'>Student HomePage</a></h1></div><br><br>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
			<?php endif ?>

		<!-- logged in user information -->
<div class="article">		
	<?php  if (isset($_SESSION['username'])) : ?>
<p><h2><u>Welcome <strong><?php echo $_SESSION['username'];?>!</strong></u></h2></p>
</div>
<ul class="navbar-nav mt-2 mt-sm-0">
<li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="badge"><?php echo $count ?></span> <img src="bell.png" width="40px" height="40px"> <b id="notif">Notifications</b></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item">
<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
$sql="SELECT LastRBook,LastRDate FROM account WHERE rollno IN(SELECT rollno FROM user) LIMIT 1";
$result=mysqli_query($db,$sql);
while($row3=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo  "<strong><u>RENEWED BOOK</u></strong>"."<td><h4>{$row3['LastRBook']}</h4></td>";
echo  "<strong><u>RENEWED DATE</u></strong>"."<td><h4>{$row3['LastRDate']}</h4></td>";   
}
if(!$result)
{
echo "No Notifications";
}
?>
</a>
</div>
</li>
</ul>

<form class="form-inline my-2 my-lg-0">
<button class="btn btn-success my-2 my-sm-0" type="submit"><h3 style="margin:0px;"> <a href="login.php?logout='1'" style="color:white;margin:0px;">logout</a></h3></button>
<?php endif ?>
</form>
</div>
</div>
</div>
</nav>
<img src="777.jpg" width="100%" height="454px"><br>
<div class="container-fluid">
<form  method="post" action="index1.php">                                                      
        <center><button class="submit" name="submit">VIEW LIBRARY DATA!</button>        
             <button class="submit" name="s2">USER RECORD!</button><br>
</center></form>
<br>   
<?php
   if(isset($_POST['submit']))
{  
  $i=1;
  echo "<center><h1><u>LIBRARY RECORD</u></h1></center>"."<br>";
  echo "<table class='table table-hover table-dark'><thead>";
  echo "<tr><th scope='col'>S.No</th>";
  echo "<th scope='col'>BOOK IMAGE</th>"."<th scope='col'>BOOK ID:</th>";
  echo "<th scope='col'>BOOK NAME:</th>"."<th scope='col'>Type of Book</th>";
  echo "<th scope='col'>BOOK RATING:</th>";
  echo "</tr></thead>";
  echo "<tbody><tr>";
  include("sql.php");
  while($row=mysqli_fetch_array($result))
  { 
  echo  "<th scope='row'>".$i;  
  echo "<td>".'<img height="100" width="100" src="data:image;base64,'.$row['image'].' ">'.'</td>';
  echo   "<h4><td>".$row['Nbookid']."</h4></td>";
  echo   "<h4><td>".$row['NbookNames']."</h4></td>";
  echo   "<h4><td>".$row['Type']."</h4></td>"."<h4><td>".$row['rate']." / 10</td></h4></tr></th>";
  $i++;  
  }
  echo "</tbody></table>";
  }
  if(isset($_POST['s2']))
  { 
    echo  "<br>"."<form method='post' action='index1.php'>";
     echo "<center><b>STUDENT ID:</b>  <input type='text' name='rollno' placeholder='STUDENT ROLLNO! ...'>"."<br>";
     echo "<br>"."    <button class='submit' name='data'>CLICK HERE!</button></center>"."<br>";
     echo "</form>"."<br>";
    }
    include('sql.php');
?>
</table>
</div>                                                                                                         
<br><marquee direcction="left" scrollamount="4"><h2>STUDENT BOOKS RECORD DATA</h2></marquee>
</body>
</html>