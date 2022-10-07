<?php
$scriptFile[] = 'navBar.js';
$cssFile[] = 'navBar.css'
?>

<nav class=" light-blue darken-4">
    <div class="container nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/home"><i class="material-icons">home</i>Home</a></li>
            <li><a href="/news"><i class="material-icons">assignment_late</i>News</a></li>
            <li><a href="map"><i class="material-icons">map</i>Map</a></li>
            <li><a href="/user"><i class="material-icons">account_box</i>User Space</a></li>
            <li><a href="contact"><i class="material-icons">contact_phone</i></a>Contact and Support</li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="/home">Home</a></li>
    <li><a href="/news">News</a></li>
    <li><a href="/map">Map</a></li>
    <li><a href="/user">User Space</a></li>
    <li><a href="/contact">Contact and Support</a></li>
</ul>