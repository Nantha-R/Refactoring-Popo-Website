<!-- Login page for hub and employee -->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="cssFiles/login.css">
  <?php include "base_header.html" ?>
</head>
<body>
  <?php include "base_navbar.html";?>
  <script>
    document.getElementById('login-header').classList.add('active');
    document.getElementById('login-header').childNodes[0].removeAttribute('href');
  </script>
  <div class="col-lg-6 col-md-6 col-sm-10">
    <form class="form-horizontal login-form" role="form" action="phpFiles/hub_login.php" method="post">
      <center><h2>Hub Login</h2></center>
      <strong>Hub Id</strong>
      <div class="input-group margin-top">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" placeholder="Enter the Hub Id" name="hub_id" required>
      </div><br>
      <strong>Password</strong>
      <div class="input-group margin-top">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
        <input type="password" class="form-control" name="hub_password" placeholder="Enter The Password" required>
      </div>
      <?php
        include "phpFiles/utilities.php";
        if(isset_session('hub_credentials_not_found'))
          if(get_session('hub_credentials_not_found'))
            echo "<h4 style='color:red'>Invalid user credentials</h4>";
        store_session('hub_credentials_not_found',False);
       ?>
      <div class="form-group margin-top">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <input style="width:50%" type="submit" value="Login" class="btn btn-success"/>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <form class="form-horizontal login-form" role="form" action="phpFiles/employee_login.php" method="post">
      <center><h2>Employee Login</h2></center>
      <strong>User Id</strong>
      <div class="input-group margin-top">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="employee_id" type="text" class="form-control" placeholder="Enter the Employee Id" required>
      </div><br>
      <strong>Password</strong>
      <div class="input-group margin-top">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
        <input name="employee_password" type="password" class="form-control" placeholder="Enter The Password" required>
      </div>
      <?php
        if(isset_session('employee_credentials_not_found'))
          if(get_session('employee_credentials_not_found'))
            echo "<h4 style='color:red'>Invalid user credentials</h4>";
        store_session('employee_credentials_not_found',False);
       ?>
      <div class="form-group margin-top">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <input style="width:50%" type="submit" value="Login" class="btn btn-success" />
        </div>
      </div>
    </form>
  </div>
</body>
</html>
