import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)

export default new Vuex.Store({

    state: {
        objsVuelos: [],
        vuelos: []
    },
    mutations: {
        //get data
        obtenerDatos(state) {
            let data = window.localStorage.getItem("vuelos");
            if (data != null) {
                state.objsVuelos = JSON.parse(data);
            }
        },
        obtenerVuelos(state) {

            const apiVuelos = async () => {
                try {
                    const res = await fetch("/js/vuelos.json")
                    const datos = await res.json()
                    console.log(datos);
                    state.vuelos = datos
                } catch (error) {
                    console.log(datos);
                }
            }
            apiVuelos()
        },
        //setter
        setvuelos(state, vuelos) {
            state.objsVuelos = vuelos
        }
    },
    actions: {
        //get
        getVuelosResult(context) {
            context.commit('obtenerVuelos')
        },

        getVuelos(context) {
            context.commit('obtenerDatos')
        },
        guardarVuelos({ commit, state }, vuelos) {
            localStorage.setItem("vuelos", JSON.stringify(vuelos));
            commit('setvuelos', vuelos)

        }
    }
})
