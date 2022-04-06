<template>
<div class="mb-4">
        <div class="carta-header p-3" >
            <h5>Mapa</h5>
        </div>
        <div class="carta-body p-3">
            <h5 class="carta-title">Localización de la llamada</h5>
            <div id="map"></div>
            <div class="d-grid gap-2">
<button @click="cargarMapa()" type="button" class="btn btn-dark my-2" >Actualizar</button>
</div>

        </div>
    </div>

</template>

<script>
import mapboxgl from "mapbox-gl";
import "mapbox-gl/dist/mapbox-gl.css";
import { onMounted } from "vue";
export default {
    props: ["direccion"],
  setup() {
      let me = this;
    onMounted(() => {
        let recaptchaScript = document.createElement('script')
      recaptchaScript.setAttribute('src', 'https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js')
      document.head.appendChild(recaptchaScript)
      mapboxgl.accessToken =
        "pk.eyJ1IjoiY2FuYWxsaXRhIiwiYSI6ImNsMWlmYTR3cDBtYjkzb281dTh5bDF3ankifQ.eATbW75k_6S6liQCEvQMJA";

      const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/light-v9",
        zoom: 6
      });
      map.on('load', () => {
      // TODO: Here we want to load a layer
      // TODO: Here we want to load/setup the popup
      const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
      mapboxClient.geocoding
.forwardGeocode({
query: "Oceania",
autocomplete: false,
limit: 1
})
.send()
.then((response) => {
if (
!response ||
!response.body ||
!response.body.features ||
!response.body.features.length
) {
console.error('Invalid response:');
console.error(response);
return;
}
const feature = response.body.features[0];

const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: feature.center,
zoom: 10
});

// Create a marker and add it to the map.
new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
});
      });
    });
    return {};
  },
  methods: {
      cargarMapa(){
          let me = this;
                  let recaptchaScript = document.createElement('script')
      recaptchaScript.setAttribute('src', 'https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js')
      document.head.appendChild(recaptchaScript)
      mapboxgl.accessToken =
        "pk.eyJ1IjoiY2FuYWxsaXRhIiwiYSI6ImNsMWlmYTR3cDBtYjkzb281dTh5bDF3ankifQ.eATbW75k_6S6liQCEvQMJA";

      const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/light-v9",
        zoom: 6
      });
      map.on('load', () => {
      // TODO: Here we want to load a layer
      // TODO: Here we want to load/setup the popup
      const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
      mapboxClient.geocoding
.forwardGeocode({
query: me.direccion,
autocomplete: false,
limit: 1
})
.send()
.then((response) => {
if (
!response ||
!response.body ||
!response.body.features ||
!response.body.features.length
) {
console.error('Invalid response:');
console.error(response);
return;
}
const feature = response.body.features[0];

const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: feature.center,
zoom: 10
});

// Create a marker and add it to the map.
new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
});
      });
      }
  }
};
</script>

<style lang="scss" scoped>
#map {
  height: 25vh;
}
.carta-header {
    background-color: var(--color-amarillo-fuerte);
    border-radius: 25px 25px 0px 0px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.carta-body {
    background-color: white;
    border-radius: 0px 0px 25px 25px;
    box-shadow: 0px 15px 14px 4px rgba(0, 0, 0, 0.12);
}




</style>

