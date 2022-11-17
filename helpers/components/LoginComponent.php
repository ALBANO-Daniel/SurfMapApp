<form id="loginForm" class="container" action="">
            <!-- email input  -->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type="email" id="user" data-length="20" max-length="20">
                    <label for="user">Email</label>
                    <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
                </div>
            </div>
            <!-- password input  -->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <!-- submit -->
            <div class="row center-align">
                <button class="unset"><a class="waves-effect waves-light btn">enter</a></button>
                <!-- <div class="clearfix"></div> -->
            </div>
        </form>
