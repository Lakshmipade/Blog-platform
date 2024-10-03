<?php include('path.php'); ?>
<?php include(ROOT_PATH ."/app/controllers/users.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="boxicons.min.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Register</title>
</head>

<body>
  <!-- TOOO: INCLUDE HEADER HERE -->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="auth-content">
    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>
      <hr>
      <!-- <div class="msg error">
              <span>Username required</span>
            </div> -->
      <div>
        <label>Username</label>
        <input type="text" name="username" class="txt-input" placeholder="Your Name">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" class="txt-input" placeholder="Your Email">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="txt-input" placeholder="Password">
      </div>
      <div>
        <label>Confirm Password</label>
        <input type="password" name="password" class="txt-input" placeholder="Confirm password">
      </div>
      <div class="submit-btn">
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        <p>Already Registered? <a href="<?php echo BASE_URL . "/login.php" ?>">Login here</a></p>
      </div>

    </form>
  </div>


  <!-- footer -->
  <!-- TOOO: INCLUDE FOOTER HERE -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- slick carousel -->
  <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>