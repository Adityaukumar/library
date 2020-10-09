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
  	header("location: index.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin's HomePage</title>
                                     <!--BOOTSTRAP-->
	<link rel="stylesheet"   href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<style>  
    @import url('https://fonts.googleapis.com/css?family=copse');
    @import url('https://fonts.googleapis.com/css?family=Sofia');
      
   body{
            background-color:#f7f7f7;
            background-repeat:no-repeat;
            background-attachment:none;
            background-size:100%;
        } 
        .container-fluid{
          background-color:whitesmoke;
        }
.navbar{
  margin-left:3.8x;
}
.navbar-brand{
  font-style:normal;
  font-size:2.5em; 
  margin-left:25px;
}
.nav-link{
  font-style:italic;
  font-size:1.77em;
  margin-left:20px;
}
.nav-link:hover{
  font-style: normal;
}
.article{
	color:white;
}
a{
   font-family:'copse';
    text-decoration:none;
   text-align:center;
	color:white;
}
a:hover{
    text-decoration:none;
    color:white;
}
u{
  text-decoration-color:violet;
}
table td{
  color:white;
  margin-right:300px;
}
table {
  margin-right:300px;
}
marquee{
  color:#3289db;
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
.container{
  border:2px solid black 
}
</style>
</head>
<body>
 <!--GNI LIBBRARY logo-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar" href="index.php">
     <div class="logo"><img src="gni.jpg" width="160" height="80" class="d-inline-block align-top" alt="GNI">
         </div> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="index.php"><h2>Home</h2></a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			 
	<div class="header"><h2><a href="admin.php">Admin HomePage</a></h2></div><br><br>
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
<p><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Welcome <strong><?php echo $_SESSION['username'];?>!</strong></u></h2></p>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form class="form-inline my-2 my-lg-0">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><h3> <a href="login.php?logout='1'" style="color:white;">logout</a></h3></button>
<?php endif ?>
</form>
</div>
</div>
</nav>
<img src="777.jpg" width="100%" height="447px"><br>
<!--OPTIONS FOR ADMIN-->
<br><form method="post" action="admin.php">   
<center>
&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="view"><b>VIEW STUDENTS</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="add"><b>ADD BOOK</b></button>&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="delete"><b>DELETE BOOK</b></button><br>
<br><Br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="bcount"><b>BOOKS COUNT</b></button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="udate"><b>UPDATE RENEWEL DATE</b></button>&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="submit" name="fback"><b>VIEW FEEDBACKS</b></button>&nbsp;&nbsp;
</center>
</form><br>
<?php 
 if(isset($_POST['add']))
 { 
  echo "<div class='container'>";
 echo "<center>"."<h3><u>ADD a BOOK</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='upload.png' width='35px' height='35px'></h3>";    
echo "<br>"."<form method='post' action='admin.php' enctype='multipart/form-data'>";
echo "<b>NEW BOOK NAME:&nbsp;<input type='text' name='newbook' placeholder='add new book name..'>"."<br><br>";
echo  "NEW BOOK ID&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type='text' name='bookid' placeholder='new book id here..'>"."<br>";
echo "<br>"."Type Of Book&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type='text' name='Type' placeholder='Eg:Advanced book,Engineering book'>"."<br>";
echo  "<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW BOOK IMAGE</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' name='image' value='choose file' placeholder='new image file here..'>"."<br>";
echo "<button class='submit' name='add1'>upload</button><br>";
echo "</form></center></div>"."<br>";
include('sql.php');
}
if(isset($_POST['delete']))
{   
    echo "<div class='container'>";
    echo "<center><h3><u>DELETE BOOK</u></h3>";
    echo "<br>"."<form method='post' action='admin.php'>";
    echo "<b>BOOK NAME&nbsp;:&nbsp;<input type='text' name='Dbook' placeholder='deleting book name..'>"."<br>";
    echo "<br>"."BOOK ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type='text' name='bookid' placeholder='deleting book id here..'>"."<br>";
    echo "<br>"."Type of Book&nbsp;:&nbsp;&nbsp;</b><input type='text' name='Type' placeholder='Eg:Engg.book,General book'>"."<br>";
    echo "<br><button class='submit' name='d1'>submit</button>";
    echo "</form></center>"."<br>";
    echo "<br>";
    include('sql.php');
}
if(isset($_POST['udate'])){
   echo "<div class='container'>"; 
   echo "<center><b><h3><u>UPDATE STUDENT RECORD</u></h3>";
   echo "<br>"."<form method='post' action='admin.php'>";
   echo "ENTER STUDENTS ROLLNO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type='text' name='rno'  placeholder='students id'>"."<br>";
   echo "<br>"."LAST RENEWED BOOK NAME(To Change)&nbsp;&nbsp;:&nbsp;<input type='text' name='LRB'  placeholder='Last Renewed Book..'>"."<br>";
   echo "<br>"."LAST RENEWED BOOK DATE(To Change)&nbsp;&nbsp;&nbsp;:&nbsp;<input type='date' name='LRD'  placeholder='Last Renewed Date..'>"."<br>";
   echo  "<br>"."PENDING BOOK COUNT(To Submit) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type='text' name='PC'  placeholder='Pending book bount....'></b>"."<br>";
   echo "<br><button class='submit' name='ud1'>SUBMIT!</button></div></center>";
   echo "</form></center>"."<br>";
   include('sql.php');
}
include('sql.php');
?>
</body>
</html>