<template>
	<!-- <nav class="nav-fija"> -->
		<!-- <div class="logo-solve"><img src="/public/assets/logo-solve-banner.png"></div> -->
		<!-- <div class="perfil" aria-labelledby="navbarDropdown">
			<div class="perfil-foto"><img src="/public/assets/foto-perfil.png"></div>
			<div class="perfil-name">User Name <span class="material-icons">keyboard_arrow_down</span></div>
		</div>
	</nav> -->


	<nav class="nav-fija navbar navbar-expand-lg navbar-light ">
  	<div class="container-fluid ">
  	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  	    <ul class="navbar-nav">
  	      <li class="nav-item dropdown ">
			<a class="perfil nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  	          <!-- <div class="perfil" aria-labelledby="navbarDropdown"> -->
					<div class="perfil-foto"><img src="/public/assets/foto-perfil.png"></div>
					<div class="perfil-name"><b>User Name </b><span class="material-icons">keyboard_arrow_down</span></div>
				<!-- </div> -->
  	        </a>
  	        
  	        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  	        	<li><router-link to="/ajustes/perfil" class="dropdown-item"><span class="material-icons">account_circle</span>Perfil</router-link></li>
				<li><router-link to="/ajustes" class="dropdown-item"><span class="material-icons">settings</span>Configuración</router-link></li>
  	        	<li><hr class="dropdown-divider"></li>
				<li><router-link to="/" class="dropdown-item"><span class="material-icons">logout</span>Salir</router-link></li>
  	        </ul>
  	      </li>
  	    </ul>
  	  </div>
  	</div>
	</nav>

</template>

<script setup>
import { ref } from 'vue'
// import "bootstrap/dist/js/bootstrap.js";
import 'bootstrap/dist/js/bootstrap.bundle';
// import logoURL from '/assets/logo.png'
</script>

<style lang="scss" scoped>
li{
	display: flex;
}
.nav-fija {
	position: sticky;
	top: 0;
	right: 0;
	display: flex;
	justify-content: flex-end;
	align-items: center;
	background-color: rgb(255, 255, 255);
	color: black;
	width: 100%;
	height: 56px;
	// z-index: 1;
	box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 1px 0px;
}
.perfil{
	display: flex;
	gap: 1rem;
	// margin-right: 1rem;
	// justify-content: flex-end;
	align-content: center;
}
.perfil-name{
	display: flex;
	align-items: center;
}
.perfil-foto img{
	width: 40px;
	height: 40px;
	border-radius: 40px;
}
.navbar-nav {
    margin-left: auto;
}
.dropdown-item{
	display: flex;
	align-content: center;
	gap: 0.5rem;
}
</style>