<template>
  <form class="row g-3 needs-validation">
    <div class="col-md-12">
      <label for="validationCustom01" class="form-label">Teléfono</label>
      <input
        type="text"
        class="form-control"
        id="validationCustom01"
        value=""
        required
      />
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Procedencia</label>
      <input
        type="text"
        class="form-control"
        id="validationCustom02"
        value=""
        required
      />
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Municipio</label>
      <input
        type="text"
        class="form-control"
        id="validationCustom02"
        value=""
        required
      />
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Dirección</label>
      <input
        type="text"
        class="form-control"
        id="validationCustom02"
        value=""
        required
      />
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-12">
      <label for="validationCustom02" class="form-label"
        >Información relevante</label
      >
      <input
        type="text"
        class="form-control"
        id="validationCustom02"
        value=""
        required
      />
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-12" >
      <label for="validationCustom02" class="form-label">Nota Comuna</label>
      <textarea class="form-control bg-warning" id="exampleFormControlTextarea1" rows="6">
Nombre completo:
Relación con el incidente:
Teléfono de contacto:
Descripción del suceso:
    </textarea
      >
      <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-12">

    </div>
  </form>
</template>

<script>
export default {
  name: "Datos Principales",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped></style>
