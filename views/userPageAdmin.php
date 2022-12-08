<main id="mainAdmin" class="row">
    <!-- MOBILE/TABLET ADMIN NAVBAR  -->
    <nav class=" light-blue darken-4 hide-on-large-only">
        <div class="container nav-wrapper">
            <div class="logoDiv">
                <img id="logo" class="left" height="100%" src="/public/assets/img/logos/logowhite1.png" alt="logo site">
                <h1 class="navBarLogoText">ADMIN DASHBOARD</h1>
            </div>
            <a href="#" data-target="slide-out" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <!-- SIDE NAV - MAIN DASHBOARD NAV  -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="/public/assets/img/cards/1-card-landscape.jpg">
                </div>
                <a href="/user"><img class="circle" src="/public/assets/img/profile-images/admin.png"></a>
                <a href="/"><span class="white-text">SURF SPOTLIGHT</span></a>
                <a href="#email"><span class="white-text email">Admin Dashboard</span></a>
            </div>
        </li>
        <!-- // SEARCH HOLE DBase  -->
        <li>
            <form id="searchForm">
                <div class="input-field">
                    <input id="search" type="search" required>
                    <i class="material-icons">search</i>
                </div>
            </form>
        </li>
        <!-- main dashboard functionalities  -->
        <ul class="collapsible">
            <li>
            <div class="collapsible-header text-grey"><i class="material-icons">vpn_key</i>Moderation</div>
                <ul class="collapsible-body">
                    <ul class="tabs">
                        <li class="tab"><a href="#home"><i class="material-icons">home</i>Accueil</a></li>
                        <li class="tab"><a href="#news"><i class="material-icons">event_note</i>News</a></li>
                        <li class="tab"><a href="#mapsection"><i class="material-icons">map</i>Map</a></li>
                    <div class="divider"></div>
                        <li class="tab"><a href="#newsComments"><i class="material-icons">message</i>News Comments</a></li>
                        <li class="tab"><a href="#mapComments"><i class="material-icons">message</i>Map Comments</a></li>
                        <li class="tab"><a href="#users"><i class="material-icons">people</i>Users</a></li>
                    </ul>
                </ul>
            </li>
        </ul>
        <!-- // documents section  -->
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">documents</a></li>
        <li><a class="waves-effect" href="?p=support">Contact Support</a></li>
        <li><a class="waves-effect" href="?p=guide">Admin Guide</a></li>
        <li><a class="waves-effect" href="?p=userguide">New user Guide</a></li>
        <li><a class="waves-effect" href="?p=terms">user terms</a></li>
        <li><a class="waves-effect" href="?p=protection">user protection</a></li>

        <li class="navFooter grey darken-1">
            <div class="footer-copyright">
                <div class="container">
                    © 2023 Tupan Network
                </div>
            </div>
        </li>
    </ul>

    <!-- error/sucess output  -->
    <?php
    if (SessionFlash::exist()) {
        $msg = SessionFlash::get();
        if ($msg[0] == true) { ?>
            <p class='green center white-text'>
            <?php
        } else { ?>
            <p class='red center white-text'>
            <?php
        }
        print_r($msg[1]) ?>
            </p>
        <?php
    } ?>


        <!-- NAV >> PAGES >> ACCUEIL  SECTION  -->
        <section id="home" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2 headermargin">
                    <h5 class="center">Page d'Accueil </h5>
                </nav>

                <div class="container center">
                    <h5 class="no-margin-top">editer les sessions de la page d'accueil: </h5>
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Edite barre de navegation</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>Choisir Video d'accueil</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>Premiere section</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i> deuxieme section</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i> troisieme section</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i> quatrieme section</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>modifiee 'footer'</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                    </ul>
                </div>


        </section>

        <!-- NAV >> PAGES >> NEWS  SECTION  -->
        <section id="news" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">NEWS</h5>
                </nav>

                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#newsForm">Nouvelle</a></li>
                        <li class="tab col s6"><a href="#newsList">Liste</a></li>
                    </ul>
                </div>

                <!-- NEWS FORM  -->
                <form novalidate id="newsForm" class="container" action="" method="post" enctype="multipart/form-data">
                    <h5>creation de nouvelle Actualite</h5>
                    <!-- header  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="newsheader" id="newsheader" value="<?= $newsHeader ?? '' ?>" type="text" data-length="50" required>
                            <label for="newsheader">Titre</label>
                        </div>
                    </div>
                    <!-- headlines / sub-title -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="newssubheader" id="newssubheader" value="<?= $newsSubHeader ?? '' ?>" type="text" data-length="255" required>
                            <label for="newssubheader">Surtitre</label>
                        </div>
                    </div>
                    <!-- main image  -->
                    <!-- $error['newsimage'] -->
                    <div class="row">
                        <!-- image placeholder -->
                        <div class="col s12">
                            <!-- look for CSS  -->
                            <img id="showNewsImg" class="responsive-img" src="/public/assets/img/default-image.jpg" alt="article image" />
                        </div>
                    </div>
                    <!--  image input  -->
                    <div class="row">
                        <div class="file-field input-field col s12">
                            <span>choisir article image</span>
                            <input name="newsimage" type="file" accept="image/png, image/jpeg" id="uploadedNewsImg" placeholder="choose article image" required>
                        </div>
                    </div>
                    <!-- News body text  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="newsbody" id="newsbody" value="<?= $newsBody ?? '' ?>" class="materialize-textarea" required></textarea>
                            <label for="newsbody">ecrire article:</label>
                        </div>
                    </div>
                    <!-- submit -->
                    <div class="row center-align">
                        <button class="unset"><a class="waves-effect waves-light btn">create</a></button>
                    </div>
                </form>

                <!-- NEWS LIST  -->
                <div id="newsList" class="container center">
                    <h5>liste de tous les actualitees</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($newsList as $index => $news) {
                            $date = $news->modified_at == null ? $news->created_at : $news->modified_at;
                            // $date = format_date($date); 
                        ?>
                            <li>
                                <div class="collapsible-header"><?= $news->header ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                <div class="collapsible-body">
                                    <div><img width="100px" height="100px" src="/public/assets/img/news-images/<?= $news->id_news ?>.jpg" alt="thumbnail news image"></div>
                                    <div><?= $news->subheader ?></div>
                                    <div><?= $news->body ?></div>
                                    <div class="btns row">
                                        <a class="btn col s4" href="/commentslist?newsid=<?= $news->id_news ?>">comments</a>
                                        <a class="btn col s4" href="/newsedit?id=<?= $news->id_news ?>">edit</a>
                                        <a class="btn col s4" href="/newsdelete?id=<?= $news->id_news ?>">delete</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </section>

        <!-- NAV >> PAGES >> MAP  SECTION   -->
        <section id="mapsection" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">MAP</h5>
                </nav>

                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#spotForm">Nouvelle</a></li>
                        <li class="tab col s6"><a href="#spotsList">Liste</a></li>
                    </ul>
                </div>

                <!-- SPOT FORM  -->
                <form id="spotForm" class="container" action="" method="post" enctype="multipart/form-data">
                    <h5>creation de nouvelle 'Spot'</h5>
                    <br>
                    <!-- GPS LATITUDE and LONGITUDE -->
                    <div class="container">
                        <div class="row">
                            <span>clique sur le map pour choisir la latitude et longitude : </span>
                            <div id="map" class="map map-home leaflet-container leaflet-touch"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input disabled name="latitude" id="latitude" type="text" data-length="100" value="123">
                            <label for="latitude">latitude</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input disabled name="longitude" id="longitude" type="text" data-length="100" value="564">
                            <label for="longitude">longitude</label>
                        </div>
                    </div>
                    <!-- spot name  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="spotname" id="spotname" type="text" data-length="30">
                            <label for="spotname">Spot Name</label>
                        </div>
                    </div>
                    <!-- description  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="spotdescription" id="spotdescription" class="materialize-textarea"></textarea>
                            <label for="spotdescription">Description:</label>
                        </div>
                    </div>
                    <!-- main image  -->
                    <!-- $error['spotimage']  -->
                    <div class="row">
                        <!--  image input  -->
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <span>clique pour choisir image du spot</span>
                                <input name="spotimage" type="file" accept="image/png, image/jpeg" id="uploadedSpotImg" placeholder="choose spot image">
                            </div>
                        </div>
                        <!-- image placeholder -->
                        <div class="col s12">
                            <!-- look for CSS  -->
                            <img id="showSpotImg" class="responsive-img" src="/public/assets/img/default-image.jpg" alt="spot image" />
                        </div>
                    </div>
                    <!-- submit -->
                    <div class="row center-align">
                        <br>
                        <button class="unset"><a class="waves-effect waves-light btn">create</a></button>
                    </div>
                </form>

                <!-- SPOTS LIST  -->
                <div id="spotsList" class="container center">
                    <h5>liste de toute les 'spots'</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($spotsList as $index => $spot) {
                            $date = $spot->modified_at == null ? $spot->created_at : $spot->modified_at;
                            // format $date with function  
                        ?>
                            <li>
                                <div class="collapsible-header"><?= $spot->name ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                <div class="collapsible-body">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <img width="100px" height="100px" src="/public/assets/img/spots-images/<?= $spot->id_spots ?>.jpg" alt="spot image, the beach waves">
                                        </div>
                                        <div class="col s12 m6">mini map with pin...</div>
                                    </div>
                                    <div>lat: <?= $spot->latitude ?> || log: <?= $spot->longitude ?></div>
                                    <div><?= $spot->description ?></div>
                                    <div class="btns row">
                                        <a href="/comments?id=<?= $spot->id_spots ?>" class="btn col s4">comments</a>
                                        <a href="/spotedit?id=<?= $spot->id_spots ?>" class="btn col s4">edit</a>
                                        <a href="/spotdelete?id=<?= $spot->id_spots ?>" class="btn col s4">delete</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

        </section>

        <!-- NAV >> MODERATION >> NEWS COMMENTS  SECTION   -->
        <section id="newsComments" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">NEWS COMMENTS</h5>
                </nav>

                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#toValidNewsComments">VALIDER</a></li>
                        <li class="tab col s6"><a href="#validNewsComments">HISTORIQUE</a></li>
                    </ul>
                </div>

                <!-- VALIDER(comments) LIST  -->
                <div id="toValidNewsComments" class="container center">
                    <h5>liste des commentaires a valider</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($newsCommentsList as $index => $comment) {
                            // category 1 == news (config.php)
                            if ($comment->deleted_at == null && $comment->validated_at == null && $comment->category == 1) {
                                // format $date with function
                                $date = $comment->modified_at == null ? $comment->created_at : $comment->modified_at;
                                $user = User::get($comment->id_users);
                        ?>
                                <li>
                                    <div class="collapsible-header">posted by: <?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s2">
                                                <a href="/commentvalidate?id=<?= $comment->id_comments ?>" class="btn row">
                                                    <i class="material-icons">check_box</i>
                                                </a>
                                                <a href="/commentdelete?id=<?= $comment->id_comments  ?>" class="btn row">
                                                    <i id="deleteBtn" class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <div class="col s8">
                                                <div class="row">
                                                    <?= $comment->comment ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>

                <!-- ALL/ OLD/ HISTORIC(comments) LIST  -->
                <div id="validNewsComments" class="container center">
                    <h5>comments historie</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($newsCommentsList as $index => $comment) {
                            // category 1 == news (config.php)
                            if ($comment->deleted_at == null && $comment->validated_at != null && $comment->category == 1) {
                                $date = $comment->modified_at == null ? $comment->created_at : $comment->modified_at;
                                // need format $date with function
                                $user = User::get($comment->id_users);
                        ?>
                                <li>
                                    <div class="collapsible-header">posted by: <?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s2">
                                                <a href="/commentdelete?id=<?= $comment->id_comments ?>" class="btn row">
                                                    <i id="deleteBtn" class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <div class="col s8">
                                                <?= $comment->comment ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- NAV >> MODERATION >> MAP COMMENTS  SECTION   -->
        <section id="mapComments" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">MAP COMMENTS</h5>
                </nav>

                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#toValidMapComments">VALIDER</a></li>
                        <li class="tab col s6"><a href="#validMapComments">HISTORIQUE</a></li>
                    </ul>
                </div>

                <!-- VALIDER(comments) LIST  -->
                <div id="toValidMapComments" class="container center">
                    <h5>liste des commentaires a valider</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($mapCommentsList as $index => $comment) {
                            // category 2 == map (config.php)
                            if ($comment->deleted_at == null && $comment->validated_at == null && $comment->category == 2) {
                                $user = User::get($comment->id_users);
                                // format $date with function
                                $date = $comment->modified_at == null ? $comment->created_at : $comment->modified_at;
                        ?>
                                <li>
                                    <div class="collapsible-header">posted by: <?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s2">
                                                <a href="/commentvalidate?id=<?= $comment->id_comments ?>" class="btn row">
                                                    <i class="material-icons">check_box</i>
                                                </a>
                                                <a href="/commentdelete?id=<?= $comment->id_comments ?>" class="btn row">
                                                    <i id="deleteBtn" class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <div class="col s8">
                                                <div class="row">
                                                    <?= $comment->comment ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>

                <!-- ALL/ OLD/ HISTORIC(comments) LIST  -->
                <div id="validMapComments" class="container center">
                    <h5>comments historie</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($commentsList as $index => $comment) {
                            // format $date with function
                            // category 2 == map (config.php)
                            if ($comment->deleted_at == null && $comment->validated_at != null && $comment->category == 2) {
                                $date = $comment->modified_at == null ? $comment->created_at : $comment->modified_at;
                                $user = User::get($comment->id_users);
                        ?>
                                <li>
                                    <div class="collapsible-header">posted by: <?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s2">
                                                <a href="/commentdelete?id=<?= $comment->id_comments ?>" class="btn row">
                                                    <i id="deleteBtn" class="material-icons">delete</i>
                                                </a>
                                            </div>
                                            <div class="col s8">
                                                <?= $comment->comment ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- NAV >> MODERATION >> USERS  SECTION   -->
        <section id="users" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">USERS</h5>
                </nav>

                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#toValidUsers">VALIDER</a></li>
                        <li class="tab col s6"><a href="#validUsers">LIST</a></li>
                    </ul>
                </div>

                <!-- toVALID(users) LIST  -->
                <div id="toValidUsers" class="container center">
                    <h5>liste des utilizateurs a valider</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($usersList as $index => $user) {
                            $date = $user->modified_at == null ? $user->created_at : $user->modified_at;
                            // format $date with function
                            // category 1 == news (config.php)
                            if ($user->deleted_at == null && $user->validated_at == null) { ?>
                                <li>
                                    <div class="collapsible-header"><?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s6">
                                                <a href="/uservalidate?id=<?= $user->id_users ?>" class="btn row">
                                                    <i class="material-icons">check_box</i>
                                                </a>
                                            </div>
                                            <div class="col s6">
                                                <a href="/userdelete?id=<?= $user->id_users ?>" class="btn row">
                                                    <i id="deleteBtn" class="material-icons">delete</i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s6">
                                                <img src="/public/assets/img/profile-images/<?= $user->id_users ?>.jpg" alt="profile image">
                                            </div>
                                            <div class="col s6">
                                                <div class="row">
                                                    <span>Email: <?= $user->email ?></span>
                                                    <span>Ville: <?= $user->city ?></span>
                                                    <span>Pays: <?= $user->country ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>

                <!-- VALID(users) LIST  -->
                <div id="validUsers" class="container center">
                    <h5>comments historie</h5>
                    <ul class="row collapsible">
                        <?php
                        foreach ($usersList as $index => $user) {
                            $date = $user->modified_at == null ? $user->created_at : $user->modified_at;
                            // format $date with function
                            // category 1 == news (config.php)
                            if ($user->deleted_at == null && $user->validated_at != null) { ?>
                                <li>
                                    <div class="collapsible-header">posted by: <?= strtoupper($user->lastname) ?>,<?= $user->firstname ?><span class="grey-text smaller">(<?= $date ?>)</span></div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <div class="col s6">
                                                <img src="/public/assets/img/profile-images/<?= $user->id_users ?>.jpg" alt="profile image">
                                            </div>
                                            <div class="col s6">
                                                <div class="row">
                                                    <span>Email: <?= $user->email ?></span>
                                                    <span>Ville: <?= $user->city ?></span>
                                                    <span>Pays: <?= $user->country ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <a href="/deleteuser?id=<?= $user->id_users ?>">delete this user</a>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>

            </div>
        </section>


</main>