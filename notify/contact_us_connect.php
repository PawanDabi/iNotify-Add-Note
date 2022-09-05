<?php
  $insert=false;
  $servername="localhost";
  $username="root";
  $password="";
  $databasename="notes";
  $conn=mysqli_connect($servername, $username, $password, $databasename);
  if(!$conn)
  {
    die("connection field".mysqli_error());
  }
    if(isset($_POST['submit']))
    {
      $firstName=$_POST['firstName'];
      $lastName=$_POST['lastName'];
      $EmailInfo=$_POST['EmailInfo'];
      $PhoneNumber=$_POST['PhoneNumber'];
      $comments=$_POST['comments'];

      $sql="INSERT INTO `contact` (`fname`, `lname`, `email`, `phoneno`, `comment`) VALUES('$firstName', '$lastName', '$EmailInfo', '$PhoneNumber', '$comments')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        $insert=true;
      }
      else {
        echo "the record is not inserted successfull".mysqli_error();
      }
    }
?>
