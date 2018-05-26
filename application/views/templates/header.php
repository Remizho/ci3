<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
</head>
<body>
  <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url()?>">Ade Website CI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>myweb">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>myweb/profil">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>category">Catagory</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Datatable
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="<?php echo base_url()?>datatables">datatable</a>
                <a class="dropdown-item" href="<?php echo base_url()?>datatables/view_json">Json (ajax)</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>