<?php
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');


$pageTitle = 'user edit';
$cssFile[] = 'userPage.css';
$scriptFile[] = 'userPage.js';


$user = $_SESSION['user'];

try {

    $userId = intval($user->id_users);
    $error = [];
    $addedUserId = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //===================== firstname : Nettoyage et validation =======================
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($firstname)) {
            $error['firstname'] = "Vous devez entrer un prenom!!";
        } else {
            $isOk = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
            if (!$isOk) {
                $error['firstname'] = 'Le prenom n\'est pas au bon format!!';
            } else {
                if (strlen($firstname) <= 1 || strlen($firstname) >= 70) {
                    $error['firstname'] = "La longueur du prenom n'est pas bon";
                }
            }
        }

        //===================== lastname : Nettoyage et validation =======================
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($lastname)) {
            $error["lastname"] = "Vous devez entrer un nom!!";
        } else {
            $isOk = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
            if (!$isOk) {
                $error["lastname"] = "Le nom n'est pas au bon format!!";
            } else {
                if (strlen($lastname) <= 1 || strlen($lastname) >= 70) {
                    $error["lastname"] = "La longueur du nom n'est pas bon";
                }
            }
        }

        //===================== country : Nettoyage et validation =======================
        $country = trim(filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($country)) {
            $error["country"] = "Vous devez choisir le pay de residence!!";
        } else {
            $isOk = filter_var($country, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
            if (!$isOk) {
                $error["country"] = "Le nom n'est pas au bon format!!";
            }
        }

        //===================== city : Nettoyage et validation =======================
        $city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($city)) {
            $error["city"] = "Vous devez choisir la ville de residence!!";
        } else {
            $isOk = filter_var($city, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_NO_NUMBER . '/')));
            if (!$isOk) {
                $error["city"] = "Le nom n'est pas au bon format!!";
            }
        }

        //===================== email : Nettoyage et validation =======================
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        if (empty($email)) {
            $error["email"] = "Vous devez remplir le email pour le profil!!";
        } else {
            $isOk = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$isOk) {
                $error["email"] = "Le email n'est pas au bon format!!";
            }
        }
        if (User::emailExist($email)) $error = 'email deja utiliser pour quelqun';
        //===================== password : Nettoyage et validation =======================

        // $password =  $_POST['password'];
        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'password2');
        if (empty($password)) {
            $error["password"] = "merci de choisir une mot de passe!!";
        }
        if ($password != $password2) {
            $errors['password'] = 'Les mots de passe doivent être identiques';
        } else {
            if (empty($password)) {
                $errors['password'] = 'Le mot de passe est obligatoire';
            }
        }
        $password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($error)) {
            // get time for  modified_at
            $timezone = new DateTimeZone('UTC');
            $now = new DateTime('now', $timezone);

            $user = new User;
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setCountry($country);
            $user->setCity($city);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setModifiedAt($now->date);
            $addedUserId = $user->edit($userId);
            if ($addedUserId != false) {
                SessionFlash::set(true, 'Le  a bien etais edite');
                header("Location: /userpage");
                exit;
            } else {
                SessionFlash::set(false, 'Le patient n\'a pas etais edite');
            }
        }
    }
} catch (\Throwable $th) {
    SessionFlash::set(false, $th);
    header("Location: /error404");
    exit;
}

//get fresh user info
$patientDisplay = User::get($userId);





// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
include(__DIR__ . '/../views/templates/navBar.php');

include(__DIR__ . '/../views/userEdit.php');

include(__DIR__ . '/../views/templates/footer.php');


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
