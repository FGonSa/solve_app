<template>
	<main id="Ajustes-page">
		<div class="row container-fluid">
			<div class="col containers-ajustes mt-5">
				<ContainerAjustes imagen="/public/assets/profile-edit.png" titulo="Perfil" url="/ajustes/perfil"/>
				<ContainerAjustes imagen="/public/assets/menu-edit.png" titulo="General" url="/ajustes/general"/>
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