<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminRusu | name admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="/vinhloc/theme/frontend/img/favicon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/vinhloc/theme/frontend/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/vinhloc/theme/frontend/admin/plugins/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/vinhloc/theme/frontend/admin/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/vinhloc/theme/frontend/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/vinhloc/theme/frontend/admin/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" type="text/css" href="/vinhloc/theme/frontend/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ asset('/') }}admin" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../../theme/frontend/admin/dist/img/avatar6.jpg" width="30" class="img-circle elevation-2" alt="User Image">
          <span class="hidden-xs">Tài khoản</span>
        </a>
        <ul class="dropdown-menu">
          <div class="">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
              <h6 class="">name admin</h6>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="../../theme/frontend/admin/dist/img/avatar6.jpg" alt="User Avatar">
            </div>
            <div class="card-footer clearfix">
              <a href="" class="btn btn-xs btn-info float-left">Chi tiết</a>
              <a href="{{route('logout')}}" class="btn btn-xs btn-danger float-right">Đăng xuất</a>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
      <img src="/vinhloc/theme/frontend/admin/dist/img/logo-2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminRusu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../theme/frontend/admin/dist/img/avatar6.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">name admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ asset('/') }}admin" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trang chủ
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home" class="nav-link" target="_blank">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Website
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin-about" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Trang giới thiệu
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lí khách hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('list-customer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khách hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('order-customer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách đơn hàng</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Danh mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách danh mục</p>
                </a>
              </li>
            </ul>
          </li>    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-banner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-banner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách banner</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-register')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách người dùng</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách blog</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Nhãn hiệu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-brand')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm nhãn hiệu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-brand')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách nhãn hiệu</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->