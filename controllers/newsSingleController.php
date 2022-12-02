<?php

require_once(__DIR__ . '/../models/News.php');
require_once(__DIR__ . '/../models/Comment.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

$pageTitle = 'actualites';

try {
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $userId = $user->id_users;
    }
    $newsId = intval(filter_input(INPUT_GET, "id", FILTER_DEFAULT));
    //get the news from database by the id from previous link
    $news = News::get($newsId);
    $category = 1; // (config.php)
    // news list to "MORE NEWS"  6 news, by date more recent
    $newsFeaturedList = News::getFeatured(6);

    // insert comment :  this $id_news + $id_users -> new CommentNews()  or new Comment() { setIdNews() }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //===================== commentaire : Nettoyage et validation =======================
        $comment = trim(filter_input(INPUT_POST, 'new_comment', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($comment)) {
            $error['comment'] = "Vous devez entrer un comentaire!!";
        } else {
            if (strlen($comment) <= 1 || strlen($comment) >= 500) {
                $error['comment'] = "La longueur du commentaire n'est pas bonne";
            }
        }

        if (empty($error)) {
            $newComment = new Comment();
            $newComment->setComment($comment);
            $newComment->setCategory($category);
            $newComment->setIdNews($newsId);
            $newComment->setIdUsers($userId);
            $newComment->setNewsComment();
        }
    }
    //get respective comments  get comments ( with this $id_news )
    $commentsList = Comment::getAllFromNews($newsId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}


// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
include(__DIR__ . '/../views/templates/navBar.php');

include(__DIR__ . '/../views/newsSingle.php');

include(__DIR__ . '/../views/templates/footer.php');


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
