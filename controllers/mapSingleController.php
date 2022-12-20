<?php

require_once(__DIR__ . '/../models/Spot.php');
require_once(__DIR__ . '/../models/Comment.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$pageTitle = 'sSPOTLIGHT';
$mapScript[] = 'mapSingle.js';



try {

    $spotId = intval(filter_input(INPUT_GET, 'id'));
    $spot = Spot::get($spotId);
    // WIP -> comments for Spots
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //NETOYAGE
        if (empty($error)) {
            $newComment = new Comment();
            $newComment->setComment($comment);
            $newComment->setCategory($category);
            $newComment->setIdSpots($idSpots);
            $newComment->setIdUsers($idUsers);
            $newCommentId = $comment->setSpotsComment();
        }
    }
} catch (\Throwable $th) {
    $error = $th->getMessage();
}


// call head html
include(__DIR__.'/../views/templates/htmlStart.php');

//structure
    include(__DIR__.'/../views/templates/navBar.php');
    
    include(__DIR__.'/../views/mapSingle.php');
    
    include(__DIR__.'/../views/templates/footer.php');


// call end html
include(__DIR__.'/../views/templates/htmlEnd.php');
