<template>
	<div>
		<transition name="fade" mode="out-in">
		  <router-view/>
		</transition>

		<div class="links">
		    <router-link to="/">Docs</router-link>
		    <router-link to="/laracast">Laracasts</router-link>
		    <router-link to="/news">News</router-link>
		</div>
	</div>
</template>
<script>
	export default{

	}
</script>