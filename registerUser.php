<?php
  require_once('./database.php');
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;
  $confirmPassword = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : null;
  $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
  $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
  $age = isset($_POST['age']) ? $_POST['age'] : null;

  $sql = "SELECT ID FROM UserTable WHERE Email = '".$email."' LIMIT 1";
  if($res = $conn->query($sql)){
    if($res->num_rows == 0){
      if($password == $confirmPassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO UserTable (Email, Firstname, Surname, Age, Password) VALUES ('$email', '$firstname', '$surname', $age, '$password')";
        echo $sql;
        if($res = $conn->query($sql)){
          header('location: login.php');
        } else {
          header('location: register.php?error=Error%20with%20query');
        }
      } else {
        header('location: register.php?error=Passwords%20do%20not%20match');
      }
    } else {
      header('location: register.php?error=Email%20already%20taken');
    }
  } else {
   header('location: register.php?error=Error%20with%20server');
  }?>
