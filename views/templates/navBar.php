<?php
$scriptFile[] = 'navBar.js';
$cssFile[] = 'navBar.css'
?>

<nav class=" light-blue darken-4">
    <div class="container nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html"><i class="material-icons">search</i></a></li>
            <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
            <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
            <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
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