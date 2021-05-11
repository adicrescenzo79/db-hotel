Vue.config.devtools = true;
var app = new Vue({
  el: '#root',
  data: {
    message: 'Hello Vue!',
    stanze: [],
    roomIndex: '',
    room: '',
  },
  mounted(){
    axios
    .get('http://localhost/db-hotel/partials/api/stanze.php')
    .then((response)=>{
      const result = response.data.response;
      this.stanze = result;
    })
    .catch((error) => {
      // console.log(error);
    });
  },
  methods:{
    roomSelect: function(i){
      this.roomIndex = i;
      axios
      .get(`http://localhost/db-hotel/partials/api/stanze.php?id=${this.roomIndex}`)
      .then((response)=>{
        const result1 = response.data.response[0];
        this.room = result1;
      })
      .catch((error) => {
        // console.log(error);
      });

    }
  }
})

// METODO VUE PER LA RICHIESTA DI API
