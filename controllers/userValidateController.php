<?php

require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$urlstring = basename($_SERVER['HTTP_REFERER']);

if(isset($_GET['id']))
{
    $userValidateId = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    User::validate($userValidateId);
}
header('Location: /' . $urlstring);
exit;
