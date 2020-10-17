// Additional polyfills
import 'custom-event-polyfill'
import 'url-polyfill'

import Vue from 'vue'
import App from './App'
import router from './router'

import BootstrapVue from 'bootstrap-vue'

import globals from './globals'
//import Popper from 'popper.js'

// Required to enable animations on dropdowns/tooltips/popovers
Popper.Defaults.modifiers.computeStyle.gpuAcceleration = false

Vue.config.productionTip = false

Vue.use(BootstrapVue)
import VS2 from 'vue-script2'
Vue.use(VS2)
import wysiwyg from "vue-wysiwyg";
Vue.use(wysiwyg, {}); // config is optional. more below
import styles from 'vue-wysiwyg/dist/vueWysiwyg.css'

import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
// Global RTL flag
Vue.mixin({
  data: globals
})

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

