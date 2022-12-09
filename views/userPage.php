<main class="container center">
    <h1><?= $user->lastname ?></h1>
    <section class="container">
        <ul class="card hoverable">
            <img class="circle center" width="100px" src="/public/assets/img/profile-images/<?= $user->id_users ?>.jpg" alt="profile image">
            <li>Nom: <?= $user->lastname ?></li>
            <li>Prenom: <?= $user->firstname ?></li>
            <li>Ville: <?= $user->city ?></li>
            <li>Pays: <?= $user->country ?></li>
            <li>Email: <?= $user->email ?></li>
            <li>Password: **********</li>
        </ul>
    </section>
    <a class="btn" href="/useredit">edit</a>
    <li></li>
    <a class="btn" href="/userpage?logout=1">log out</a>
    <li></li>
</main>
