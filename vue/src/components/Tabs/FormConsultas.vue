<template>
    <div class="container-fluid">
        <form class="row g-3 needs-validation" >
            <div class="col-lg-6">
                <label class="form-label">Nombre</label>
                <input @blur="getDatosPrincipales(datosPrincipales)" v-model="datosPrincipales.nom_trucada" type="text" class="form-control" autofocus required />
            </div>
            <div class="col-lg-6">
                <label class="form-label" >Teléfono</label>
                <input
                    @blur="getDatosPrincipales(datosPrincipales)"
                    v-model="datosPrincipales.telefono"
                    type="text"
                    class="form-control"
                    id="validationCustom01"
                    required
                    autofocus
                />
            </div>
            <div class="col-lg-12">
                <label for="validationCustom01" class="form-label titulo">Municipio</label>
                <select class="form-select" v-model="datosPrincipales.municipis_id_trucada" @blur="getDatosPrincipales(datosPrincipales)">
                    <option
                        v-for="municipio in datosPrincipales.array_municipis_id_trucada"
                        :value="municipio.id"
                        :key="municipio.id" >
                        {{ municipio.nom }}
                    </option>
                </select>
            </div>
            <div class="col-lg-6">
                <label class="form-label">Procedencia</label>
                <input @blur="getDatosPrincipales(datosPrincipales)" v-model="datosPrincipales.procedencia_trucada" type="text" class="form-control" required />
            </div>
            <div class="col-lg-6">
                <label class="form-label">Origen</label>
                <input @blur="getDatosPrincipales(datosPrincipales)" v-model="datosPrincipales.origen_trucada" type="text" class="form-control" required />
            </div>
            <div class="col-md-12">
                <label class="form-label">Dirección</label>
                <input @blur="getDatosPrincipales(datosPrincipales)" v-model="datosPrincipales.adreca_trucada" type="text" class="form-control" required />
            </div>
            <div class="col-12"></div>
        </form>
    </div>
</template>

<script>
import EventService from "../../services/EventService.js";
export default {
    name: "Datos Principales",
    data() {
        return {
            datosPrincipales: {
                nom_trucada: "",
                telefono: "",
                municipis_id_trucada: "",
                array_municipis_id_trucada: "",
                procedencia_trucada: "",
                origen_trucada: "",
                adreca_trucada: "",
            },
        };
    },
   created() {
        EventService.getMunicipios()
            .then((response) => {
                this.datosPrincipales.array_municipis_id_trucada = response.data;

                JSON.parse(JSON.stringify(this.datosPrincipales.array_municipis_id_trucada));
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        getDatosPrincipales(){
            this.$emit("padre-datos-llamada", this.datosPrincipales);
        },
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
