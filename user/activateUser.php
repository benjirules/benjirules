<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $uid array */
/** @var $rid array */
/** @var $review array */
require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$id = $_GET['id'];
$stmt = $conn->prepare('UPDATE user u
    set
    u.is_active = 1
    where id = '.$id.' ');
$stmt->bind_param('i',$_POST['is_active']);
$stmt->execute();
header("Location: index.php");
exit;