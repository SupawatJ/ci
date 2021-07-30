<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Test Web</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12"><img src="<?php echo base_url('img/b.png'); ?>" width="100%"></div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</div>
</div>

<?php echo br('2'); ?>

<div class="container">
<h6>:: List Product ::</h6>
<div class="row">
<div class="col-md-4" align="center">
<img src="<?php echo base_url('img/product1.jpg'); ?>" width="100%">
<p align="center">Product1</p>
<a href="" class="btn btn-primary">--more--</a>
</div>
<div class="col-md-4" align="center">
<img src="<?php echo base_url('img/product1.jpg'); ?>" width="100%">
<p align="center">Product1</p>
<a href="" class="btn btn-primary">--more--</a>
</div>
<div class="col-md-4" align="center">
<img src="<?php echo base_url('img/product1.jpg'); ?>" width="100%">
<p align="center">Product1</p>
<a href="" class="btn btn-primary">--more--</a>
</div>
</div>
</div>

<?php echo br('2'); ?>

<div class="container">
<h6>:: List New ::</h6>
<div class="row">
<div class="col-md-3" align="center">
<img src="<?php echo base_url('img/news.jpg'); ?>" width="100%">
<p align="center">News1</p>
<a href="" class="btn btn-info">--more--</a>
</div>
<div class="col-md-3" align="center">
<img src="<?php echo base_url('img/news.jpg'); ?>" width="100%">
<p align="center">News1</p>
<a href="" class="btn btn-success">--more--</a>
</div>
<div class="col-md-3" align="center">
<img src="<?php echo base_url('img/news.jpg'); ?>" width="100%">
<p align="center">News1</p>
<a href="" class="btn btn-warning">--more--</a>
</div>
<div class="col-md-3" align="center">
<img src="<?php echo base_url('img/news.jpg'); ?>" width="100%">
<p align="center">News1</p>
<a href="" class="btn btn-danger">--more--</a>
</div>
</div>
</div>

<?php echo br('2'); ?>

<div class="container">
<div class="row" style="background-color: #ccc;" align="center"> 
<div class="col-md-12">
<p>@2021</p> 
</div>
</div>
</div>

<?php echo br('1'); ?>

</body>
</html>