<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artikel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
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
            <li><a href="../../myweb">Home</a></li>
            <li><a href="../../myweb/profil">About</a></li>
            <li class="active"><a href="../../blog">Blog</a></li>
            <li><a href="../../teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4"><?php echo $data['judul_atk']; ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">ade</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $data['tggl_atk']; ?> at 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <img src="<?php echo base_url().'assets/img/'.$data['foto_atk'] ?>" width="600px" class="img-responsive" alt="Cinque Terre"/ >

          <hr>

          <!-- Post Content -->
          <p class="lead">
          	<?php echo $data['isi_atk']; ?>
          </p>

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
          </div>

        </div>

      <!-- /.row -->

    </div><br>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ade Fajar 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>

  </body>

</html>