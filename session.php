<?php
  require_once('./database.php');
  if(!isset($_SESSION)){
    session_start();
  }
  $user;
  if(!isset($_SESSION['user_id'])){
    header('location: login.php');
  } else {
    $sql = "SELECT ID, Firstname, Surname, Email, Age FROM UserTable WHERE ID = ".$_SESSION['user_id']." LIMIT 1";
    if($res = $conn->query($sql)){
      if($res->num_rows > 0){
        $user = $res->fetch_assoc();
      } else {
        header('location: login.php');
      }
    }
  }
?>
