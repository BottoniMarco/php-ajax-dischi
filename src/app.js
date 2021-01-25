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
      axios. get('https://flynn.boolean.careers/exercises/api/array/music')
      .then( function (result) {
        console.log(result.data);
      });
    }
  }
);
