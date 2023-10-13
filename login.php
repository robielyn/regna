<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  include_once ('include/login_header.php')
?>
<main>
<section class="container forms">
            <div class="form login">
                <div class="form-content">
                    
                    <header>Login</header>
                    <form action="database/authenticate.php" method="post">
                        <div class="field input-field">
                            <input type="email" name="username" placeholder="Email" class="input" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="inner-page.php">Signup</a></span>
                    </div>
                </div>

            </div>

        </section>
    </main>

  <?php
   include_once ('include/login_footer.php')
  ?>
    
</body>
</html>


