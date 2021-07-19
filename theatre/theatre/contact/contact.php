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

echo '<p>Thank you for you feedback, we will be in touch soon</p> <a href="../../../../finalweb/movies">Check out the latest movies</a>';

