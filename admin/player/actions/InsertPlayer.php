<?php
include '../../util/Connection.php';

$con = getConnection();

$name = mysqli_real_escape_string($con, $_POST['name']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$is_staple = mysqli_real_escape_string($con, $_POST['is_staple']);
$team = mysqli_real_escape_string($con, $_POST['team']);

$sql="call sp_set_player ('$name', $number, $is_staple, '$team')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
header('Location: http://'.$_SERVER['SERVER_NAME'].'/soccer_play_by_play/admin/player/view.php');
