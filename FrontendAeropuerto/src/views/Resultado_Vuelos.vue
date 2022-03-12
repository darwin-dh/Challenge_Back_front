<template>
  <v-container>
    <h1>Vuelos Disponibles</h1>
    <ResultadosVuelos :sendvuelos="vuelos" :res="objsVuelos" />
  </v-container>
</template>

<script>
import { mapState, mapActions } from "vuex";
import ResultadosVuelos from "../components/Pages/ResultadosVuelos.vue";
export default {
  name: "Resultados",
  components: {
    ResultadosVuelos,
  },
  methods: {
    ...mapActions(["getVuelosResult"]),
    ...mapActions(["getVuelos"]),
  },
  computed: {
    ...mapState(["vuelos"]),
    ...mapState(["objsVuelos"]),
  },
  mounted() {
    this.getVuelosResult();
    this.getVuelos();
  },
};
</script>

<style></style>
