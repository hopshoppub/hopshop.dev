var StripeBilling = {
	init: function() {
		this.form = $('#billing-form');
		this.submitButton = this.form.find('input[type=submit]');

		var stripeKey = $('meta[name="publishable-key"]').attr('content');
		Stripe.setPublishableKey(stripeKey);
	}
}; 

StripeBilling.init();