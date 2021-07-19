
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
require_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$stmt = $conn->prepare('SELECT 
       u.id,
       u.username,
       u.email,
       u.is_active
     
       FROM theatre.user u
        order by u.id desc ');


$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $uid, $username, $email, $active);
$stmt->fetch();
?>

    <main class="users">
        <h2>Hi, <?=$_SESSION['name']?>! You are viewing all users</h2>
        <?php if ($stmt->num_rows == 0): ?>
            <h2>No one here but us chickens</h2>
        <?php else: ?>

        <div class="user-list">
            <?php while ($stmt->fetch()): ?>
            <div class="user-details" id="<?=$uid?>">
                <h4 class="title">
                    <?=$username?>
                </h4>
                <p><?=$email?></p>
                <?php if($active == 0){
                    echo'<p>User has turned into a loser and left the site/p>
                    <a href="activateUser.php?uid='.$uid.'" title="Deactivate User"><i class="fas fa-user-plus" style="color: green"></i></a>';
                }
                else{
                    echo '<p>User is still in the room, click here to delete him</p>
                    <a href="deactivateUser.php?uid=' . $uid . '" title="Deactivate User"><i class="fas fa-user-slash" style="color: red"></i></a>';
                }
                ?>
            </div>
            <?php endwhile; ?>
        </div>

        <?php endif; ?>

    </main>

