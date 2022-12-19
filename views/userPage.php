<main class="container center">
    <h1><?= $user->lastname ?></h1>
    <section class="container">
        <div class="card hoverable">
            <img id="userpage-profile-img"class="circle center" width="100px" src="/public/assets/img/profile-images/<?= $user->id_users ?>.jpg" alt="profile image">
            <table class="container striped">
                <tbody>
                    <tr>
                        <th class="blue-text">Nom:</th>
                        <th><?= $user->lastname ?></th>
                    </tr>
                    <tr>
                        <th class="blue-text">Prenom:</th>
                        <th><?= $user->firstname ?></th>
                    </tr>
                    <tr>
                        <th class="blue-text">Ville:</th>
                        <th><?= $user->city ?></th>
                    </tr>
                    <tr>
                        <th class="blue-text">Pays:</th>
                        <th><?= $user->country ?></th>
                    </tr>
                    <tr>
                        <th class="blue-text">Email:</th>
                        <th><?= $user->email ?></th>
                    </tr>
                    <tr>
                        <th class="blue-text">Password:</th>
                        <th> ********************* </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <div class="row">
        <div class="col s6"></div>
    </div>
    <a class="btn" href="/useredit">edit</a>
    <li></li>
    <a class="btn" href="/userpage?logout=1">log out</a>
    <li></li>
</main>