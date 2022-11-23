<?php

require_once(__DIR__ . '/../models/User.php');

if(isset($_GET['id']))
{
    $userDeletedId = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    User::delete($userDeletedId);
    SessionFlash::set(true,'Patient suprime avec sucess!');
} 
else { SessionFlash::set(false,'Impossible de effacer le patient!'); };

header('Location: /patientlist');
exit;


