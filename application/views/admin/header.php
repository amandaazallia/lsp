
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Dashboard | Admin</title>

  <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png');?>">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico');?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-extend.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/site.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animsition/animsition.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/asscrollable/asScrollable.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/switchery/switchery.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/intro-js/introjs.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/slidepanel/slidePanel.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/flag-icon-css/flag-icon.css');?>">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist-js/chartist.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/jvectormap/jquery-jvectormap.css');?>">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/../fonts/weather-icons/weather-icons.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard/v1.css');?>">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/web-icons/web-icons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/brand-icons/brand-icons.min.css');?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>



  <!-- Scripts -->
  <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/breakpoints/breakpoints.js');?>"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="dashboard">


  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>

      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="<?php echo base_url('assets/images/logo.png');?>" title="Remark">
        <span class="navbar-brand-text">Admin</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>

        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="<?php echo base_url('assets/images/avatar5.png');?>" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <!-- <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>Edit Profile</a>
              </li> -->
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="<?= base_url('Admin/logout') ?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub">
              <a href="<?php echo base_url('Admin');?>" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                <span class="site-menu-title">Mahasiswa</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/all_mahasiswa');?>" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/add');?>" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-flag" aria-hidden="true"></i>
                <span class="site-menu-title">Jurusan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/all_jurusan');?>" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/add_jurusan');?>" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-envelope" aria-hidden="true"></i>
                <span class="site-menu-title">Mata Kuliah</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/all_matakuliah');?>" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/add_matakuliah');?>" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-payment" aria-hidden="true"></i>
                <span class="site-menu-title">Krs</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/all_krs');?>" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">All</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('Admin/add_krs');?>" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New</span>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </div>


  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="apps/mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="apps/calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="apps/contacts/contacts.html">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="apps/media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="apps/documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="apps/projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="apps/forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="index.html">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>




<!-- Core  -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/animsition/jquery.animsition.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/asscroll/jquery-asScroll.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/mousewheel/jquery.mousewheel.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/asscrollable/jquery.asScrollable.all.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/ashoverscroll/jquery-asHoverScroll.js');?>"></script>

<!-- Plugins -->
<script src="<?php echo base_url('assets/vendor/switchery/switchery.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/intro-js/intro.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/screenfull/screenfull.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/slidepanel/jquery-slidePanel.js');?>"></script>

<script src="<?php echo base_url('assets/vendor/skycons/skycons.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/chartist-js/chartist.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/aspieprogress/jquery-asPieProgress.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jvectormap/jquery-jvectormap.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/matchheight/jquery.matchHeight-min.js');?>"></script>

<!-- Scripts -->
<script src="<?php echo base_url('assets/js/core.js');?>"></script>
<script src="<?php echo base_url('assets/js/site.js');?>"></script>

<script src="<?php echo base_url('assets/js/sections/menu.js');?>"></script>
<script src="<?php echo base_url('assets/js/sections/menubar.js');?>"></script>
<script src="<?php echo base_url('assets/js/sections/sidebar.js');?>"></script>

<script src="<?php echo base_url('assets/js/configs/config-colors.js');?>"></script>
<script src="<?php echo base_url('assets/js/configs/config-tour.js');?>"></script>

<script src="<?php echo base_url('assets/js/components/asscrollable.js');?>"></script>
<script src="<?php echo base_url('assets/js/components/animsition.js');?>"></script>
<script src="<?php echo base_url('assets/js/components/slidepanel.js');?>"></script>
<script src="<?php echo base_url('assets/js/components/switchery.js');?>"></script>
<script src="<?php echo base_url('assets/js/components/matchheight.js');?>"></script>
<script src="<?php echo base_url('assets/js/components/jvectormap.js');?>"></script>

<script>

  $(document).ready(function($) {
    Site.run();

    (function() {
      var snow = new Skycons({
        "color": $.colors("blue-grey", 500)
      });
      snow.set(document.getElementById("widgetSnow"), "snow");
      snow.play();

      var sunny = new Skycons({
        "color": $.colors("blue-grey", 700)
      });
      sunny.set(document.getElementById("widgetSunny"), "clear-day");
      sunny.play();
    })();

    (function() {
      // Reset Current
      $('#inlineDatepicker').datepicker();
      $("#inlineDatepicker").on("changeDate", function(event) {
        $("#inputHiddenInline").val(
          $("#inlineDatepicker").datepicker('getFormattedDate')
        );
      });
    })();


  });
</script>

</body>

</html>
