<?php
$GLOBALS['title'] = "Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>


<section class="videoTSingle">
    <div class="container">
        <div class="videoTSingle-wrap">
            <h3>Short Videos</h3>
        </div>
    </div>
</section>


<section class="catlatest pt-0" id="short-videos">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            <?php
            $filteredShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-video';
            });

            foreach ($filteredShortVideos as $video) {
                echo "<div class=\"col\">
                <div class=\"short-item\">
                    <div class=\"short-item-thumbnail\">
                        <a href=\"https://www.youtube.com/watch?v={$video['videoID']}\" class=\"popup-youtube\"></a>
                        <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                        <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                        <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                    </svg>
                        <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    </div>
                    <h4>{$video['title']}</h4>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</section>



<?php
include('footer.php'); ?>