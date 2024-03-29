<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Developer- Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="JS/script.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<script type="text/javascript">
  // JavaScript Document
$(document).ready(function () {

  $('#sidebarToggle').on('click', function () {
    $('#sidebar').toggleClass('active');
  });
});
</script>
</head>

<body id="pageTop">
<!-- Top Navbar -->
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" id="topNav"> <a href="index.html" class="navbar-brand">Devolper</a>
  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" type="button" id="sidebarToggle"><span class="fa fa-bars"></span></button>
  <form class="d-none d-sm-inline-block form-inline ml-auto">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for ...">
      <div class="input-group-append">
        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
      </div>
    </div>
  </form>
  <ul class="navbar-nav ml-auto ml-sm-2">
    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i><span class="badge badge-danger">9+</span></a>
      <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">New notifications</a><a href="#" class="dropdown-item">All notifications</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Manage Notifications</a> </div>
    </li>
    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i><span class="badge badge-danger">7</span></a>
      <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">New messages</a><a href="#" class="dropdown-item">All messages</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Manage massages</a> </div>
    </li>
    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-circle"></i></a>
      <div class="dropdown-menu dropdown-menu-right"><a href="<?=base_url().'developer/developer_profile';?>" class="dropdown-item">Profile</a><a href="<?=base_url().'developer/developer_profile/password';?>" class="dropdown-item">Change Password</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?=base_url().'login/logout';?>">Logout</a> </div>
        
    </li>
  </ul>
</nav>
<div class="wrapper mt-5">
  <!-- Sidebar -->
  <nav id="sidebar">
    <ul class="navbar-nav">
      <li class="nav-item active pt-3"><a href="<?=base_url().'company/Dashboard';?>" class="nav-link text-white"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
      <li class="nav-item pt-3" id="pageItem"><a href="#pageSubMenu" class="nav-link dropdown-toggle text-white" data-toggle="collapse" aria-expanded="false" role="button"><i class="fa fa-folder"></i> <span>Manage</span></a>
        <div class="dropdown-menu mr-4" id="pageSubMenu">
          <h6 class="dropdown-header">Tasks</h6>
          <a href="<?=base_url().'developer/tasks';?>" class="dropdown-item">Tasks</a>
        </div>
      </li>
      <li class="nav-item pt-3"><a href="#" class="nav-link text-white"><i class="fa fa-area-chart"></i> <span>Charts</span></a> </li>
      <li class="nav-item pt-3"><a href="index.html" class="nav-link text-white"><i class="fa fa-table"></i> <span>Reports</span></a> </li>
    </ul>
  </nav>
  <!-- Content -->
  <div id="wrapper-content">
    
  
