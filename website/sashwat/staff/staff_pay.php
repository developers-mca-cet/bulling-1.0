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
        <a class="navbar-brand" href="../dash/staff_dash.php">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="staff_pay.php">Pay</a></li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Reports<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="staff_report.php">Class Wise</a></li>
<li><a href="staff_report.php">Department Wise</a></li>
<li><a href="staff_report.php">Worker Wise</a></li>
  <li><a href="staff_report.php">Student Wise</a></li>
    <li><a href="staff_report.php">Fee type Base</a></li>
      <li><a href="staff_report.php">Customize the generation</a></li>
</ul>
</li>
          <li><a href="staff_faq.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
	  <center>
	<div class="w3-card-4 " style="width:80%;">
    <header class="w3-container w3-black">
      <h1>Admission Number</h1>
    </header>

    <div class="w3-container">
		<br>
		<p>Enter admission number.</p>
      <p><input class="w3-input w3-border" name="first" type="text" style="width:25%">
		  <br>
		 <button class="w3-button w3-block w3-black" style="width:25%">Submit</button>
	  </p>
    </div>
  </div>
		  <br>
	<div class="w3-card-4 " style="width:80%;">
    <header class="w3-container w3-black">
      <h1>Student Details</h1>
    </header>

    <div class="w3-container">
		<br>
  <p>The following fields will be auto-filled, if the admission number is available in database.</p>

  <table class="w3-table w3-bordered">
    <tr>
      <td>Name</td>
      <td><input class="w3-input w3-border" name="first" type="text"></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td>
		 <select class="w3-select w3-border" name="option">
  			<option value="" disabled selected>Choose semester</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
			<option value="3">4</option>
			<option value="3">5</option>
			<option value="3">6</option>
			<option value="3">7</option>
			<option value="3">8</option>
		</select> 
	  </td>
    </tr>
    <tr>
      <td>Course</td>
      <td>
		<select class="w3-select w3-border" name="option">
  			<option value="" disabled selected>Choose course</option>
  			<option value="BTech">BTech</option>
  			<option value="MTech">MTech</option>
  			<option value="MCA">MCA</option>
			<option value="MBA">MBA</option>
		</select> 
	  </td>
    </tr>
	<tr>
      <td>Specialisation</td>
      <td>
		<select class="w3-select w3-border" name="option">
  			<option value="" disabled selected>Choose course</option>
  			<option value="1">random1</option>
  			<option value="2">random2</option>
  			<option value="3">random3</option>
			<option value="4">random4</option>
		</select> 
	  </td>
    </tr>
  </table>
</div>
  </div>
    <br>
  <div class="w3-card-4 " style="width:80%;">
    <header class="w3-container w3-black">
      <h1>Fee List</h1>
    </header>
	  <br>
    <p>The following fields will be auto-filled, if the admission number is available in database.</p>
    <div class="w3-container">
		<br>
      <p><input class="w3-check" type="checkbox">
		<label>Semester Fees</label>
		<input class="w3-check" type="checkbox">
		<label>KTU Fee</label>
		<input class="w3-check" type="checkbox" disabled>
		<label>Library Fees</label> 
	  </p>
		<p><button class="w3-button w3-block w3-black" style="width:25%">Submit</button></p>
    </div>
  </div>
		  <br>
		  </center>
</body>
	<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>ALPHA 1.0 </h5>
</footer>
</html>