<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<br><br><br>
<!-- Begin page content -->
	<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php echo $artikel->post_title ?><br>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 2</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          							<?php if( $artikel->post_thumbnail ) : ?>
									<img class="img-fluid rounded" style="height:210px;width:700px" src="<?php echo base_url() .'assets/img/'. $artikel->post_thumbnail ?>" alt="">
									
									<!-- Jika tidak ada thumbnail, gunakan holder.js -->
									<?php ; else : ?>
									<img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
									<?php endif; ?>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo time_ago($artikel->post_date) ?> on <a href="#"><?php echo $artikel->cat_name ?></a>	</p>

          <hr>

          <!-- Post Content -->
          <p>
          	<?php echo nl2br($artikel->post_content) ?>
          </p>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<hr>
					<div class="highlight text-center">
						<a href="<?php echo site_url( 'blog/edit/'.$artikel->post_id) ?>" class="btn btn-secondary">Edit</a>
						<a href="<?php echo site_url( 'blog/delete/'.$artikel->post_id) ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	</section>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>

<main role="main" class="container">

	
</main>
<br><br>