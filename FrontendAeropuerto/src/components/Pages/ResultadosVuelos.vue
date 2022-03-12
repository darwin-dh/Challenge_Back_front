<template>
  <div>
    <v-row>
      <v-col cols="12" md="2" v-for="datos of res" :key="datos.id">
        <v-text-field disabled :label="datos"></v-text-field>
      </v-col>
    </v-row>
    <hr />
    <v-simple-table>
      <thead>
        <tr>
          <td>Aerolínea</td>

          <td>Precio</td>

          <td>Numero de escalas</td>
          <td>Duración vuelo</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in sendvuelos" :key="item.id">
          <td>{{ item.aerolínea }}</td>
          <td>{{ item.precio }}</td>
          <td>{{ item.numeroescalas }}</td>
          <td>{{ item.duraciónvuelo }}</td>
        </tr>
      </tbody>
    </v-simple-table>
  </div>
</template>

<script>
export default {
  name: "resultadosVuelos",
  props: ["sendvuelos", "res"],
};
</script>

<style scoped>
tr td {
  padding: 20px !important;
  font-size: 1rem !important;
}
thead {
  background: rgba(14, 14, 14, 0.856);
  color: #fff;
}
tbody {
  background: rgba(232, 233, 238, 0.705);
  color: #000 !important;
}
</style>
