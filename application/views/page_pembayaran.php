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
  <h2>Akun</h2>
  <form action='<?=site_url('User/tambahobat')?>' method='post'>
    <div class="form-group">
      <label>Nama : </label>
      <?php echo $data['nama'];?>
    </div>
    <div class="form-group">
      <label>Nama Obat : </label>
      <?php echo $data['katasandi']; ?>
    </div>
	  <div class="form-group">
      <label for="harga">Harga : </label>
      <?php echo $data['harga']; ?>
    </div>
	  <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" class="form-control" id="jumlah">
    </div>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="tambah">
 	  submit
	</button>
  </form>
	<form action='<?=site_url('User/hapusobat')?>' method='post'>
	<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="delete">
 	 	hapus
	</button>
</div>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo $data['nama']; ?>
	   <?php echo $data['nama_obat']; ?>
	   <?php echo $data['jumlah']; ?>
	   <?php echo $data['kode']; ?>
	   <?php echo $data['jumlah_harga']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghapus data
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>