<?php

$pageTitle = 'home Page';
$cssLink = './surfSpot/view/home/home.css';

// call head html
include(__DIR__.'/../body/head.php');

//structure
    include(__DIR__.'/../body/navBar/navBar.php');
    
    include(__DIR__.'/home.php');
    
    include(__DIR__.'/../body/footer/footer.php');


// call of js scripts
?> <script> <?php include(__DIR__.'/home.js'); ?> </script> <?php
// call end html
include(__DIR__.'/../body/foot.php');
