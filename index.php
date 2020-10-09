<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GNI LIBRARY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--carousel scripts-->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
<!--top button scripts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">;
    <script src="https://ajax.googlapis.com/ajax/libs/jquery/3.3.1/jquery/min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
</head>  
<style>  
@import url('https://fonts.googleapis.com/css?family=Lobster');
@import url('https://fonts.googleapis.com/css?family=copse');
body{
  background-color:#f7f7f7;
  background-repeat:no-repeat;
  background-attachment:none;
  background-size:100%;
} 
.navbar{
  margin-left:auto;
  bottom:18px;
  margin-bottom:0px;
}
.navbar-brand{
  font-family:'Manuale';                        /*Lobster,,Great Vibes,audiowide,charmonman,sofia,copse*/
  font-style:normal;
  font-size:2.1em; 
  margin-left:25px;
}
.nav-link{
  font-family:'copse';
  font-style:normal;
  font-size:2.11em;
}
.nav-link:hover{
  transition:0.2s;
  cursor:pointer;
  background-color:#d6d4cd;
}
.show{
    width: 200px;
}
#text{
  font-family:'Lobster';
  font-size:1.3em;
}
article{
  font-family:Times,georgia,courier;
  margin-top:600px;
  font-size:2.0em;
  color:#050505;
}
hr{
  height:20px;
  size:2em;
  color:black;
}
.footer{
  font-size:1.7em;
  background-color:#05214f;
  color:whitesmoke;
  clear:both;
  text-align:center;
  padding:10px;	 	 
}
#copy{
  font-size:1.1em;
  color:gold;
  margin-left:30px;
}
#furt{
  color:gold;
  margin-right:30px;
}
#vis{
 color:gold;
 margin-right:110px;
}
u{
  text-decoration:none;
  color:gold;
}
a{
  font-weight:1.77em;
  font-family:Georgia;
}
.col-lg-4{
  font-weight:1.77em;
  font-family:georgia,courier,black;
}
#text{
  font-weight:1.35em;
  font-family:arial,serif;
}
#top{
  position:fixed;
  bottom:9px;
  right:18px;
  font-size:22px;
  width:54px;
  height:52px;
  background:black;
  color:#3892db;
  cursor:pointer;
  border:none;
  display:none;
}
.collapse{
  margin-left:50px;
}
.nav-item{
  margin-right:auto;
  margin-left:auto;
}
.container{
  margin-left:auto;
  margin-right:auto;
  width:-webkit-fill-available;
}

.glyphicon-chevron-right,.glyphicon-chevron-left{
opacity:0.8;
transition:1s;
}
.glyphicon-chevron-right:hover,.glyphicon-chevron-left:hover{
opacity:1;
transition:1s;
}
</style>
</head>
<body>
<!--GNI LIBBRARY logo-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar1" href="index.php">
    <div class="logo"><img src="gni.jpg" width="160" height="80" class="d-inline-block align-top" alt="GNI" style="margin-left:15px;margin-top:5px;margin-bottom:5px;"></div> </a>
<!--NAVBAR-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="width:905px; margin-left: 50px;">
        <li class="nav-item active" style="margin-left:40px;">
          <a class="nav-link" href="index.php"><b>Home</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">                            
          <a class="nav-link" href="login.php"><b>Signin!</b></a>
        </li>
        <li class="nav-item">          
          <a class="nav-link" href="collections.php"><b>Library Collections</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Quick Guide</b></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="about.html"><h4><strong>About us</strong></h4></a>
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="contact.html"><h4><strong>Contact us</strong></h4></a>             
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="feedback.php"><h4><strong>Feedback</strong></h4></a>               
          </div>
        </li>
      </ul>    
      <div class="search" style="height:50px;padding-top:6px;">
        <form class="form-inline my-2 my-lg-0" method="post" action="index.php" style="margin-left:0px;width: 667px;padding-left: 60px;">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Eg:&nbsp;Book name &nbsp;or&nbsp; Book Id" aria-label="Search" style="width:360px;height:43px;">
            &nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary  my-2 my-sm-0" name="s4" id="s4" type="submit" style="margin-left: 35px;">
           <i class="fa fa-search">&nbsp;
           Search</i></button>
        </form>
      </div>
    </div>
  </nav>
