<?php

$pageTitle = 'user page';
$cssFile[] = 'userMain.css';
$scriptFile[] = 'userMain.js';
$error = [];

try {
    //1-1 handle inscription
    if($_SERVER['REQUEST_METHOD'] == 'POST' & isset($_POST['lastname'])){
        // img-prenom-nom-pay-ville-email-pass-Cpass

    }
    //1-2 handle login
    if($_SERVER['REQUEST_METHOD'] == 'POST' & !isset(($_POST['lastname']))){
        // email - pass
    }
    




} catch (\Throwable $th) {
    //throw $th;
}

















// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/userMain.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
