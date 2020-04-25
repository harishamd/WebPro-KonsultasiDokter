  <div class="container">
    <div class="box">
      <h2>Akun</h2>           

	  <?php echo validation_errors(); ?>

	  <form action='<?=site_url('Web/editakun')?>' method='post'>
	
	  <h5>Username</h5>
	  <input type="text" name="username" value="<?php echo $data['nama']; ?>" size="50" />

	  <h5>Password</h5>
	  <input type="password" name="password" value="<?php echo $data['password']; ?>" size="50" />

	  <h5>Password Confirm</h5>
	  <input type="password" name="passconf" value="<?php echo $data['password']; ?>" size="50" />

	  <h5>Email Address</h5>
	  <input type="text" name="email" value="<?php echo $data['email']; ?>" size="50" />
	  </form>
	  <br><br>
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
 	  submit
	  </button>

	  </form>
    </div>
  </div>


<!-- Modal button -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan mengupdate
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">kembali</button>
        <button type="button" class="btn btn-primary">ya</button>
      </div>
    </div>
  </div>
</div>
