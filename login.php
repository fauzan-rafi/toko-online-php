<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="asset/login.css" type="text/css">
      <title>Login Page</title>
</head>

<body>




      <div class="container mt-5" id="login">
      <!-- #################################################################### -->
      

            <?php if (isset($_SESSION["gagal"])) { ?>
                  <div class="alert alert-danger" role="alert">
                        Username/Password salah!!
                  </div>
            <?php } ?>

            <?php if (isset($_GET['pesan'])){ ?>
                  <div class="alert alert-danger" role="alert">
                        Logout Berhasil!!
                  </div>
            <?php } ?>
            <?php session_unset(); ?>


      <!--   #############################################               -->
            <div class="row justify-content-md-center">
                  <div class="col-sm-4 p-4 bg-light">
                        <h1 class="mb-4">Login page</h1>
                        <form method="POST" action="cek_login.php">
                              <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                              </div>
                              <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                              </div>
                              <button type="submit" class="btn btn-primary" name="login">Submit</button>
                        </form>
                  </div>
            </div>
      </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>