var app = new Vue({
	el: '#app',
	data: {
		isStart: true,
		isGetready: false,
		isReady: false,
		showStats: false,
		activeClass: 'active',
		notactiveClass: 'notactive',
		totalTime: 1000,
		timer: null,
		timer_size: 0,
		sum: 0,
		count: 0,
		average: 0,
		start_time: 0,
		last: 0,
	},
	methods: 
	{
		startClick: function () 
		{
			this.isStart = false;
			this.isGetready = true;
			this.isReady = false;
			this.startTimer();
		},
		startTimer: function() 
		{
			this.start_time = new Date().getTime();
			this.timer_size = Math.floor(Math.random() * 4000) + 1000;
			this.timer = setInterval(() => this.countdown(), this.timer_size);
		},
		countdown: function() 
		{
			this.triggerReady()
		},
		restartStart: function()
		{
			this.isStart = true;
			this.isReady = false;
			this.isGetready = false;
			this.average = Math.floor(this.sum / this.count);
		},
		resetStats: function()
		{
			this.sum = 0;
			this.count = 0;
			this.showStats = false;
		},
		triggerReady: function ()
		{
			this.isStart = false;
			this.isGetready = false;
			this.isReady = true;
			clearInterval(this.timer);
		},
		toearlyClick: function()
		{
			clearInterval(this.timer);
			this.restartStart();
		},
		readyClick: function ()
		{
			var end_time = new Date().getTime();
			clearInterval(this.timer);
			this.last = end_time - this.start_time - this.timer_size;				
			this.sum += this.last;
			this.count++;
			this.showStats = true;
			this.restartStart();
		}
	}

})