<?php
// CATEGORY{ 1: 'news', 2: 'spots'}
// user setAdmin() { 1: admin   default(null) : user }

// MAX ARTICLE SIZE ->  'TEXT' on DATABASE => avg. 11,370 words -- max : 65,535 characters

// DEFAULT TIME ZONE == UTC 
// require_once(__DIR__ . '/../helpers/nowTime.php');

session_start();
require_once(__DIR__ . '/../helpers/SessionFlash.php');

define('DSN', 'mysql:host=localhost;dbname=tnw69_surfapp;charset=utf8');
define('LOGIN', 'zzz');
define('PASSWORD', 'zzz');

define('REGEX_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEX_ONLY_NUMBER','^[0-9]*$');
define('REGEX_GPS',"([0-9]|[\-+#.'\"EWNSewns])+");
define('REGEX_HOUR','^([0-9]{2}):([0-9]{2})$');
// define('REGEX_ZIPCODE','^[0-9]{5}$');
// define('REGEX_LINKEDIN','^(https:\/\/)?((www\.|fr\.)?([a-zA-Z0-9\.\/=\?\-]*))$');
define('REGEX_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
// define('REGEX_TEXTAREA','^[a-zA-Z\n\r]*$');

define('AUTHORIZED_IMAGE_FORMATS', ['image/jpeg', 'image/png']);
define('AUTHORIZED_IMAGE_MAX_SIZE', 10485760); // 10 Mb

define('ELEMENTS_PER_PAGE', 10);

 // $timezone = new DateTimeZone('UTC');
        // $date = new DateTime('now', $timezone);
        // return $date->format('Y-m-d H:i:s.u'); DBase mySQL datetime obj(string) dont have microsec
// $dateTimeZone = new DateTimeZone('UTC');
// define('TIMEZONE', $dateTimeZone);




