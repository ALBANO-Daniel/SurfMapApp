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
                    <li><a href="#home"><i class="material-icons">home</i>Accueil</a></li>
                    <li><a href="#news"><i class="material-icons">assignment_late</i>News</a></li>
                    <li><a href="#map"><i class="material-icons">map</i>Map</a></li>
                </ul>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Moderation</div>
                <ul class="collapsible-body">
                <li><a href="#newsComments"><i class="material-icons">assignment_late</i>News Comments</a></li>
                <li><a href="#mapComments"><i class="material-icons">assignment_late</i>Map Comments</a></li>
                <li><a href="#users"><i class="material-icons">assignment_late</i>Users</a></li>
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

</main>