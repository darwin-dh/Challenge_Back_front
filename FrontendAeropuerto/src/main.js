import Vue from 'vue';
import App from './App.vue';
import vuetify from './plugins/vuetify'
import '@babel/polyfill'
import 'roboto-fontface/css/roboto/roboto-fontface.css'
import '@fortawesome/fontawesome-free/css/all.css'
import store from './store/store'
import router from './router/'
new Vue({
  router,
  vuetify,
  store,
  render: (h) => h(App)
}).$mount('#app');