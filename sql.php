<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
             //LIBRARY RECORD
if(isset($_POST['submit']))
{
$sql="SELECT books.image,books.Nbookid,books.NbookNames,books.Type,feedback.rate FROM books INNER JOIN feedback ON books.NbookNames=feedback.Bname";
$result=mysqli_query($db,$sql);
if(!$result)
{
die("cannot connect to mysql");
}
}
                             //STUDENTS RECORD
                if(isset($_POST['data']))
                {
                 $rolln1 = mysqli_real_escape_string($db, $_POST['rollno']);
                 $query="SELECT LastRBook,LastRDate,PendingBooks FROM account where rollno='$rolln1'";
                  $result=mysqli_query($db,$query);
                  $i=1;
                  echo "<center><h1><u>USER RECORD</u></h1></center>"."<br>";
                  echo "<table class='table table-hover table-dark'><thead>";
                  echo "<tr><th scope='col'>S.No</th>";
                  echo "<th scope='col'>LAST RENEWED BOOK</th>"."<th scope='col'>LAST RENEWED DATE</th>";
                  echo "<th scope='col'>PENDING BOOKS COUNT</th>"."</tr></thead>";
                  echo "<tbody><tr>";
                  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                  {
                  echo "<th scope='row'>".$i;
                  echo  "<td><h5>{$row['LastRBook']}</h5></td>";
                  echo  "<td><h5>{$row['LastRDate']}</h5></td>"."<td><h5>{$row['PendingBooks']}</h5></td>";
                   echo  "</tr></th>";
                   $i++;              
                  }
                  echo "</center></tbody></table>"."<br>";
                  }
             //VIEW OPTION
if(isset($_POST['view']))
{
$sql="SELECT username,rollno FROM user";
$result=mysqli_query($db,$sql);
echo "<table class='table table-hover table-dark'><thead>";
echo "<tr><th scope='col'>s.no</th>"."<th scope='col'>Names Of Students</th>";
echo "<th scope='col'>RollNo. Of Students</th>"."</tr></thead>";
echo "<tbody><tr>";
$i=1;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<th scope='row'>".$i;
echo "<td><h5>{$row['username']}</h5></td>"."<td><h5>{$row['rollno']}</h5></td></tr></th>";
$i++;
}
echo "</tbody></table>";
}
                                    //BOOK COUNT & USERS COUNT
if(isset($_POST['bcount']))
{   
    $sql="SELECT COUNT(Nbookid) FROM books";
    $query="SELECT COUNT(username)FROM user";
    $result=mysqli_query($db,$sql);
    $retval=mysqli_query($db,$query);
    $row1=mysqli_fetch_array($retval,MYSQLI_ASSOC);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo "<table class='table table-hover table-dark'><thead>";
    echo "<tr><th scope='col'>s.no</th>"."<th scope='col'>Total Book Count</th>";
    echo  "<th scope='col'>Total No.Of Students</th></tr></thead>";
    $i=1;
    $row['Nbookid']=$row['COUNT(Nbookid)'];
    $row1['username']=$row1['COUNT(username)'];
    echo "<tbody><tr>";
    echo "<th scope='row'>".$i;
    echo "<td><h5>{$row['Nbookid']}</h5></td>"."<td><h5>{$row1['username']}</h5></td></tr></th>";
    echo "</tbody></table>";  
}
                                      //ADD OPTIION
if(isset($_POST['add1'])) 
{ 
    $newbook = mysqli_real_escape_string($db, $_POST['newbook']);
    $newbookid=mysqli_real_escape_string($db,$_POST['bookid']);
    $type=mysqli_real_escape_string($db,$_POST['Type']);
    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
    {
     echo "PLEASE SELECT A IMAGE FILE";
    }
else
{
$image=addslashes($_FILES['image']['tmp_name']);
$name=addslashes($_FILES['image']['tmp_name']);
$image=file_get_contents($image);
$image=base64_encode($image);
                                                               //SAVE IMAGE
$sql="INSERT INTO books (NBookNames,Nbookid,image,Type) 
         VALUES('$newbook','$newbookid','$image','$type')";  
$result=mysqli_query($db,$sql); 
echo "<br>"."<center><img src='checked.png' width='45px' height='45px'>"."<br>";   
echo "<br>"."<h1>ADDED SUCCESFULLY"."<br>";
if($result)
{
echo "IMAGE FILE UPLOADED</h1></center>";
}
}
}                                          //DELETE OPTION
 if(isset($_POST['d1']))
{
$type=mysqli_real_escape_string($db,$_POST['Type']);
$dbook=mysqli_real_escape_string($db,$_POST['Dbook']);
$bookid=mysqli_real_escape_string($db,$_POST['bookid']);
$sql="DELETE FROM books WHERE NBookNames='$dbook'AND Nbookid='$bookid'";
mysqli_query($db,$sql);
echo "DELETED SUCCESSFULLY";
}
                                            //UPDATE OPTION
if(isset($_POST['ud1']))
{
$rno=mysqli_real_escape_string($db,$_POST['rno']);    
$lrb=mysqli_real_escape_string($db,$_POST['LRB']);
$lrd=mysqli_real_escape_string($db,$_POST['LRD']);
$pc=mysqli_real_escape_string($db,$_POST['PC']);

if(!empty($lrb))
{
    $sql="UPDATE account SET LastRBook='$lrb' WHERE rollno='$rno'";
    mysqli_query($db,$sql);
if(!empty($lrd))
{
    $sql="UPDATE account SET LastRDate='$lrd'WHERE rollno='$rno'";
    mysqli_query($db,$sql);
if(!empty($pc))
{
 $sql="UPDATE account SET PendingBooks='$pc'WHERE rollno='$rno'";
 mysqli_query($db,$sql);     
echo "UPDATED SUCCESSFULLY";   
}
}
}
}

if(isset($_POST['fback']))
{
$sql="SELECT * FROM feedback";
$que=mysqli_query($db,$sql);
echo "<table class='table table-hover table-dark'><thead>";
echo "<tr><th scope='col'>s.no</th>"."<th scope='col'>Username</th>";
echo "<th scope='col'>BookName</th>"."<th scope='col'>Rating</th>";
echo "<th scope='col'>Message</th>"."<th scope='col'>Email</th>";
echo "</tr></thead>";
echo "<tbody><tr>";
$i=1;
while($row=mysqli_fetch_array($que,MYSQLI_ASSOC))
{
echo "<th scope='row'>".$i;
echo "<td><h5>{$row['username']}</h5></td>"."<td><h5>{$row['Bname']}</h5></td>";
echo "<td><h5>{$row['rate']} / 10 </h5></td>"."<td><h5>{$row['msg']}</h5></td>"."<td><h5>{$row['email']}</h5></td></tr></th>";
$i++;
}
echo "</tbody></table>";
}
?>