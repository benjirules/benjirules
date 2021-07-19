<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $title array */
/** @var $fk_movie */
/** @var $movieImg */
include_once '../partials/headerLogin.php';
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}
elseif ($_SESSION['is_admin'] == 0) {
    header('Location: ../login/');
    exit;
}
require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$stmt = $conn->prepare('SELECT 
       m_title,
       m.genre,
       m.release_date,
       m.show_date,
       m.m_img_path,
        r.review,
       r.rating,
       u.id,
       u.username,
       r.id,
       r.fk_movie_id,
       r.fk_user_id
       FROM theatre.movie m

        left join review r on m.id = r.fk_movie_id
        left join user u on u.id = r.fk_user_id
        where u.is_active = 1
        order by r.id desc ');


$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $title,$genre, $release, $aired, $movieImg, $review, $rating, $uid, $username, $rid, $fk_movie, $fk_user);
$stmt->fetch();
?>

    <main class="admin">
        <h2>Hi, <?=$_SESSION['name']?>! You are viewing all reviews</h2>
        <?php if ($stmt->num_rows == 0): ?>
            <h2>There are no reviews yet</h2>
        <?php else: ?>
        <?php while ($stmt->fetch()): ?>
        <div class="admin-review">
            <h4 class="title">
                <?=$title?>
            </h4>
            <div class="admin-inner">
                <div class="img">
                    <img src="../images/movies/<?= $movieImg ?>" alt="">
                    <div class="edit-options">
                        <ul>
                            <!-- review id will be added to the end of this -->
                            <li onclick="location.href='editReview.php?rid=<?=$rid?>'"><i class="fas fa-user-edit"></i></li>
                            <li onclick="location.href='users.php'"><i class="fas fa-user"></i></li>
                            <li onclick="location.href='delete.php?rid=<?=$rid?>&uid=<?=$uid?>'" title="Delete User"><i class="far fa-trash-alt"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <pre><?=$review?></pre>
                    <p>Submitted  <?= $username ?></p>
                </div>
            </div>

        </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </main>

