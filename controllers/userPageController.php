<?php
// WIP WIP WIP
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

// 0-0 HANDLER NOT LOGGED IN
if (empty($_SESSION['user'])) {
    header('location: /user');
    exit;
}

$user = $_SESSION['user'];

//0-1 HANDLER ADMIN
if ($user->admin == 1) {
    header('location: /admin');
    exit;
}

$pageTitle = 'user page';
$error = [];
$addedUserId = '';

try {
    $userId = intval($user->id_users);

} catch (\Throwable $th) {
    SessionFlash::set(false, $th);
    header("Location: /error404");
    exit;
}



// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
include(__DIR__ . '/../views/templates/navBar.php');

include(__DIR__ . '/../views/userPage.php');

include(__DIR__ . '/../views/templates/footer.php');


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
