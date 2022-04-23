<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>2. Identificación</b></h1>
                <h1 class="titulo-color-dark mb-5"><b>de la emergencia</b></h1>
                <p>Consiste en identificar el origen de la emergéncia y su procedencia terrenal.</p>
                <p> - Procedimiento Especifico.</p>
                <p> - Llamada Asociada.</p>
                <p> - Ampliación, Reclamación, Anulación.</p>
                <p> - Completar datos faltantes.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion tiempoInicio="17" tiempo5="22"  tiempoParar="41" tiempoM5="36"/>
            </div>
        </form>
</template>

<script>
import EventService from "../../services/EventService.js";
import VideoFormacion from "../../components/videoFormacion.vue";
export default {
    name: "Identificacion",
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

