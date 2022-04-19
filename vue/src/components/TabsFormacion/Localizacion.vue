<template>
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6 p-5">
                <h1 class="titulo-color-blue"><b>4. Localización</b></h1>
                <h1 class="titulo-color-dark mb-4"><b>del incidente</b></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-lg-6 p-5">
                <VideoFormacion/>
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
