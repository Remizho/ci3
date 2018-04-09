<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Friends</title>
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 	<script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
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
            <li class="active"><a href="teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
<div class="container">
	<h1>List Pertemanan</h1>

	<a href="Teman/add" class="btn btn-primary">Add Friend</a>
	<br><br>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Teman</th>
				<th>Alamat</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_teman as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[nama]</td>
					<td>$row[alamat]</td>
					<td>$row[email]</td>
					<td>
						<a href='Teman/edit/$row[id_friend]' class='btn btn-sm btn-info'>Update</a>
						<a href='Teman/delete/$row[id_friend]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>
