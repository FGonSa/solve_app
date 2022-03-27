<template>
	<aside :class="`${is_expanded ? 'is-expanded' : ''}`">
		
		<div class="logo">
			<div class="menu">
				<router-link to="/" class="btn-sin-estilo">
					<div class="button button-solve-icon">
						<img :src="logoURL" alt="Solve" class="material-icons" />
						<span class="text titulo-solve">SOLVE APP</span>
					</div>
				</router-link>
			</div>
		</div>

		<div class="menu-toggle-wrap">
			<button class="menu-toggle" @click="ToggleMenu">
				<span class="material-icons">keyboard_double_arrow_right</span>
			</button>
		</div>

		<!-- <h3>Principal</h3>
		<div class="menu mb-4">
			<router-link to="/expediente" class="button btn-amarillo">
				<span class="material-icons">description</span>
				<span class="text">Expediente</span>
			</router-link>
			<router-link to="/formacion" class="button btn-azul">
				<span class="material-icons">group</span>
				<span class="text">Formación</span>
			</router-link>
		</div> -->


		<h3>Menu</h3>
		<div class="menu">
			<router-link to="/expediente" class="button btn-amarillo">
				<span class="material-icons">dashboard</span>
				<span class="text">Expediente</span>
			</router-link>
			<router-link to="/formacion" class="button btn-azul">
				<span class="material-icons">school</span>
				<span class="text">Formación</span>
			</router-link>
			<router-link to="/" class="button">
				<span class="material-icons">home</span>
				<span class="text">Inicio</span>
			</router-link>
			<router-link to="/big-data" class="button">
				<span class="material-icons">incomplete_circle</span>
				<span class="text">Big Data</span>
			</router-link>
			<!-- <router-link to="/A" class="button">
				<span class="material-icons">group</span>
				<span class="text">Formación</span>
			</router-link>
			<router-link to="/contact" class="button">
				<span class="material-icons">email</span>
				<span class="text">Contact</span>
			</router-link> -->
		</div>

		<div class="flex"></div>
		
		<div class="menu">
			<router-link to="/ajustes" class="button">
				<span class="material-icons">settings</span>
				<span class="text">Ajustes</span>
			</router-link>
		</div>
	</aside>
</template>

<script setup>
import { ref } from 'vue'
import logoURL from '/assets/logo-solve-sidebar.png'
const is_expanded = ref(localStorage.getItem("is_expanded") === "true")
const ToggleMenu = () => {
	is_expanded.value = !is_expanded.value
	localStorage.setItem("is_expanded", is_expanded.value)
}
</script>

<style lang="scss" scoped>
.btn-sin-estilo{
	text-decoration: none;
}
aside {
	position: sticky;
  	top: 0;
	font-family: 'Poppins', sans-serif;
	display: flex;
	flex-direction: column;
	background-color: white;
	color: var(--light);
	width: calc(2rem + 32px);
	overflow: hidden;
	min-height: 100vh;
	padding: 1rem;
	transition: 0.2s ease-in-out;
	.flex {
		flex: 1 1 0%;
	}
	.logo {
		display: flex;
		img {
			width: 3rem;
		}
	}
	.menu-toggle-wrap {
		display: flex;
		justify-content: flex-end;
		// margin-bottom: 1rem;
		position: relative;
		top: 0;
		transition: 0.2s ease-in-out;
		.menu-toggle {
			transition: 0.2s ease-in-out;
			.material-icons {
				font-size: 2rem;
				color: var(--dark);
				transition: 0.2s ease-out;
			}
			
			&:hover {
				.material-icons {
					color: var(--color-rosa-fuerte);
					transform: translateX(0.5rem);
				}
			}
		}
	}
	h3, .button .text {
		opacity: 0;
		transition: opacity 0.3s ease-in-out;
	}
	h3 {
		color: var(--grey);
		font-size: 0.875rem;
		margin-bottom: 0.5rem;
		text-transform: uppercase;
	}
	.menu {
		margin: 0 -1rem;
		.button {
			display: flex;
			align-items: center;
			text-decoration: none;
			transition: 0.2s ease-in-out;
			padding: 0.5rem 1rem;
			.material-icons {
				font-size: 2rem;
				color: var(--dark);
				transition: 0.2s ease-in-out;
			}
			.text {
				color: var(--dark);
				transition: 0.2s ease-in-out;
			}
			&:hover {
				// background-color: var(--dark-alt);
				.material-icons, .text {
					color: var(--color-rosa-fuerte);
				}
			}
			&.router-link-exact-active {
				background-color: var(--color-rosa-fuerte);
				border-right: 5px solid #8d2b5c;
				box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
				.material-icons, .text {
					color: white;
				}
			}
		}
	}
	.footer {
		opacity: 0;
		transition: opacity 0.3s ease-in-out;
		p {
			font-size: 0.875rem;
			color: var(--grey);
		}
	}
	&.is-expanded {
		width: var(--sidebar-width);
		.menu-toggle-wrap {
			top: -3.5rem;
			
			.menu-toggle {
				transform: rotate(-180deg);
			}
		}
		h3, .button .text {
			opacity: 1;
		}
		.button {
			.material-icons {
				margin-right: 1rem;
			}
		}
		.footer {
			opacity: 0;
		}
	}
	@media (max-width: 1024px) {
		// position: absolute;
		// z-index: 98;
	}
	.titulo-solve{
		font-family: 'Readex Pro', sans-serif;
		font-size: 1.4rem;
	}
	.btn-amarillo{
		background-color: var(--color-amarillo-fuerte);
	}
	.btn-azul{
		background-color: var(--color-azul);
	}
}

</style>