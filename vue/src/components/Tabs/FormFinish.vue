<template>
  <form class="row g-3 needs-validation">
  <div class="row">
    <label for="validationCustom01" class="form-label">Selecciona cómo cerrar la carta:</label>
    <div class="col">
       <select  class="form-select" v-model="relacion" >
  <option value="1" >Asociar expediente existente</option>
  <option value="2">Crear expediente nuevo con recomendación</option>
  <option value="3" selected >Crear expediente nuevo</option>
</select>
    </div>
  </div>

    <div class="col-12">
      <button type="submit" class="btn btn-warning" >Finalizar</button>
    </div>

        <div class="col-12">
    </div>
  </form>
</template>

<script>
export default {
  name: "Finalización",
  relacion: null
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped></style>
