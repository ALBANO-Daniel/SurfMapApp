<main id="newsSingle">
    <section>
        <!-- navigation path component ....  -->
    </section>
    <section class="theNews">
        <!-- THE SINGLE NEWS -->
        <article class="container">
            <div class="row">
                <h1><?= $news->header ?></h1>
                <!-- CHECK IF TERNAIRE ECHO WORKS  -->
                <!-- <h5><//?= $news->created_at == null ? $news->modified_at : $news->created_at ?></h5> -->
                <h5><?php
                    $newsTime = $news->created_at == null ? $news->modified_at : $news->created_at;
                    echo $newsTime;
                    ?>
                </h5>
                <br>
                <blockquote><?= $news->subheader ?></blockquote>
            </div>
            <div class="row">
                <img class="center-align" width="80%" height="35%" src="/public/assets/img/news-images/<?= $news->id_news ?>.jpg" alt="main image of news">
            </div>
            <div class="row">
                <?= $news->body ?>
            </div>
        </article>

        <!-- COMMENTS SECTION  -->
        <div class="container comments">
            <?php 
        if (isset($_SESSION['user'])) { ?>
            <h3 class="row center">comments:</h3> <?php
        }
        ?>
            <?php
            foreach ($commentsList as $index => $comment) { ?>
                <div class="row comment">
                    <img class="left circle" height="100px" width="100px" src="/public/assets/img/profile-images/<?= $comment->id_users ?>.jpg" alt="profile image of comment">
                    <div class="row">
                        <span class="col s10"><?= $comment->comment ?></span>
                        <?php
                    if ($userId == $comment->id_users) { ?>
                        <a href="/commentdelete?id=<?= $comment->id_comments ?>" class="btn col s2 commentBtn"><i class="material-icons">delete</i></a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <div class="divider"></div>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <form action="" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">create</i>
                            <input name="new_comment" id="new_comment" type="text" class="validate">
                            <label for="new_comment">nouvelle commentaire</label>
                            <button>envoyer</button>
                        </div>
                    </div>
                <?php } ?>
                </form>
        </div>
    </section>
    <!-- MORE NEWS SECTION  -->
    <section class="container">
        <div class="row moreNews">
            <div class="row">
                <h2 class="center">featured</h2>
                <?php
                foreach ($newsFeaturedList as $index => $news) {
                    // check to avoid showing the same news as current
                    if ($news->id_news != $newsId) {?>
                        <div class="col s12 m6 l4">
                            <div class="card card-panel hoverable">
                                <div class="card-image">
                                    <img src="/public/assets/img/news-images/<?= $news->id_news ?>.jpg">
                                    <!-- <span class="card-title grey-text text-darken-4"><//?= $news->header ?></span> -->
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
        </div>
    </section>
</main>