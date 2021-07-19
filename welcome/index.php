<?php
/** @var $hn array */
/** @var $un array */
/** @var $pw array */
/** @var $db array */
include_once '../connection/conn.php';
include_once '../partials/headerLogin.php';
// taking the details from the database
$conn = mysqli_connect($hn, $un, $pw, $db);
$movie = $conn->prepare('SELECT 
    distinct m.id,
    m.m_title,
    m.genre,
    m.m_img_path,
    r.rating
    FROM finalweb.movie m
    left join finalweb.review r on m.id = r.fk_movie_id  
    where r.rating > 3
    order by rand() limit 5
    ');
$movie->execute();
$movie->store_result();
$movie->bind_result($id, $title, $genre, $movieImg, $rating);
$slider = $conn->prepare('SELECT 
        m.m_img_path
     FROM finalweb.movie m
        ');
$slider->execute();
$slider->store_result();
$slider->bind_result($sliderImg);

// taking the details from the database
$reviews = $conn->prepare('SELECT 
       m.m_title,
       m.m_img_path,
       r.review,
       r.rating,
       u.username
       FROM finalweb.movie m
       left join review r on m.id = r.fk_movie_id
       left join user u on u.id = r.fk_user_id
       order by rand() limit 4
      ');
$reviews->execute();
$reviews->store_result();
$reviews->bind_result($title, $movieImg, $review, $rating, $username);

// taking the details from the database
$blog = $conn->prepare('SELECT 
        id,
        b_title,
        b_description,
        b_img_path
        from finalweb.blog
        order by id DESC limit 5
     
      ');
$blog->execute();
$blog->store_result();
$blog->bind_result($bid,$bTitle, $bDesc, $bImgPath);
?>
<main class="home">
    <!-- this is where the images will be changing at the top of the page -->
    <div class="images-slider">
        <ul id="slides">
            <!--   Images will be taken from the css file -->
            <li class="slide showing"></li>
            <li class="slide"></li>
            <li class="slide"></li>
            <li class="slide"></li>
        </ul>
    </div>
    <!-- start of image slider -->
    <div id="thumbnail-slider" style="color: transparent !important;">
        <div class="inner">
            <ul>
                <?php while ($slider->fetch()): ?>
                    <li>
                        <a class="thumb" href="<?=ROOT_DIR?>images/movies/<?= $sliderImg ?>"></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <!-- END OF IMAGE SLIDER -->
    <section class="middle">
        <h2>Movies </h2>
        <div class="movies">
            <?php while ($movie->fetch()): ?>
                <div class="movies-inner">
                    <p class="title"><?= $title ?></p>
                    <img src="<?=ROOT_DIR?>images/movies/<?= $movieImg ?>" alt="">
                    <h4>Recently Rated <?= $rating ?> <i class="fas fa-award"></i> </h4>
                    <h3><?= $genre ?></h3>
                    <button onclick="window.location.href='<?=ROOT_DIR?>movies/details.php?id=<?=$id?>';" class="review-btn">More Info</button>
                </div>
            <?php endwhile; ?>
        </div>

    </section>
    <section class="middle">
        <h2>Reviews</h2>
        <div class="movies">
            <?php while ($reviews->fetch()): ?>
                <div class="movies-inner">
                    <h3><?= $title?></h3>
                    <img src="<?=ROOT_DIR?>images/movies/<?= $movieImg ?>" alt="" class="review-img">
                    <h4>Rated <?= $rating ?> <i class="far fa-star"></i> </h4>
                    <h4>by <?= $username ?></h4>
                </div>
            <?php endwhile; ?>
        </div>
        <button onclick="window.location.href='<?=ROOT_DIR?>reviews'" class="review-btn"> reviews</button>

    </section>
    <section class="middle">
        <h2>Blogs</h2>
        <div class="blog">
            <?php while ($blog->fetch()): ?>
                <div class="blog-inner">
                    <h2><?=$bTitle?></h2>
                    <div class="blog-inner-img">
                        <img src="<?=ROOT_DIR?>images/movies/<?=$bImgPath?>" alt="">
                    </div>

                    <button onclick="window.location.href='<?=ROOT_DIR?>blog/blogDetails.php?bid=<?=$bid?>'" class="review-btn"> Read Full Blog</button>

                </div>

            <?php endwhile; ?>

        </div>

    </section>

</main>

<?php include_once '../partials/footer.php'; ?>
