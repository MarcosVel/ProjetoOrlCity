<?php require_once("header.php");?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

    <section>       <!--CORPO DO SITE-->

      <div id="call-to-action">
        <div class="container">

          <div class="row text-center">
            <h2>Vídeos<hr></h2>
          </div> <!--/row-->
          <br><br>
          <div class="text-center">
            <video src="mp4/Orlando_City_Foundation_2015.mp4" controls poster="img/Orlando_City_Foundation_2015.jpg">
              <track kind="captions" label="Português (BR)" src="vtt/legendas.vtt" srclang="pt-br" default>
            </video>
          </div>
          
        </div> <!--/container-->
      </div>

      <div id="news" class="container" style="top:100px; margin-bottom:170px">

        <div class="row text-center">
          <h2>Latest News<hr></h2>
        </div>

        <div class="text-center thumbnails owl-carousel owl-theme">          
          <div class="item" data-video="highlights">
            <div class="item-inner">
              <img src="img/highlights.jpg" alt="Noticia">
              <h3>Highlights</h3>
            </div>
          </div>

          <div class="item" data-video="Orlando_City_Foundation_2015">
            <div class="item-inner">
              <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
              <h3>Orlando City Foundation</h3>
            </div>
          </div>

          <div class="item" data-video="highlights">
            <div class="item-inner">
              <img src="img/highlights.jpg" alt="Noticia">
              <h3>Highlights</h3>
            </div>
          </div>

          <div class="item" data-video="Orlando_City_Foundation_2015">
            <div class="item-inner">
              <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
              <h3>Orlando City Foundation</h3>
            </div>
          </div>

          <div class="item" data-video="highlights">
            <div class="item-inner">
              <img src="img/highlights.jpg" alt="Noticia">
              <h3>Highlights</h3>
            </div>
          </div>

          <div class="item" data-video="Orlando_City_Foundation_2015">
            <div class="item-inner">
              <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
              <h3>Orlando City Foundation</h3>
            </div>
          </div>

        </div>

      </div>

    </section>

    <?php include_once("footer.php");?>
    <script src="lib/plyr/dist/plyr.js"></script>
    <script>
      $(function(){
        $(".thumbnails .item").on("click", function(){
          
          $("video").attr({
            "src":"mp4/"+$(this).data("video")+".mp4",
            "poster":"img/"+$(this).data("video")+".jpg"
          }); 

        });

        $("video")[0].volume = .05  //volume do vídeo
      });
    </script>