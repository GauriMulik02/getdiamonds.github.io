<?php
  $ffid=$_POST['ffid'];
  $eid=$_POST['eid'];
  $epass=$_POST['epass'];

  $conn=mysqli_connect("localhost","root","","ff") ;

  if($conn->connect_error)
  {
      die('Connection failed :'.$conn->connect_error);
  }
  else{
      $stmt=$conn->prepare("insert into aa(ffid,eid,epass) values(?,?,?)");
      $stmt->bind_param($ffid,$eid,$epass);
      $stmt->execute();
      echo "successfully...";
      $stmt->close();
      $conn->close();
  }
?>