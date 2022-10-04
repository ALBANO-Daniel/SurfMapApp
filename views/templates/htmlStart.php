<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>
    <!-- CSS -->
    <?php foreach ($cssFile as $key => $value) { ?>
        <link type="text/css" rel="stylesheet" href=".public/assets/css/<?= $value ?>" />
    <?php } ?>
    <!-- TITTLE -->
    <title><?= $pageTitle ?? 'SurfSpot' ?></title>
</head>
<body>