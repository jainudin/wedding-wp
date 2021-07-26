var timeLeft = newlyweds_countdown.timeLeft;
var duration = 1000;

function counterAnimate(type, value) {
	var first = Math.floor(value / 10);
	var last = value - first * 10;
	var seconds = jQuery('.countdown-' + type + '-digit > .countdown-digit');
	var secObjFirst = seconds.first();
	var secObjLast = seconds.next();

	var firstTop = secObjFirst.find('div.top');
	var firstBottom = secObjFirst.find('div.bottom');

	var lastTop = secObjLast.find('div.top');
	var lastBottom = secObjLast.find('div.bottom');

//        console.log(firstTop.html() + lastTop.html());

	if (firstTop.html() != first) {
		firstTop.css({'display': 'none'});
		firstTop.html((first ? first : '0')).stop(true, true).slideDown(duration / 2);

		firstBottom.stop(true, true).animate({'height': ''}, duration / 2, function () {
			firstBottom.html(firstTop.html());
			firstBottom.css({'display': 'block', 'height': ''});
			firstTop.hide().slideUp(10);
		});
	}

	if (lastTop.html() != last) {
		lastTop.css({'display': 'none'});
		lastTop.html((last ? last : '0')).stop(true, true).slideDown(duration / 2);

		lastBottom.stop(true, true).animate({'height': ''}, duration / 2, function () {
			lastBottom.html(lastTop.html());
			lastBottom.css({'display': 'block', 'height': ''});
			lastTop.hide().slideUp(10);
		});
	}
}

var interval = window.setInterval(function test() {
	if (timeLeft == 0) {
		window.clearInterval(interval);
		return;
	}

	timeLeft--;

	var w = Math.floor(timeLeft / (60 * 60 * 24 * 7));
	var tl = (timeLeft - (w * 7 * 24 * 60 * 60));
	var d = Math.floor(tl / (60 * 60 * 24));
	tl = (tl - (d * 24 * 60 * 60));
	var h = Math.floor(tl / (60 * 60));
	tl = (tl - (h * 60 * 60));
	var m = Math.floor(tl / 60);
	var s = tl - m * 60;

	counterAnimate('mins', m);
	counterAnimate('hours', h);
	counterAnimate('days', d);
	counterAnimate('weeks', w);
	counterAnimate('secs', s);
}, duration);
