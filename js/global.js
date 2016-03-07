require.config({
	"baseUrl": "wp-content/themes/kafkasummit/js",
	"paths": {
		"jquery": "vendor/jquery/jquery.min"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
