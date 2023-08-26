<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin - Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php
    require_once "config.php";

    include('includes/head.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]); // Not recommended for secure password hashing
    
        echo $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
        if ($conn->query($query)) {
          echo "<br> Registration successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    
  ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-1 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register Account</h5>
                    <p class="text-center small">Enter your username, email & password to login</p>
                  </div>
                  
                  <form method="post" action="" class="row g-3 needs-validation" >
                  <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">                        
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Username.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">Designed by <a href="https://imbuesoft.com/">Dr. Prakash Gujarati</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include('includes/footer.php');
  ?>
  

</body>

</html>