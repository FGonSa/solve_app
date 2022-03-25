<template>

  <form class="row g-3 needs-validation" v-show="selectTipos()">
  <div class="row">
    <label for="validationCustom01" class="form-label">Tipo de Incidente</label>
    <div class="col">
       <select  class="form-select" v-model="tipo" >
<div v-for="tipito in tipos" :key="tipito.id">
  <option value="{{tipito.id}} ">{{ tipito.descripcio }}</option>
</div>
</select>
    </div>
  </div>
    <div class="col-12">
     
    </div>
  </form>
</template>

<script>
import axios from 'axios'
export default {
  name: "Tipificación",
  data(){
return {
tipo: "",
tipos: []
}
  },
  methods: {
      selectTipos() {
            let me = this;
            axios
                .get("/tipus_incidents")
                .then((response) => {
                    me.tipos = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
