$(document).ready(function(){
    var $win = $(window);
    $('div.background').each(function(){
        var $this = $(this);
        var scroll_speed = 1.5;
        $(window).scroll(function() {
            var bgScroll = 25 -(($win.scrollTop() - $this.offset().top)/ scroll_speed);
            var bgPosition = 'center '+ bgScroll + 'px';
            $this.css({ backgroundPosition: bgPosition });
        });
    });
});