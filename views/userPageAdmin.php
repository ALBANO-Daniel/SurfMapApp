<main id="mainAdmin" class="row">
    <!-- MOBILE/TABLET ADMIN NAVBAR  -->
    <nav class=" light-blue darken-4 hide-on-large-only">
        <div class="container nav-wrapper">
            <div class="logoDiv">
                <img class="left" height="100%" src="/public/assets/img/logos/logo.png" alt="logo site">
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
                <div class="collapsible-header"><i class="material-icons">pageview</i>PAGES</div>
                <ul class="collapsible-body">
                    <ul class="tabs">
                        <li class="tab"><a href="#home"><i class="material-icons">home</i>Accueil</a></li>
                        <li class="tab"><a href="#news"><i class="material-icons">event_note</i>News</a></li>
                        <li class="tab"><a href="#map"><i class="material-icons">map</i>Map</a></li>
                    </ul>
                </ul>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">vpn_key</i>Moderation</div>
                <ul class="collapsible-body">
                    <ul class="tabs">
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


        <!-- NAV>>PAGES>>ACCUEIL  SECTION  -->
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

        <!-- NAV>>PAGES>>NEWS  SECTION  -->
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
                        <li>
                            <div class="collapsible-header">Shark's bites for love<span class="grey-text smaller">(20 dec 2020)</span></div>
                            <div class="collapsible-body">
                                <div>image thumb</div>
                                <div>headlines</div>
                                <div>content</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="collapsible-header">Mondial surf hawaii<span class="grey-text smaller">(20 dec 2020)</span></div>
                            <div class="collapsible-body">
                                <div>image thumb</div>
                                <div>headlines</div>
                                <div>content</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">surf better by eating better<span class="grey-text smaller">(05 aout 1990)</span></div>
                            <div class="collapsible-body">
                                <div>image thumb</div>
                                <div>headlines</div>
                                <div>content</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </section>

        <!-- NAV>>PAGES>>MAP  SECTION   -->
        <section id="map" class="center">
            <div class="row">

                <nav class="col s12 light-blue darken-2">
                    <h5 class="center">SPOTS</h5>
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
                    <!-- header  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="spotname" id="spotname" type="text" data-length="30">
                            <label for="spotname">Spot Name</label>
                        </div>
                    </div>
                    <!-- main image  -->
                    <!-- $error['spotimage']  -->
                    <div class="row">
                        <!-- image placeholder -->
                        <div class="col s12">
                            <!-- look for CSS  -->
                            <img id="showSpotImg" class="responsive-img" src="/public/assets/img/default-image.jpg" alt="spot image" />
                        </div>
                    </div>
                    <!--  image input  -->
                    <div class="row">
                        <div class="file-field input-field col s12">
                            <span>choisir image du spot</span>
                            <input name="spotimage" type="file" accept="image/png, image/jpeg" id="uploadedSpotImg" placeholder="choose spot image">
                        </div>
                    </div>
                    <!-- GPS LATITUDE and LONGITUDE -->
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input name="latitude" id="latitude" type="text" data-length="100">
                            <label for="latitude">latitude</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input name="longitude" id="longitude" type="text" data-length="100">
                            <label for="longitude">longitude</label>
                        </div>
                    </div>
                    <!-- description  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="spotdescription" id="spotdescription" class="materialize-textarea"></textarea>
                            <label for="spotdescription">Description:</label>
                        </div>
                    </div>
                    <!-- submit -->
                    <div class="row center-align">
                        <button class="unset"><a class="waves-effect waves-light btn">create</a></button>
                    </div>
                </form>

                <!-- SPOTS LIST  -->
                <div id="spotsList" class="container center">
                    <h5>liste de toute les plages</h5>
                    <ul class="row collapsible">
                        <li>
                            <div class="collapsible-header">Secret 1<span class="grey-text smaller">(20 dec 2020)</span></div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="col s12 m6">images thumbnails </div>
                                    <div class="col s12 m6">mini map pin thumbnail? vs real map API </div>
                                </div>

                                <div>resume</div>
                                <div>lat / long OR map</div>
                                <div>description</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="collapsible-header">Buraco do macaco<span class="grey-text smaller">(20 dec 2020)</span></div>
                            <div class="collapsible-body">
                                <div>...</div>
                                <div>headlines</div>
                                <div>content</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">quebradeira do jose<span class="grey-text smaller">(05 aout 1990)</span></div>
                            <div class="collapsible-body">
                                <div>image thumb</div>
                                <div>headlines</div>
                                <div>content</div>
                                <div class="btns row">
                                    <span class="btn col s4">comments</span>
                                    <span class="btn col s4">edit</span>
                                    <span class="btn col s4">delete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

        </section>

</main>