$(document).ready(function () {
	$(".side_tab").click(function () {
		$(".side_tab").removeClass("active");
		$(this).addClass("active");
	});
});

$(document).ready(function () {
	var email_regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/
	$('#email-input').bind('input propertychange', function () {
		if (email_regex.test($(this).val())) {
			$(this).css({ 'border-color': 'green' });
			$('#contact-submit-button').prop("disabled", false);
		} else {
			$(this).css({ 'border-color': 'red' });
			$('#contact-submit-button').prop("disabled", true);
		}
	});
});

$(document).on('keyup', '#message-input', function (e) {
	this.style.overflow = 'hidden';
    var $old_height = this.style.height;
    this.style.height = 0;
    if (this.scrollHeight <= 100) {
        this.style.height = this.scrollHeight + 'px';
    } else {
        this.style.height = $old_height;
    }
});

function expand_text_area(id) {
	var $element = $('#'+id);
	
	$element.addEventListener('keyup', function () {
		this.style.overflow = 'hidden';
		var $old_height = this.style.height;
		this.style.height = 0;
		if (this.scrollHeight <= 100) {
			this.style.height = this.scrollHeight + 'px';
		} else {
			this.style.height = $old_height;
		}
	}, false);
}

