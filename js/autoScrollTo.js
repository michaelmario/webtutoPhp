let scrollY = 0;
let distance = 40;
let speed = 24;
function autoScrollTo(el) {
	let currentY = window.pageYOffset;
	let targetY = document.getElementById(el).offsetTop;
	let bodyHeight = document.body.offsetHeight;
	let yPos = currentY + window.innerHeight;
	let animator = setTimeout('autoScrollTo(\''+el+'\')',24);
	if(yPos > bodyHeight){
		clearTimeout(animator);
	} else {
		if(currentY < targetY-distance){
		    scrollY = currentY+distance;
		    window.scroll(0, scrollY);
	    } else {
		    clearTimeout(animator);
	    }
	}
}
function resetScroller(el){
	let currentY = window.pageYOffset;
    let targetY = document.getElementById(el).offsetTop;
	let animator = setTimeout('resetScroller(\''+el+'\')',speed);
	if(currentY > targetY){
		scrollY = currentY-distance;
		window.scroll(0, scrollY);
	} else {
		clearTimeout(animator);
	}
}