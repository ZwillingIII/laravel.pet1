<template>
	<Header />
	<router-view></router-view>
</template>

<script>
import axios from "axios";
import VuePage from "@/src/components/Vue-page.vue";
import Header from "@/src/components/Header.vue";

export default {
	name: "App",
	components: {
		VuePage,
		Header
	},
}
</script>
