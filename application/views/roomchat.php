<!DOCTYPE html>
<html lang="en">
<head>
  <title>form pertanyaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">Home</a></li>
  </ul>
  <p class="navbar-text">> Roomchat</p>
</nav>
<div class="container">
  <h2>Tanya Dokter</h2>
  <p>Silahkan ajukan pertanyaan anda pada form ini</p>
  <form>
    <div class="form-group">
      <label for="sbj">Subjek</label>
      <input type="text" class="form-control" id="sbj">
    </div>
    <div class="form-group">
      <label for="sbj">Nama</label>
      <input type="text" class="form-control" id="sbj">
    </div>
    <div class="form-group">
      <label for="pil">Pilihan Dokter</label>
      <select class="form-control" id="pil">
        <option>Dokter Umum</option>
        <option>Dokter Spesialis</option>
        <option>Dokter Khusus</option>
      </select>
      <br>
    </div>
    <div class="form-group">
      <label for="tanya">Pertanyaan</label>
      <textarea class="form-control" rows="5" id="tanya"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

</body>
</html>
