<?php
include '../../util/Connection.php';

$con = getConnection();

$id = mysqli_real_escape_string($con, $_POST['id']);

$sql="call sp_delete_player ($id)";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record deleted";
mysqli_close($con);
header('Location: http://'.$_SERVER['SERVER_NAME'].'/soccer_play_by_play/admin/player/view.php');


