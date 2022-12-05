<?php

require_once(__DIR__ . '/../models/News.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$pageTitle = 'News';

try {
    $newsFeaturedList = News::getFeatured(21);




} catch (\Throwable $th) {
    SessionFlash::set(false, $th->getMessage());
    header("Location: /error404");
    exit;
}



// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/newsMain.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
