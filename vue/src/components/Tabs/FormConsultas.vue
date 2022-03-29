<template>
    <div class="container-fluid">
        <form class="row g-3 needs-validation">
            <div class="col-md-12">
                <label class="form-label" >Teléfono</label>
                <input
                v-model="telefono"
                    type="text"
                    class="form-control"
                    id="validationCustom01"
                    required
                    autofocus
                />
            </div>
            <div class="col-md-12">
                <label class="form-label">Procedencia</label>
                <input v-model="origenTrucada" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Municipio</label>
                <input v-model="municipioTrucada" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Dirección</label>
                <input v-model="direccionTrucada" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Información relevante</label>
                <input  v-model="infoRelevante" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Nota Comuna</label>
                <textarea v-model="notaComuna" class="texto-notas form-control" rows="6">
<!-- Nombre completo:
Relación con el incidente:
Teléfono de contacto:
Descripción del suceso:
Comentario extra a añadir: -->
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
    data() {
        return {
            telefono: null,
            origenTrucada: null,
            municipioTrucada: null,
            direccionTrucada: null,
            infoRelevante: null,
            notaComuna: null,
        };
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.texto-notas {
    background-color: #ffe11c;
    height: 180px;
}
</style>