<?php
if(isset($_POST['s4'])){
include("sql.php");
$search=mysqli_real_escape_string($db,$_POST['search']); 
$sql="SELECT image,NBookNames,Nbookid,Type FROM books WHERE NBookNames='$search'or Nbookid='$search'";
$result=mysqli_query($db,$sql);
$i=1;
echo "<div class='table-responsive'>";      
echo "<table class='table  table-hover table-striped table-borderless table-dark'><thead>";
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
echo "</tbody></table></div>";
}
?>
<!--CARASOUL STYLE-->
<div class="container">
             <div id="my-slider" class="carousel slide" data-ride="carousel">
              <!--indicators  dot nav -->  
                 <ol class="carousel-indicators">
                   <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                   <li data-target="#my-slider" data-slide-to="1"></li>     
                   <li data-target="#my-slider" data-slide-to="2"></li>
                   <li data-target="#my-slider" data-slide-to="3"></li>      
                  </ol>                 
              <!--wrapper for slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="item">
                    <center> <img src="pic12.jpg" height="450px" width="900px" alt="library"/></center>
                    <div class="carousel-caption">
                      <h1>LIBRARY COLLECTIONS</h1>
                    </div>
                  </div>
                  <div class="item active">
                   <center> <img src="L1.jpg" height="450px" width="900px"  alt="library"/></center>
                   <div class="carousel-caption">
                     <h1>DIGITAL LIBRARY</h1>
                   </div>
                 </div>
                 <div class="item">
                <center><img src="gniach.jpg" height="450px" width="900px" alt="library"/></center>
                 <div class="carousel-caption">
                   <h1>GNI ACHIEVEMENTS</h1>
                 </div>
               </div>                  
               <div class="item">
               <center><img src="col.jpg" height="450px" width="900px" alt="library"/></center>
               <div class="carousel-caption">
                 <h1>NEW BOOK COLLECTIONS </h1>
               </div>
             </div>
         </div>
            <!--controls or next and prev buttons-->
                 <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev" style="width:0px;">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#my-slider" role="button" data-slide="next" style="width:0px;">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
             </div>
      </div>
      <br>
      <br>
