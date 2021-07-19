<?php
include_once 'partials/header5.php';
include_once 'connection/conn.php'
?>

<main class="home">
    <section class="top">
        <h1>Home Page - Image Slider 5</h1>
    </section>
    <!-- start of image slider -->
    <div style="padding:20px 0;background:#708aa8; color: transparent; ">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/2.jpg">
                            <h3>Pellentesque at Felis</h3>
                            Nulla porttitor fringilla dui vel pulvinar. Nam sodales, diam eu faucibus convallis.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/3.jpg">
                            <h3>Condimentum Posuere</h3>
                            Sed tincidunt mi ut ligula rutrum dictum. Nam varius in nunc eget viverra.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/4.jpg">
                            <h3>Lorem Ipsum</h3>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/5.jpg">
                            <h3>Mauris Suscipit</h3>
                            Quisque luctus, dui nec condimentum interdum et sodales nulla ante at nunc.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/6.jpg">
                            <h3>Felis at Volutpat</h3>
                            Maecenas volutpat accumsan nibh ut gravida. Praesent id laoreet libero. Felis at volutpat egestas.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/7.jpg">
                            <h3>Quisque Quam Eros</h3>
                            Vivamus dictum pulvinar sem in ultricies. Vestibulum sit amet posuere dui.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/8.jpg">
                            <h3>Duis Faucibus Aliquam Tincidunt</h3>
                            Nunc tempor massa in purus lobortis dapibus ac eget nulla.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/9.jpg">
                            <h3>Aliquam Rutrum Condimentum</h3>
                            Fusce quis eros vitae mauris porta vulputate non et orci. A convallis augue aliquet at.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/10.jpg">
                            <h3>Mauris a Imperdiet</h3>
                            In blandit quam. Mauris iaculis libero consequat elit molestie, sed lobortis lorem posuere.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/11.jpg">
                            <h3>Nulla Aliquet Eros Tellus</h3>
                            Eget semper lacus mollis vel. Mauris ut placerat dui, sit amet tristique tellus.
                        </a>
                    </li>
                    <li>
                        <a class="thumb" href="thumbnailSlider/img/12.jpg">
                            <h3>Cras Viverra Nisi Purus</h3>
                            At gravida nunc condimentum id. Morbi gravida accumsan mauris at scelerisque
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</main>
<script>
    //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
    let slides = document.getElementById("thumbnail-slider").getElementsByTagName("li");
    for (let i = 0; i < slides.length; i++) {
        slides[i].onmouseover = function (e) {
            let li = this;
            if (li.thumb) {
                let content = "<div class='tip-wrap' style='background-image:url(" + li.thumbSrc + ");'><div class='tip-text'>" + li.thumb.innerHTML + "</div></div>";
                tooltip.pop(li, content);
            }
        };
    }
</script>
<!-- end of image slider -->
<?php include_once 'partials/footer.php'; ?>
