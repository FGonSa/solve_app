<template>
<div class="container-fluid">
    <form class="row g-3 needs-validation">
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label" >Teléfono</label>
            <input
                type="text"
                class="form-control"
                id="validationCustom01"
                value=""
                required
                autofocus
            />
            <div class="valid-feedback">Correcto</div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label"
                >Procedencia</label
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
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label"
                >Nota Comuna</label
            >
            <textarea
                class="texto-notas form-control"
                id="exampleFormControlTextarea1"
                rows="6"
            >
Nombre completo:
Relación con el incidente:
Teléfono de contacto:
Descripción del suceso:
Comentario extra a añadir:
    </textarea
            >
            <div class="valid-feedback">Correcto</div>
        </div>
        <div class="col-12"></div>
    </form>
</div>
</template>

<script>
export default {
    name: "Datos Principales",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.texto-notas{
    background-color: #ffe11c;
    height: 180px;
}

</style>
