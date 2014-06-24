<?php
include '../../util/Connection.php';

$con = getConnection();

$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);

$sql="call sp_update_team ($id ,'$name')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record updated";
mysqli_close($con);
header('Location: http://'.$_SERVER['SERVER_NAME'].'/soccer_play_by_play/admin/team/view.php');


