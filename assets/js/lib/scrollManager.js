var ScrollManager = (function($,_){
    var ScrollManager = function(){
        this.scroll = {};
        var scrollCalculate = _.bind(this.scrollPos,this);
        $(window).on('scroll',scrollCalculate);
    };
    ScrollManager.prototype = {
        scrollPos: function(){
            this.scroll.X = $(window).scrollLeft();
            this.scroll.Y = $(window).scrollTop();
            console.log(this.scroll.Y);
        }
    };
    return ScrollManager;
})($,_);
