<template>
	<button @click="testClick" class="btn-name">
		Hello, {{ name }}
	</button>
	<div v-if="boolAxios">
		{{ successAxiosMessage }}
	</div>
</template>

<script>
import axios from "axios";

export default {
	name: "App",
	data() {
		return {
			name: "Кирилл",
			boolAxios: false,
			errorAxios: "",
			successAxiosMessage: "",
		}
	},
	methods: {
		testClick() {
			axios.get("/posts/create")
				.then((data) => {
					this.boolAxios = true;
					this.successAxiosMessage = data.data.message;
				})
				.catch((err) => {
					this.errorAxios = err;
				});
		}
	},
	updated() {
		console.log("params: ", this.$route.params.id);
	},
	mounted() {
		console.log("params: ", this.$route.params.id);
	}
}
</script>

<style lang="sass">
body
	color: red
</style>
