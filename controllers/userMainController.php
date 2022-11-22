<?php
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

$pageTitle = 'user page';
$cssFile[] = 'userMain.css';
$scriptFile[] = 'userMain.js';
$error = [];


$timezone = new DateTimeZone('UTC');
$date = new DateTime('now', $timezone);


try {
    //1-1 handle inscription
    if ($_SERVER['REQUEST_METHOD'] == 'POST' & isset($_POST['lastname'])) {
        // img-prenom-nom-pay-ville-email-pass-Cpass
        

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

        //===================== password : Nettoyage et validation =======================
        $password =  $_POST['password'];
        if(empty($password)){
            $error["password"] = "merci de choisir une mot de passe!!";
        }

        if (empty($error)) {
            $user = new User;
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setCountry($country);
            $user->setCity($city);
            $user->setEmail($email);
            $user->setPassword($password);
            var_dump('before set');
            $id = $user->set();
            var_dump('after set');
            var_dump($_FILES);
            if ($id != false) {
                var_dump('inside id not false ' );
                $tempAdress = $_FILES["uploadfile"]["tmp_name"];
                $newAdress = (__DIR__ . "/../public/assets/img/$id.jpg");
                // $newAdress =  '/public/assets/img/profile-images/' . $id . '.jpg'; 
                // ADITIONAL TEST NECESSARY ??    is_uploaded_file(string $filename): bool
                if (move_uploaded_file($tempAdress, $newAdress)) {
                    var_dump('inside moveuploadedfile true');
                    SessionFlash::set(true, 'Le utilizateur a bien etais cree!');
                    // header('location: /userprofile');
                    // exit;
                } else {
                    SessionFlash::set(false, 'impossible de actualizer profile image, try again.');
                    // header('location: /userprofile');
                    // exit;
                }
            } else {
                SessionFlash::set(false, 'try again impossible to create user');
            }
        }
        //1-2 handle login
        if ($_SERVER['REQUEST_METHOD'] == 'POST' & !isset(($_POST['lastname']))) {
            // email - pass
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}

















// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
include(__DIR__ . '/../views/templates/navBar.php');

include(__DIR__ . '/../views/userMain.php');

include(__DIR__ . '/../views/templates/footer.php');


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
