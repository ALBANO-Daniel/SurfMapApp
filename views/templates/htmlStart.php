<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts   -->
    <!-- font-family: 'Sigmar One', cursive; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
    <!-- material UI  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.min.css" media="screen,projection" />
    <!-- Base CSS -->
    <link rel="stylesheet" href="/public/assets/css/index.css">
    <link rel="stylesheet" href="/public/assets/css/navBar.css">
    <!-- Singles CSS -->
    <?php foreach ($cssFile as $key => $value) { ?>
        <link type="text/css" rel="stylesheet" href="/public/assets/css/<?= $value ?>" />
    <?php } ?>
    <!-- TITTLE -->
    <title><?= $pageTitle ?? 'SurfSpot' ?></title>
</head>

<body>