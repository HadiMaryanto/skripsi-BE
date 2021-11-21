var osmLayer = new  ol.layer.Tile({
    source : new ol.source.OSM({

    })
  });

var map = new ol.Map({
layers: [osmLayer],
target: "map",
view: new ol.View({
center: ol.proj.fromLonLat([120.437276, -2.806750]),
zoom: 4,
})
});
