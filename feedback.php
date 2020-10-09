<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
          }
          body {
            margin-top: 60px;
            font-size: 120%;
          }
           .content {
            box-shadow:4px;
            margin-left:500px;
            width: 30%;
            padding: 20px;
            border: 1px solid #B0C4DE;
            border-radius: 0px 0px 10px 10px;
          }
          .input-group {
              color:black;
            margin: 8px 0px 8px 0px;   
          }
          .input-group input {
            height: 30px;
            width: 23%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
          }
          .btn {
              width:250px;
            padding: 10px;
            font-size:1em;
            color:white;
            background-color:rgb(18, 158, 18);
            border: none;
            border-radius: 5px;
          }
          .btn:hover{
             background-color:rgb(18, 146, 17);
               display:inline-block;    
               box-shadow:4px;
                }
          .error {
            width: 92%; 
            margin: 0px auto; 
            padding: 10px; 
            border: 1px solid #a94442; 
            color: #a94442; 
            background: #f2dede; 
            border-radius: 5px; 
            text-align: left;
          }
          .success {
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            margin-bottom: 20px;
          }
          a:hover{
            font-size:1.3em;
          }
          header{
              font-size:2em;
              color:red;
          }
          .box{
        margin:5px;
        padding:23px;
        border:5px;
        border-style:solid;
        background-color:#ffffff;
        color:darkgray;
        box-shadow:5px;
        border-radius:4px;
          }
          a{
   margin-top:60px; 
    margin-left:10px;
    font-size:2em;
    color:darkblue;
    background:none;
    border-radius:10px;
    text-decoration:none;
    }
a:hover{
    border-radius:4px;
    font-size:2em;
    border:2px solid #3893db;
    background-color:white;
    color:#3892db;
    width:70%;
}
        </style>
</head>
<body>
 <header><center><b>FEEDBACK FORM</b></center></header><br>   
<div class="box">
&nbsp;&nbsp;<a href="index.php"><img src="home.png" width="35px" height="30px">&nbsp;HOME</a>&nbsp;&nbsp;
<form method="post" action="feedback.php">
 <center>    <div class="input-group">
    Name:   &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="your Name">
   </div>
   <br>
   <div class="input-group">
     Email:  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<input type="text" name="email" placeholder="your Email here">
   </div>
  <br>
   <div class="input-group">
Comments:  <input type="text" name="comment" placeholder="your message here"> 
   </div>
  <br>
   <div class="input-group">
Book Name:  <input type="text" name="Bname" placeholder="Favourite Book Name.."> 
   </div>
  <br>
   <div class="input-group">
     Rating:  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;1<input type="range" name="rate" min='1' max='10'>10
   </div>
</center> 
<br>
   <div class="input-group">
  <center> <button type="submit" class="btn" name="submit">SUBMIT</button></center> <!--to send feedback-->
   </div>
</div> 
</form>
</body>
</html> 