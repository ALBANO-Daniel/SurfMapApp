<main>

    <section class="container center">
        <div class="container card">

            <nav class="col s12 light-blue darken-4">
                <h2 class="center ">utilisateur</h2>
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


            <div class="row">
                <ul class="tabs">
                    <li class="tab col s6"><a href="#loginForm">Entrer</a></li>
                    <li class="tab col s6"><a href="#registerForm">S'inscrire</a></li>
                </ul>
            </div>

            <!-- LOGIN FORM  -->
            <form id="loginForm" class="container" action="" method="post" enctype="multipart/form-data">
                <!-- email input  -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="email" class="validate" type="email" id="user">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
                    </div>
                </div>
                <!-- password input  -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
                <!-- submit -->
                <div class="row center-align">
                    <button class="unset"><a class="waves-effect waves-light btn">Entrer</a></button>
                </div>
            </form>


            <!-- REGISTER FORM  -->
            <form id="registerForm" action="" class="container" method="post" enctype="multipart/form-data">
                <!-- Image Profile section -->
                <div class="row">
                    <!-- profile image placeholder -->
                    <div class="col s12 center">
                        <!-- look for CSS  -->
                        <img id="showProfileImg" class="circle responsive-img" src="/public/assets/img/profile-images/profile-default.png" alt="profile image" />
                    </div>
                </div>
                <!-- profile image input  -->
                <div class="row">
                    <div class="file-field input-field col s12">
                        <span>choisir image profil</span>
                        <input name="profileimage" type="file" accept="image/png, image/jpeg" id="uploadedProfileImg" placeholder="choose profile image">
                    </div>
                </div>
                <!-- Name input  -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="firstname" id="firstName" type="text" class="validate">
                        <label for="firstname">Prenom</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="lastname" id="lastname" type="text" class="validate">
                        <label for="lastname">Nom</label>
                    </div>
                </div>
                <!-- city country Input  -->
                <div class="row">
                    <div class="input-field col s11 right">
                        <!-- countries selection -->
                        <select name="country">
                            <option value="" disabled selected>Pays de Residence</option>
                            <option><i class="af flag"></i>Afghanistan</option>
                            <option><i class="ax flag"></i>Aland Islands</option>
                            <option><i class="al flag"></i>Albania</option>
                            <option><i class="dz flag"></i>Algeria</option>
                            <option><i class="as flag"></i>American Samoa</option>
                            <option><i class="ad flag"></i>Andorra</option>
                            <option><i class="ao flag"></i>Angola</option>
                            <option><i class="ai flag"></i>Anguilla</option>
                            <option><i class="ag flag"></i>Antigua</option>
                            <option><i class="ar flag"></i>Argentina</option>
                            <option><i class="am flag"></i>Armenia</option>
                            <option><i class="aw flag"></i>Aruba</option>
                            <option><i class="au flag"></i>Australia</option>
                            <option><i class="at flag"></i>Austria</option>
                            <option><i class="az flag"></i>Azerbaijan</option>
                            <option><i class="bs flag"></i>Bahamas</option>
                            <option><i class="bh flag"></i>Bahrain</option>
                            <option><i class="bd flag"></i>Bangladesh</option>
                            <option><i class="bb flag"></i>Barbados</option>
                            <option><i class="by flag"></i>Belarus</option>
                            <option><i class="be flag"></i>Belgium</option>
                            <option><i class="bz flag"></i>Belize</option>
                            <option><i class="bj flag"></i>Benin</option>
                            <option><i class="bm flag"></i>Bermuda</option>
                            <option><i class="bt flag"></i>Bhutan</option>
                            <option><i class="bo flag"></i>Bolivia</option>
                            <option><i class="ba flag"></i>Bosnia</option>
                            <option><i class="bw flag"></i>Botswana</option>
                            <option><i class="bv flag"></i>Bouvet Island</option>
                            <option><i class="br flag"></i>Brazil</option>
                            <option><i class="vg flag"></i>British Virgin Islands</option>
                            <option><i class="bn flag"></i>Brunei</option>
                            <option><i class="bg flag"></i>Bulgaria</option>
                            <option><i class="bf flag"></i>Burkina Faso</option>
                            <option><i class="mm flag"></i>Burma</option>
                            <option><i class="bi flag"></i>Burundi</option>
                            <option><i class="tc flag"></i>Caicos Islands</option>
                            <option><i class="kh flag"></i>Cambodia</option>
                            <option><i class="cm flag"></i>Cameroon</option>
                            <option><i class="ca flag"></i>Canada</option>
                            <option><i class="cv flag"></i>Cape Verde</option>
                            <option><i class="ky flag"></i>Cayman Islands</option>
                            <option><i class="cf flag"></i>Central African Republic</option>
                            <option><i class="td flag"></i>Chad</option>
                            <option><i class="cl flag"></i>Chile</option>
                            <option><i class="cn flag"></i>China</option>
                            <option><i class="cx flag"></i>Christmas Island</option>
                            <option><i class="cc flag"></i>Cocos Islands</option>
                            <option><i class="co flag"></i>Colombia</option>
                            <option><i class="km flag"></i>Comoros</option>
                            <option><i class="cg flag"></i>Congo Brazzaville</option>
                            <option><i class="cd flag"></i>Congo</option>
                            <option><i class="ck flag"></i>Cook Islands</option>
                            <option><i class="cr flag"></i>Costa Rica</option>
                            <option><i class="ci flag"></i>Cote optionoire</option>
                            <option><i class="hr flag"></i>Croatia</option>
                            <option><i class="cu flag"></i>Cuba</option>
                            <option><i class="cy flag"></i>Cyprus</option>
                            <option><i class="cz flag"></i>Czech Republic</option>
                            <option><i class="dk flag"></i>Denmark</option>
                            <option><i class="dj flag"></i>Djibouti</option>
                            <option><i class="dm flag"></i>Dominica</option>
                            <option><i class="do flag"></i>Dominican Republic</option>
                            <option><i class="ec flag"></i>Ecuador</option>
                            <option><i class="eg flag"></i>Egypt</option>
                            <option><i class="sv flag"></i>El Salvador</option>
                            <option><i class="gb flag"></i>England</option>
                            <option><i class="gq flag"></i>Equatorial Guinea</option>
                            <option><i class="er flag"></i>Eritrea</option>
                            <option><i class="ee flag"></i>Estonia</option>
                            <option><i class="et flag"></i>Ethiopia</option>
                            <option><i class="eu flag"></i>European Union</option>
                            <option><i class="fk flag"></i>Falkland Islands</option>
                            <option><i class="fo flag"></i>Faroe Islands</option>
                            <option><i class="fj flag"></i>Fiji</option>
                            <option><i class="fi flag"></i>Finland</option>
                            <option><i class="fr flag"></i>France</option>
                            <option><i class="gf flag"></i>French Guiana</option>
                            <option><i class="pf flag"></i>French Polynesia</option>
                            <option><i class="tf flag"></i>French Territories</option>
                            <option><i class="ga flag"></i>Gabon</option>
                            <option><i class="gm flag"></i>Gambia</option>
                            <option><i class="ge flag"></i>Georgia</option>
                            <option><i class="de flag"></i>Germany</option>
                            <option><i class="gh flag"></i>Ghana</option>
                            <option><i class="gi flag"></i>Gibraltar</option>
                            <option><i class="gr flag"></i>Greece</option>
                            <option><i class="gl flag"></i>Greenland</option>
                            <option><i class="gd flag"></i>Grenada</option>
                            <option><i class="gp flag"></i>Guadeloupe</option>
                            <option><i class="gu flag"></i>Guam</option>
                            <option><i class="gt flag"></i>Guatemala</option>
                            <option><i class="gw flag"></i>Guinea-Bissau</option>
                            <option><i class="gn flag"></i>Guinea</option>
                            <option><i class="gy flag"></i>Guyana</option>
                            <option><i class="ht flag"></i>Haiti</option>
                            <option><i class="hm flag"></i>Heard Island</option>
                            <option><i class="hn flag"></i>Honduras</option>
                            <option><i class="hk flag"></i>Hong Kong</option>
                            <option><i class="hu flag"></i>Hungary</option>
                            <option><i class="is flag"></i>Iceland</option>
                            <option><i class="in flag"></i>India</option>
                            <option><i class="io flag"></i>Indian Ocean Territory</option>
                            <option><i class="id flag"></i>Indonesia</option>
                            <option><i class="ir flag"></i>Iran</option>
                            <option><i class="iq flag"></i>Iraq</option>
                            <option><i class="ie flag"></i>Ireland</option>
                            <option><i class="il flag"></i>Israel</option>
                            <option><i class="it flag"></i>Italy</option>
                            <option><i class="jm flag"></i>Jamaica</option>
                            <option><i class="jp flag"></i>Japan</option>
                            <option><i class="jo flag"></i>Jordan</option>
                            <option><i class="kz flag"></i>Kazakhstan</option>
                            <option><i class="ke flag"></i>Kenya</option>
                            <option><i class="ki flag"></i>Kiribati</option>
                            <option><i class="kw flag"></i>Kuwait</option>
                            <option><i class="kg flag"></i>Kyrgyzstan</option>
                            <option><i class="la flag"></i>Laos</option>
                            <option><i class="lv flag"></i>Latvia</option>
                            <option><i class="lb flag"></i>Lebanon</option>
                            <option><i class="ls flag"></i>Lesotho</option>
                            <option><i class="lr flag"></i>Liberia</option>
                            <option><i class="ly flag"></i>Libya</option>
                            <option><i class="li flag"></i>Liechtenstein</option>
                            <option><i class="lt flag"></i>Lithuania</option>
                            <option><i class="lu flag"></i>Luxembourg</option>
                            <option><i class="mo flag"></i>Macau</option>
                            <option><i class="mk flag"></i>Macedonia</option>
                            <option><i class="mg flag"></i>Madagascar</option>
                            <option><i class="mw flag"></i>Malawi</option>
                            <option><i class="my flag"></i>Malaysia</option>
                            <option><i class="mv flag"></i>Maloptiones</option>
                            <option><i class="ml flag"></i>Mali</option>
                            <option><i class="mt flag"></i>Malta</option>
                            <option><i class="mh flag"></i>Marshall Islands</option>
                            <option><i class="mq flag"></i>Martinique</option>
                            <option><i class="mr flag"></i>Mauritania</option>
                            <option><i class="mu flag"></i>Mauritius</option>
                            <option><i class="yt flag"></i>Mayotte</option>
                            <option><i class="mx flag"></i>Mexico</option>
                            <option><i class="fm flag"></i>Micronesia</option>
                            <option><i class="md flag"></i>Moldova</option>
                            <option><i class="mc flag"></i>Monaco</option>
                            <option><i class="mn flag"></i>Mongolia</option>
                            <option><i class="me flag"></i>Montenegro</option>
                            <option><i class="ms flag"></i>Montserrat</option>
                            <option><i class="ma flag"></i>Morocco</option>
                            <option><i class="mz flag"></i>Mozambique</option>
                            <option><i class="na flag"></i>Namibia</option>
                            <option><i class="nr flag"></i>Nauru</option>
                            <option><i class="np flag"></i>Nepal</option>
                            <option><i class="an flag"></i>Netherlands Antilles</option>
                            <option><i class="nl flag"></i>Netherlands</option>
                            <option><i class="nc flag"></i>New Caledonia</option>
                            <option><i class="pg flag"></i>New Guinea</option>
                            <option><i class="nz flag"></i>New Zealand</option>
                            <option><i class="ni flag"></i>Nicaragua</option>
                            <option><i class="ne flag"></i>Niger</option>
                            <option><i class="ng flag"></i>Nigeria</option>
                            <option><i class="nu flag"></i>Niue</option>
                            <option><i class="nf flag"></i>Norfolk Island</option>
                            <option><i class="kp flag"></i>North Korea</option>
                            <option><i class="mp flag"></i>Northern Mariana Islands</option>
                            <option><i class="no flag"></i>Norway</option>
                            <option><i class="om flag"></i>Oman</option>
                            <option><i class="pk flag"></i>Pakistan</option>
                            <option><i class="pw flag"></i>Palau</option>
                            <option><i class="ps flag"></i>Palestine</option>
                            <option><i class="pa flag"></i>Panama</option>
                            <option><i class="py flag"></i>Paraguay</option>
                            <option><i class="pe flag"></i>Peru</option>
                            <option><i class="ph flag"></i>Philippines</option>
                            <option><i class="pn flag"></i>Pitcairn Islands</option>
                            <option><i class="pl flag"></i>Poland</option>
                            <option><i class="pt flag"></i>Portugal</option>
                            <option><i class="pr flag"></i>Puerto Rico</option>
                            <option><i class="qa flag"></i>Qatar</option>
                            <option><i class="re flag"></i>Reunion</option>
                            <option><i class="ro flag"></i>Romania</option>
                            <option><i class="ru flag"></i>Russia</option>
                            <option><i class="rw flag"></i>Rwanda</option>
                            <option><i class="sh flag"></i>Saint Helena</option>
                            <option><i class="kn flag"></i>Saint Kitts and Nevis</option>
                            <option><i class="lc flag"></i>Saint Lucia</option>
                            <option><i class="pm flag"></i>Saint Pierre</option>
                            <option><i class="vc flag"></i>Saint Vincent</option>
                            <option><i class="ws flag"></i>Samoa</option>
                            <option><i class="sm flag"></i>San Marino</option>
                            <option><i class="gs flag"></i>Sandwich Islands</option>
                            <option><i class="st flag"></i>Sao Tome</option>
                            <option><i class="sa flag"></i>Saudi Arabia</option>
                            <option><i class="sn flag"></i>Senegal</option>
                            <option><i class="cs flag"></i>Serbia</option>
                            <option><i class="rs flag"></i>Serbia</option>
                            <option><i class="sc flag"></i>Seychelles</option>
                            <option><i class="sl flag"></i>Sierra Leone</option>
                            <option><i class="sg flag"></i>Singapore</option>
                            <option><i class="sk flag"></i>Slovakia</option>
                            <option><i class="si flag"></i>Slovenia</option>
                            <option><i class="sb flag"></i>Solomon Islands</option>
                            <option><i class="so flag"></i>Somalia</option>
                            <option><i class="za flag"></i>South Africa</option>
                            <option><i class="kr flag"></i>South Korea</option>
                            <option><i class="es flag"></i>Spain</option>
                            <option><i class="lk flag"></i>Sri Lanka</option>
                            <option><i class="sd flag"></i>Sudan</option>
                            <option><i class="sr flag"></i>Suriname</option>
                            <option><i class="sj flag"></i>Svalbard</option>
                            <option><i class="sz flag"></i>Swaziland</option>
                            <option><i class="se flag"></i>Sweden</option>
                            <option><i class="ch flag"></i>Switzerland</option>
                            <option><i class="sy flag"></i>Syria</option>
                            <option><i class="tw flag"></i>Taiwan</option>
                            <option><i class="tj flag"></i>Tajikistan</option>
                            <option><i class="tz flag"></i>Tanzania</option>
                            <option><i class="th flag"></i>Thailand</option>
                            <option><i class="tl flag"></i>Timorleste</option>
                            <option><i class="tg flag"></i>Togo</option>
                            <option><i class="tk flag"></i>Tokelau</option>
                            <option><i class="to flag"></i>Tonga</option>
                            <option><i class="tt flag"></i>Trinidad</option>
                            <option><i class="tn flag"></i>Tunisia</option>
                            <option><i class="tr flag"></i>Turkey</option>
                            <option><i class="tm flag"></i>Turkmenistan</option>
                            <option><i class="tv flag"></i>Tuvalu</option>
                            <option><i class="ug flag"></i>Uganda</option>
                            <option><i class="ua flag"></i>Ukraine</option>
                            <option><i class="ae flag"></i>United Arab Emirates</option>
                            <option><i class="us flag"></i>United States</option>
                            <option><i class="uy flag"></i>Uruguay</option>
                            <option><i class="um flag"></i>Us Minor Islands</option>
                            <option><i class="vi flag"></i>Us Virgin Islands</option>
                            <option><i class="uz flag"></i>Uzbekistan</option>
                            <option><i class="vu flag"></i>Vanuatu</option>
                            <option><i class="va flag"></i>Vatican City</option>
                            <option><i class="ve flag"></i>Venezuela</option>
                            <option><i class="vn flag"></i>Vietnam</option>
                            <option><i class="wf flag"></i>Wallis and Futuna</option>
                            <option><i class="eh flag"></i>Western Sahara</option>
                            <option><i class="ye flag"></i>Yemen</option>
                            <option><i class="zm flag"></i>Zambia</option>
                            <option><i class="zw flag"></i>Zimbabwe</option>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <input name="city" id="city" type="text" class="validate">
                        <label for="city">Ville</label>
                    </div>
                </div>
                <!-- email input  -->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input name="email" class="validate" type="email" id="email">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="format incorrect" data-sucess=""></span>
                    </div>
                </div>
                <!-- password input  -->
                <div class="row">
                    <div class="input-field col s12 ">
                        <i class="material-icons prefix">lock</i>
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
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
                    <button class="unset"><a class="waves-effect waves-light btn">S'inscrire</a></button>
                </div>
            </form>
        </div>
    </section>
</main>