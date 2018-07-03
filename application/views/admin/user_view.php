<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<main role="main" class="bg-light">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
				
				<p>
					<?php echo anchor('admin/create', 'Add Member', array('class' => 'btn btn-primary')); ?>
				</p>
			</div>
		</section>

		<center>
			<b>Status</b><br>
			1 : Administrator<br>
			2 : Member Emas<br>
			3 : Member Perunggu
		</center>

		<?php if( !empty($admin) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin as $d) : ?>
                        <tr>
                            <td><?php echo $d->user_id ?></td>
                            <td><?php echo $d->nama ?></td>
                            <td><?php echo $d->email ?></td>
                            <td><?php echo $d->username ?></td>
                            <td><?php echo $d->password ?></td>
                            <td><?php echo $d->fk_level_id ?></td>
                            <td>
                                <a href="<?php echo base_url('/admin/edit/') . $d->user_id ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/admin/delete/') . $d->user_id ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"  class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p>Belum ada data bosque.</p>
		<?php endif; ?>
		
	</main>
	