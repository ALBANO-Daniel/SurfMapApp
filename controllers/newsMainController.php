<?php

$pageTitle = 'News Page';
$cssFile[] = 'newsMain.css';
$scriptFile[] = 'newsMain.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/news/newsMain.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
