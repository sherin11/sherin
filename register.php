<?php
  include("config.php");
$link=$db;
//check connection
if($link==false){
  die("ERROR:could not correct.".mysqli_connect_error());
}
$name=$_post['name'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$reppas=$_post['repeat password'];
$eml=$_post['email'];
$psd=$_post['password'];
$bran=$_post['branch'];
//Attemt insert query execution
$sql="INSERT INTO registor['name','college_name','degree','repeat_ password','email','password','branch')VALUES
  values($name,$cn,$deg,$reppas,$em,$pwd);
if(mysqli_query($db,$sql)){
   echo"Records added successfully:";
}else{
  echo'ERROR:could not able to execute $sql.".mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
   
