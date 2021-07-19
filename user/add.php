<?php
require '../connection/conn.php';
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */

$conn = mysqli_connect($hn, $un, $pw, $db);

$stmt = $conn->prepare("INSERT INTO review (review, rating, fk_movie_id, fk_user_id) VALUES(?, ?, ?, ?);");

$stmt->bind_param('ssss', $_POST['review'], $_POST['rating'], $_POST['fk_movie_id'], $_POST['fk_user_id']);
$stmt->execute();


header("Location: index.php");
