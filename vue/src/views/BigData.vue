<template>
	<main id="pagina-bigData">
		<h1>Big Data</h1>
		<DataChart></DataChart>
	</main>
</template>

<script>
import DataChart from "../components/Data.vue";

export default {
    name: "Big Data",
    components: {
        DataChart,
    },
    data(){
        return {}
    }}
</script>
