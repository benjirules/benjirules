<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $cName array */
/** @var $usrName array */


require_once '../connection/conn.php';

$conn = mysqli_connect($hn, $un, $pw, $db);
$id = $_GET['id'];
$rid = $_GET['rid'];

$stmt = $conn->prepare('DELETE FROM review where id = '.$rid.'  and fk_user_id = '.$id.'  ');

$stmt->bind_param('i', $_GET['id']);
$stmt->execute();
header('Location: index.php');
exit;

// always updating dropdown -- need to fix
// date



