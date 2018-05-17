<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <style>
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">My Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url()?>myweb">Home</a></li>
            <li><a href="<?php echo base_url()?>myweb/profil">About</a></li>
            <li><a href="<?php echo base_url()?>blog">Blog</a></li>
            <li><a href="<?php echo base_url()?>category">Category</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url()?>datatable">Datatable
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()?>datatable">Basic Table</a></li>
                  <li><a href="<?php echo base_url()?>datatable/view_json">Json Table</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url()?>teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br>

<div class="container">    
      <div class="jumbotron text-center">
        <h1>Wellcome to my Blog</h1>
      </div>

  <h3>Choose the artikels : </h3>
  <?php echo anchor('blog/add', 'Tulis Artikel', array('class' => 'btn btn-primary')); ?>
  <br><br>
  <div class="row">

    <?php foreach($data as $u) :
     ?>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><center>
          <a style="text-decoration: none; color: white;" href="blog/detail/<?php echo $u->id_atk ?>" > 
            <?php echo $u->judul_atk ?>
          </a>
        </div>
        <div class="panel-footer">
          <small class="text-muted"><center><?php echo time_ago($u->tggl_buat_atk) ?></small>
        </div>
        <div class="panel-body">
        <a href="blog/detail/<?php echo $u->id_atk ?>" > 
        <img src="<?php echo base_url().'assets/img/'.$u->foto_atk ?>" style="width:350px;height:220px" class="img-responsive" alt="Cinque Terre"/ >
        </a>
        </div>
        <div class="panel-footer">
        cangkup : <small class="text-success text-uppercase"><u><?php echo $u->cat_name ?></u></small><br>
        <?php echo substr( $u->isi_atk , 0, 80)?>...
        </div>
        <div class="panel-footer">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <!-- Untuk link detail -->
                      <a href='blog/detail/<?php echo $u->id_atk ?>' class='btn btn-sm btn-info'>Baca</a>
                      <a href='blog/edit/<?php echo $u->id_atk ?>' class='btn btn-sm btn-info'>Update</a>
                      <a href='blog/delete/<?php echo $u->id_atk ?>' class='btn btn-sm btn-danger'>Hapus</a>
                  </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <small class="text-muted"><?php echo $u->tggl_buat_atk ?></small>
                </div>

        </div>
      </div>
    </div>

    <?php endforeach; ?>
  </div>  
    <center>
    <?php 
      // $links ini berasal dari fungsi pagination 
      // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
      if (isset($links)) {
        echo $links;
      } 
    ?>
    </center>

</div><br><br>

<footer class="container-fluid text-center">
  <p>Blog</p>  
  <form class="form-inline">Get artikel:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>
</html>
