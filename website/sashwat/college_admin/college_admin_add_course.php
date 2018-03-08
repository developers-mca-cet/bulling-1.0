<!DOCTYPE html>
<html lang="en">
<head>
  <title>Billing Software</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


<div class="container">
  <h2>Add New Course</h2>
  <form>
    <div class="form-group form-group-lg">
      <div class="input-group">
        <span class="input-group-addon" data-toggle="tooltip" title="If the Department is not added select add new!" name="department">Select Department</span>
        <select class="btn btn-default dropdown-toggle" style="width:300px" id='department'>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
          <option value="1">Add New</option>
    </select>
    &nbsp;&nbsp;
  <input type="text" id="txt_dept" placeholder="Enter department name" name="txt_dept" style="display: none;"/>
</div>
  <div class="input-group">
        <span class="input-group-addon" data-toggle="tooltip" title="If the Course is not added select add new!" name="Course">Select Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <select class="btn btn-default dropdown-toggle"  style="width:300px" id='course'>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
          <option value="1">Add New</option>
    </select>
    &nbsp;&nbsp;
  <input type="text" id="txt_course" placeholder="Enter department name" name="txt_course" style="display: none;"/>
      </div>

    <div class="input-group">
      <span class="input-group-addon"></span>
      <input style="width:530px" id="staff_fname" type="text" class="form-control" name="staff_fname" placeholder="First name">
      <input style="width:530px" id="staff_lname" type="text"  class="form-control"  name="staff_lname" placeholder="Last name">
    </div>
    <div class="input-group">
      <span class="input-group-addon"></i></span>
      <input id="staff_id" type="text" class="form-control" name="staff_id" placeholder="Staff ID">
    </div>
    <div class="input-group">
      <span class="input-group-addon"></i></span>
      <input id="phone_no" type="text" class="form-control" name="phone_no" placeholder="mobile number">
    </div>
    <div class="input-group">
      <span class="input-group-addon"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <span class="input-group-addon"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
    </div>
    <div>
      <button type="button" class="btn btn-primary">Add Staff</button>
       <button type="button" class="btn btn-danger">Cancel</button>
    </div>
  </form>
</div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
        $('#department').change(function () {
            if ($('#department').val() == '1') {
                $('#txt_dept').show();
            }
            else {
                $('#txt_dept').hide();
            }
        });
    });


    $(document).ready(function () {
            $('#course').change(function () {
                if ($('#course').val() == '1') {
                    $('#txt_course').show();
                }
                else {
                    $('#txt_course').hide();
                }
            });
        });
</script>
</body>
</html>
