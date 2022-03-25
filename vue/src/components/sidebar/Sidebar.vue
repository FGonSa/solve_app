<template>
  <div class="sidebar" :style="{ width: sidebarWidth }">
    <h1>
      <span v-if="collapsed">
        <div><img src="../../assets/logo-solve.png" alt="logo" width="40"></div>
      </span>
      <span v-else ><img src="../../assets/logo-solve.png" alt="logo" width="40"></span>
    </h1>

    <SidebarLink to="/" icon="fas fa-home">Home</SidebarLink>
    <SidebarLink to="/perfil" icon="fa-solid fa-user">Perfil</SidebarLink>
    <SidebarLink to="/entrenar" icon="fa-solid fa-suitcase-medical" class="link-consultas">Entrenar</SidebarLink>
    <SidebarLink to="/formacion" icon="fa-solid fa-chalkboard-user" class="link-formacion">Formación</SidebarLink>
    <SidebarLink to="/analitica" icon="fa-solid fa-chart-pie">Analítica</SidebarLink>
    <SidebarLink to="/mapa" icon="fa-solid fa-earth-asia">Mapa</SidebarLink>
    <SidebarLink to="/informacion" icon="fa-solid fa-circle-info">Información</SidebarLink>

    <span
      class="collapse-icon"
      :class="{ 'rotate-180': collapsed }"
      @click="toggleSidebar"
    >
      <i class="fas fa-angle-double-right" />
    </span>
  </div>
</template>

<script>
import SidebarLink from "./SidebarLink.vue";
import { collapsed, toggleSidebar, sidebarWidth } from "./status.js";
export default {
  props: {},
  components: { SidebarLink },
  setup() {
    return { collapsed, toggleSidebar, sidebarWidth };
  },
};
</script>

<!--CSS GLOBAL -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
:root {
  --sidebar-bg-color: white;
  --sidebar-item-hover: #c7136d;
  --sidebar-item-active: #EA127E;
  --sidebar-item-activeText: white;
}
</style>

<!--CSS SIDEBAR -->
<style scoped>
.sidebar {
color: rgb(0, 0, 0);
    background-color: var(--sidebar-bg-color);
    float: left;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    bottom: 0;
    padding: 0.5em;
    transition: 0.1s ease;
    display: flex;
    flex-direction: column;
    box-shadow: rgb(0 0 0 / 15%) 1.95px 1.95px 2.6px;
}
.sidebar h1 {
  height: 2.5em;
}

/*ICONO BURGUER*/
.collapse-icon {
  position: absolute;
  bottom: 1em;
  padding: 0.55em;
  color: rgba(0, 0, 0, 0.7);
  transition: 0.2s linear;
  background-color: #EA127E;
  color: white;
  border-radius: 200px;

}
.rotate-180 {
  transform: rotate(180deg);
  transition: 0.2s linear;
}
</style>
