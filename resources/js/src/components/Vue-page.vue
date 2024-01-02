<template>
	<button @click="testClick" class="btn-name">
		Hello, {{ name }}
	</button>
</template>

<script>
import axios from "axios";

export default {
	name: "App",
	data() {
		return {
			name: "Кирилл"
		}
	},
	methods: {
		testClick() {
			this.name = "Кирюха";
			// axios.get("/posts/create");
		}
	}
}
</script>

<style lang="sass">
body
	color: red
</style>
