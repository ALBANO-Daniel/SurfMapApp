<?php

require_once(__DIR__ . '/../models/User.php');


$urlstring = basename($_SERVER['HTTP_REFERER']);

if(isset($_GET['id']))
{
    $userDeletedId = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    User::delete($userDeletedId);
}

header('Location: /' . $urlstring);
exit;