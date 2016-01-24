var StripeBilling = {
	init: function() {
		this.form = $('#billing-form');
		this.submitButton = this.form.find('input[type=submit]');

			var stripeKey = $('meta[name="publishable-key"]').attr('content');
			Stripe.setPublishableKey(stripeKey);

		this.bindEvents();

		}

	bindEvents: function() {

		this.form.on('submit', $.proxy(this.sendToken, this));

	}

	sendToken: function(event) {
		this.submitButton.val('Foo');
		Stripe.createToken(this.form, $.proxy(this.stripeResponseHandler, this))
		event.preventDefault();
	}
	

	
};

	stripeResponseHandler: function(status, response) {
		console.log(status, response);
	}

	StripeBilling.init();



})();

