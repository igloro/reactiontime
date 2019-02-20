<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link href="pub/css/style.css?v=022011" rel="stylesheet" />
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
				<div v-else @mousedown="readyClick">
					Click!
				</div>
			</div>
		</div>
		<div v-if="showStats" @mousedown="resetStats">Last: {{ last }} Avg: {{average}}</div>
	</div>
</body>
<script src="pub/js/script.js?v=022011"></script>
</html>