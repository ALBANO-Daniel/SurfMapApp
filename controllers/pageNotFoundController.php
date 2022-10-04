<?php
$pageTitle = 'error 404';
$cssFile[] = 'pageNotFound.css';
$scriptFile[] = 'pageNotFound.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/pageNotFound/pageNotFound.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
