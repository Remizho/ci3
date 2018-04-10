<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Add Blog</title>
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 	<script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">My Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="myweb">Home</a></li>
            <li><a href="myweb/profil">About</a></li>
            <li class="active"><a href="blog">Blog</a></li>
            <li><a href="teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>

	<div class="container">
		<h1><?=$tipe?> Articel</h1>
		<form method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Judul
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul_atk" value="<?=isset($default['judul_atk'])? $default['judul_atk'] : ""?>" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Content					
				</label>
				<div class="col-sm-10">
					<textarea name="isi_atk" class="form-control" required><?=isset($default['isi_atk'])? $default['isi_atk'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
		      <label class="control-label col-sm-2">Gambar :</label>
		     
		      <div class="col-sm-10">
		        <span class="input-group-addon"><input type="file" required name="foto_atk" class="file"></span>
		      </div><br>
		    </div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Date					
				</label>
				<div class="col-sm-10">
					<input type="date" required class="form-control" name="tggl_atk" value="<?=isset($default['tggl_atk'])? $default['tggl_atk'] : ""?>">
				</div>
			</div>
			<center>
			<input class="btn btn-primary" type="submit" name="simpan" value="simpan">
			</center>
		</form>
	</div>
</body>
</html>