(function($) {

	'use-strict'

	toastr.options.positionClass = 'toast-bottom-right';

	$("#contactForm").submit(function(e) {
		e.preventDefault();

		$.loadingSpinner();
		const data = {};
		axios.post('/api/contact', data)
		.then(response => {
			$.removeLoadingSpinner();
		})
		.catch(err => {
			console.log(err);
			$.removeLoadingSpinner();
		})
	})

	$("#loginForm").submit(function(e) {

		e.preventDefault();
		$.loadingSpinner();

		axios.post('/login', $(this).serialize())
		.then(response => {
			location.href = '/';
		})
		.catch(err => {
			toastr.info("Username Or Password not matched");
		})
		.finally(() => {
			$.removeLoadingSpinner();
		});
	})

	$("#registerForm").submit(function(e) {

		e.preventDefault();
		$.loadingSpinner();

		axios.post('/register', $(this).serialize())
		.then(response => {
			if (response.status == 201) {
				alert("Account Created");
				location.href = '/';
			}
		})
		.catch(err => {
			toastr.info("Account not Created");
		})
		.finally(() => {
			$.removeLoadingSpinner();
		});
	})

	tippy('#facebook-link, #facebook', {
        content: 'Facebook: rapidowalletglobal',
    });

    tippy('#twitter-link, #twitter', {
        content: 'Twitter: rapidowalletglobal',
    });
})(jQuery)