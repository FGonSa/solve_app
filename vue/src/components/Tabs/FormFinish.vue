<template>
<div class="container-fluid">
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

    <div class="div-btn-fin col-12 d-flex justify-content-end">
      <button type="submit" class="btn btn-dark" >Finalizar</button>
    </div>

        <div class="col-12">
    </div>
  </form>
</div>
</template>

<script>
export default {
  name: "Finalización",
  relacion: null
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.div-btn-fin{
    padding-top: 2rem;
    padding-right: 2.1rem;
}
</style>
