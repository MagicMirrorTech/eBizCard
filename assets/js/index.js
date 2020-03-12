//test to confirm params.js & index.js are loading properly
// console.log(page);



function qr() {			//	Open QR Code
	document.getElementById('qrImg').style.display = "block";
}

function closeQr() {	// Open QR Code
	document.getElementById('qrImg').style.display = "none";
}

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
