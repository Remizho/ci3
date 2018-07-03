<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<br>
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"><?php	echo $page_title ?></h1>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $admin->nama) ?>" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Kodepos</label>
						<input type="text" class="form-control" name="kodepos" value="<?php echo set_value('kodepos', $admin->kodepos) ?>" placeholder="Kodepos">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo set_value('email', $admin->email) ?>" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo set_value('username', $admin->username) ?>" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
					</div>
					<div class="form-group">
					    <label for="">Pilih Paket Membership</label>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="goldmember" value="1" checked>
					        <label class="form-check-label" for="goldmember">Administrator</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="goldmember" value="2">
					        <label class="form-check-label" for="goldmember">Member Emas</label>
					    </div>
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="membership" id="silvermember" value="3">
					        <label class="form-check-label" for="silvermember">Member Perunggu</label>
					    </div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>
</main>
<br><br>
