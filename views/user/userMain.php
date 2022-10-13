<main class="container">
    <section class="row">
        <h1 class="col s12">Welcome !</h1>
        <ul id="userPageList" class="row s12 m6 xl4 center-align">
            <li class="col s4"><a class="waves-effect waves-light btn">Register</a></li>
            <li class="col s4 "><a class="waves-effect waves-light btn">Login</a></li>
            <li class="col s4"><a class="waves-effect waves-light btn">Contact us</a></li>
        </ul>
    </section>
    <section class="row">
        
        <div id="loginForm" class="row">
            <form action="">
            <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <button><a class="waves-effect waves-light btn">Log in</a></button>
            </form>
        </div>
        <div id="registerForm" class="row">
            <form action="">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">Prenom</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="last_name" type="text" class="validate">
                    <label for="first_name">Nom</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                    <input id="confirmPassword" type="password" class="validate">
                    <label for="confirmPassword">Confirm password</label>
                </div>
                <button><a class="waves-effect waves-light btn">register</a></button>
            </form>
        </div>
    </section>
    <a href="/home">Home Page</a>
</main>