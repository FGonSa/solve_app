<template>
	<main id="pagina-formacion">
		<div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12">
                <TabsWrapper>
                    <Tab title="Recepción">
                        <Recepcion />
                    </Tab>
                    <Tab title="Identificación">
                        <Identificacion/>
                    </Tab>
                    <Tab title="Tipificación">
                        <Tipificacion />
                    </Tab>
                    <Tab title="Localización">
                        <Localizacion />
                    </Tab>
                    <Tab title="Expediente">
                        <Expediente/>
                    </Tab>
                </TabsWrapper>
            </div>
        </div>
    </div>
	</main>
</template>

<script>
// @ is an alias to /src
import TabsWrapper from "../components/TabsFormacion/TabsWrapperForm.vue";
import Tab from "../components/TabsFormacion/TabForm.vue";
import Expediente from "../components/TabsFormacion/Expediente.vue";
import Identificacion from "../components/TabsFormacion/Identificacion.vue";
import Localizacion from "../components/TabsFormacion/Localizacion.vue";
import Recepcion from "../components/TabsFormacion/Recepcion.vue";
import Tipificacion from "../components/TabsFormacion/Tipificacion.vue";

export default {
    name: "Consultas",
    components: {
        Tab,
        TabsWrapper,
        Expediente,
        Identificacion,
        Localizacion,
        Recepcion,
        Tipificacion,
    },

    data() {
        return {

        };
    },
};
</script>

<style lang="scss" scoped></style>
