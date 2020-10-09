<?php
session_start();

// initializing variables
$username = " ";
$email    = " ";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');           //host  username  password   databasename//
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $rollno=mysqli_real_escape_string($db,$_POST['rollno']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($rollno)) { array_push($errors, "rollno is required"); }
  if(strlen($rollno)<9){array_push($errors,"rollno should be valid one!");}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if($user['rollno']===$rollno){
      array_push($errors,"roll number already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);  //encrypt the password before saving in the database
  	$query = "INSERT INTO user(username, email, password,rollno) 
  			  VALUES('$username', '$email', '$password','$rollno')";
    mysqli_query($db, $query);
    $sql="INSERT INTO account (rollno) 
                                     VALUES('$rollno')";  
      mysqli_query($db,$sql); 
    if(count($errors) == 0){
      echo "you are Registered";
     header('location:login.php');       
    }  
  }
}

//...

// LOGIN USER
if (isset($_POST['login_user']))
 {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']); 
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0)
     {
        $password_1 = md5($password); 
        $query = "SELECT username,password FROM user WHERE username='$username' AND password='$password_1'";
        $results=mysqli_query($db,$query);
       if(mysqli_num_rows($results) == 1)      //condition checking true(1) false(0)
      {                                            //for regular students,users    
    $_SESSION['username'] = $username;
    header('location:index1.php');
    if($username=="admin"){
    header('location:admin.php');
    }
  }
  else{
    array_push($errors,"Incorrect Username! or Invalid Password!");
  }
}
}
     //feedback form
     if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email1=$_POST['email'];
      $rate=$_POST['rate'];
      $msg=$_POST['comment'];
      $bname=$_POST['Bname'];
      if (empty($username)) {
        echo "Username is required";
        array_push($errors, "Username is required");
    }
    if (empty($email1)) {
      echo "<br>"."<br>";
      echo "Email is required";
        array_push($errors, "Email is required");
    }
    if (count($errors) == 0)
    {
   $sql="INSERT INTO feedback(username,email,rate,msg ,Bname) VALUES('$username','$email1','$rate','$msg','$bname')";
   mysqli_query($db,$sql);
    header('location:index.php');      
    echo "feedback submitted";
  }
}

?>