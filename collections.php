<!DOCTYPE html>
<html>
<head>
	<title><h2>BOOKS COLLECTION</h2></title>
                                     <!--BOOTSTRAP LINKS-->
	<link rel="stylesheet"   href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style>  
        body{
            background-color:#f7f7f7;
            background-repeat:no-repeat;
            background-attachment:none;
            background-size:100%;
        } 
        .container-fluid{
          background-color:white;
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
  font-family:times,serif,sans-serif,arial,courier;
  font-size:2em;
  margin-left:20px;
}
.article{
	color:darkblue;
}
a{
   text-decoration:none;
   text-align:center;
   color:black;
}
a:hover{
    text-decoration:none;
	color:darkgreen;
}
.header{
  color:red;
  font-weight:2.3em;
  font-family:serif,sans-serif,arial,courier;
}
/*button stylings*/
.btn{
border:1px solid #3498db;
background:none;
padding:10px 20px;
font-size:15px;
cursor:pointer;
margin:10px;
transition:1.5s;
position:relative;
overflow:hidden;
}
.btn1,.btn2{
  color:#3498db;
}
.btn3{
  color:#3498db;
}
.btn::before{
  content=" ";
  transition:1.6s;
  content:" ";
  position:absolute;
  left:0;
  width:100%;
  height:0%;
  background:#3498db;
  Z-index:-1;
}
.btn1:hover,.btn2:hover,.btn3:hover{
background-color:#3498db;
color:white;
border-color:#3498db;
font-family:sans-serif,Times;
font-size:1em;
}
.btn1::before,.btn2::before{
  top:0;
  border-radius:0 0 50% 50%;
}
.btn3::before{
  top:0;
  border-radius:0 0 50% 50%;
}
.btn1:hover::before,.btn2:hover::before,.btn3:hover::before{
  height:180%;
  background:#3498db;
  color:white;
}
u{
  text-decoration-color:purple;
}
</style>
</head>
<body>
 <!--GNI LIBBRARY logo-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar" href="index.php">
     <div class="logo"><img src="logo.png" width="260" height="90" class="d-inline-block align-top" alt="GNI">
         </div> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 
	<div class="header"><a href="collections.php"><h1>Library Books Page &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></a></div>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li class="nav-item dropdown">  
   <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="menu.png" width="26px" height="26px">&nbsp;<b>Menu</b><span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 
              <a class="dropdown-item" href="register.php"><B>Sign Up!</b></a>   
             <div class="dropdown-divider"></div>  
             <a class="dropdown-item" href="feedback.php"><b>Feedback Here!</b></a>                
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="about.html"><b>About us!</b></a>
              </li>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="nav-item active">
            <a class="nav-link" href="index.php"><img src="home.png" width="38px" height="30px">&nbsp;<b>HOME</b><span class="sr-only">(current)</span></a>
            </li>
         </ul>
      </div>  
   </nav>
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
<img src="COLLECTIONS.jpg" width="100%" height="300px"><br>
<div class="container">
<form method="post" action="collections.php">   
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn1" cls="btn" name="view2"><b>ENGINEERING BOOKS COLLECTION!</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn2" name="view3"><b>ADVANCED BOOKS COLLECTION!</b>&nbsp;&nbsp;&nbsp;&nbsp;</button>
&nbsp;&nbsp;&nbsp;<button class="btn btn3" name="view4"><b>GENRAL BOOKS COLLECTION!</b>&nbsp;&nbsp;&nbsp;&nbsp;</button>
</div>
</form><br><br>
<?php
if(isset($_POST['view2']))
{
include('sql.php');
$qry="SELECT image,Nbookid,NBookNames,Type FROM books WHERE Type='Engineering book'";
$result=mysqli_query($db,$qry);
$i=1;
echo "<center><h1><b><u>Engineering Books:</u></b></h1></center>"."<br>";
echo "<table class='table table-hover table-dark'><thead>";
echo "<tr><th scope='col'>S.No</th>";
echo "<th scope='col'>BOOK IMAGE</th>"."<th scope='col'>BOOK ID:</th>";
echo "<th scope='col'>BOOK NAME:</th>"."<th scope='col'>Type of Book</th>"."</tr></thead>";
echo "<tbody><tr>";
while($row=mysqli_fetch_array($result))
{ 
echo  "<th scope='row'>".$i;  
echo "<td>".'<img height="100" width="100" src="data:image;base64,'.$row['image'].' ">'.'</td>';
echo   "<h4><td>".$row['Nbookid']."</h4></td>";
echo   "<h4><td>".$row['NBookNames']."</h4></td>";
echo   "<h4><td>".$row['Type']."</h4></td></tr></th>";
$i++;  
}
echo "</tbody></table>";
}

if(isset($_POST['view3']))
{
include('sql.php');
$qry="SELECT image,Nbookid,NBookNames,Type FROM books WHERE Type='Advanced book'";
$result=mysqli_query($db,$qry);
$i=1;
echo "<center><h1><b><u>Advanced Collections:</u></b></h1></center>"."<br>";
echo "<table class='table table-hover table-dark'><thead>";
echo "<tr><th scope='col'>S.No</th>";
echo "<th scope='col'>BOOK IMAGE</th>"."<th scope='col'>BOOK ID:</th>";
echo "<th scope='col'>BOOK NAME:</th>"."<th scope='col'>Type of Book</th>"."</tr></thead>";
echo "<tbody><tr>";
while($row=mysqli_fetch_array($result))
{ 
echo  "<th scope='row'>".$i;  
echo "<td>".'<img height="100" width="100" src="data:image;base64,'.$row['image'].' ">'.'</td>';
echo   "<h4><td>".$row['Nbookid']."</h4></td>";
echo   "<h4><td>".$row['NBookNames']."</h4></td>";
echo   "<h4><td>".$row['Type']."</h4></td></tr></th>";
$i++;  
}
echo "</tbody></table>";
}

if(isset($_POST['view4']))
{
include('sql.php');
$qry="SELECT image,Nbookid,NBookNames,Type FROM books WHERE Type='General book'";
$result=mysqli_query($db,$qry);
$i=1;
echo "<center><h1><b><u>General Collections:</u></b></h1></center>"."<br>";
echo "<table class='table table-hover table-dark'><thead>";
echo "<tr><th scope='col'>S.No</th>";
echo "<th scope='col'>BOOK IMAGE</th>"."<th scope='col'>BOOK ID:</th>";
echo "<th scope='col'>BOOK NAME:</th>"."<th scope='col'>Type of Book</th>"."</tr></thead>";
echo "<tbody><tr>";
while($row=mysqli_fetch_array($result))
{ 
echo  "<th scope='row'>".$i;  
echo "<td>".'<img height="100" width="100" src="data:image;base64,'.$row['image'].' ">'.'</td>';
echo   "<h4><td>".$row['Nbookid']."</h4></td>";
echo   "<h4><td>".$row['NBookNames']."</h4></td>";
echo   "<h4><td>".$row['Type']."</h4></td></tr></th>";
$i++;  
}
echo "</tbody></table>";
}
?>
</body>
</html>