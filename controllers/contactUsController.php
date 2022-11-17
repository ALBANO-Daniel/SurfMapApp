<?php

$pageTitle = 'Contact Us';
$cssFile[] = 'contactUs.css';
$scriptFile[] = 'contactUs.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');


//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/contactUs.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
