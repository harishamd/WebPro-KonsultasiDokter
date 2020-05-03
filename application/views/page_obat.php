<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Daftar Obat</h1>
<?php foreach ($obats as $obat): ?>
	<form action="<?php echo base_url('index.php/page/pembayaran'); ?>" method='post'> 
    <div class="card">
    <h2><?php echo $obat->nama_obat ?></h2>
	<input type="hidden" name="nama" value="<?php echo $obat->nama_obat ; ?>">
    <img src="<?php echo base_url('upload/obat/'.$obat->gambar) ?>" width="128" />
    <p class='price'>Rp. <?php echo $obat->harga ?></p>
	<input type="hidden" name="harga" value="<?= $obat->harga ; ?>">
    <p><?php echo $obat->deskripsi ?></p>
    <p><button type="submit">Beli</button></p>
    </div>
	</form>
<?php endforeach; ?>
</body>
</html>
