import Vue from 'vue'
import VueRouter from 'vue-router'
import Resultado from './views/Resultado_Vuelos.vue'
import Vuelos from './views/Vuelos.vue'
import home from './views/home.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        component: home
      },
  {
    path: '/Vuelos',
    name: 'Vuelos',
    component: Vuelos
  },
  {
    path: '/Resultado',
    name: 'Resultado',
    component:Resultado

  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router