<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Begin page content -->
	<main role="main" >
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php echo $page_title ?></h1>
			</div>
		</section>
		<?php if( !empty($all_artikel) ) : ?>
		<?php
			// Kita looping data dari controller
			foreach ($all_artikel as $key) :
		?>
		<div class="album py-1">
			<div class="container">
			  <div class="card mb-4">
		        <div class="card-body">
		          <div class="row">
		            <div class="col-lg-6">
		              <a href="#">
		                			<?php if( $key->post_thumbnail ) : ?>
									<img class="img-fluid rounded" style="height:210px;width:700px" src="<?php echo base_url() .'assets/img/'. $key->post_thumbnail ?>" alt="">
									
									<!-- Jika tidak ada thumbnail, gunakan holder.js -->
									<?php ; else : ?>
									<img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
									<?php endif; ?>
						              </a>
						            </div>
						            <div class="col-lg-6">
						              <h2 class="card-title"><?php echo character_limiter($key->post_title, 20) ?></h2>
						              <p class="card-text"><?php echo word_limiter($key->post_content, 30) ?></p>
						              
						              <div class="btn-group">
														<!-- Untuk link detail -->
														<a href="<?php echo base_url(). 'blog/read/' . $key->post_slug ?>" class="btn btn-outline-secondary">Baca</a>
													</div>

		            </div>
		          </div>
		        </div>
	        <div class="card-footer text-muted">
	          Posted on <?php echo time_ago($key->post_date) ?>, Kategori
	          <a href="#"><?php echo $key->cat_name ?></a>
	        </div>
	      </div>
	      </div>
      </div>
      <?php endforeach; ?>
      <?php else : ?>
		<p>Belum ada data bosque.</p>
		<?php endif; ?>

		<?php 
		// $links ini berasal dari fungsi pagination 
		// Jika $links ada (data melebihi jumlah max per page), maka tampilkan
		if (isset($links)) {
			echo $links;
		} 
		?>
		
	</main>
	<br>