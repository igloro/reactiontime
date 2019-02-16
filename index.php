<html>
<head>
	<link href="pub/css/style.css" rel="stylesheet" />
	<title>Reaction time</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

	<div id="app" v-bind:class="{ 'isGetready': isGetready, 'isReady': isReady }">
		<div id="inner">
			<div v-if="isStart" @click="startClick">Ready? Click here...</div>
			<div v-else>
				<div v-if="!isReady" @click="toearlyClick">
					Wait for a green color
				</div>
				<div v-else @click="readyClick">
					Click!
				</div>
			</div>
		</div>
		<div v-if="showStats" @click="resetStats">Last: {{ last }} Avg: {{average}}</div>
	</div>
</body>
<script src="pub/js/script.js"></script>
</html>