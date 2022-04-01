<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation">
            <div class="row">
                <label for="validationCustom01" class="form-label">Selecciona cómo cerrar la carta:</label>
                <div class="col">
                <select  class="form-select" @blur="getFinalizacion(finalizacion)" v-model="finalizacion.como_cerrar_carta" >
                    <option value="asociar_expediente" >Asociar expediente existente</option>
                    <option value="crear_expediente_recomendado">Crear expediente nuevo con recomendación</option>
                    <option value="crear_expediente_nuevo" selected >Crear expediente nuevo</option>
                </select>
                <div class="col-md-12 mt-3">
                    <label class="form-label">Nota Comuna</label>
                    <textarea @blur="getFinalizacion(finalizacion)" v-model="finalizacion.nota_comuna" class="texto-notas form-control" rows="6">
                    </textarea>
                    <div class="valid-feedback">Correcto</div>
                </div>
            </div>
        </div>
            <div class="btn-margin-right d-flex justify-content-end mt-4">
                <button type="submit" class="div-btn-fin-btn btn btn-dark mt-3">
                    <div class="d-flex align-content-center gap-2">
                        <span class="material-icons">check</span>
                        Terminar
                    </div>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
  data() {
        return {
            finalizacion: {
                como_cerrar_carta: null,
                nota_comuna: "Relación con el incidente: \nDescripción del suceso: \nComentario extra a añadir:",
            },
        };
    },
    methods: {
        getFinalizacion(){
            this.$emit("padre-datos-llamada", this.finalizacion);
        },
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.div-btn-fin{
    padding-top: 2rem;
    padding-right: 2.1rem;
    border-radius: 35px;
}
.div-btn-fin-btn{
    border-radius: 35px;
    transition: 0.2s all ease-out;
}
.div-btn-fin-btn:hover{
    opacity: 70%;
    transition: 0.2s all ease-out;
}
.btn-margin-right{
    padding-right: 2rem;
}
.texto-notas {
    background-color: #ffe11c;
    height: 180px;
}
</style>
