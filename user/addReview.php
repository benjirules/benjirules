<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $movie array */
/** @var $movId array */
/** @var $id array */
/** @var $movTitle array */
include '../partials/headerLogin.php' ;
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}
include_once '../connection/conn.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$id = $_SESSION['id'];
$movie = $conn->prepare('SELECT m.id, m.m_title FROM finalweb.movie m');
$movie->execute();
$movie->store_result();
$movie->bind_result($movId, $movTitle);
?>
<h1>Add User</h1>

<div class="add-review"style="color:red">
    <div class="add-review-form">
        <form action="add.php" method="post" autocomplete="off">
            <h4>Add a Review</h4>
            <input type="hidden" name="fk_user_id" value="<?=$id?>">
            <label for="movie"></label>
            <select name="fk_movie_id" id="movie" style="color:red">
                <option>SELECT MOVIE </option>
                <?php while ($movie->fetch()): ?>
                    <option value="<?=$movId?>"><?=$movTitle?></option>
                <?php endwhile; ?>
            </select>
            <label for="rating">please enter a rating between 1 and 5</label>
            <input type="tel" name="rating" id="rating">
            <label for="review">Add your Review</label>
            <textarea rows="10" name="review" id="review"></textarea>


            <input type="submit" value="Add Review">
        </form>
        <div class="msg"></div>
    </div>
</div>
<script>

</script>
<script>
    let form = document.querySelector('.register form');
    form.onsubmit = function(event) {
        event.preventDefault();
        let form_data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', form.action, true);
        xhr.onload = function () {
            document.querySelector('.msg').innerHTML = this.responseText;
        };
        xhr.send(form_data);
    };
</script>

