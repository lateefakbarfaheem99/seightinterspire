
;(function($){

AjaxDataProvider = function (options) {
	var self = this;

	self.options = $.extend({}, options);

	if (typeof self.options.process != 'function') {
		self.options.process = false;
	}

	var _flushQueues = function () {
		self.successQueue = [];
		self.errorQueue = [];
	};


	self.flush = function () {
		_flushQueues();
		self.busy = false;
		self.result = null;
		if (typeof self.options.flush == 'function') {
			self.options.flush();
		}
	};

	self.flush();

	if (typeof self.options.result != 'undefined') {
		self.result = self.options.result;
	}


	var _dispatch = function () {
		self.busy = true;

		// inherit options from original object creation; but some will be overridden completely below
		var options = $.extend({}, self.options);

		// success handler for internal ajax request
		options.success = function (data) {
			if (self.options.process) {
				data = self.options.process(data);
				if (typeof data == 'undefined') {
					data = null;
				}
			}
			self.result = data;

			var queue;
			if (data === null) {
				queue = self.errorQueue;
			} else {
				queue = self.successQueue;
			}

			for (var i = 0; i < queue.length; i++) {
				queue[i](data, true);
			}

			self.busy = false;
			_flushQueues();
		};

		// error handler for internal ajax request
		options.error = function () {
			var queue = self.errorQueue;
			for (var i = 0; i < queue.length; i++) {
				queue[i]();
			}

			self.busy = false;
			_flushQueues();
		};

		// fire the actual ajax request
		$.ajax(options);
	};

	self.get = function (success, options) {
		if (typeof success == 'undefined') {
			var success = false;
		}

		options = $.extend({}, options);

		if (self.result !== null) {
			// server response has already been received and stored; immediately call the success callback and return
			if (success) {
				success(self.result, false);
			}
			return AjaxDataProvider.RESULT_IMMEDIATE;
		}

		if (typeof options.loading == 'function') {
			// whether we're going into a queue or not, call the provided loading callback
			options.loading();
		}

		// add the provided success/error callbacks to our queues
		if (success) {
			self.successQueue.push(success);
		}

		if (typeof options.error == 'function') {
			self.errorQueue.push(options.error);
		}

		if (self.busy) {
			// alread waiting on server response
			return AjaxDataProvider.RESULT_QUEUED;
		}

		_dispatch();
		return AjaxDataProvider.RESULT_AJAX;
	};
};

AjaxDataProvider.RESULT_IMMEDIATE = 0;
AjaxDataProvider.RESULT_AJAX = 1;
AjaxDataProvider.RESULT_QUEUED = 2;

})(jQuery);
