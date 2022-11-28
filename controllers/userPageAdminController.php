<?php


require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$pageTitle = 'dashboard';



// logic




$document = $_GET["p"] ?? null;

// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    // include(__DIR__.'/../views/templates/navBar.php');
    
    
    // HANDLER DOCUMENTS SECTION by GET
    switch($document){
        case null: include(__DIR__.'/../views/userPageAdmin.php'); break;
        case 'guide': include(__DIR__.'/../views/adminGuide.php'); break;
        case 'userGuide': include(__DIR__.'/../views/adminGuide.php'); break;
        // ... 
    }



// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
