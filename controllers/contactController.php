<?php

$pageTitle = 'Contact Us';
$cssFile[] = 'contact.css';
$scriptFile[] = 'contact.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/contact/contact.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
