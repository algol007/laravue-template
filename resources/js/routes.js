import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Docs from './components/samples/Docs';
import Laracast from './components/samples/Laracast';
import News from './components/samples/News';

const router = new VueRouter({
	base: basepath,
	mode: "history",
	routes:[
		{
	      path: "/",
	      name: "Docs",
	      component: Docs,
	      props:{
	        'page': 'Docs',
	      }
    	},
    	{
	      path: "/laracast",
	      name: "Laracast",
	      component: Laracast,
	      props:{
	        'page': 'Laracast',
	      }
    	},
    	{
	      path: "/news",
	      name: "News",
	      component: News,
	      props:{
	        'page': 'News',
	      }
    	},
	]
});

export default router;