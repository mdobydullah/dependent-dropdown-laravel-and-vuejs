require('./bootstrap');

window.Vue = require('vue');

Vue.component('dropdown-component', require('./components/DropdownComponent.vue').default);

const app = new Vue({
    el: '#app',
});
