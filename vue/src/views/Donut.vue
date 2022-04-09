<template>
  <DoughnutChart
    :chart-data="data"
    :options="options"
    css-classes="chart-container"
  />
</template>

<script setup>
import pattern from "patternomaly"
import { ref, computed } from "vue"
import { DoughnutChart } from "vue-chart-3"
import { Chart, DoughnutController, ArcElement } from "chart.js"

Chart.register(DoughnutController, ArcElement)

const dataValues = ref([10, 40, 40])

const data = computed(() => ({
  labels: ["Incendios", "Inundaciones", "Robos"],

  datasets: [
    {
      data: dataValues.value,
      backgroundColor: ['#f12189','#0088ff','#ffe11c']
    }
  ]
}))

const options = ref({
  plugins: {
    title: {
      text: "Accidentes registrados:"
    }
  }
})


</script>
