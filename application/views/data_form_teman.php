<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Friends</title>
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 	<script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">My Friends</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="myweb">Home</a></li>
            <li><a href="myweb/profil">About</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="<?php echo base_url()?>datatable">Table Blog</a></li>
            <li class="active"><a href="teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>

	<div class="container">
		<h1><?=$tipe?> Friend</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="nama" value="<?=isset($default['nama'])? $default['nama'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat					
				</label>
				<div class="col-sm-10">
					<textarea name="alamat"required class="form-control"><?=isset($default['alamat'])? $default['alamat'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" required class="form-control" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>