<?php
  require_once('./database.php');
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;
  $sql = "SELECT ID, Email, Password FROM UserTable WHERE Email = '".$email."' LIMIT 1";
  if($res = $conn->query($sql)){
    if($res->num_rows > 0){
      $user = $res->fetch_assoc();
      if(password_verify($password, $user['Password'])){
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['user_id'] = $user['ID'];
        header('location: index.php');
      } else {
        header('location: login.php?incorrect-login=true');
      }
    } else {
      header('location: login.php?incorrect-login=true');
    }
  } else {
    header('location: login.php?incorrect-login=true');
  }?>
