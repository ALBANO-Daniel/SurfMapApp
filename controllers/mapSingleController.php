<?php

require_once(__DIR__ . '/../models/Spot.php');
require_once(__DIR__ . '/../models/Comment.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

// SPOT NAME
$spotName = 'Secret Point';
$pageTitle = $spotName;



try {
    
    var_dump('post : ');
    var_dump($_POST);
    var_dump("get : ");
    var_dump($_GET);
    // die;
    
    //get the news from database by the id from previous link

    //get respective comments  get comments ( with this $id_news )

    // insert comment :  this $id_news + $id_users -> new CommentNews()  or new Comment() { setIdNews() }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //NETOYAGE
        if (empty($error)) {
            $newComment = new Comment();
            $newComment->setComment($comment);
            $newComment->setCategory($category);
            $newComment->setIdNews($idSpots);
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
