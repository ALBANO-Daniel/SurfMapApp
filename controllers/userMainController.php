<?php

$pageTitle = 'user page';
$cssFile[] = 'userMain.css';
$scriptFile[] = 'userMain.js';


    $postes = $_POST;
    var_dump($postes);

















// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/userMain.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
