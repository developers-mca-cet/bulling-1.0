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
    </style>
  </head>
  <body class="w3-theme-l5">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="staff_dash.php">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="../staff/staff_pay.php">Pay</a></li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Reports<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="../staff/staff_report.php">Class Wise</a></li>
<li><a href="../staff/staff_report.php">Department Wise</a></li>
<li><a href="../staff/staff_report.php">Worker Wise</a></li>
  <li><a href="../staff/staff_report.php">Student Wise</a></li>
    <li><a href="../staff/staff_report.php">Fee type Base</a></li>
      <li><a href="../staff/staff_report.php">Customize the generation</a></li>
</ul>
</li>
          <li><a href="../staff/staff_faq.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
         <p class="w3-center"><img src="../images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
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
        <h2>Change Profile Picture</h2><br>
		 <hr class="w3-clear">
		<div class="w3-light-grey">
  			<div class="w3-green" style="height:24px;width:25%"></div>
		</div>
		  <br>
		<p>
           <button class="w3-bar-item w3-button w3-black" style="width:50%">select</button>
		   <button class="w3-bar-item w3-button w3-green" style="width:49%">Submit</button>
	    </p>
		<br>
		<h2>Change password</h2><br>
        <hr class="w3-clear">
		<p>
           <label>Enter new passsword</label>
           <input class="w3-input w3-border" type="password">
	    </p>
		<p>
           <label>Re-Enter new passsword</label>
           <input class="w3-input w3-border" type="password">
	    </p>
		<p><button class="w3-button w3-round-xlarge w3-black">Submit</button></p>
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
