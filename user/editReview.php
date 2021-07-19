<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $id array */
/** @var $rid array */
/** @var $review array */
include '../partials/headerLogin.php' ;
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}
$conn = mysqli_connect($hn, $un, $pw, $db);
$rid = $_GET['rid'];

$reviewEdit = $conn->prepare('select id, review from finalweb.review r where r.id = '.$rid.' ');
$reviewEdit->store_result();
$reviewEdit->bind_result($rid,$review);
$reviewEdit->execute();
$reviewEdit->fetch();


?>

<div class="add-review">
    <div class="add-review-form">
        <form action="edit.php?rid=<?=$rid?>" method="post" autocomplete="off">
            <h4>Edit or delete</h4>
            <p><?=$review?></p>
            <input type="hidden" value="<?=$rid?>">
            <label for="review">Add a Review</label>
            <textarea rows="10" name="review" id="review"><?=$review?></textarea>


            <input type="submit" value="Update Review">
        </form>
        <div class="edit-options">
            <ul>
                <!-- review id will be added to the end of this -->
                <li onclick="location.href='deleteReview.php?rid=<?=$rid?>&id=<?=$id?>'" title="Delete User"><i class="far fa-trash-alt"></i></li>
            </ul>
        </div>
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

