$(document).ready(function(){
    
    // Access Random Number Module
    var generateRand = new RandomNumber(2,30);
    var thisRand = generateRand.getFloat();
    console.log(thisRand);

    var scrollManager = new ScrollManager();

    $('body').css({
        height: $(window).height() * 2 + 'px'
    });

});

$(window).load(function(){

});
var checker = 0;

$(window).resize(function(){
	console.log('resize');

	if(window.matchMedia){
		var mq = window.matchMedia( "(min-width: 940px)" );
		var aMatch = mq.matches;

		if(checker == 0){
		    if(aMatch) {
		        return;
		    }
		    else{
		        console.log('mobile');
		        checker = 1;
		    }
		}
		else{
		    if(aMatch) {
		        console.log('desktop');
		       
		        checker = 0;
		    }
		    else{
		        return;
		    }
		}
	}
});

$(window).scroll(function(){

});