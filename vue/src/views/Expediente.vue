<template>
	<main id="Expediente-page" >
        <div class="container-fluid">
			<div class="col containers-ajustes mt-5">
				<ContainerAjustes imagen="/public/assets/call-img.png" titulo="Carta Llamadas" url="/expediente/carta-llamada" color="background: rgb(255,219,0);
background: linear-gradient(0deg, rgba(255,219,0,1) 0%, rgba(255,227,57,1) 49%, rgba(255,233,96,1) 100%);" color-letter="#665a11" color_flecha="#393939"/>
				<ContainerAjustes imagen="/public/assets/gestion-expedientes.png" titulo="Gestionar Expedientes" url="/expediente/gestion" color="background: rgb(255,219,0);
background: linear-gradient(0deg, rgba(255,219,0,1) 0%, rgba(255,227,57,1) 49%, rgba(255,233,96,1) 100%);" color-letter="#665a11" color_flecha="#393939"/>
			</div>
		</div>
	</main>
</template>
<script setup>
import ContainerAjustes from '../components/ContainerAjustes.vue'

</script>

<style lang="scss" scoped>
.containers-ajustes{
	display: flex;
	align-items: center;
	justify-content: center;
    // gap: 5%;
}
</style>
