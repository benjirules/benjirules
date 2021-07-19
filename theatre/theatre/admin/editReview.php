<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
/** @var $id array */
/** @var $id array */
/** @var $rid array */
/** @var $review array */
include '../partials/headerLogin.php';
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}
elseif ($_SESSION['is_admin'] == 0) {
    header('Location: ../login/');
    exit;
}
$conn = mysqli_connect($hn, $un, $pw, $db);
$rid = $_GET['rid'];

$reviewEdit = $conn->prepare('select 
       r.id, 
       r.review, 
        u.id,
       u.username

        from theatre.review r 
        left join user u on u.id = r.fk_user_id
        where r.id = '.$rid.' ');
$reviewEdit->store_result();
$reviewEdit->bind_result($rid,$review, $uid, $username);
$reviewEdit->execute();
$reviewEdit->fetch();


?>

<div class="add-review">
    <div class="add-review-form">
        <form action="edit.php?rid=<?=$rid?>" method="post" autocomplete="off">
            <h3>Edit or delete <?=$username?>'s review</h3>
            <input type="hidden" value="<?=$rid?>">
              <label for="review">Add your Review</label>
                <textarea rows="10" name="review" id="review"><?=$review?></textarea>


            <input type="submit" value="Update Review">
        </form>
        <div class="edit-options">
            <ul>
                <!-- review id will be added to the end of this -->
                <li onclick="location.href='delete.php?rid=<?=$rid?>&uid=<?=$uid?>'" title="Delete User"><i class="far fa-trash-alt"></i></li>
                <li>
                    <a href="users.php#<?=$uid?>" style="color: green;">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
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

