//test to confirm params.js & index.js are loading properly
// console.log(page);



var w = window.screen.width; // Get screen size
var h = window.innerHeight;

var agent = navigator.userAgent; // Get Device Info
var platform = navigator.platform; // Get Device Info



agent = agent.split(' ');
agent = agent.join();

function rev() {			//	Google Review Link
	window.open(page.reviewLink);
}

function goToVcard(){ // Contact Card
	window.open(page.cCard);
}

function message() { //	Mobile Phone Num
	let para = 'tel:'
	window.open(para + page.phone.mobile);
}


function call() { //	Mobile Phone Num
	let para = 'tel:'
	window.open(para + page.phone.biz);
}

function goToEmail(){ // Personal Info
	//Do not edit
	var subj = 'subject=Introduction';
	var body = 'body=Hi ' + page.name + ', Look forward to connecting.';
	var erl = page.email+'?'+subj+'&'+body;

	window.open("mailto:"+erl);
}


function goToWeb(){		// Website
	 window.open(page.website);
}

function goToAdr(){		//	Business Address
	window.open(reviewLink);
}


function fb() {		// Facebook
	window.open(page.socialLinks.fb);
}
function insta() {		// Facebook
	window.open(page.socialLinks.instagram);
}
function blog() {		// Facebook
	window.open(page.socialLinks.blog);
}
