<template>
    <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-8">
                    <TabsWrapper >
                        <Tab title="Datos Principales" activo="active">
                            <FormConsultas class=""/>
                        </Tab>
                        <Tab title="Localización" activo="active">
                            <FormLocalizacion class=""/>
                        </Tab>
                        <Tab title="Tipificación" activo="active">
                            <FormTipo class=""/>
                        </Tab>
                        <Tab title="Finalización" activo="active">
                            <FormFinish class=""/>
                        </Tab>
                    </TabsWrapper>
                </div>
                <div class="col-lg-4">
                    <ModuloDatos />
                    <ModuloExp  class="my-4"/>
                    <ModuloMap  class="my-4"/>
                </div>
            </div>
    </div>
</template>

<script>
// @ is an alias to /src
import TabsWrapper from "../components/Tabs/TabsWrapper.vue";
import Tab from "../components/Tabs/Tab.vue";
import FormConsultas from "../components/Tabs/FormConsultas.vue"
import FormLocalizacion from "../components/Tabs/FormLocalizacion.vue"
import FormTipo from "../components/Tabs/FormTipo.vue"
import FormFinish from "../components/Tabs/FormFinish.vue"
import ModuloExp from "../components/Modulos/ModuloExp.vue"
import ModuloMap from "../components/Modulos/ModuloMap.vue"
import ModuloDatos from "../components/Modulos/ModuloDatos.vue"

export default {
  name: "Consultas",
  components: {
    Tab,
    TabsWrapper,
    FormConsultas,
    FormLocalizacion,
    FormTipo,
    FormFinish,
    ModuloExp,
    ModuloMap,
    ModuloDatos
  },
  data(){
    return{
    //   telefono: null,
    //   procedencia: null,
    //   municipio: null,
    //   direccion: null,
    //   infoRelevante: null,
    //   notaComuna: null,
    //   sucedeCat: null,
    //   locaComarca: null,
    //   locaProvincia: null,
    //   locaMunicipio: null,
    //   tipoLocalizacion:  null,
    //   calleVia: null,
    //   calleNombre: null,
    //   calleNum: null,
    //   calleEscalera: null,
    //   callePiso: null,
    //   callePuerta: null,
    //   puntoSingularNombre: null,
    //   carreteraNombre: null,
    //   carreteraKm: null,
    //   carreteraSentido: null,
    //   otrasRef: null,

    }
  }
};
</script>


<style lang="scss" scoped>

</style>
