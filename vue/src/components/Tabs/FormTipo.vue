<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation">
            <div class="row">
                <label for="validationCustom01" class="form-label"
                    >Tipo de Incidente</label
                >
                <div class="col">
                    <select class="form-select" @blur="getTipificacion(tipificacion)" v-model="tipificacion.tipo_incidente">
                        <option
                            v-for="tipo in tipificacion.tipus"
                            :value="tipo.id"
                            :key="tipo.id"
                        >
                            {{ tipo.descripcio }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <label for="validationCustom01" class="form-label titulo"
                        >Incidente</label
                    >
                    <select class="form-select" @blur="getTipificacion(tipificacion)" v-model="tipificacion.incidente">
                        <option
                            v-for="inci in tipificacion.incidents"

                            :value="inci.id"
                            :key="inci.id"

                        >
                            {{ inci.descripcio }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="row py-5">
                <label  class="form-label"
                    >Agencias solicitadas:</label
                >
                <div v-if="tipificacion.agenciasSeleccionadas == ''" style="color: red" class="d-flex align-items-center gap-2"><span class="material-icons">report_problem</span>Todavía no se ha seleccionado ninguna agencia en el mapa.</div>
                <div v-else >{{ tipificacion.agenciasSeleccionadas}}</div>
                <div class="col">

                </div>
            </div>
        </form>
    </div>
</template>

<script>
import EventService from "../../services/EventService.js";

export default {
    data() {
        return {
            tipificacion: {
                tipus: '',
                tipo_incidente: null,
                incidents: '',
                incidente: null,
                agencias: '',
                agenciasSeleccionadas: ''
            },
        };
    },
    created() {
        EventService.getEvents()
            .then((response) => {
                this.tipificacion.tipus = response.data;
                JSON.parse(JSON.stringify(this.tipificacion.tipus));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getAgencias()
            .then((response) => {
                this.tipificacion.agencias = response.data;
                JSON.parse(JSON.stringify(this.tipificacion.agencias));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getIncidents(this.tipo_incidente)
            .then((response) => {
                this.tipificacion.incidents = response.data;
                JSON.parse(JSON.stringify(this.tipificacion.incidents));
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        getTipificacion(){
            this.$emit("padre-datos-llamada", this.tipificacion);
        },
    },
};
</script>

<style lang="scss" scoped>

</style>
