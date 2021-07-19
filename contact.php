<?php
require '../connection/conn.php';
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */

$conn = mysqli_connect($hn, $un, $pw, $db);

$stmt = $conn->prepare("INSERT INTO contact (name, email, feedback) VALUES(?, ?, ?);");

$stmt->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['feedback']);
$stmt->execute();

echo '<p>We appreciate the feed back and will get back to you in the near future /p> <a href=" ">Check out the latest movies</a>';

