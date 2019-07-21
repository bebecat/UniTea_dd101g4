<?php session_start();  
if(isset($_SESSION['memId'])!=true){
  $_SESSION['memId']=null;
  echo "123";
}

?> 
