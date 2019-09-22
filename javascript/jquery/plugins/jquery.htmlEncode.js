;(function($){
	var htmlEncodeDiv = null;

	$.htmlEncode = function (text) {
		if (text === null) {
			return null;
		}

		if (text === '') {
			return '';
		}

		if (htmlEncodeDiv === null) {
			htmlEncodeDiv = $('<div></div>');
		}

		htmlEncodeDiv.text(text);
		var html = htmlEncodeDiv.html();

		html = html.replace(/"/g, '&quot;');

		return html;
	}
})(jQuery);
