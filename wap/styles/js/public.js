$(function() {
	setTimeout(function() {
		mui.init()
	}, 100)
	mui('body').on('tap', 'a', function() {
		document.location.href=this.href
	});
})