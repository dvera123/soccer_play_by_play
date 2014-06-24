<?php
include '../../util/Connection.php';

$con = getConnection();

$name = mysqli_real_escape_string($con, $_POST['name']);

$sql="call sp_set_team ('$name')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
header('Location: http://'.$_SERVER['SERVER_NAME'].'/soccer_play_by_play/admin/team/view.php');
