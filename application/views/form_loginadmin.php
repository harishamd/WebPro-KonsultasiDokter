<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form </title>
    <link rel="stylesheet" href="<?=base_url('css/css_login.css')?>">
  </head>
  <body>
    
    <div class="login-box">
      <!-- <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/img/login.jpg" alt="avatar image"> -->
      <h1>Login Admin</h1>
      
        <form method='post' action="<?=base_url('index.php/admin/loginadmin')?>">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" Name="username" placeholder="Masukan Username">
        <!-- PASSWORD INPUT -->
        <label for="katasandi">Kata Sandi</label>
        <input type="password" Name="katasandi" placeholder="Masukan Kata Sandi">
        <input type="submit" value="Log In">

      </form>
    </div>
  </body>
</html>
