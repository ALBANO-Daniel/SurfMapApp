<?php
$newsTitle = 'Example Today';
$pageTitle = $newsTitle;

$cssFile[] = 'newsMain.css';
$cssFile[] = 'newsSingle.css';

$scriptFile[] = 'newsMain.js';
$scriptFile[] = 'newsSingle.js';

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/newsSingle.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
