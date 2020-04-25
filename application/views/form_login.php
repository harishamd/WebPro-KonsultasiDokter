
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form </title>
    <link rel="stylesheet" href="<?=base_url('css/css_login.css')?>">
  </head>
  <body>
sacca
    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Login</h1>
      
        <form method='post' action="<?=base_url('index.php/user/login')?>">
        <!-- USERNAME INPUT -->
        <label for="email">Email</label>
        <input type="text" Name="email" placeholder="Masukan Email">
        <!-- PASSWORD INPUT -->
        <label for="katasandi">Kata Sandi</label>
        <input type="password" Name="katasandi" placeholder="Masukan Kata Sandi">
        <input type="submit" value="Log In">
        <a href="<?=base_url('index.php/page/register')?>">Belum Punya Akun?</a><br>

        
      </form>
    </div>
  </body>
</html>
