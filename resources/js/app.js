/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Make Vue and Turbolinks work together.
 *
 * @link https://github.com/jeffreyguenther/vue-turbolinks
 */

import TurbolinksAdapter from 'vue-turbolinks';

Vue.use(TurbolinksAdapter)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('v-datetimepicker', require('./components/DateTimePicker.vue').default);
Vue.component('v-dropdown', require('./components/Dropdown.vue').default);
Vue.component('v-example', require('./components/Example.vue').default);
Vue.component('v-flash', require('./components/Flash.vue').default);
Vue.component('v-modal', require('./components/Modal.vue').default);
Vue.component('v-tabs', require('./components/Tabs.vue').default);
Vue.component('v-toggle-password', require('./components/TogglePassword.vue').default);

Vue.directive('submit', require('./directives/Submit.js'));
Vue.directive('focus', require('./directives/Focus.js'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

document.addEventListener('turbolinks:load', () => {
    const app = new Vue({
        el: '#app',

        data: {
            isModalOpen: false,
            isNavOpen: false
        }
    });
});
