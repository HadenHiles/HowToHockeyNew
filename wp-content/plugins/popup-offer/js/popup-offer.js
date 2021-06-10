(($) => {
    var offerClosed = getCookie("offer_closed");
    $(document).ready(() => {
        $popupOffer = $('#popup-offer');
        // if ($popupOffer.length == 1 && !offerClosed) {
        //     setTimeout(() => {
        //         $popupOffer.removeClass('hide');
        //     }, 2000);
        // }

        $('#popup-offer-close-btn').click((e) => {
            e.preventDefault();
            setCookie("offer_closed", true, 1);
            $popupOffer.addClass('hide');
        });

        $('.popup-offer-overlay').click((e) => {
            setCookie("offer_closed", true, 1);
            $popupOffer.addClass('hide');
        });

        $('#open-popup-offer, a[href="#open-popup-offer"]').on('click', (e) => {
            e.preventDefault();
            $popupOffer.removeClass('hide');
        });
    });
})(jQuery);

function setCookie(name, value, hours) {
	var expires = "";
	if (hours) {
		var date = new Date();
		date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
		expires = "; expires=" + date.toUTCString();
	}
	document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}
function eraseCookie(name) {
	document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}