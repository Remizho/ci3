<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Add Blog</title>
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">

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
		<h1>Buat Articel</h1>

		<!--<form method="post" class="form-horizontal" enctype="multipart/form-data">-->

			<?php    
				$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
			?>
			<?php echo validation_errors(); ?>
			<?php echo form_open_multipart( 'blog/add', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

			<div class="form-group">
				<label for="judul_atk" class="control-label col-sm-2">
					Judul
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul_atk" value="<?=isset($default['judul_atk'])? $default['judul_atk'] : ""?>" required>
					<div class="invalid-feedback">Isi judul dulu gan</div>
				</div>
			</div><br><br>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Content					
				</label>
				<div class="col-sm-10">
					<textarea name="isi_atk" class="form-control" required><?=isset($default['isi_atk'])? $default['isi_atk'] : ""?></textarea>
					<div class="invalid-feedback">Isi konten dulu gan</div>
				</div>
			</div><br><br><br>

			<div class="form-group">
		      <label class="control-label col-sm-2">Gambar :</label>
		     
		      <div class="col-sm-10">
		        <span class="input-group-addon"><input type="file" required name="foto_atk" class="file"></span>
		      </div><br>
		    </div><br>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Kejadian					
				</label>
				<div class="col-sm-10">
					<input type="date" required class="form-control" name="tggl_atk" value="<?=isset($default['tggl_atk'])? $default['tggl_atk'] : ""?>">
					<div class="invalid-feedback">Pilih tanggal dulu gan</div>
				</div>
			</div><br><br>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Kategori
				</label>
				<div class="col-sm-10">
						<?php echo form_dropdown('id', $categories, set_value('id'), 'class="form-control" required' ); ?>
					<div class="invalid-feedback">Pilih Kategori</div>
				</div>
			</div><br><br>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Sumber
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="sumber_atk" value="<?=isset($default['sumber_atk'])? $default['sumber_atk'] : ""?>" required>
					<div class="invalid-feedback">Isi sumber</div>
				</div>
			</div><br><br>

			<center>
			<input class="btn btn-primary" type="submit" name="simpan" value="simpan">
			</center>
		</form>
	</div>

	<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
		<!-- Custom -->
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>
</html>