<?php
require '../connection/conn.php';
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */

$conn = mysqli_connect($hn, $un, $pw, $db);

$stmt = $conn->prepare("INSERT INTO blog (b_title, b_description, b_img_path) VALUES(?, ?, ?);");

$stmt->bind_param('sss', $_POST['b_title'], $_POST['b_description'], $_POST['b_img_path']);
$stmt->execute();


header("Location: C:\Users\User\PhpstormProjects\theatrecompleted\theatre\theatre\blog");

