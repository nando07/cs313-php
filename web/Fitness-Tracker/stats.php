<?php
session_start();
if (!isset($_SESSION['username_session'])) {
  header("Location: form.php");
  die();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>stats</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body>
<header>
      <div class="collapse bg-dark" style="background-color:black;" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 style="font-family: 'Permanent Marker', cursive;" class="text-white">Welcome</h4>
              <p class="text-muted"><?php echo $_SESSION['username_session']; ?></p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 style="font-family: 'Permanent Marker', cursive;" class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="signOut.php" class="text-white">Sign Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="fitness.php" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong style="font-family: 'Permanent Marker', cursive;">Home</strong>
          </a>
		   
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
	<main role="main">

<div class="album py-5 bg-light">
  <div class="container">

	<div class="row">
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		<video class="card-img-top" muted autoplay loop>
  <source src="videos/abs.mp4" type="video/mp4">
</video>
		  <div class="card-body">
		   <h3 style="font-family: 'Permanent Marker', cursive;">Crunches</h3><br />
		   <form id="abForm" action="insertCrunches.php" method="POST">


<input type="number" min="0" max="1000" class="form-control" id="abStandard" name="abStandard" placeholder="Standard" required autofocus/>
<br />

<input type="number" min="0" max="1000" class="form-control" id="abReverse" name="abReverse" placeholder="Reverse" required/>
<br />

<input type="number" min="0" max="1000" class="form-control" id="abTwisting" name="abTwisting" placeholder="Twisting" required />
<br />

<input type="number" min="0" max="1000"  class="form-control" id="abTuck" name="abTuck" placeholder="Tuck" required />
<br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		 
		  </div>
		</div>
	  </div>
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		<video class="card-img-top" muted autoplay loop>
  <source src="videos/pushups.mp4" type="video/mp4">
</video>
		  <!-- <img class="card-img-top" src="img/pushups.jpg" alt="Card image cap"> -->
		  <div class="card-body">
			  <h3 style="font-family: 'Permanent Marker', cursive;">Push-ups</h3><br />
		   <form class="form-signin" action="insertPushups.php" method="POST">

<div class="form-label-group">
<input type="number" min="0" max="1000" class="form-control" id="pStandard" name="pStandard" placeholder="Standard" required/>
<br />
</div>

<div class="form-label-group">
<input type="number" min="0" max="1000" class="form-control" id="pWide" name="pWide" placeholder="Wide" required/>
<br />
</div>

<div class="form-label-group">
<input type="number" min="0" max="1000" class="form-control" id="pArmy" name="pArmy" placeholder="Army" required/>
<br />
</div>

<div class="form-label-group">
<input type="number" min="0" max="1000" class="form-control" id="pIncline" name="pIncline" placeholder="Incline" required/>
<br />
</div>




		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		  </div>
		</div>
	  </div>
	  
	  <div class="col-md-4">
		<div class="card mb-4 box-shadow">
		<video class="card-img-top" muted autoplay loop>
  <source src="videos/run.mp4" type="video/mp4">
</video>
		  <div class="card-body">
			  <p style="color:red;">Still in Beta</p>
			  <h3 style="font-family: 'Permanent Marker', cursive;">Running</h3><br />
		   <form id="rForm" action="" method="POST">

<label for="rTime">Distance</label>
<input type="number" min="0" max="100" class="form-control" id="rDistance" name="rDistance" required/>

<br />


		   <input type="submit" class="btn btn-sm btn-outline-secondary" value="Save" />
		   </form>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>

</main>

<br><br>
<h1 style="text-align:center; font-family: 'Permanent Marker', cursive;">Your Stats!</h1>
	<?php 

		require_once('connectToDB.php');
		$db = get_db();
		
		// select exists(select 1 from contact where id=12)
		// get from form
		// if (isset($_POST['username']) && isset($_POST['password'])){
			$username = $_SESSION['username_session'];
			$password = $_SESSION['password_session'];

			$t=time();
echo '<p style="text-align:center;">' . (date("Y-m-d h:i:s",$t)) . '</p>';
			
		//	echo '<p style="text-align:center;">' . $username . ', ' . $password . '</p>';
		// }

			$query = $db->query("SELECT username, password FROM workout.user AS u WHERE u.username = '$username'");	
			$validation = $query->fetch(PDO::FETCH_ASSOC);
	?>

	<div class="container">
	<h1 style="font-family: 'Permanent Marker', cursive;">Push-ups</h1>
	<div class="row">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><i class="far fa-calendar-alt"></i></th>
			<th><i class="fas fa-user"></i></th>
			<th>Std.</th>
			<th>Wide</th>
			<th>Army</th>
			<th>Incline</th>
			<th><i class="fas fa-exclamation-circle"></i></th>
			</tr>
			</thead>
			<tbody>
			<?php 
			
			$query = "SELECT TO_CHAR(date, 'MON-DD-YYYY') date, username, p_id, standard, wide, army, incline                                                                              
			FROM workout.session, workout.user, workout.pushups      
			WHERE workout.session.user_id = workout.user.id                  
			AND workout.session.pushups_id = workout.pushups.p_id                                                      
			AND workout.user.username = '$username'
			ORDER BY date";

			$statement = $db->prepare($query);
			$statement->execute();

			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
			  echo '<tr><td align="center">' . $row['date'] . '</td>' . '<td align="center">' 
			  . $row['username'] . '<td align="center">' . $row['standard'] 
			  . '</td>' . '<td align="center">' . $row['wide'] . '</td>' . '<td align="center">' 
			  . $row['army'] . '</td>' . '<td align="center">' . $row['incline'] . '</td>' 
			  . '<td align="center"><a href="edit_pushups.php?id=' . $row['p_id'] . '"' . 'class="btn btn-sm btn-outline-secondary">Edit</a></td></tr>';
			}
			?>
			</tbody>
			</table>
			</div>
			</div>

<div class="container">
	<h1 style="font-family: 'Permanent Marker', cursive;">Crunches</h1>
	<div class="row">
	<table class="table table-striped">
	<thead>
	<tr>
	<th><i class="far fa-calendar-alt"></i></th>
			<th><i class="fas fa-user"></i></th>
			<th>Std.</th>
			<th>Reverse</th>
			<th>Twist</th>
			<th>Tuck</th>
			<th><i class="fas fa-exclamation-circle"></i></th>
			</tr>
			</thead>
			<tbody>
			<?php

			
			$query = "SELECT TO_CHAR(date, 'MON-DD-YYYY') date, username, c_id, standard, reverse, twisting, tuck                                                                              
			FROM workout.session, workout.user, workout.crunches      
			WHERE workout.session.user_id = workout.user.id                  
			AND workout.session.crunches_id = workout.crunches.c_id                                                      
		    AND workout.user.username = '$username'
			ORDER BY date";

$statement = $db->prepare($query);
$statement->execute();

			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				
				

			  echo '<tr><td align="center">' . $row['date'] . '</td>' . '<td align="center">' . $row['username'] 
			  . '</td>' .'<td align="center">' . $row['standard'] . '</td>' . '<td align="center">' 
			  . $row['reverse'] . '</td>' . '<td align="center">' . $row['twisting'] . '</td>' . '<td align="center">' 
			  . $row['tuck'] . '<td align="center"><a href="edit_crunches.php?id=' . $row['c_id'] . '"' .'class="btn btn-sm btn-outline-secondary">Edit</a></td></tr>';
			}
			?>
			</tbody>
			</table>
			</div>
			</div>

			<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Fit Tracker &copy; by Fernando Gomez</p>
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>
</html>


