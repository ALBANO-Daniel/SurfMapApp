</main>
<!-- JS -->
    <script type="text/javascript" src="/node_modules/materialize-css/dist/js/materialize.min.js"></script> 
    <script type="text/javascript" src="/public/assets/js/navBar.js"></script>
    <?php 
        foreach ($scriptFile as $key => $value) { ?>
            <script type="text/javascript" src="/public/assets/js/<?=$value?>"></script>
        <?php } ?>  
    </body>
</html>