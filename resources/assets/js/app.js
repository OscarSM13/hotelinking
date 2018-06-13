
require('./bootstrap');

window.Vue = require('vue');


/*
    Aqui creo los componentes que voy a utilizar de vue
*/
Vue.component('create-cupon-component', require('./components/CreateCuponComponent.vue'));
Vue.component('validate-cupon-component', require('./components/ValidateCuponComponent.vue'));

const app = new Vue({
    el: '#app'
});
