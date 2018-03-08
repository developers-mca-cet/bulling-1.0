<!DOCTYPE html>
<html lang="en">
<head>
  <title>Billing Software</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      .btn-primary-outline {
  background-color: transparent;
  border-color: #ccc;
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
          <li><a href="college_admin_view_staff.php">View Staff Details</a></li>
          <li><a href="college_admin_change_pword.php">Password Reset</a></li>
        </ul>
      </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Course <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="college_admin_add_course.php">Add New Course Structure</a></li>
          <li><a href="#">View/Delete Details</a></li>
          <li><a href="#">Update Details</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Fee Structure<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="college_admin_add_feestructure.php">view/update/delete</a></li>
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
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Generate Reports<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="college_admin_report.php">Class Wise</a></li>
<li><a href="#">Department Wise</a></li>
<li><a href="#">Worker Wise</a></li>
  <li><a href="#">Student Wise</a></li>
    <li><a href="#">Fee type Base</a></li>
      <li><a href="college_admin_contact_page.php">Customize the generation</a></li>
</ul>
</li>

          <li><a href="staff_work_analysis.php">Work Analysis</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="" alt="">John Doe
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="javascript:;"> Profile</a></li>
              <li>
                <a href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li><a href="javascript:;">Help</a></li>
              <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    <!-- Page Container -->
  <div class="w3-container w3-content " style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
           <h4 class="w3-center">My Profile</h4>

           <div class="container">
               <div class="dropdown">
                   <button class=" bbtn-default dropdown-toggle"  data-toggle="dropdown">
                     <p class="w3-center"><img src="images/avatar3.png" class="w3-circle img-responsive" style="height:106px;width:106px" alt="dropdown image"></p>
                       <span class="caret"></span>
                   </button>
                   <ul class="dropdown-menu">
                       <li><a href="#">Settings</a></li>
                       <li><a href="#">Log Out</a></li>
                       <li><a href="#">Dropdown menu 3</a></li>
                   </ul>
               </div>
           </div>
           <hr>
  		       <p><i class="fa fa-address-card fa-fw w3-margin-right w3-text-theme"></i> Name</p>
           <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-text-theme"></i> @Username</p>
          </div>
        </div>
        <br>
      <!-- End Left Column -->
      </div>

      <!-- Middle Column -->
      <div class="w3-col m7">

        <div class="w3-container w3-card w3-white w3-round w3-margin">
        		<h2>Personal Information</h2><br>

        <form class="form-horizontal form-label-left input_mask">

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" placeholder="Default Input">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
              <button type="button" class="btn btn-primary">Cancel</button>
   <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
        </div>

        <div class="w3-container w3-card w3-white w3-round w3-margin">

        <form class="form-horizontal form-label-left input_mask">
        <h2>Change password</h2><br>
            <hr class="w3-clear">
    		<p>
               <label>Enter new passsword</label>
               <input class="form-control has-feedback-left" type="password">
    	    </p>
    		<p>
               <label>Re-Enter new passsword</label>
               <input class="w3-input w3-border" type="password">
    	    </p>
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="button" class="btn btn-primary">Cancel</button>
 <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </br></br>
      </form>
    </div>
      <!-- End Middle Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <p>ADS</p>
        </div>
        <br>

  	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <p>ADS</p>
        </div>
        <br>
  	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <p>ADS</p>
        </div>
        <br>
      <!-- End Right Column -->
      </div>

    <!-- End Grid -->
    </div>

  <!-- End Page Container -->
  </div>
  <br>

  <!-- Footer -->
  <footer class="w3-container w3-theme-d3 w3-padding-16">
    <h5>ALPHA 1.0 </h5>
  </footer>
    </body>
    </html>
