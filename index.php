<!DOCTYPE html>
<html lang="pt" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" charset="utf-8"></script>
  <title>Request Twitter</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <img id="logo" src="img/twitter-logo-1-1.png" alt="logo_twitter">
    </div>
    <div class="row">
      <div class="col-md-6">
        <hr>
        <h4>#Recent Search</h4>
        <div id="recent_search">
          <ul>
            <li v-for='pesquisa in history'> {{ pesquisa.text }} </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <hr>
        <h4>#Trending Now</h4>
          <ol>
            <item-lista><item-lista>
          </ol>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h3>__Search__</h3>
        
        <!-- <div id="app">
          <section v-if="errored">
            <p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
          </section>

          <section v-else>
            <div v-if="loading">Loading...</div>
            <div v-else v-for="currency in info" class="currency">
              {{ currency.description }}:
              <span class="lighten">
              <span v-html="currency.symbol"></span>{{ currency.rate_float | currencydecimal }}
              </span>
            </div>
          </section>
        </div> -->
        <div id="app2">
          <input type="text" class='form-control' placeholder="Busque por algum Twitter">
          <ol>
            <li v-for="chave in lista"> {{ chave.text }} </li>
          </ol>
        </div>

      </div>
    </div>
  </div>
  <script src="script/vue.js" charset="utf-8"></script>
</body>

</html>
