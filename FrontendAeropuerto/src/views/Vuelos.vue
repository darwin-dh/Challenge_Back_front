<template>
  <v-container>
    <h1>Vuelos</h1>
    <buscardorTickets />
  </v-container>
</template>

<script>
import buscardorTickets from "../components/Pages/buscadorTickests.vue";
export default {
  name: "Vuelos",
  components: {
    buscardorTickets,
  },
};
</script>

<style></style>
