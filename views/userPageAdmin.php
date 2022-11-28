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
                        <li class="tab"><a href="#news"><i class="material-icons">assignment_late</i>News</a></li>
                        <li class="tab"><a href="#map"><i class="material-icons">map</i>Map</a></li>
                    </ul>
                </ul>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Moderation</div>
                <ul class="collapsible-body">
                    <ul class="tabs">
                        <li class="tab"><a href="#newsComments"><i class="material-icons">assignment_late</i>News Comments</a></li>
                        <li class="tab"><a href="#mapComments"><i class="material-icons">assignment_late</i>Map Comments</a></li>
                        <li class="tab"><a href="#users"><i class="material-icons">assignment_late</i>Users</a></li>
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
    </ul>

    <!-- NEWS NAV SECTION  -->
    <section id="news" class="center">
        <div class="row">

            <nav class="col s12 light-blue darken-2">
                <h5 class="center">NEWS</h5>
            </nav>
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


                <div class="row">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#newsForm">Nouvelle</a></li>
                        <li class="tab col s6"><a href="#newsList">Liste</a></li>
                    </ul>
                </div>

                <!-- NEWS FORM  -->
                <form id="newsForm" class="container" action="" method="post" enctype="multipart/form-data">
                    <!-- header  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="input_text" type="text" data-length="30">
                            <label for="input_text">Main title</label>
                        </div>
                    </div>
                    <!-- headlines / sub-title -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="input_text" type="text" data-length="100">
                            <label for="input_text">headline - blockquote</label>
                        </div>
                    </div>
                    <!-- main image  -->
                    <div class="row">
                        <!-- image placeholder -->
                        <div class="col s12">
                            <!-- look for CSS  -->
                            <img id="showArticleImg" class="responsive-img" src="/public/assets/img/default-image.jpg" alt="article image" />
                        </div>
                    </div>
                    <!--  image input  -->
                    <div class="row">
                        <div class="file-field input-field col s12">
                            <span>choisir article image</span>
                            <input name="articleimage" type="file" accept="image/png, image/jpeg" id="uploadedArticleImg" placeholder="choose article image">
                        </div>
                    </div>
                    <!-- text  -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">ecrire article:</label>
                        </div>
                    </div>
                    <!-- submit -->
                    <div class="row center-align">
                        <button class="unset"><a class="waves-effect waves-light btn">create</a></button>
                    </div>
                </form>

                <!-- NEWS LIST  -->
                <div id="newsList" class="container center">
                    <ul class="row collapsible">
                        <li>
                            <div class="collapsible-header">Shark's bite for love <span class="grey-text">-20 dec 2020</span></div>
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
                            <div class="collapsible-header">Mondial surf hawaii <span class="grey-text">-20 dec 2020</span></div>
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
                            <div class="collapsible-header">Learn well by eating well <span class="grey-text"> le 20 dec 2020</span></div>
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

    <!-- MAP NAV SECTION   -->
    <section id="map" class="center">
        <div class="row">

            <nav class="col s12 grey darken-1">
                <h5 class="center">MAP</h5>
            </nav>
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
    </section>
</main>