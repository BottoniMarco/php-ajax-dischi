import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue (
  {
    el:"#app",
    data:{
      albums:[],
      gen:'',
    },
    mounted: function () {
      const self = this;
      axios
      .get('../server.php')
      .then( function (result) {
        let albumSpecs = result.data;
        self.albums = albumSpecs;
        console.log("album mounted ",self.albums);
      });
    },
    methods: {
      filter: function () {
        const self = this;
        axios. get('../server.php',
          {
            params:
            {
              genre: self.gen
            }
          }
        )
        .then( function (result) {
          let albumSpecs = result.data;
          self.albums = albumSpecs;
          console.log("album filter",self.albums);
        });

      }
    }
  }
);
