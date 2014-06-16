<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

  @section('header-css')
  @include('layouts.header-css')
  @show

</head>

<body>

<div id="wrapper">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="index.html">Forklift v2.0</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
  </a>
  <ul class="dropdown-menu dropdown-user">
    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
    </li>
    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
    </li>
    <li class="divider"></li>
    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
    </li>
  </ul>
  <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                                </button>
                            </span>
        </div>
        <!-- /input-group -->
      </li>

      <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Project X features<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="#">1 Feature Item</a>
          </li>
          <li>
            <a href="#">2 Feature Item</a>
          </li>
          <li>
            <a href="#">3 Feature Item <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <li>
                <a href="#">3.1 Third Level Item</a>
              </li>
              <li>
                <a href="#">3.2 Third Level Item</a>
              </li>
              <li>
                <a href="#">3.3 Third Level Item</a>
              </li>
              <li>
                <a href="#">3.4 Third Level Item</a>
              </li>
            </ul>
            <!-- /.nav-third-level -->
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>

    </ul>
    <!-- /#side-menu -->
  </div>
  <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">


  @yield('content')
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@section('footer-js')
@include('layouts.footer-js')
@show

</body>

</html>
