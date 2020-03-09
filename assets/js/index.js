// Get screen size

var w = window.innerWidth;
var h = window.innerHeight;

var agent = navigator.userAgent;
var platform = navigator.platform;

agent = agent.split(' ');
agent = agent.join();



function goToV(){
	window.open('../../dan/dan_h.ics');
	alert(agent);
	if (w < 500 && agent.indexOf('OS') > -1 ) {
		window.open('../../dan/dan_h.ics');
	}
	else {
		window.open('../../dan/dan_h.vcf');
	}
}

function goToW(){
	 window.open("https://www.bestdealdenver.com");
}

function goToE(){
	//Edit
	var name = 'Dan';
	var email = 'danielbestdeal@gmail.com';

	//Do not edit
	var subj = 'subject=Introduction';
	var body = 'body=Hi ' + name + ', Look forward to connecting.';
	var url = email+'?'+subj+'&'+body;

	window.open("mailto:"+url);
}

function goToA(){
	window.open('https://goo.gl/maps/Mn7i59tMc1LN1BvR9');
}




//
// 	function goToLink(link, name)	 {
// 		if (link.includes('@')) {
// 			var arg = email + '?' + subj + '&' + body;
// 			var url = 'mailto:' + arg;
// 		}
// 		else  if (link.includes('http')){
// 			var url = link;
// 		}
// 		else {die}
//
// 		echo(url);
// 		return window.location.href = url;
// 	}
//
//
// // Get email and website divs
// 	var email = document.getElementById('emailDiv');
// 	var web = document.getElementById('webDiv');
//
// 	email.onclick = goToLink('danielbestdeal@gmail.com', 'Dan');
