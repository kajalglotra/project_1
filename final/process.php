<?php 
  $servername = "localhost";
  $username = "excelarf";
  $password = "**T0y*6z8e0c";
   $dbname = "excelarf_kajal";
   $var   =$_GET['value'];
   $var1=$_GET['value2'];
  
   

   
  $conn = mysqli_connect($servername,$username,  $password, $dbname );
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    if($var=='true' && $var1=='dates')
  $result = $conn->query("SELECT * FROM Info ORDER BY dates   LIMIT 5");
  else if($var=='false' && $var1=='dates')
  $result = $conn->query("SELECT * FROM Info ORDER BY dates  desc LIMIT 5");
  else if($var=='true' && $var1=='email')
  $result = $conn->query("SELECT * FROM Info ORDER BY email   LIMIT 5");
  else if($var=='false' && $var1=='email')
  $result = $conn->query("SELECT * FROM Info ORDER BY email desc LIMIT 5");
   else if($var=='true' && $var1=='name')
  $result = $conn->query("SELECT * FROM Info ORDER BY name   LIMIT 5");
  else if($var=='false' && $var1=='name')
  $result = $conn->query("SELECT * FROM Info ORDER BY name desc LIMIT 5");
  else
  $result = $conn->query("SELECT * FROM Info ORDER BY id desc  LIMIT 5");
  
  $data = array();
  while ( $row = mysqli_fetch_row($result) )
   {
    $data[] = $row;
   }
  echo json_encode( $data );
 
  
 

  