<?php
include_once 'partials/header2.php';
include_once 'connection/conn.php'
?>

<main class="home">
    <section class="top">
        <h1>Home Page - Image Slider 2</h1>
    </section>
    <!-- Start of image slider -->
    <div>
        <div id="thumbnail-slider">
            <div class="inner" style="color: transparent;">
                <ul>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end of image slider -->
    <section class="middle">
        <div class="movies">
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
                <button id="modal_show" class="review">Read Reviews</button>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
            <div class="movies-inner">
                <img src="images/movie-placeholder.png" alt="">
                <p>rating</p>
                <h4>movie name</h4>
            </div>
        </div>

    </section>
    <div id="modal" class="modal">
        <div class="modal-top">
            <div class="modal-img">
                <img src="images/movie-placeholder.png" alt="">
            </div>
            <div class="modal-text">
                <h4>Movie Name</h4>
                <h4>Movie Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                    impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                    laudantium omnis totam.</p>
            </div>
        </div>
        <hr>
        <div class="movie-review">
            <div class="review-inner">
                 <pre id="review-text" class="review-text">
                <!-- This will come in dynamically from the database -->
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dignissimos dolor, ea
                impedit ipsum iure labore magni numquam tempora? Atque autem beatae eligendi eum fugiat ipsum
                laudantium omnis totam.
            </pre>
                <p id="review-name">
                    <!-- This will come in dynamically from the database -->
                    Reviewers Name
                </p>
            </div>
        </div>

    </div>
</main>


<?php include_once 'partials/footer.php'; ?>
