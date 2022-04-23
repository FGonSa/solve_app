<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>4. Localización</b></h1>
                <h1 class="titulo-color-dark mb-4"><b>del incidente</b></h1>
                <p>La localización será donde completarás los datos de origen del suceso y donde se encuentran los afectados del incidente.</p>
                <p> - Localizar Incidente.</p>
                <p> - Completar datos faltantes.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion tiempoInicio="66" tiempo5="71"  tiempoParar="110" tiempoM5="105"/>
            </div>
        </form>
</template>

<script>
import EventService from "../../services/EventService.js";
import VideoFormacion from "../../components/videoFormacion.vue";
export default {
    name: "Localizacion",
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
