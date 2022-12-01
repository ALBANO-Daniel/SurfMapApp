<?php
require_once(__DIR__ . '/../helpers/functions/Database.php');
//all models
require_once(__DIR__ . '/../helpers/adminRequiredBundle.php');

var_dump($_POST);
var_dump('--------');
var_dump($_FILES);


// HANDLER NOT LOGGED IN
// if (empty($_SESSION['user'])) {
// header('location: /user');
// exit;
// }
// $user = $_SESSION['user'];
// HANDLER NOT ADMIN
// if ($user->admin == null) {
// header('location: /user');
// exit;
// }

$pageTitle = 'dashboard';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // HANDLE NEWS FORM
        if (!empty($_POST['newsheader'])) {
            //===================== newsHeader : Nettoyage et validation =======================
            $newsHeader = trim(filter_input(INPUT_POST, 'newsheader', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($newsHeader)) {
                $error['newsHeader'] = "Vous devez entrer le titre de l'actualite !!";
            } else {
                if (strlen($newsHeader) <= 1 || strlen($newsHeader) >= 50) {
                    $error['newsHeader'] = "La longueur du titre n'est pas bonne";
                }
            }

            //===================== newsSubHeader : Nettoyage et validation =======================
            $newsSubHeader = trim(filter_input(INPUT_POST, 'newssubheader', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($newsSubHeader)) {
                $error["newsSubHeader"] = "Vous devez entrer un surtitre!!";
            } else {
                if (strlen($newsSubHeader) <= 1 || strlen($newsSubHeader) >= 250) {
                    $error["newsSubHeader"] = "La longueur du surtitre n'est pas bonne";
                }
            }

            //===================== newsBody : Nettoyage et validation =======================
            $newsBody = trim(filter_input(INPUT_POST, 'newsbody', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($newsBody)) {
                $error["newsBody"] = "Vous devez entrer l'article!!";
            } else {
                if (strlen($newsBody) <= 1 || strlen($newsBody) >= 65535) {
                    $error["newsBody"] = "essayez d'écrire un article, pas un livre.";
                }
            }

            //===================== newsimage : Nettoyage et validation =======================
            if (empty($_FILES["newsimage"])) {
                $error['newsimage'] = 'vous devez choisir une image pour l\'actualite';
            }
            if (!in_array($_FILES["newsimage"]["type"], AUTHORIZED_IMAGE_FORMATS)) {
                $error['newsimage'] = 'L\'image n\'es pas au bonne format';
            }
            if ($_FILES['newsimage']["size"] >= AUTHORIZED_IMAGE_MAX_SIZE) {
                $error['newsimage'] = 'L\'image est trop grand, taille maximale accepte: 10 Mb';
            }

            if (empty($error)) {
                $news = new News();
                $news->setHeader($newsHeader);
                $news->setSubHeader($newsSubHeader);
                $news->setBody($newsBody);
                $newsId = $news->set();
                if ($newsId != false) {
                    // HANDLE NEWS IMAGE
                    $tempAdress = $_FILES["newsimage"]["tmp_name"];
                    $newAdress = (__DIR__ . "/../public/assets/img/news-images/$newsId.jpg");
                    move_uploaded_file($tempAdress, $newAdress);
                    // WIP WIP WIP HANDLE THUMBNAIL 
                    // $newAdress = (__DIR__ . "/../public/assets/img/news-images/$newsId-thumbnail.jpg");
                    SessionFlash::set(true, 'L\'actualite a bien etais cree.');
                } else {
                    SessionFlash::set(false, 'Impossible de enregistrer L\'actualite, essaie plus tard.');
                }
            }
        }
        // HANDLE SPOT FORM
        if (!empty($_POST['spotname'])) {
            //===================== spotname : Nettoyage et validation =======================
            $spotName = trim(filter_input(INPUT_POST, 'spotname', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($spotName)) {
                $error['spotName'] = "Vous devez entrer le titre du spot !!";
            } else {
                if (strlen($spotName) <= 1 || strlen($spotName) >= 80) {
                    $error['spotName'] = "La longueur du nom n'est pas bonne";
                }
            }

            //===================== latitude : Nettoyage et validation =======================
            $latitude = trim(filter_input(INPUT_POST, 'latitude', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($latitude)) {
                $error["latitude"] = "Vous devez entrer une latitude!!";
            } else {
                $isOk = filter_var($latitude, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_GPS . '/')));
                if (!$isOk) {
                    $error["latitude"] = "La latitude n'est pas au bon format!!";
                } else {
                    if (strlen($latitude) <= 1 || strlen($latitude) >= 21) {
                        $error["latitude"] = "La longueur de la latitude n'est pas bonne";
                    }
                }
            }

            //===================== longitude : Nettoyage et validation =======================
            $longitude = trim(filter_input(INPUT_POST, 'longitude', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($longitude)) {
                $error["longitude"] = "Vous devez entrer une longitude!!";
            } else {
                $isOk = filter_var($longitude, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_GPS . '/')));
                if (!$isOk) {
                    $error["longitude"] = "La longitude n'est pas au bon format!!";
                } else {
                    if (strlen($longitude) <= 1 || strlen($longitude) >= 21) {
                        $error["longitude"] = "La longueur de la longitude n'est pas bonne";
                    }
                }
            }

            //===================== spotdescription : Nettoyage et validation =======================
            $spotDescription = trim(filter_input(INPUT_POST, 'spotdescription', FILTER_SANITIZE_SPECIAL_CHARS));
            if (empty($spotDescription)) {
                $error["spotDescription"] = "Vous devez entrer la description!!";
            } else {
                if (strlen($spotDescription) <= 1 || strlen($spotDescription) >= 65535) {
                    $error["spotDescription"] = "essayez d'écrire une description, pas un livre.";
                }
            }

            //===================== spotimage : Nettoyage et validation =======================
            if (empty($_FILES["spotimage"])) {
                $error['spotimage'] = 'vous devez choisir une image pour l\'spot';
            }
            if (!in_array($_FILES["spotimage"]["type"], AUTHORIZED_IMAGE_FORMATS)) {
                $error['spotimage'] = 'L\'image n\'es pas au bonne format';
            }
            if ($_FILES['spotimage']["size"] >= AUTHORIZED_IMAGE_MAX_SIZE) {
                $error['spotimage'] = 'L\'image est trop grand, taille maximale accepte: 10 Mb';
            }

            if (empty($error)) {
                $spot = new Spot();
                $spot->setName($spotName);
                $spot->setLatitude($latitude);
                $spot->setLongitude($longitude);
                $spot->setDescription($spotDescription);
                $spotId = $spot->set();
                if ($spotId != false) {
                    // HANDLE SPOT IMAGE
                    $tempAdress = $_FILES["spotimage"]["tmp_name"];
                    $newAdress = (__DIR__ . "/../public/assets/img/spots-images/$spotId.jpg");
                    move_uploaded_file($tempAdress, $newAdress);
                    // WIP WIP WIP HANDLE THUMBNAIL
                    // $newAdress = (__DIR__ . "/../public/assets/img/news-images/$newsId-thumbnail.jpg");
                    SessionFlash::set(true, 'Le spot a bien etais cree.');
                } else {
                    SessionFlash::set(false, 'Impossible de enregistrer Le spot, essaie plus tard.');
                }
            }
        }
    }
    //HANDLE NEWS LIST
    $newsList = News::getAll();
} catch (\Throwable $th) {
    SessionFlash::set(false, $th->getMessage());
    header('location: /error500');
    exit;
}


$document = $_GET["p"] ?? null;

// call head html
include(__DIR__ . '/../views/templates/htmlStart.php');

//structure
// HANDLER DOCUMENTS SECTION by GET
switch ($document) {
    case null:
        include(__DIR__ . '/../views/userPageAdmin.php');
        break;
    case 'guide':
        include(__DIR__ . '/../views/components/adminGuide.php');
        break;
    case 'userGuide':
        include(__DIR__ . '/../views/components/userGuide.php');
        break;
    case 'protection':
        include(__DIR__ . '/../views/components/protectionDonneesPersonnelles.php');
        break;
        // ... 
}


// call end html
include(__DIR__ . '/../views/templates/htmlEnd.php');
