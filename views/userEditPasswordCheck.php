<main>
    <section class="container center">
        <div class="container card">
            <nav class="col s12 light-blue darken-4">
                <h2 class="center ">changer mot de passe</h2>
            </nav>
            <!-- error/sucess output  -->
            <?php
            if (SessionFlash::exist()) {
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
            } ?>
                <form id="checkPasswordForm" action="" class="container" method="post" enctype="multipart/form-data">
                    <!-- password input  -->
                    <div class="row">
                        <div class="input-field col s12 ">
                            <i class="material-icons prefix">lock</i>
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">ancienne Mot de passe</label>
                        </div>
                        <!-- confirm password input  -->
                        <div class="input-field col s12 ">
                            <i class="material-icons prefix">lock</i>
                            <input name="password2" id="password2" type="password" class="validate">
                            <label for="password2">Confirmer</label>
                        </div>
                    </div>
                    <!-- submit -->
                    <div class="row center-align">
                        <button class="unset"><a class="waves-effect waves-light btn">Verifiee</a></button>
                    </div>
                </form>
        </div>
    </section>
</main>