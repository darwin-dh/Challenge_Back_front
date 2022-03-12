import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)

export default new Vuex.Store({

    state: {
        objsVuelos: []
    },
    mutations: {
        obtenerDatos(state) {
            let data = window.localStorage.getItem("vuelos");
            if (data != null) {
                state.objsVuelos = JSON.parse(data);
            }
        },
        setvuelos(state,vuelos){
            state.objsVuelos=vuelos
        }
    },
    actions: {
        getVuelos(context) {
            context.commit('obtenerDatos')
        },
        guardarVuelos({ commit, state }, vuelos){
            localStorage.setItem("vuelos", JSON.stringify(vuelos));
            commit('setvuelos',vuelos)
            console.log("setvuelos",vuelos);
        }
    }
})
