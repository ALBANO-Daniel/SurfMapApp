<form id="contactForm" action="" class="container">
    <!-- name Input -->
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="contactName" type="text" class="validate">
            <label for="contactName">Enter your Name</label>
        </div>
    </div>
    <!-- Email input  -->
    <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input class="validate" type="email" id="contactEmail" data-length="20" max-length="20">
            <label for="contactEmail">Your Email</label>
            <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
        </div>
    </div>
    <!-- Text of input -->
    <div class="row">
        <div class="input-field col s12">
            <textarea id="contactText" class="materialize-textarea"></textarea>
            <label for="contactText">poser votre Question...</label>
        </div>
    </div>
    <!-- submit -->
    <div class="row center-align">
        <button class="unset"><a class="waves-effect waves-light btn">enter</a></button>
        <!-- <div class="clearfix"></div> -->
    </div>
</form>