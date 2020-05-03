<head>
  <title>akun</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="<?php echo base_url('index.php/page/home') ?>">Home</a></li>
  </ul>
  <p class="navbar-text">> Akun</p>
</nav>
<div class="container">
  <h2>Akun</h2>
  <form action='<?=site_url('User/editakun')?>' method='post'>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama" value='<?php echo $data->nama ?>'>
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <input type="password" class="form-control" name="katasandi" value='<?php echo $data->katasandi ?>'>
    </div>
	  <div class="form-group">
      <label for="email">email</label>
      <input type="text" class="form-control" name="email" value='<?php echo $data->email ?>'>
    </div>
    <button type="submit" class="btn btn-primary">
 	  submit
	</button>
	  <button type="submit" class="btn btn-primary"><a href="<?=site_url('User/hapusakun') ?>">
 	  hapus
	</button>
  </form>
</div>