import "./bootstrap";
import Vue from 'vue';
import Routes from './routes.js';
import VueMeta from 'vue-meta'
import swal from 'sweetalert';
// import 'bootstrap/dist/css/bootstrap.css';

import App from './components/App';

Vue.use(VueMeta);

const app = new Vue({
	el:'#app',
	components: { App },
    router : Routes
});