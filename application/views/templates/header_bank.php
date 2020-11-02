<html>
        <head>
                <title>Listrik Pascabayar</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.3.7 -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
                <!-- Ionicons -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
                <!-- AdminLTE Skins. Choose a skin from the css/skins
                    folder instead of downloading all of them to reduce the load. -->
                <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css');?>">
                <!-- Morris chart -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css');?>">
                <!-- jvectormap -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css');?>">
                <!-- Date Picker -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
                <!-- Daterange picker -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
                <!-- bootstrap wysihtml5 - text editor -->
                <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
                <!-- Custom css -->
                <link rel="stylesheet" href="<?php echo base_url('assets/css/mycustom.css');?>">
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <body class="skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
        <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>NK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Bank</b> Pascabayar</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php foreach($this->session->userdata('adminSession') as $a){echo $a->nama_admin;}?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                <p>
                <?php foreach($this->session->userdata('adminSession') as $a){echo $a->nama_admin.' - '.$a->nama_level;}?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/listrik-pascabayar/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php foreach($this->session->userdata('adminSession') as $a){echo $a->nama_admin;}?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php if($title == 'Penggunaan' || $title == 'Tagihan' || $title == 'Pembayaran' || $title == 'Tarif'){echo "active menu-open";}else{}?>">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>System</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($title == 'Penggunaan'){echo "active";}else{}?>"><a href="/listrik-pascabayar/bank/adminppob"><i class="fa fa-circle-o"></i>admin ppob</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>