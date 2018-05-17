<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
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
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Datatable
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
