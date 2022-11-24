<?php
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

// check logged in
if(!isset($_SESSION['user'])){
    header('location: /user');
    exit;
}

$pageTitle = 'change password';

$user = $_SESSION['user'];
$userId = intval($user->id_users);

// userDB to avoid the exploit of session with CHANGES to id == also as session passw and email are emptied.
$userDB = User::get($userId);

$userOldPassword = $userDB->password;

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //===================== password : Nettoyage et validation =======================

        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'password2');
        if (empty($password)) {
            $error["password"] = "merci de choisir une mot de passe!!";
        }
        if ($password != $password2) {
            $error['password'] = 'Les mots de passe doivent être identiques';
        } else {
            if (empty($password)) {
                $error['password'] = 'Le mot de passe est obligatoire';
            }
        }

        if (empty($error)) {
            // verify old password
            if (!isset($_SESSION['verified'])) {
                if (password_verify($password, $userOldPassword)) {
                    $_SESSION['verified'] = true;
                    header('location: /editpassword');
                    exit;
                };
                SessionFlash::set(false, 'réessayer.');
                header('location: /editpassword');
                exit;
            }

            //delete verification token before continue
            if (isset($_SESSION['verified'])) {
                unset($_SESSION['verified']);
            }

            // create new password
            $password = password_hash($password, PASSWORD_DEFAULT);
            User::editPassword($userId, $password);
            header('location: /user');
            exit;
        }
    }
} catch (\Throwable $th) {
    SessionFlash::set(false, $th);
    header("Location: /error404");
    exit;
}

// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
include(__DIR__ . '/../views/templates/navBar.php');

if (isset($_SESSION['verified'])){
    include(__DIR__ . '/../views/userEditPasswordChange.php');
} else {
    include(__DIR__ . '/../views/userEditPasswordCheck.php');
}

include(__DIR__ . '/../views/templates/footer.php');

// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
