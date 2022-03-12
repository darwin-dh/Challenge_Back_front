<template>
  <v-container>
    <v-form v-model="valid">
      <v-container>
        <v-row>
          <v-col cols="12" md="2">
            <v-text-field
              validate
              v-model="ciudadOrigen"
              label=" Ciudad de origen"
              required
            ></v-text-field>
          </v-col>

          <v-col cols="12" md="2">
            <v-text-field
              v-model="ciudadDestino"
              label=" Ciudad de destino"
              required
            ></v-text-field>
          </v-col>

          <v-col cols="12" md="2">
            <v-menu
              ref="calendarioRetorno"
              v-model="salida"
              :close-on-content-click="false"
              :return-value.sync="retorno"
              transition="scale-transition"
              offset-y
              min-width="auto"
            >
              <template v-slot:activator="{ on, attrs }">
                <v-text-field
                  v-model="salidaSelect"
                  label="Fecha de Salida"
                  prepend-icon="mdi-calendar"
                  readonly
                  v-bind="attrs"
                  v-on="on"
                ></v-text-field>
              </template>
              <v-date-picker v-model="salidaSelect" no-title scrollable>
                <v-spacer></v-spacer>
                <v-btn text color="primary"> Cancel </v-btn>
                <v-btn text color="primary"> OK </v-btn>
              </v-date-picker>
            </v-menu>
          </v-col>

          <v-col cols="12" sm="6" md="4">
            <v-menu
              ref="calendarioRetorno"
              v-model="retorno"
              :close-on-content-click="false"
              :return-value.sync="retorno"
              transition="scale-transition"
              offset-y
              min-width="auto"
            >
              <template v-slot:activator="{ on, attrs }">
                <v-text-field
                  v-model="retornoSelect"
                  label="Fecha de retorno"
                  prepend-icon="mdi-calendar"
                  readonly
                  v-bind="attrs"
                  v-on="on"
                ></v-text-field>
              </template>
              <v-date-picker v-model="retornoSelect" no-title scrollable>
                <v-spacer></v-spacer>
                <v-btn text color="primary"> Cancel </v-btn>
                <v-btn text color="primary"> OK </v-btn>
              </v-date-picker>
            </v-menu>
            <v-btn color="success" large @click="buscar()">Buscar destino</v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-form>
  </v-container>
</template>

<script>
import { mapActions, mapState } from "vuex";
export default {
  data: () => ({
    ciudadOrigen: "",
    ciudadDestino: "",
    retornoSelect: "",
    salidaSelect: "",
    fechaRetorno: "",
    //validate
    valid: false,
    origen: [(v) => !!v || "Campor obligatorio"],
    //array
    vuelos: [],
    //botones false
    salida: false,
    modal: false,
    retorno: false,
  }),
  methods: {
    buscar() {
      this.vuelos = {
        ciudadOrigen: this.ciudadOrigen,
        ciudadDestino: this.ciudadDestino,
        salidaSelect: this.salidaSelect,
        retornoSelect: this.retornoSelect,
      };

      const vuelos = this.vuelos;
      const localstore = this.$store.dispatch("guardarVuelos", vuelos);
      this.$router.push("/Resultado");
    },

    ...mapActions(["getVuelos"]),
  },
  computed: {
    ...mapState(["objsVuelos"]),
  },
  mounted() {
    this.getVuelos();
  },
};
</script>

<style></style>
