<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>3. Tipificación</b></h1>
                <h1 class="titulo-color-dark mb-4"><b>del incidente</b></h1>
                <p>En este apartado precisaremos el tipo de incidente y qué especificación tiene. También se adjuntarán las agencias cercanas que puedan ser vitales para su resolución.</p>
                <p> - Validar NC.</p>
                <p> - Completar datos faltantes.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion tiempoInicio="43" tiempo5="48"  tiempoParar="64" tiempoM5="59"/>
            </div>
        </form>
</template>

<script>
import EventService from "../../services/EventService.js";
import VideoFormacion from "../../components/videoFormacion.vue";
export default {
    name: "Tipificacion",
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
