<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $id array */
/** @var $rid array */
/** @var $review array */
require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$uid = $_GET['uid'];
$stmt = $conn->prepare('UPDATE user u
    set
    u.is_active = 0
    where id = '.$uid.' ');

$stmt->bind_param('s',$_POST['is_active']);
$stmt->execute();
header("Location: users.php");

echo 'review updated successfully';

exit;