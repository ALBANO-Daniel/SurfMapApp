<main class="container">
    <h1>404 : page not found..</h1>
    <a href="/">Retour a l'accueil</a>
    <br>

    <!-- error/sucess output  -->
    <?php
    if(SessionFlash::exist()){
        $msg = SessionFlash::get();
        if ($msg[0] == true) { ?>
            <p class='green center white-text'>
            <?php
        } else { ?>
            <p class='red center white-text'>
            <?php
        }
        print_r($msg[1]) ?>
            </p>
        <?php
    }?>

<a href="/">back to home</a>
</main>