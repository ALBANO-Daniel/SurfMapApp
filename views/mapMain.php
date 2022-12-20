<main class="container">
    <section class="container center">
        <h1 class="center">Surf SpotLight</h1>
        <div id="map" class="map map-home leaflet-container leaflet-touch"></div>
    </section>
    <section class="container center">
        <!-- WIP WIP WIP  -->
        <p id="spots" class="display-none">
            <?php
                $spots =Spot::getAll();
                $spots = json_encode($spots);
                echo $spots;
            ?>
        </p>
    </section>

</main>