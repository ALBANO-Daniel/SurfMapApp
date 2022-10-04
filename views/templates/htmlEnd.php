<!-- JS -->
    <script type="text/javascript" src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script> 
    <?php 
    $scriptFile[] = 'navBar.js';
        foreach ($scriptFile as $key => $value) { ?>
            <script type="text/javascript" src="./public/assets/js/<?=$value?>"></script>
        <?php } ?>
    </body>
</html>