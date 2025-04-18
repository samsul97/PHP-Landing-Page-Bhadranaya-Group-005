<!DOCTYPE html>

<!--

This is a starter template page. Use this page to start your new project from

scratch. This page gets rid of all links and provides the needed markup only.

-->

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title>Holycow Birthday</title>



  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



  <link rel="shortcut icon" type="text/css" href="../../img/holy_logo.png">

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  

  <!-- REQUIRED SCRIPTS -->



<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>



<!-- DataTables -->

<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

<!-- page script -->

<script>

  $(function () {

    $("#example1").DataTable({

      "responsive": true,

      "autoWidth": false,
      
      "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
      
      // "processing": true,

      //   "serverSide": true,

      //   "ajax": "random.php",

      //   "rowCallback": function( row, data ) {

      //       if ( $.inArray(data.DT_RowId, selected) !== -1 ) {

      //           $(row).addClass('selected');

      //       }

      //   }

    });

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": false,

      "ordering": true,

      "info": true,

      "autoWidth": false,

      "responsive": true,

    });

  });

</script>

</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">

    <div class="container">

      <a href="#" class="navbar-brand">

        <img src="../../img/holy_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

             style="opacity: .8">

        <span class="brand-text font-weight-light">Holycow</span>

      </a>

      

      <!--<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->

      <!--  <span class="navbar-toggler-icon"></span>-->

      <!--</button>-->



      <div class="collapse navbar-collapse order-3" id="navbarCollapse">

        <!-- Left navbar links -->

        <!-- <ul class="navbar-nav"> -->

          <!-- <li class="nav-item">

            <a href="index3.html" class="nav-link">Home</a>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">Contact</a>

          </li> -->

          <!-- <li class="nav-item dropdown">

            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>

            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

              <li><a href="#" class="dropdown-item">Some action </a></li>

              <li><a href="#" class="dropdown-item">Some other action</a></li>



              <li class="dropdown-divider"></li>



              <li class="dropdown-submenu dropdown-hover">

                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>

                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">

                  <li>

                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>

                  </li>



                  <li class="dropdown-submenu">

                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>

                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">

                      <li><a href="#" class="dropdown-item">3rd level</a></li>

                      <li><a href="#" class="dropdown-item">3rd level</a></li>

                    </ul>

                  </li>

                  

                  <li><a href="#" class="dropdown-item">level 2</a></li>

                  <li><a href="#" class="dropdown-item">level 2</a></li>

                </ul>

              </li>

              

            </ul>

          </li> -->

        <!-- </ul> -->



        <!-- SEARCH FORM -->

        <!-- <form class="form-inline ml-0 ml-md-3">

          <div class="input-group input-group-sm">

            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

            <div class="input-group-append">

              <button class="btn btn-navbar" type="submit">

                <i class="fas fa-search"></i>

              </button>

            </div>

          </div>

        </form> -->

      </div>



      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

        <!-- <li class="nav-item dropdown">

          <a class="nav-link" data-toggle="dropdown" href="#">

            <i class="fas fa-comments"></i>

            <span class="badge badge-danger navbar-badge">3</span>

          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <a href="#" class="dropdown-item">

              <div class="media">

                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

                <div class="media-body">

                  <h3 class="dropdown-item-title">

                    Brad Diesel

                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>

                  </h3>

                  <p class="text-sm">Call me whenever you can...</p>

                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

                </div>

              </div>

              

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">

              <div class="media">

                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

                <div class="media-body">

                  <h3 class="dropdown-item-title">

                    John Pierce

                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>

                  </h3>

                  <p class="text-sm">I got your message bro</p>

                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

                </div>

              </div>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">

              

              <div class="media">

                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

                <div class="media-body">

                  <h3 class="dropdown-item-title">

                    Nora Silvester

                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>

                  </h3>

                  <p class="text-sm">The subject goes here</p>

                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

                </div>

              </div>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>

          </div>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link" data-toggle="dropdown" href="#">

            <i class="far fa-bell"></i>

            <span class="badge badge-warning navbar-badge">15</span>

          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <span class="dropdown-header">15 Notifications</span>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">

              <i class="fas fa-envelope mr-2"></i> 4 new messages

              <span class="float-right text-muted text-sm">3 mins</span>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">

              <i class="fas fa-users mr-2"></i> 8 friend requests

              <span class="float-right text-muted text-sm">12 hours</span>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">

              <i class="fas fa-file mr-2"></i> 3 new reports

              <span class="float-right text-muted text-sm">2 days</span>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>

          </div>

        </li>

        <li class="nav-item">

          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i

              class="fas fa-th-large"></i></a>

        </li> -->

        <li class="nav-item">

            <a href="index.php"><i class="fa fa-refresh"></i></a>

        </li>

        <!-- <li class="nav-item">

          <a href="index_r.php" class="nav-link">Acak Undian</a>

        </li> -->

      </ul>

    </div>

  </nav>



  <div class="content-wrapper">

    <div class="content-header">

      <div class="container">

        <?php include "content.php"; ?>

      </div>

    </div>

  </div>



  <!-- <aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">

      <h5>Title</h5>

      <p>Sidebar content</p>

    </div>

  </aside> -->





  <footer class="main-footer">

    <div class="float-right d-none d-sm-inline">

      Ulang Tahun Hoycow 2021

    </div>

    <!-- Default to the left -->

    <strong>Copyright &copy; <a href="https://bhadranayagroup.com">Bhadranaya Group</a>.</strong> All rights reserved.

  </footer>

</div>

<!-- ./wrapper -->

</body>

</html>

