// var app = new Vue({
//   el: '#app',
//   data () {
//     return {
//       info: null,
//       loading: true,
//       errored: false
//     }
//   },
//   filters: {
//     currencydecimal (value) {
//       return value.toFixed(2)
//     }
//   },
//   mounted () {
//     axios
//       .get('https://api.coindesk.com/v1/bpi/currentprice.json')
//       .then(response => {
//         this.info = response.data.bpi
//       })
//       .catch(error => {
//         console.log(error)
//         this.errored = true
//       })
//       .finally(() => this.loading = false)
//   }
// });

let app2 = new Vue({
  el: '#app2',
  data: {
    lista: [{
        text: 'Learn Javascript'
      },
      {
        text: 'Learn Vue'
      },
      {
        text: 'Learn somethin awesome'
      }
    ]
  }
});

setInterval(function() {
  app2.lista.push({
    text: new Date().toLocaleString()
  })
}, 3000);
