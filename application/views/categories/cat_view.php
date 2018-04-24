<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
				
				<p>
					<?php echo anchor('category/create', 'Buat Kategori Baru', array('class' => 'btn btn-primary')); ?>
				</p>
			</div>
		</section>

		<?php if( !empty($categories) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<!-- Kita format tampilan blog dalam bentuk card -->
						<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
						<div class="card mb-4 box-shadow border-0">							
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama</th>
											<th>Description</th>
											<th>**</th>
										</tr>
									</thead>
									<tbody>
										<!-- ISI DATA AKAN MUNCUL DISINI -->
										<?php
											// Kita looping data dari controller
											foreach ($categories as $key) :
										?>
										<tr>
											<td>-</td>
											<td><?php echo character_limiter($key->cat_name, 40) ?></td>
											<td><?php echo word_limiter($key->cat_description, 20) ?></td>
											<td>
												<a href="<?php echo base_url(). 'category/edit/' . $key->id ?>" class="btn btn-primary">edit</a>
												<a href="<?php echo base_url(). 'category/delete/' . $key->id ?>" class="btn btn-primary btn-danger">Delete</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p><center>Belum ada data bosque.</p>
		<?php endif; ?>
		
	</main>
	