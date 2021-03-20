(function($) {
	

	$("#contactForm").submit(function(e) {
		e.preventDefault();
	})

	tippy('#facebook-link, #facebook', {
        content: 'Facebook: rapidowalletglobal',
    });

    tippy('#twitter-link, #twitter', {
        content: 'Twitter: rapidowalletglobal',
    });
})(jQuery)