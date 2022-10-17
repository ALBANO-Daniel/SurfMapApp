<main class="container">

    <section class="row">

        <h1 class="center col s12">Welcome !</h1>
        <div class="col s12">
            <ul class="tabs center-align">
                <li class="tab col s3"><a href="#register">Register</a></li>
                <li class="tab col s3"><a class="active" href="#loginForm">Login In</a></li>
                <li class="tab col s3"><a href="#contactUs">Contact Us</a></li>
            </ul>
        </div>
    </section>

    <section class="container center">

        <form id="loginForm" action="">
            <div class="row">
                <!-- email input  -->
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type="email" id="user" data-length="20" max-length="20">
                    <label for="user">Email</label>
                    <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
                </div>
                <!-- password input  -->
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <!-- submit -->
            <button class="unset"><a class="waves-effect waves-light btn">enter</a></button>
            <div class="clearfix"></div>
        </form>

        <br><br> <!-- PROVISORIOOOOO -->


        <form class="container" id="registerForm" action="">
            <!-- Name input  -->
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="firstName" type="text" class="validate counter" max-length="10">
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>

            <!-- city country Input  -->
            


            <!-- Image Profile Input -->
            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn grey darken-4 col s2">
                        <span><i class="material-icons">file_upload</i></span>
                        <input name="profile image" type="file" accept="image/png, image/jpeg" id="uploadedProfileImg"> <!-- for images -->
                        <img id="showProfileImg" src="#" alt="profile image" /> <!-- for images -->
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Upload profile image" class="file-path validate" type="text">
                    </div>
                </div>

                <!-- TEST TEST TEST upload image with preview -->
                <div class="file-field input-field">
                    <input accept="image/*" type='file' id="imgInp" />
                    <img id="blah" src="#" alt="your image" />

                    <div class="btn grey darken-4">
                        <span><i class="material-icons">file_upload</i></span>
                        <!-- test adding accept prop to limit UX for files choices -->
                        <!-- <input type="file" accept="application/pdf, application/vnd.ms-excel"> FOR PDF AND EXCEL  -->
                        <input type="file" accept="image/png, image/jpeg" id="uploadedProfileImg"> <!-- for images -->
                        <img id="showProfileImg" src="#" alt="profile image" />
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Upload profile image" class="file-path validate" type="text">
                    </div>
                </div>
            </div>


            <!-- email input  -->
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type="email" id="user" data-length="20" max-length="20">
                    <label for="user">Email</label>
                    <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
                </div>
            </div>

            <!-- password input  -->
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <!-- confirm password input  -->
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock</i>
                    <input id="confirmPassword" type="password" class="validate">
                    <label for="confirmPassword">Confirm Password</label>
                </div>
            </div>

            <button class="unset"><a class="waves-effect waves-light btn">register</a></button>
        </form>

    </section>
    <a href="/home">Home Page</a>
</main>