<?php
  $insert=false;
  $update=false;
  $delete=false;
  $servername="localhost";
  $username="root";
  $password="";
  $databasename="notes";
  $conn=mysqli_connect($servername,$username,$password,$databasename);
  if(!$conn)
  {
    die("Sorry we falid to connect".mysqli_error());
  }
  if(isset($_GET['delete']))
  {
    $sno=$_GET['delete'];
    $delete=true;
    $sql="DELETE FROM `notes` WHERE `sno`=$sno";
    $result=mysqli_query($conn,$sql);
  }
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if(isset($_POST['snoEdit']))
    {
      //update
      $sno=$_POST["snoEdit"];
      $title=$_POST["titleEdit"];
      $discription=$_POST["discriptionEdit"];
      $sql="UPDATE `notes` SET `title`='$title' , `discription`='$discription' WHERE `sno`='$sno'";
      $result=mysqli_query($conn, $sql);
      if($result){
        $update=true;
      }
    }
    else {
      $title=$_POST['title'];
      $discription=$_POST['discription'];

      $sql="INSERT INTO `notes` (`title`, `discription`) VALUES('$title', '$discription')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        $insert=true;
      }
      else {
        echo "the record is not inserted successfull".mysqli_error();
      }
  }
  }
?>
