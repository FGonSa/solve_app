<template>
    <div class="div-donut container-fluid p-5">
        <DoughnutChart
            :chart-data="data"
            :options="options"
            css-classes="chart-container"
        />
    </div>
</template>

<script setup>
import pattern from "patternomaly"
import { ref, computed } from "vue"
import { DoughnutChart } from "vue-chart-3"
import { Chart, DoughnutController, ArcElement } from "chart.js"
import EventService from "../services/EventService.js";
import axios from "axios";

let dataValues = ref([10,10,10,10,10,10,10,10,10,10])
Chart.register(DoughnutController, ArcElement)




const data = computed(() => ({

  labels: ["ACCIDENTE", "ASISTENCIA SANITARIA", "INCENDIO", "FUGA (AGUA, GAS, OTROS)", "OTRAS INCIDENCIAS", "SEGURIDAD", "TRÁFICO", "CIVISMO", "MEDIO AMBIENTE", "METEOROLOGÍA"],

  datasets: [
    {
      data: dataValues.value,
      backgroundColor: ['#ffe11c','#0088ff','red', 'lightGreen', 'peru','brown', 'silver', 'orchid', 'darkGreen', 'cadetBlue' ]
    }
  ]
}))


const options = ref({
  plugins: {
    title: {
      text: "Estadísticas registradas:"
    }
  }
})


</script>

<style lang="scss" scoped>
.div-donut{
    background-color: white;
    border-radius: 25px;
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
}
</style>
