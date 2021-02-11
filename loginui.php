<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <title>E-HealthCare</title>
  </head>

  <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="css/loginjpg3.jpg" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7 ">
              <div class="card-body" align="center">
                <p class="login-card-name" style="font-family: 'Satisfy', cursive;">E-HealthCare</p>
                <p class="login-card-description">Sign into your account</p>
                <form action="login.php" method="POST" >
                    <div class="form-group">
                      <!-- screen reader (sr) -->
                      <label for="email" class="sr-only">Email</label>
                      <input required type="email" name="email" id="email"  class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group mb-4">
                      <label for="password" class="sr-only">Password</label>
                      <input required type="password" name="password" id="password" class="form-control" placeholder="********">
                    </div>
                    <div class="form-group ">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text " for="inputGroupSelect01">UserType</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="usertype">
                          <option value="2">Doctor</option>
                          <option value="3">Hospital</option>
                          <option selected value="1">Patient</option>
                          <option value="4">Pharmacist</option>
                          <option value="5">BloodBank</option>
                          <option value="6">Laboratory</option>
                          <option value="7">SurgicalStore</option>
                          <option value="8">Admin</option>
                        </select>
                      </div>
                    </div>
                    <input name="submit_login" id="submit_login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                  </form>
                  <a href="#!" class="forgot-password-link">Forgot password?</a>
                  <p class="login-card-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
                  <nav class="login-card-footer-nav">
                    <a>By Bugsquashers</a>
                  </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>