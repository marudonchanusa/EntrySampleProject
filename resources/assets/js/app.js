require('./bootstrap');
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: function () {
    	return {
    		msg:"this is ok"
    	}
    }
});