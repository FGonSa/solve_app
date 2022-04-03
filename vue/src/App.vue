<template>
	<div class="app">
		<div class="class-sidebar">
			<!-- Sidebar -->
			<Sidebar />
		</div>
		<div class="class-main">
			<!-- Navbar -->
			<Navbar/>
			<!-- Content -->
			<router-view />
		</div>
	</div>
</template>

<script setup>
import Sidebar from './components/Sidebar.vue'
import Navbar from './components/Navbar.vue'
</script>

<style lang="scss">
:root {
	--primary: #4ade80;
	--primary-alt: #22c55e;
	--grey: #64748b;
	--dark: #1e293b;
	--dark-alt: #334155;
	--light: #f1f5f9;
	--sidebar-width: 300px;
    --color-dark: #393939;
	--color-rosa: #F15AA5;
	--color-azul: #4D9CDF;
	--color-amarillo: #FFE64E;
	--color-rosa-fuerte: #f12189;
	--color-azul-fuerte: #0088ff;
	--color-amarillo-fuerte: #ffe11c;
	--color-amarillo-visible: #eecc09;
    --color-verde: #2feb45;
    --color-verde-oliva: #5a8700;
    --color-lila: #8a24b3;
}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background: var(--light);
}
button {
	cursor: pointer;
	appearance: none;
	border: none;
	outline: none;
	background: none;
}
.app {
	display: flex;
	main {
		flex: 1 1 0;
		padding: 2rem;

	}
}
.class-main{
	width: 100%;

}
.class-sidebar{

}
</style>
