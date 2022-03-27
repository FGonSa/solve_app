<template>
	<main id="Home-page">
		<!-- <div class="container-fluid"> -->
			<div class="row">
				<Header/>
			</div>
		<!-- </div> -->
		<!-- <div class="container-fluid"> -->
			<div class="cards row">
				<Card titulo="Formación" img="/assets/study-time.png" ruta="/formacion" color="background: var(--color-azul-fuerte);"/>
				<Card titulo="Expediente" img="/assets/expediente-time.png" ruta="/expediente" color="background: var(--color-amarillo-fuerte); color: var(--dark);"/>
			</div>
		<!-- </div>		 -->
	</main>
</template>
<script setup>
import Header from '../components/HeaderContainer.vue'
import Card from '../components/SmallContainer.vue'

</script>

<style lang="scss" scoped>
.cards{
    gap: 2%;
}
</style>