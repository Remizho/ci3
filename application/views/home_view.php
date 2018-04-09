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
            <li><a href="myweb">Home</a></li>
            <li><a href="myweb/profil">About</a></li>
            <li class="active"><a href="#">Blog</a></li>
            <li><a href="teman">Friends</a></li>
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
  <div class="row">

    <?php foreach($data->result_array() as $u) :
      $id_atk=$u['id_atk'];
      $judul_atk=$u['judul_atk'];
      $isi_atk=$u['isi_atk'];
      $foto_atk=$u['foto_atk'];
      $tggl_atk=$u['tggl_atk'];
     ?>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><center>
          <a style="text-decoration: none; color: white;" href="blog/detail/<?php echo $u['id_atk'] ?>" > 
            <?php echo $judul_atk ?>
          </a>
        </div>
        <div class="panel-body">
        <a href="blog/detail/<?php echo $u['id_atk'] ?>" > 
        <img src="<?php echo base_url().'assets/img/'.$foto_atk ?>" class="img-responsive" alt="Cinque Terre"/ >
        </a>
        </div>
        <div class="panel-footer"><center> diupload tanggal : <?php echo $tggl_atk ?></div>
      </div>
    </div>

    <?php endforeach; ?>

  </div>  

</div><br><br>

<footer class="container-fluid text-center">
  <p>Blog</p>  
  <form class="form-inline">Get artikel:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
