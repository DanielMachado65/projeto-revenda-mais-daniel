console.log('script_necessary.js');

$(".center").slick({
  dots: true,
  infinite: true,
  centerMode: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,

  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      infinite: true
    }

  }, {

    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      dots: true
    }

  }, {
    breakpoint: 300,
    settings: "unslick" //destroy slick
  }]
});

Vue.component('comentario', {
  props: [
    'src',
    'comentario.nome',
    'comentario.text',
    'comentario.horario'
  ],
  template: '#comentarioPost'
});

// <div>
//   <img src="https://www.tribunapr.com.br/wp-content/uploads/sites/1/2016/09/Faustao-825x509.jpg?a86372" alt="">
//   <h3>JOHN DOE</h3>
//   <p>Lorem ipsum dolor sit ametqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
//     sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
//   <div class="timePost">Postado em: 12/13/2013</div>
// </div>

var header = new Vue({
  el: '#app',
  data: {
    slick: false,
    history: [],
    trends: [],
    comentarios: []
  },
  methods: {
    getTrends: function(event) {
      axios
        .get('http://localhost/projeto-Revenda-Mais/basic/web/?r=twitter/trends')
        .then(response => {
          array = []
          response.data
          for (var i = 0; i < response.data.length; i++) {
            this.trends.push({
              'text': response.data[i]
            });
          }
        })
        .catch(error => {
          console.log(error);
        });
    },
    getSearch: function(event) {

      if (event.target.value != '') {
        let valor = new String(event.target.value);
        valor = valor.toString();
        this.comentarios = [];
        this.history.push({
          'text': valor
        });
        let this_f = this;
        axios
          .get('http://localhost/projeto-Revenda-Mais/basic/web/?r=twitter/search&query=' + valor)
          .then(response => {
            let resposta = response.data.statuses;
            let cont = 0;
            console.log(resposta);
            resposta.forEach(function(data) {
              this_f.comentarios.push({
                'nome': data.user.name,
                'text': data.text,
                'horario': data.created_at,
                'imagem': data.user.profile_image_url_https
              });
            });
          })
          .catch(error => {
            console.log(error);

          })
          .then(function () {
              $("#carouselExampleControls").addClass('displayAtive');
              $(".carousel-item").first().addClass('active');
          });
      }
    }
  },
  beforeMount() {
    this.getTrends();
  }
});
