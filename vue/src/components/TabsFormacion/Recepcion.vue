<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>1. Recepción</b></h1>
                <h1 class="titulo-color-dark mb-5"><b>de la llamada</b></h1>
                <p>La recepción de la llamada son los pasos que tendás que seguir para identificar si una llamada es procedente o no.</p>
                <p> - Saludación inicial.</p>
                <p> - Identificación de la Llamada.</p>
                <p> - Completar datos faltantes.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion tiempoInicio="0" tiempo5="5" tiempoParar="15" tiempoM5="10"/>
            </div>
        </form>
</template>

<script>
import EventService from "../../services/EventService.js";
import VideoFormacion from "../../components/videoFormacion.vue";
export default {
    name: "Recepcion",
    components: {
        VideoFormacion,
    },

    data() {
        return {

        };
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.titulo-color-blue{
    color: var(--color-azul);
}
.titulo-color-dark{
    color: var(--color-dark);
}
</style>
