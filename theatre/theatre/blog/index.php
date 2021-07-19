<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
include_once '../partials/headerLogin.php';
/** @var TYPE_NAME $conn */
$conn = mysqli_connect($hn, $un, $pw, $db);
$stmt = $conn->prepare('SELECT  
       id,
       b.b_title,
       b.b_description,
       b.b_img_path
    FROM theatre.blog b
    order by id DESC ');
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $bid, $blogTitle, $blogDesc, $blogImg);
?>
<main class="home">
    <section class="middle">
        <h2 class="header">LATEST BLOGS</h2>
        <div class="blog">
            <?php while ($stmt->fetch()): ?>
                <div class="blog-inner">
                    <h2><?=$blogTitle?></h2>
                    <div class="blog-inner-img">
                        <img src="<?=ROOT_DIR?>images/movies/<?=$blogImg?>" alt="">
                    </div>
                    <div class="blog-inner-text">
                        <p><?=$blogDesc?></p>
                    </div>
                    <button onclick="window.location.href='<?=ROOT_DIR?>blog/blogDetails.php?bid=<?=$bid?>'" class="review-btn"> Read Full Blog</button>

                </div>

            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php include_once '../partials/footer.php'; ?>
