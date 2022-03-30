<template>
    <div class="container-fluid mt-4">
        <form class="row g-3 needs-validation">
            <div class="row">
                <label for="validationCustom01" class="form-label"
                    >Tipo de Incidente</label
                >
                <div class="col">
                    <select class="form-select" v-model="tipo_incidente">
                        <option
                            v-for="tipo in tipus"
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
                    <select class="form-select" v-model="incidente">
                        <option
                            v-for="inci in incidents"

                            :value="inci.id"
                            :key="inci.id"

                        >
                            {{ inci.descripcio }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="row py-5">
                <label for="validationCustom01" class="form-label"
                    >Solicitar ayuda a Agencias:</label
                >
                <div class="col">
                    <select class="form-select">
                        <option
                            v-for="agencia in agencias"
                            :value="agencia.id"
                            :key="agencia.id"
                        >
                            {{ agencia.nom }}
                        </option>
                    </select>

                    <select class="form-select my-3">
                        <option
                            v-for="agencia in agencias"
                            :value="agencia.id"
                            :key="agencia.id"
                        >
                            {{ agencia.nom }}
                        </option>
                    </select>

                    <select class="form-select my-3">
                        <option
                            v-for="agencia in agencias"
                            :value="agencia.id"
                            :key="agencia.id"
                        >
                            {{ agencia.nom }}
                        </option>
                    </select>
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
            tipus: null,
            tipo_incidente: null,
            incidents: null,
            incidente: null,
            agencias: null,
            agenciasSeleccionadas: null,
        };
    },
    created() {
        EventService.getEvents()
            .then((response) => {
                this.tipus = response.data;

                JSON.parse(JSON.stringify(this.tipus));
                console.log(this.tipus);
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getAgencias()
            .then((response) => {
                this.agencias = response.data;

                JSON.parse(JSON.stringify(this.agencias));
            })
            .catch((error) => {
                console.log(error);
            });
        EventService.getIncidents(this.tipo_incidente)
            .then((response) => {
                this.incidents = response.data;

                JSON.parse(JSON.stringify(this.incidents));
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped></style>
