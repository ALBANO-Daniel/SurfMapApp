<?php

$pageTitle = 'Map Page';
$cssFile[] = 'mapMain.css';
$scriptFile[] = 'mapMain.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/map/mapMain.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
