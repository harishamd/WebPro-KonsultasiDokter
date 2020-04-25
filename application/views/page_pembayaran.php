<div class="container">
   <div class="box">
	<h2>Transaksi Pembayaran</h2>
	<?php echo validation_errors(); ?>
	<form action='<?=site_url('Web/tambahobat')?>' method='post'>
	<table>
	<tr><td>Nama</td><td>:</td><td></td></tr>
	<tr><td>Nama obat</td><td>:</td><td></td></tr>
	<tr><td>Jumlah</td><td>:</td><td> <input type="number" name="jumlah"></td></tr>
	<tr><td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="tambah">
 	  submit
	</button></td>
	</form>
	<td><form action='<?=site_url('Web/hapusobat')?>' method='post'>
	<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="delete">
 	 	hapus
	</button></td>
	</tr>
	</form>
	</table>
  </div>
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