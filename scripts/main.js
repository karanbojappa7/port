document.addEventListener("DOMContentLoaded", function() {
    let Nav = document.querySelector("#Nav");
    let container = document.querySelector(".container");
    
    container.addEventListener("click", function() {
        Nav.classList.toggle("change");
    })
   })
function myFunction(x) {
    x.classList.toggle("change");
    
}


document.addEventListener("DOMContentLoaded", function() {
    let lis = document.querySelector(".lis");
    let container = document.querySelector(".container");
    
    container.addEventListener("click", function() {
        lis.classList.toggle("changes");
    })
   })
function myFunctions(x) {
    x.classList.toggle("changes");
    
}






var typed = new Typed(".slogan", {
  strings: [ "I do Web <span class='bluecol'>Desigining</span>","I do Web <span class='bluecol'>Desigining</span>", "I do Web <span class='bluecol'> Developing</span>","I'm a Full-Stack Web<span class='bluecol'> Developer</span>","I create Responsive <span class='bluecol'>Designs...</span>" ],
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





















