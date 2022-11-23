<?php
// DEFAULT TIME ZONE == UTC 

session_start();
require_once(__DIR__ . '/../helpers/SessionFlash.php');

define('DSN', 'mysql:host=localhost;dbname=tnw69_surfapp;charset=utf8');
define('LOGIN', 'zzz');
define('PASSWORD', 'zzz');

define('REGEX_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEX_ONLY_NUMBER','^[0-9]*$');
define('REGEX_HOUR','^([0-9]{2}):([0-9]{2})$');
// define('REGEX_ZIPCODE','^[0-9]{5}$');
// define('REGEX_LINKEDIN','^(https:\/\/)?((www\.|fr\.)?([a-zA-Z0-9\.\/=\?\-]*))$');
define('REGEX_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
// define('REGEX_TEXTAREA','^[a-zA-Z\n\r]*$');

define('AUTHORIZED_IMAGE_FORMAT', ['image/jpeg', 'image/png']);

define('ELEMENTS_PER_PAGE', 10);

 // $timezone = new DateTimeZone('UTC');
        // $date = new DateTime('now', $timezone);
        // return $date->format('Y-m-d H:i:s.u'); DBase mySQL datetime obj(string) dont have microsec
// $dateTimeZone = new DateTimeZone('UTC');
// define('TIMEZONE', $dateTimeZone);




