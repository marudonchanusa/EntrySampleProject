import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import colors from 'vuetify/es5/util/colors'
import 'vuetify/dist/vuetify.css'
import dashboard from './components/Dashboard.vue'
import setting from './components/Setting.vue'

Vue.use(VueRouter);
Vue.use(Vuetify, {
  theme: {
    primary: colors.blue.darken1, // #E53935
    secondary: colors.red.lighten4, // #FFCDD2
    accent: colors.indigo.base // #3F51B5
  }
})

const routes = [
  {path:'/',component:dashboard},
  {path:'/setting',component:setting}
];

const router = new VueRouter({
    routes
});

new Vue({
  el: '#app',
  render: h => h(App),
  router:router
})