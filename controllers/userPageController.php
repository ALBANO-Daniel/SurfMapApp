<?php
// WIP WIP WIP
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$pageTitle = 'user page';
$cssFile[] = 'userPage.css';
$scriptFile[] = 'userPage.js';

$user = $_SESSION['user'];

try {

    $userId = intval($user->id_users);


    $error = [];
    $addedUserId = '';

    // SETUP PAGINATION 
    // set-up how many lines/elements to be showed per page
    $elementsPerPage = 8;
    // set-up number of showed pages in pagination component
    $pagesPerPagination = 5;
    $halfPagesPerPagination = intval($pagesPerPagination / 2);
    $halfUpPagesPerPagination = ceil($pagesPerPagination / 2);
    // get number of elements  $appointmentsListPagesTotal 
    // WIP WIP WIP  method get total number of 
    // $totalElements = User::getTotalNumberOf($userId);
    // setup patient list total number of pages
    if ($totalElements % $elementsPerPage == 0) {
        $totalPages = intval($totalElements / 8) - 1;
    } else {
        $totalPages = intval($totalElements / 8);
    }
    // show actual page 
    $page = intval(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT));
    $appointmentListPagesActual = $page ?? 0;
    // $currentPage = $_GET['page'] ?? 0;
    // END SETUP PAGINATION

    // $userLogList = User::getAll($appointmentListPagesActual, $elementsPerPage, $userId);


    // get from data be the log of activity from this user




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
