<?php
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../helpers/functions/Database.php');

$pageTitle = 'user page';
$cssFile[] = 'userMain.css';
$scriptFile[] = 'userMain.js';
$error = [];

var_dump($_SESSION['user']);

try {
    //1-1 HANDLE INSCRIPTION
    if ($_SERVER['REQUEST_METHOD'] == 'POST' & isset($_POST['lastname'])) {

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
        if (empty($password)) {
            $error["password"] = "merci de choisir une mot de passe!!";
        }


        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'password2');

        if ($password != $password2) {
            $errors['password'] = 'Les mots de passe doivent être identiques';
        } else {
            if (empty($password)) {
                $errors['password'] = 'Le mot de passe est obligatoire';
            }
        }

        $password = password_hash($password, PASSWORD_DEFAULT);



        if (empty($error)) {
            $user = new User;
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setCountry($country);
            $user->setCity($city);
            $user->setEmail($email);
            $user->setPassword($password);
            $id = $user->set();
            if ($id != false) {
                $tempAdress = $_FILES["profileimage"]["tmp_name"];
                $newAdress = (__DIR__ . "/../public/assets/img/profile-images/$id.jpg");
                // ADITIONAL TEST NECESSARY ??    is_uploaded_file(string $filename): bool
                if (move_uploaded_file($tempAdress, $newAdress)) {
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
    }
    //1-2 HANDLER LOGIN
    if ($_SERVER['REQUEST_METHOD'] == 'POST' & !isset(($_POST['lastname']))) {

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
        if (empty($password)) {
            $error["password"] = "merci de choisir une mot de passe!!";
        }

        $password = filter_input(INPUT_POST, 'password');

        $user = User::getByEmail($email);
        //$password_hash = $user->getPassword();
        $password_hash = $user->password;
        $result = password_verify($password, $password_hash);
        if (!$result) {
            $errors['password'] = 'Les informations des connexion ne sont pas bonnes!';
        }

        if (empty($errors)) {
            //$user->setPassword(null);
            $user->password = null;
            $_SESSION['user'] = $user;
            // header('Location: /controllers/list-patientCtrl.php');
            // exit;
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

include(__DIR__ . '/../views/userMain.php');

include(__DIR__ . '/../views/templates/footer.php');


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
