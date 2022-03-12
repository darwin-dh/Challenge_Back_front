<template>
  <v-app app>
    <main>
      <Header />
      <router-view />
    </main>
  </v-app>
</template>

<script>
import Header from "./components/seccion_Header/Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
};
</script>

<style></style>
