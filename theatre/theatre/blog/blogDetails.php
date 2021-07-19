<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
include_once '../partials/headerLogin.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
$bid = $_GET['bid'];
$stmt = $conn->prepare('SELECT  
       b.b_title,
       b.b_description,
       b.b_img_path
    FROM user.blog b
    where b.id = '.$bid.' ');
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $blogTitle, $blogDesc, $blogImg);
?>
<main class="home">
    <section class="middle">
        <button id="go-back" class="review-btn"> < BACK </button>
        <div class="blog-details">
            <?php while ($stmt->fetch()): ?>
                <div class="details-inner">
                    <div class="details-inner-img">
                        <img src="<?=ROOT_DIR?>images/movies/<?=$blogImg?>" alt="">
                    </div>
                    <div class="details-inner-text">
                        <h2 class="header"><?=$blogTitle?></h2>
                        <p><?=$blogDesc?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<script>
    document.getElementById('go-back').addEventListener('click', () => {
        history.back();
    });
</script>
<?php include_once '../partials/footer.php'; ?>
