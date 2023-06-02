<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title> @yield('title', 'CMR')</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<style>
    .sticky-sidebar,.customizer-links{
        display: none;
    }
</style>

@yield('css-content')

</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="{{url('index')}}" class="logo logo-normal">
<img src="assets/img/logo.png" alt>
</a>
<a href="{{url('index')}}" class="logo logo-white">
<img src="assets/img/logo-white.png" alt>
</a>
<a href="{{url('index')}}" class="logo-small">
<img src="assets/img/logo-small.png" alt>
</a>
<a id="toggle_btn" href="javascript:void(0);">
<i data-feather="chevrons-left" class="feather-16"></i>
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item nav-searchinputs">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search">
<div class="search-addon">
<span><i data-feather="search" class="feather-14"></i></span>
</div>
</div>

</form>
</div>
</li>




<li class="nav-item nav-item-box">
<a href="javascript:void(0);" id="btnFullscreen">
<i data-feather="maximize"></i>
</a>
</li>


<li class="nav-item dropdown nav-item-box">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="{{url('activities')}}">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('activities')}}">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('activities')}}">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('activities')}}">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="{{url('activities')}}">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="{{url('activities')}}">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item nav-item-box">
<a href="{{url('generalsettings')}}"><i data-feather="settings"></i></a>
</li>
<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-info">
<span class="user-letter">
<img src="assets/img/profiles/avator1.jpg" alt class="img-fluid">
</span>
<span class="user-detail">
<span class="user-name">Vikas Agrahari</span>
<span class="user-role">Super Admin</span>
</span>
</span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt>
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Smilga</h6>
<h5>Super Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="{{url('profile')}}"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="{{url('generalsettings')}}"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="{{url('login')}}"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="{{url('profile')}}">My Profile</a>
<a class="dropdown-item" href="{{url('generalsettings')}}">Settings</a>
<a class="dropdown-item" href="{{url('login')}}">Logout</a>
</div>
</div>
</div>

@include('components/layouts/sidebar')
@yield('content-body')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/feather.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>

@yield('js-content')
