<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>5. Expediente</b></h1>
                <h1 class="titulo-color-dark mb-4"><b>finalización + despacho</b></h1>
                <p>El  último paso consiste en asociar la carta de llamada a un expediente. Una vez finalizado el formulario, debemos avisar a un supervisor para poder dar como finalizada la acción.<br><br>Completada la carta de llamada, el supervisor podrá consultar los datos del expediente con todas sus cartas de llamadas asociadas.</p>
                <p> - Finalizar Formulario.</p>
                <p> - Notificar.</p>
                <p> - Gestion Expedientes.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion tiempoInicio="112" tiempo5="117" tiempoParar="175" tiempoM5="170"/>
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
