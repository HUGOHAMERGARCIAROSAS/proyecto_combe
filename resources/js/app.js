/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');
window.Bus = new Vue();


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('crear-compra-component', require('./components/operaciones/CompraComponent.vue').default);
Vue.component('facturacion-detalle-modal-compra-component', require('./components/operaciones/FacturacionDetalleModalCompraComponent.vue').default);


Vue.component('ingreso-productos-component', require('./components/ingreso_productos/IngresoComponent.vue').default);
Vue.component('detalle-modal-ingreso-component', require('./components/ingreso_productos/DetalleModalIngresoComponent.vue').default);


Vue.component('salida-productos-component', require('./components/salida_productos/SalidaComponent.vue').default);
Vue.component('detalle-modal-salida-component', require('./components/salida_productos/DetalleModalSalidaComponent.vue').default);
//COTIZACIONES

Vue.component('cotizaciones-create-component', require('./components/cotizaciones/CotizacionesComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});