<?php

$pageTitle = 'dashboard';
$cssFile[] = 'userPageAdmin.css';
$scriptFile[] = 'userPageAdmin.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/userPageAdmin.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
