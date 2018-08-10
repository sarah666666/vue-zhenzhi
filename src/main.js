// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import VueResource from 'vue-resource'
Vue.use(VueResource);
import './assets/css/base.css'
import './assets/css/contact.css'
import './assets/css/footer.css'
import './assets/css/header.css'
import './assets/css/index.css'
import './assets/css/outerShow.css'
import './assets/css/quoteSuccess.css'
import './assets/css/quote.css'
import './assets/css/weekShow.css'
import './font_zz/iconfont.css'
import './assets/css/animate.css'
import './assets/js/jquery-3.2.1.js'


let bus = new Vue();
Vue.prototype.bus = bus;

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
