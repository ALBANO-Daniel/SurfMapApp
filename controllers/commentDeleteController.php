<?php

require_once(__DIR__ . '/../models/Comment.php');


$urlstring = basename($_SERVER['HTTP_REFERER']);

if(isset($_GET['id']))

{
    $commentDeletedId = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    Comment::delete($commentDeletedId);
    SessionFlash::set(true,'commentaire suprimee!');
} 
else { SessionFlash::set(false,'Impossible de effacer le commentaire!'); };

header('Location: /' . $urlstring);
exit;


