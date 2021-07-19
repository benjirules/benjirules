<?php
include_once 'partials/header6.php';
include_once 'connection/conn.php'
?>
<!--start of image slider-->
<div style="padding:100px 0;background:#333;">
    <div id="thumbnail-slider" style="display:none;">
        <div class="inner">
            <ul>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/1.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/2.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/3.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/4.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/5.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/6.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/7.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/8.jpg"></a>
                </li>
                <li class="thumb-li">
                    <a class="thumb" href="thumbnailSlider/img/9.jpg"></a>
                </li>
            </ul>
        </div>
        <div id="closeBtn">CLOSE</div>
    </div>

    <ul id="myGallery">
        <li class="thumb-li"><img src="thumbnailSlider/img/1.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/2.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/3.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/4.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/5.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/6.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/7.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/8.jpg" /></li>
        <li class="thumb-li"><img src="thumbnailSlider/img/9.jpg" /></li>
    </ul>

    <div style="clear:both;"></div>
    <script>
        //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
        var thumbSldr = document.getElementById("thumbnail-slider");
        var closeBtn = document.getElementById("closeBtn");
        let galleryImgs = document.getElementById("myGallery").getElementsByTagName("li");
        for (var i = 0; i < galleryImgs.length; i++) {
            galleryImgs[i].index = i;
            galleryImgs[i].onclick = function (e) {
                var li = this;
                thumbSldr.style.display = "block";
                mcThumbnailSlider.init(li.index);
            };
        }

        thumbSldr.onclick = closeBtn.onclick = function (e) {
            //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
            thumbSldr.style.display = "none";
        };
    </script>
    <!-- end of image slider -->
</div>

