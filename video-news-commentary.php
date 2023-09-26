<?php
$GLOBALS['title'] = "Newhydrogen";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/podcast-data.php";
include('header.php'); ?>



<section class="videoTSingle">
    <div class="container">
        <div class="videoTSingle-wrap">
            <h3>News Commentary</h3>
        </div>
    </div>
</section>

<section class="podcast allpodcasts">
    <div class="container">
        <div class="row">
            <?php
              $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary';
            });
            foreach ($filteredCEOPodcast as $video) {
                echo "<div class=\"col-lg-4\">
                <div class=\"podcast-item\">
                    <div class=\"podcast-item-thumbnail\"><img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\">
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64' fill='none'>
                    <circle cx='32' cy='32' r='32' fill='#4fe653'/>
                    <path d='M38 32.5L27 39L27 26L38 32.5Z' fill='black'/>
                </svg>
                    <a href=\"single-video.php?id={$video['videoID']}\"></a></div>
                    <h2>{$video['title']}</h2>
                </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>

<?php
include('footer.php'); ?>