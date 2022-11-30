<!-- header outside, or inside main -->
<!-- article can have another main?  -->
<?php


$newsId = 'previous page';
$news = News::get($newsId);
$newsthumbnail = "/images/../$newsId'thumbnail.jpg";
$newsImage = "images/../$newsId.jpg";

// comments 
$idUser = 'current session';
$newsComments = Comment::getAllFromNews($newsId);
$userImage = "/images/../$userId.jpg";



?>
<main>
    <section class="theNews">

        <article class="container">
            <div class="row">
                <h1>news name</h1>
                <h5>Meta date,autor,etc</h5>
                <br>
                <img class="center-align" width="80%" height="35%" src="/public/assets/img/wave/1-landscape.jpg" alt="main image of news">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt odit sint placeat animi iusto pariatur, asperiores porro sunt ipsa magni officiis perspiciatis voluptatem, rem rerum error, aut enim fugiat molestiae! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro repudiandae blanditiis cum nobis sapiente eaque eveniet fuga omnis vitae dolorum impedit perferendis commodi saepe iste sunt id, dolores magni ea? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate cumque tempora quibusdam eius? Itaque iure sapiente nihil nostrum, deserunt officia sint quisquam voluptates delectus amet alias impedit veniam nisi non.</p>
                <div class="divider"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis temporibus dolorum iste ut? Laudantium, veniam voluptatum iusto excepturi quisquam recusandae commodi eum, beatae voluptas, similique omnis nihil quae maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa est, rerum assumenda doloremque voluptatem voluptate perferendis cupiditate. Enim, porro mollitia. Excepturi repellat deleniti, quibusdam culpa veniam voluptate consequatur minima voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda ullam id vero error itaque quis mollitia dicta numquam harum, quae consequuntur ea architecto nam quos nesciunt ab corporis autem!</p>
            </div>
            <div class="row ifMoreImgs">
                <img class="right col s12 m6"  height="50%" src="/public/assets/img/wave/3-thumbnail.jpg" alt="generic article img">
                <p class="left col s12 m6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore porro repudiandae veniam laboriosam nisi eligendi delectus aliquam reprehenderit voluptatem earum temporibus esse corrupti iusto, sint quo tenetur. Dolor, doloribus hic!</p>
            </div>
            <div class="divider"></div>
            <div class="row ifMoreImgs">
                <img class="left col s12 m6"  height="50%" src="/public/assets/img/wave/3-thumbnail.jpg" alt="generic article img">
                <p class="right col s12 m6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nesciunt maiores culpa perspiciatis ut, atque officiis, doloremque ad harum adipisci perferendis voluptatem voluptatibus, nulla accusantium. Dolore ab dolores aperiam id.</p>
            </div>
            <div class="row ifMoreImgs">
                <img class="right col s12 m6"  height="50%" src="/public/assets/img/wave/3-thumbnail.jpg" alt="generic article img">
                <p class="left col s12 m6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore error aspernatur magnam delectus eum, non cumque fuga quam inventore, doloremque harum ex, vitae illo totam beatae eaque quidem nisi nemo?</p>
            </div>
            <div class="row ifMoreImgs">
                <img class="left col s12 m6"  height="50%" src="/public/assets/img/wave/3-thumbnail.jpg" alt="generic article img">
                <p class="right col s12 m6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nisi perspiciatis nostrum dolor tempore numquam sint aliquid adipisci. A soluta ratione labore voluptatibus exercitationem, saepe excepturi in eos ipsam veniam.</p>
            </div>
        </article>
        <!-- on bigger then tablet make comments left and moreNews on right -->
        <div class="container coments">
            <h3 class="row center">comments:</h3>
            <div class="row comment">
                <img class="col s3 m1"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
                <p class="col s9 m11"> i loved this post , really inspiring!</p>
            </div>
            <div class="divider"></div>
            <br>
            <div class="row comment">
                <img class="col s3 m1"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
                <p class="col s9 m11"> i loved this post , really inspiring!</p>
            </div>
            <div class="divider"></div>
            <br>
        </div>
    </section>

    <section class="container">
        <div class="row moreNews">
            <img class="col s6 m3"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
            <img class="col s6 m3"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
            <img class="col s6 m3"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
            <img class="col s6 m3"  height="50px" src="/public/assets/img/wave/3-thumbnail.jpg" alt="profile">
            <p class="row">
                little followUp navigation suggestion, news or map or features etc....<br> maybe some caroussel with the related news, more news, or other cathegories...
            </p>
        </div>
    </section>
</main>