<!DOCTYPE html>
<html>
  <head>
    <title>Login | Quiz</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action='registerUser.php' method='post'>
      <label>Firstname</label>
      <input name='firstname' type='text' required />
      <label>Surname</label>
      <input name='surname' type='text' required />
      <label>Age</label>
      <input name='age' type='number' required />
      <label>Email</label>
      <input name='email' type='email' required />
      <label>Password</label>
      <input name='password' type='password' required/>
      <label>Confirm Password</label>
      <input name='confirm-password' type='password' required/>
      <button type='submit'>Submit</button>
    </form>
    <?php
      if(isset($_GET['error'])){
        echo '<h2 style="color: red;">Error: '.$_GET['error'].'</h2>';
      }
    ?>
  </body>
</html>
