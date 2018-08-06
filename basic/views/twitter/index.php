<?php
\app\assets\TwitterAsset::register($this);
?>
<div id="app">
  <div class="container">
    <div class="text-center">
      <img id="logo" src="img/logo.png" alt="logo_twitter">
    </div>
    <div class="row">
      <div class="col-md-6 recent_search">
        <h2>#Recent Search</h2>
        <hr>
        <div id="history">
          <ol>
            <li v-for="item in history">
              {{ item.text }}
            </li>
          </ol>
        </div>
      </div>
      <div class="col-md-6 trends_Tops">
        <h2>#Trending Nows</h2>
        <hr>
        <div id="trends">
          <ol>
            <li v-for="item in trends">
              {{ item.text }}
            </li>
          </ol>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <input @keyup.enter.stop.prevent='getSearch' class="form-control" placeholder="Pesquise alguma coisa no twitter">
      </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item" v-for="comentario in comentarios">
          <div class="row">
            <div class="col-md-7 adjust-center">
              <div class="row">
                <div class="col-md-4 text-center">
                  <img id="foto" :src="comentario.imagem" alt="foto">
                  <h3> {{ comentario.nome }}</h3>
                </div>
                <div class="col-md-8">
                  <p> {{ comentario.text }}</p>
                  <h5 class="timePost"> {{ comentario.horario }} </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
