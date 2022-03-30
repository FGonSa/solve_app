<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation">
            <div class="row">
                <label for="validationCustom01" class="form-label">Selecciona cómo cerrar la carta:</label>
                <div class="col">
                <select  class="form-select" v-model="relacion" >
                    <option value="1" >Asociar expediente existente</option>
                    <option value="2">Crear expediente nuevo con recomendación</option>
                    <option value="3" selected >Crear expediente nuevo</option>
                </select>
                <div class="col-md-12 mt-3">
                    <label class="form-label">Nota Comuna</label>
                    <textarea v-model="notaComuna" class="texto-notas form-control" rows="6">
                        Nombre completo:
                        Relación con el incidente:
                        Teléfono de contacto:
                        Descripción del suceso:
                        Comentario extra a añadir:
                    </textarea>
                    <div class="valid-feedback">Correcto</div>
                </div>
            </div>
        </div>
            <div class="btn-margin-right d-flex justify-content-end mt-4">
                <button type="submit" class="div-btn-fin-btn btn btn-dark mt-3">
                    <div class="d-flex align-content-center gap-2">
                        <span class="material-icons">check</span>
                        Enlazar
                    </div>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
  name: "Finalización",
  relacion: null,
  notaComuna
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