<marquee direction="right" scrollamount="3" behaviour="alternate"><center><h1><b>LIBRARY OPENING TIMINGS:9:30 AM </b></h1></center></marquee><br>
       <!--Books Albums-->
 <br>    <br> <br>
  <div class="col-lg-4" style="left:50px;bottom:5px;">
        <rect width="100%" height="100%"><img src="cdbook1.jpg" width="230px" height="330px" class="img-responsive"></rect><text x="100%" y="100%" fill="#777" dy=".3em"></text>
        <h2>Enginneering Books</h2>
        <p id="text">Books related for specific branches are also<br> provided in this library.Local Authors guided <br>Published books  are  provided in this library.</p>
         <br><a class="btn btn-primary" href="collections.php" role="button">View details</a>
      </div>
      <div class="col-lg-4">  
    <rect width="50%" height="50%" fill="#777"></rect><img src="cc.jpg" width="250px" height="350px"></rect><h2>Advanced Collections</h2>
        <p id="text">Advanced informative books are provided in this library.Books like cloud computing and Machine learning are provided to bring more information to students and faculty.</p>
        <p><br><a class="btn btn-primary" href="collections.php" role="button">View details</a></p>
      </div>
        <div class="col-lg-4">
        <rect width="100%" height="100%" fill="#777"><img src="gate.jpg" width="250px" height="350px"></rect><text x="100%" y="100%" fill="#777" dy=".3em"></text></svg>
        <h2>General Books & Journals</h2>
        <p id="text">General books are also provided along with many journals published recently on new topics.This journals have various information on various topics.Along with Msc and Mtech books.</p>
        <p><br><a class="btn btn-primary" href="collections.php" role="button">View details</a></p><br><br><br>
      </div>
      <div class="col-lg-4" style="left:50px;bottom:5px;">
            <br><br><br><br> 
           <rect width="100%" height="100%"><img src="osbook.jpg" width="230px" height="230px" class="img-responsive"></rect><text x="100%" y="100%" fill="#777" dy=".3em"></text>
                    <h2>Enginneering Books</h2>
                    <p id="text">Books related for specific branches are also<br> provided in this library.International Authors<br> Published books and Local Authors guided <br>Published books  are  provided in this library.</p>
                     <br><a class="btn btn-primary" href="collections.php" role="button">View details</a>
                  </div>
                  <div class="col-lg-4">
             <br><br><br><br><br><rect width="100%" height="100%" fill="#777"></rect><img src="mech.jpg" width="250px" height="350px"></rect><h2>Advanced Collections</h2>
                    <p id="text">Advanced informative books are provided in this library.Books like cloud computing and Machine learning are provided to bring more information to students and faculty.</p>
                    <p><br><a class="btn btn-primary" href="collections.php" role="button">View details</a></p>
                  </div>
                    <div class="col-lg-4" >
               <br> <br><br> <br> <br> <rect width="100%" height="100%" fill="#777"><img src="gre.jpg" width="250px" height="350px"></rect><text x="100%" y="100%" fill="#777" dy=".3em"></text></svg>
                    <h2>General Books & Journals</h2>
                    <p id="text">General books are also provided along with many journals published recently on new topics.This journals have various information on various topics.Along with Msc and Mtech books.</p>
                    <p><br><a class="btn btn-primary" href="collections.php" role="button">View details</a></p><br><br><br><br><br><br>
        </div>
      </div>
        <article>
          <hr class="divider">
         <center><h1>GNI LIBRARY</h1></center><br>
              The Guru Nanak Institute of Technology (GNIT) offers B. Tech degree in Computer Science & Engineering, Electronics & Communication Engineering, Electrical & Electronics Engineering, Information Technology, Mechanical Engineering and Civil Engineering.<br>
              <br> It was established for imparting engineering education and for promoting technological research to generate technical manpower in various areas of engineering and technology. 
              <br>Since its inception, the college is committed to the cause of technical up gradation.<br><Br>
             <br> Its a matter of pride that the college is eminent for its excellent academic and extra-curricular standards. 
             <br>The college is committed to educate, enrich and excel in imparting top quality professional Education by the faculty, who endeavor to mentor the students while striving continuously to improve through team work, innovation and research.<br>
             <br> Guru Nanak Institute of Technology is an element college of Guru Nanak Institutions, Hyderabad and a premier institution that takes the Challenging task of engineering and technological world and continuing as a pioneer in the field of education.
          </article><br><br>
<!--FOOTER SECTION-->             
         <br><BR> <div class="footer" >
          <p id="copy" ><b>Copyrights &copy; 2019 GNI&nbsp;&nbsp;|&nbsp;&nbsp;ALL Rights Reserved </b> 
                <div style="float:left">
               <p align='left'> 
         <b><u> VISION:</u></b>
                <br>  <b> <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "To be inspired is great. But to inspire is incredible!"</i></b><br>
           <br>     <b><u> MISSION:</u></b>
                <br>  <b> <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "One who studies, excels in an official career."</i></b> <br>     
              <br>  Guru Nanak Institute Of Technlogy
              <br>  Ibrahimpatnam,RR District.
              <br>  College Code:&nbsp;&nbsp;83
            </p>
                        </div>
                <p align="right" id='furt'>
             <u><b>  For Further Details:</b></u></p>
            <p align='right'>Contact us:8008285550/51/53
            <br> Email: gnes_hyd@yahoo.com <br> 
            <br> Follow us At:&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/gurunanakinstitutionsindia"><img src="facebook.png" width="36px" height="36px"></a>&nbsp;&nbsp;&nbsp;
                        <a href="https://www.instagram.com/gurunanakinstitutions"><img src="instagram.png" width="36px" height="36px"></a>&nbsp;&nbsp;&nbsp;
                        <a href="https://www.youtube.com/user/GNInstitutions"><img src="youtube.png" width="36px" height="36px"></a></p>
     <p id="copy" align="right">
   <br> <b><u> Library Management System</u></b>
    <br><b id="vis">Designed By Aditya</b>
      </p>
 
     </div> 
    <!--TOP BUTTON-->
<button id="top"><i class="fas fa-arrow-up"><br>Top</i></button>
    </body>
</html>