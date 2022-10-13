<?php
$scriptFile[] = 'navBar.js';
$cssFile[] = 'navBar.css'
?>

<nav class=" light-blue darken-4">
    <div class="container nav-wrapper">
        <img class="left" height="100%" src="/public/assets/img/logos/logo.png" alt="logo site">
        <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/home">Home</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="map">Map</a></li>
            <li><a href="/user">User Space</a></li>
            <li><a href="contact"></a>Contact and Support</li>
        </ul>
    </div>
</nav>

<ul class="sidenav blue lighten-5" id="mobile-demo">
    <li class="center-align">
        <img class="" width="80%" src="/public/assets/img/logos/logo.png" alt="logo site">
    </li>
    <li><a href="/home"><i class="material-icons">home</i>Home</a></li>
    <li><a href="/news"><i class="material-icons">assignment_late</i>News</a></li>
    <li><a href="/map"><i class="material-icons">map</i>Map</a></li>
    <li><a href="/user"><i class="material-icons">account_box</i>User Space</a></li>
    <li><a href="/contact"><i class="material-icons">contact_phone</i>Contact and Support</a></li>
</ul>