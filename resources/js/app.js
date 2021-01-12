require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('estudiante-component', require('./components/EstudianteComponent.vue').default);
Vue.component('horario-component', require('./components/HorarioComponent.vue'));

Vue.component('docente-component', require('./components/DocenteComponent.vue').default);

const app = new Vue({
    el: '#app',
});
