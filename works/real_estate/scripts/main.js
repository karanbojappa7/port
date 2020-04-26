var typed = new Typed(".slogan", {
  strings: [ "Hello <span class='coloryellow'>There</span>", "We are here</span> to build your<span class='coloryellow'> dream house","With all the<span class='coloryellow'> Convience</span>","By a <span class='coloryellow'>Civil Engineer</span>" ],
   typeSpeed: 30,
		startDelay: 1500,
		backSpeed: 20,
		backDelay: 800,
		loop: true,
		loopCount: 5,
		showCursor: false,
		cursorChar: "|",
		attr: null,
		contentType: 'html',
		callback: function() {},
		preStringTyped: function() {},
		onStringTyped: function() {},
		resetCallback: function() {}
});