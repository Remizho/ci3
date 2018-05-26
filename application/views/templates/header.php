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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <?php if(!$this->session->userdata('logged_in')) : ?>
              <div class="btn-group" role="group" aria-label="Data baru">
                <?php echo anchor('user/register', 'Sign Up', array('class' => 'btn btn-outline-light')); ?>
                <?php echo anchor('user/login', 'Sign In', array('class' => 'btn btn-outline-light')); ?>
              </div>
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')) : ?>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item">
                <a class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                  <font color="white">Logout</font>
                </a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Pilihen logout cah kalau ingin keluar atau pindah akun </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url() ?>user/logout">Logout</a>
              </div>
            </div>
          </div>
        </div>