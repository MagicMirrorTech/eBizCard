

	function goToLink(link, name)	 {
		if (link.includes('@')) {
			var arg = email + '?' + subj + '&' + body;
			var url = 'mailto:' + arg;
		}
		else  if (link.includes('http')){
			var url = link;
		}
		else {die}

		echo(url);
		return window.location.href = url;
	}


// Get email and website divs
	var email = document.getElementById('emailDiv');
	var web = document.getElementById('webDiv');

	email.onclick = goToLink('danielbestdeal@gmail.com', 'Dan');
