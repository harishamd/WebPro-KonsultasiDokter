<head>
  <title>Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">Beli obat</a></li>
  </ul>
  <p class="navbar-text">> Pembayaran</p>
</nav>
<div class="container">
  <h2>Pembayaran</h2>
  <form action='<?=site_url('User/tambahobat')?>' method='post'>
    <div class="form-group">
      <label>Nama : </label>
		<input type="text" hidden="true" id="nama" name="nama" value="<?php echo $namauser; ?>"/>
      <?php echo $namauser;?>
    </div>
    <div class="form-group">
      <label>Nama Obat : </label>
	<input type="text" hidden="true" id="nama_obat" name="nama_obat" value="<?php echo $namaobat; ?>"/>	<?php echo $namaobat; ?>
      
    </div>
	  <div class="form-group">
      <label for="harga">Harga : </label>
		  <input type="text" hidden="true" id="harga" name="harga" value="<?php echo $hargaobat; ?>"/>	
      <?php echo $hargaobat; ?>
    </div>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="tambah">
 	  submit
	</button>
	<a href="<?php echo base_url('index.php/user/hapusobat')?>"><button  class="btn btn-primary" data-target="delete">
 	 	hapus
		</button></a>
</div>
	</form>