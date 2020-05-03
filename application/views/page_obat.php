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
    <div class="card">
    <h2><?php echo $obat->nama_obat ?></h2>
    <?php echo $obat->gambar ?>
    <p class='price'><?php echo $obat->harga ?></p>
    <p><?php echo $obat->deskripsi ?></p>
    <p><button>Beli</button></p>
    </div>
<?php endforeach; ?>
</body>
</html>