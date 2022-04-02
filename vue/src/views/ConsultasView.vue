<template>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-8">
                <TabsWrapper>
                    <Tab title="Datos Principales">
                        <FormConsultas
                            @padre-datos-llamada="getDatosPrincipales"
                        />
                    </Tab>
                    <Tab title="Localización">
                        <FormLocalizacion
                            @padre-datos-llamada="getLocalizacion"
                        />
                    </Tab>
                    <Tab title="Tipificación">
                        <FormTipo @padre-datos-llamada="getTipificacion" />
                    </Tab>
                    <Tab title="Finalización">
                        <FormFinish @padre-datos-llamada="getFinalizacion" :cartaLlamada="cartaLlamada"/>
                    </Tab>
                </TabsWrapper>
            </div>
            <div class="col-lg-4">
                <ModuloDatos />
                <ModuloExp class="my-4" />
                <ModuloMap class="my-4" />
            </div>
        </div>
    </div>
</template>

<script>
// @ is an alias to /src
import TabsWrapper from "../components/Tabs/TabsWrapper.vue";
import Tab from "../components/Tabs/Tab.vue";
import FormConsultas from "../components/Tabs/FormConsultas.vue";
import FormLocalizacion from "../components/Tabs/FormLocalizacion.vue";
import FormTipo from "../components/Tabs/FormTipo.vue";
import FormFinish from "../components/Tabs/FormFinish.vue";
import ModuloExp from "../components/Modulos/ModuloExp.vue";
import ModuloMap from "../components/Modulos/ModuloMap.vue";
import ModuloDatos from "../components/Modulos/ModuloDatos.vue";

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
        ModuloDatos,
    },

    data() {
        return {
            cartaLlamada: {
                codi_trucada: "algo",
                data_hora: null,
                temps_trucada: null,
                dades_personals_id: 2,
                // datos principales
                telefono: "",
                nom_trucada: "",
                municipis_id_trucada: 3,
                procedencia_trucada: "",
                origen_trucada: "",
                adreca_trucada: "",
                // localizacion
                fora_catalunya: 0,
                provincies_id: 2,
                municipis_id: 3,
                comarca_id: 4, //falta añadirlo a la BD
                tipus_localitzacions_id: 1,
                descripcio_localitzacio: "",
                detall_localitzacio: "",
                altres_ref_localitzacio: "",
                // tipificación
                incidents_id: 2,
                tipus_incidents_descripcio: 1, //falta añadirlo a la BD
                //finalizacion
                como_cerrar_carta: "", //¿ añadir a BD ?
                nota_comuna: "",
                expedients_id: 2,
                usuaris_id: 1,
            },
        };
    },
    methods: {
        getDatosPrincipales(datosPrincipales) {
            this.cartaLlamada.telefono = datosPrincipales.telefono;
            this.cartaLlamada.nom_trucada = datosPrincipales.nom_trucada;
            this.cartaLlamada.municipis_id_trucada =
                datosPrincipales.municipis_id_trucada;
            this.cartaLlamada.procedencia_trucada =
                datosPrincipales.procedencia_trucada;
            this.cartaLlamada.origen_trucada = datosPrincipales.origen_trucada;
            this.cartaLlamada.adreca_trucada = datosPrincipales.adreca_trucada;
        },
        getLocalizacion(localizacion) {

            this.cartaLlamada.fora_catalunya = localizacion.foraCat;
            this.cartaLlamada.provincies_id = localizacion.provinciaSelect;
            this.cartaLlamada.municipis_id = localizacion.municipioSelect;
            this.cartaLlamada.comarca_id = localizacion.comarcaSelect;
            this.cartaLlamada.tipus_localitzacions_id =
                localizacion.localizacion;
            this.cartaLlamada.descripcio_localitzacio =
                localizacion.descripcion;
            this.cartaLlamada.detall_localitzacio = localizacion.detalle;
            this.cartaLlamada.altres_ref_localitzacio = localizacion.otrasRef;
        },
        getTipificacion(tipificacion) {
            this.cartaLlamada.incidents_id = tipificacion.incidente;
            this.cartaLlamada.tipus_incidents_descripcio =
                tipificacion.tipo_incidente;
        },
        getFinalizacion(finalizacion) {
            this.cartaLlamada.como_cerrar_carta =
                finalizacion.como_cerrar_carta;
            this.cartaLlamada.nota_comuna = finalizacion.nota_comuna;
        },
    },
};
</script>

<style lang="scss" scoped></style>
