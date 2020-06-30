<?php
 ob_start();
  $conn = mysqli_connect('localhost','root','','sidhart1_wdm');
    
 
  $query= 'select * from administrator';
  $result= mysqli_query($conn,$query);
  $query1= 'select * from sign_up';
  $result1= mysqli_query($conn,$query1);
  $rows = mysqli_fetch_assoc($result1);
  $user = $_GET['user'];
  while ($rows = mysqli_fetch_assoc($result)){
  if ($user == $rows['username'])
  {


    echo("<script>location.href = '/home_ad';</script>");
  }
  else {
        echo("<script>location.href = '/home';</script>");


  }
  }
ob_end_flush();

  ?>