<!-- LEAFLET  -->
<script src="/node_modules/leaflet/dist/leaflet.js"></script>
<!-- JS -->
<script type="text/javascript" src="/node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script type="text/javascript" src="/public/assets/js/navBar.js"></script>

<!-- MAP SCRIPTS -->
<?php 
if(isset($mapScript)){
    foreach ($mapScript as $key => $value) {
        ?> <script type="text/javascript" src="/public/assets/js/<?=$value?>"></script>
<?php } 
}?>


<!-- SINGLE SCRIPTS -->
<script type="text/javascript" src="/public/assets/js/home.js"></script>

<!-- <script type="text/javascript" src="/public/assets/js/mapMain.js"></script> -->
<!-- <script type="text/javascript" src="/public/assets/js/mapSingle.js"></script> -->

<script type="text/javascript" src="/public/assets/js/newsMain.js"></script>
<!-- <script type="text/javascript" src="/public/assets/js/newsSingle.js"></script> -->

<script type="text/javascript" src="/public/assets/js/userMain.js"></script>
<script type="text/javascript" src="/public/assets/js/userPageAdmin.js"></script>

<script type="text/javascript" src="/public/assets/js/contactUs.js"></script>
<script type="text/javascript" src="/public/assets/js/pageNotFound.js"></script>

</body>

</html>