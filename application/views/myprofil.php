<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
 <title>My Home Website</title>
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 <script src="<?php echo base_url()?>assets/css/bootstrap.js" type="text/javascript"></script>
</head>
<body>

<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My Web</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="../myweb">Home</a></li>
            <li class="active"><a href="profil">About</a></li>
            <li><a href="../blog">Blog</a></li>
            <li><a href="../teman">Friends</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br><br>
 
 
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
      <div class="jumbotron text-center">
        <h1>About</h1>
        <p>This my first template bootstrap in code igniter!</p> 
      </div>

      <center>  <img src="<?php echo base_url()?>assets/img/me.png" class="img-circle" alt="Cinque Terre" width="200" height="200">
      </center><br><br>

      <div class="table-responsive">          
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Age</th>
              <th>City</th>
              <th>Country</th>
              <th>University</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>--</td>
              <td>Ade Fajar</td>
              <td>Ade</td>
              <td>17</td>
              <td>Malang or Tuban</td>
              <td>Indonesia</td>
              <td>State Polithecnic of Malang</td>
            </tr>
          </tbody>
        </table>
        </div>
        <br>

      <div class="alert alert-success">
        <center>
          <strong>Success!</strong>, people are successful.
        </center>
      </div>
    </div>
</body>
</html>