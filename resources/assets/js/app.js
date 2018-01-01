
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy'

Vue.use(Buefy)

require('./manage')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
/*if (document.getElementById('custom-data')) {
  const el = document.getElementById('custom-data')
  const p = JSON.parse(el.dataset.rp)
  console.log(p)
}*/

 const app = new Vue({
    el: '#app',
    data: {
		auto_password: true,
		password_options: 'keep',
		permissionType: 'basic',
    permissionsSelected: [],
    rolesSelected: [],
    resource: '',
    crudSelected: ['create', 'read', 'update', 'delete']
		},

    created() {
      if (document.getElementById('custom-data-rp')) {
      const el = document.getElementById('custom-data-rp')
      const p = JSON.parse(el.dataset.rp)
      this.permissionsSelected = p 
      }
      if (document.getElementById('custom-data-ur')) {
      const el = document.getElementById('custom-data-ur')
      const r = JSON.parse(el.dataset.ur)
      this.rolesSelected = r 
      }
    },

		methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        }
      }
});
