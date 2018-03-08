<!DOCTYPE html>
<html lang="en">
<head>
  <title>Billing Software</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">



  <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .row.content {height: 450px}

      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 1080px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;}
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Staff Management <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="college_admin_add_staff.php">Add New Staffs</a></li>
          <li><a href="#">View Staff Details</a></li>
          <li><a href="#">Password Reset</a></li>
        </ul>
      </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Course <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Add New Course Structure</a></li>
          <li><a href="#">View/Delete Details</a></li>
          <li><a href="#">Update Details</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fee Structure<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">view/update/delete</a></li>
      <li><a href="#">Add New Fee Structure</a></li>
    </ul>
  </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Bills<span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="#">Class Wise</a></li>
  <li><a href="#">Department Wise</a></li>
  <li><a href="#">Worker Wise</a></li>
    <li><a href="#">Student Wise</a></li>
      <li><a href="#">Fee type Base</a></li>
        <li><a href="#">Customize the generation</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Reports<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Class Wise</a></li>
<li><a href="#">Department Wise</a></li>
<li><a href="#">Worker Wise</a></li>
  <li><a href="#">Student Wise</a></li>
    <li><a href="#">Fee type Base</a></li>
      <li><a href="#">Customize the generation</a></li>
</ul>
</li>

          <li><a href="staff_work_analysis.php">Work Analysis</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Contacts Design</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <ul class="pagination pagination-split">
                    <li><a href="#">A</a></li>
                    <li><a href="#">B</a></li>
                    <li><a href="#">C</a></li>
                    <li><a href="#">D</a></li>
                    <li><a href="#">E</a></li>
                    <li>...</li>
                    <li><a href="#">W</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Z</a></li>
                  </ul>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <h4 class="brief"><i>Digital Strategist</i></h4>
                      <div class="left col-xs-7">
                        <h2>Nicole Pearson</h2>
                        <p><strong>About: </strong> Web Designer / UI. </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-building"></i> Address: </li>
                          <li><i class="fa fa-phone"></i> Phone #: </li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom text-center">
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <p class="ratings">
                          <a>4.0</a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star"></span></a>
                          <a href="#"><span class="fa fa-star-o"></span></a>
                        </p>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                          </i> <i class="fa fa-comments-o"></i> </button>
                        <button type="button" class="btn btn-primary btn-xs">
                          <i class="fa fa-user"> </i> View Profile
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

</div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</body>
</html>
