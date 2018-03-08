<!DOCTYPE html>
<html lang="en">
<head>
  <title>Billing System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #myInput {
  padding: 20px;
  margin-top: -6px;
  border: 0;
  border-radius: 0;
  background: #f1f1f1;
}
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
          <li><a href="college_admin_view_staff.php">View Staff Details</a></li>
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
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--body -->
<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>ID</th>
        <th>Update/Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td>123</td>
        <td><div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">Edit</a></li>
      <li><a href="#">View</a></li>
      <li><a href="#">Delete</a></li>
    </ul>
  </div></td>
      </tr>
      <tr class="active">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>165</td>
        <td><div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">Edit</a></li>
      <li><a href="#">View</a></li>
      <li><a href="#">Delete</a></li>
    </ul>
  </div></td>
      </tr>
    </tbody>
  </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
