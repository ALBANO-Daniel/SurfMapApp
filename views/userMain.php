<main class="container">

    <section>
        <div class="container">
            <div class="card">
                <div class="row">
                    <nav class=" light-blue darken-4">
                        <h2 class="center flex">USER SPACE</h2>
                    </nav>
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s6"><a class="btn active waves-effect waves-light" href="?c=0">Login In</a></li>
                            <li class="tab col s6"><a class="btn waves-effect waves-light" href="?c=1">Register</a></li>
                        </ul>
                    </div>
                </div>

                <?php
                if ($c == 0) {
                    include(__DIR__ . '/../helpers/components/LoginComponent.php');
                } else if ($c == 1) {
                    include(__DIR__ . '/../helpers/components/RegisterComponent.php');
                }
                ?>

            </div>
        </div>

    </section>
    <a href="/home">back to Home</a>
</main>