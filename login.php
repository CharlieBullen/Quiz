<!DOCTYPE html>
<html>
  <head>
    <title>Login | Quiz</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action='auth.php' method='post'>
      <label>Email</label>
      <input name='email' type='email' />
      <label>Password</label>
      <input name='password' type='password'/>
      <button type='submit'>Submit</button>
    </form>
    <?php
      if(isset($_GET['incorrect-login'])){
        echo '<h2 style="color: red;">Incorrect Login</h2>';
      }
    ?>
  </body>
</html>
