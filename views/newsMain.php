<main>
    <section id="newsSlider" class="container">
        <h1 class="center">NEWS</h1>
        <div id="newsSliderCarousel" class="carousel carousel-slider center">
            <?php
            foreach ($newsFeaturedList as $index => $news) {
                // show the news after the 4 featured from Slider 
                if ($index <= 3) { ?>
                <a href="/newssingle?id=<?= $news->id_news ?>">
                    <div class="newsCarousel carousel-item white-text">
                        <img class="imageCarousel" src="/public/assets/img/news-images/<?= $news->id_news ?>.jpg" alt="news image">
                        <div class="headerCarousel">
                            <h2 class="grey-text text-darken-4"><?= $news->header ?></h2>
                        </div>
                    </div>
                </a>
            <?php
                }
            } ?>
        </div>
    </section>
    <section id="newsCards" class="container">
        <div class="row">
            <h2>see more:</h2>

            <?php
            foreach ($newsFeaturedList as $index => $news) {
                // show the news after the 4 featured from Slider 
                if ($index > 3) { ?>
                    <div class="col s12 m6 l4">
                        <div class="card card-panel hoverable">
                            <div class="card-image">
                                <img src="/public/assets/img/news-images/<?= $news->id_news ?>.jpg">
                            </div>
                            <div class="card-content">
                                <p class="truncate"><?= $news->header ?></p>
                            </div>
                            <div class="card-action">
                                <a href="/newssingle?id=<?= $news->id_news ?>">see more</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </section>
</main>