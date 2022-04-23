<template>
    <div class="div-donut container-fluid p-5">
        <DoughnutChart
            v-if="loaded"
            :chart-data="datos"
            :options="options"
            css-classes="chart-container"
        />
    </div>
</template>

<script>
import pattern from "patternomaly";
import { ref, computed } from "vue";
import { DoughnutChart } from "vue-chart-3";
import { Chart, DoughnutController, ArcElement } from "chart.js";
import EventService from "../services/EventService.js";
import axios from "axios";

Chart.register(DoughnutController, ArcElement);

export default {
    name: "BarChart",
    components: { DoughnutChart },
    data: () => ({
        loaded: false,
        options: ref({
            plugins: {
                title: {
                    text: "Estadísticas registradas:",
                },
            },
        }),
        valores: null,
        datos: {
            labels: [
                "ACCIDENTE",
                "ASISTENCIA SANITARIA",
                "INCENDIO",
                "FUGA (AGUA, GAS, OTROS)",
                "OTRAS INCIDENCIAS",
                "SEGURIDAD",
                "TRÁFICO",
                "CIVISMO",
                "MEDIO AMBIENTE",
                "METEOROLOGÍA",
            ],
            datasets: [
                {
                    data: dataValues.value,
                    backgroundColor: [
                        "#ffe11c",
                        "#0088ff",
                        "red",
                        "lightGreen",
                        "peru",
                        "brown",
                        "silver",
                        "orchid",
                        "darkGreen",
                        "cadetBlue",
                    ],
                },
            ],
        },
    }),
    async mounted() {
        this.loaded = false;

        try {
            EventService.getIncidentes()
                .then((response) => {
                    this.valores = response.data;
                    this.datos.datasets[0].data = this.valores;
                    this.loaded = true;
                })
                .catch((error) => {
                    console.log(error);
                });
        } catch (e) {
            console.error(e);
        }
    },
};

let dataValues = ref([10, 10, 10, 10, 10, 10, 10, 10, 10, 10]);
</script>

<style lang="scss" scoped>
.div-donut {
    background-color: white;
    border-radius: 25px;
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
}
</style>
