<template>
  <v-app-bar color="deep-black accent-4" dense dark>
    <v-app-bar-nav-icon></v-app-bar-nav-icon>
    <v-app-bar-title>
      <router-link to="/" tag="v-btn">Home</router-link>
      <router-link to="/Vuelos" tag="v-btn">Vuelos</router-link>
      <router-link to="/Resultado" tag="v-btn">Resultado</router-link>
    </v-app-bar-title>
  </v-app-bar>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style></style>
