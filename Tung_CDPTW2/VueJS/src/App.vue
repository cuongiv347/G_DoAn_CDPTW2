<template>
	<div id="app">
	
		<comp-module8 />
	
		<h1>{{ msg }}</h1>

		<comp-module9 />

		<comp-module10 />

		<comp-module11 />

	</div>
</template>

<script>

import CompModule8 from './components/module8.vue';
import CompModule9 from './components/module9.vue';
import CompModule10 from './components/module10.vue';
import CompModule11 from './components/module11.vue';
export default {
	name: 'app',
	data () {
		return {
		
		}
	},
	components: {
		CompModule8,
		CompModule9,
		CompModule10,
		CompModule11
	}
}
</script>

<style>

</style>
