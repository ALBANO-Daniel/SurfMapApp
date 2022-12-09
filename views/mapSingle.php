<main id="mapSingleMain"class="container">
    <section class="row showMap center">
        <h1><?= $spot->name ?></h1>
        <div id="mapDiv" class="col s12">
            <a class="btn waves-effect center" href="">re-centralize</a>
            <div id="map" class="map map-home leaflet-container leaflet-touch"></div>
        </div>
        <div class="col s12">
            <p><?= $spot->description ?></p>
            <img width="100%" class="responsive-image" src="/public/assets/img/spots-images/<?= $spot->id_spots?>.jpg" alt="spot image">
        </div>

    </section>
</main>
<button id="returnToHomeButton">Home Page</button>