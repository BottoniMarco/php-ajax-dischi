import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue (
  {
    el:"#app",
    data:{
      albums:[],
    },
    mounted: function () {
      const self = this;
      alert("funziona");
      axios. get('server.php')
      .then( function (result) {
        let albumSpecs = result.data;
        self.albums = albumSpecs;
        console.log("album ",self.albums);

      });
    }
  }
);
