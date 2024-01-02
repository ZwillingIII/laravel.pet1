import Home from "@/src/pages/Home.vue";
import About from "@/src/pages/About.vue";
import Name from "@/src/pages/Name.vue";

const routes = [
	{
		path: '/vue',
		component: Home,
	},
	{
		path: "/vue-about",
		component: About,
	},
	{
		path: "/vue-name",
		component: Name,
	}
];

export default routes;
