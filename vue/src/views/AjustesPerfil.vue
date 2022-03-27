<template>
	<main id="pagina-ajustesPerfil">
		<ContainerPerfilEdit />
		<ContainerFormPerfil />
	</main>
</template>
<script setup>
import ContainerPerfilEdit from '../components/ContainerPerfilEdit.vue'
import ContainerFormPerfil from '../components/ContainerFormPerfil.vue'
</script>

<style lang="scss" scoped>
.containers-ajustes{
	display: flex;
	align-items: center;
	justify-content: center;
    // gap: 5%;
}
</style>