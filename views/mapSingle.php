<main id="mapSingleMain" class="container">
    <section class="row showMap center">
        <h1><?= $spot->name ?></h1>
        <div class="row">
            <div id="spotCard" class="col s12 m12 x6">
                <div class="card">
                    <div class="card-image">
                        <img width="100%" class="materialboxed responsive-image" src="/public/assets/img/spots-images/<?= $spot->id_spots ?>.jpg" alt="spot image">
                    </div>
                    <div class="card-content">
                        <p><?= $spot->description ?></p>
                    </div>
                </div>
            </div>
            <div id="mapDiv" class="col s12 m12 x6">
                <div id="map" class="map map-home leaflet-container leaflet-touch"></div>
                <a class="btn waves-effect center" href="">center</a>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <div class="row center">
        <a class="btn waves-effect" href="/">Revenir a l'accueil</a>
    </div>
</main>