import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue (
  {
    el:"#app",
    data:{
      logo:"mimmo"
    },
    mounted: function () {
      alert("funziona");
      axios. get('server.php')
      .then( function (result) {
        console.log(result.data);
      });
    }
  }
);
