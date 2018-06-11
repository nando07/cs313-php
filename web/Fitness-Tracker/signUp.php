
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="createAccount.php" method="POST">
      <div class="text-center mb-4">

        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        
      </div>

      <div class="form-label-group">
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Email address" required autofocus>
        <label for="inputEmail">username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <label for="inputPassword">password</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign Up</button><br>
      <p class="text-center mb-4">or <a  href="form.php">Sign In</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Created by: Fernando Gomez 2018</p>
    </form>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </body>
</html>