<template>
  <h2 class="py-3">CARTA DE LLAMADA</h2>
    <div class="container">
       <div class="row">
    <div class="col-lg-9">
 <TabsWrapper  >
        <Tab title="DATOS PRINCIPALES" ><FormConsultas class="card card-body"/></Tab>
        <Tab title="LOCALIZACIÓN"><FormLocalizacion class="card card-body"/></Tab>
        <Tab title="TIPIFICACIÓN"><FormTipo class="card card-body"/></Tab>
        <Tab title="FINALIZACIÓN"><FormFinish class="card card-body"/></Tab>
      </TabsWrapper>
    </div>
       <div class="col-lg-3">
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
      telefono: null,
      procedencia: null,
      municipio: null,
      direccion: null,
      infoRelevante: null,
      notaComuna: null,
      sucedeCat: null,
      locaComarca: null,
      locaProvincia: null,
      locaMunicipio: null,
      tipoLocalizacion:  null,
      calleVia: null,
      calleNombre: null,
      calleNum: null,
      calleEscalera: null,
      callePiso: null,
      callePuerta: null,
      puntoSingularNombre: null,
      carreteraNombre: null,
      carreteraKm: null,
      carreteraSentido: null,
      otrasRef: null,

    }
  }
};
</script>


