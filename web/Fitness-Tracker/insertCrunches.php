<?php
session_start();

$standard = $_POST['abStandard'];
$reverse = $_POST['abReverse'];
$twisting = $_POST['abTwisting'];
$tuck = $_POST['abTuck'];

// $t=time();
// $formattedTime = date()
// echo(date("Y-m-d h:i:s",$t));

require("connectToDB.php");
$db = get_db();

try {

$query = 'INSERT INTO workout.crunches(standard, reverse, twisting, tuck) VALUES(:standard, :reverse,  :twisting, :tuck)';
$statement = $db->prepare($query);


$statement->bindValue(':standard', $standard);
$statement->bindValue(':reverse', $reverse);
$statement->bindValue(':twisting', $twisting);
$statement->bindValue(':tuck', $tuck);

$statement->execute();

$username = $_SESSION['username_session'];
$password = $_SESSION['password_session'];
$statement = $db->prepare("SELECT id FROM workout.user 
WHERE workout.user.username = '$username'
AND workout.user.password = '$password'");

$row = $statement->fetch(PDO::FETCH_ASSOC);

$userId = $row['id'];
$t = time();
$formattedT = date("Y-m-d h:i:s",$t);

$crunchesId = $db->lastInsertId("crunches_id_seq");

$statement = $db->prepare('INSERT INTO workout.session(date, user_id, pushups_id, crunches_id) 
VALUES (:ctime, :user, :pushupsID, :crunchesID)');

$statement->bindValue(':ctime', $formattedT);
$statement->bindValue(':user', $userId);
$statement->bindValue(':pushupsID', null);
$statement->bindValue(':crunchesID', $crunchesId);

$statement->execute();



} catch (Exception $ex) {
    echo "Error in database. Details: $ex";
	die();
}

header("Location: stats.php");
die();
?>