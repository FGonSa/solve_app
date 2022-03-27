import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Formacion from '../views/Formacion.vue'
import BigData from '../views/BigData.vue'
import Ajustes from '../views/Ajustes.vue'
import ajustesPerfil from '../views/AjustesPerfil.vue'
import ajustesGeneral from '../views/AjustesGeneral.vue'
import cartaLlamada from '../views/ConsultasView.vue'
import gestionExpediente from '../views/GestionExpediente.vue'

const router = createRouter({
	history: createWebHistory(),
	routes: [
		{
			path: '/',
			component: Home
		},
		{
			path: '/expediente',
			component: () => import('../views/Expediente.vue')
		},
		{
			path: '/formacion',
			component: Formacion
		},
		{
			path: '/big-data',
			component: BigData
		},
		{
			path: '/ajustes',
			component: Ajustes
		},
		{
			path: '/ajustes/perfil',
			component: ajustesPerfil
		},
		{
			path: '/ajustes/general',
			component: ajustesGeneral
		},
		{
			path: '/expediente/carta-llamada',
			component: cartaLlamada
		},
		{
			path: '/expediente/gestion',
			component: gestionExpediente
		},
	],
})

export default router
