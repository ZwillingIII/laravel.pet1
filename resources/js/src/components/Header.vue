<script setup>

</script>

<template>
	<div class="nav-menu">
		<router-link to="/vue">Vue Главная</router-link>
		<router-link to="/vue/11">Vue 11</router-link>
		<router-link to="/vue-about">Vue О нас</router-link>
		<router-link to="/vue-name">Vue Имя</router-link>
	</div>
</template>

<style scoped lang="sass">
.nav-menu
	display: flex
	flex-direction: column
</style>
