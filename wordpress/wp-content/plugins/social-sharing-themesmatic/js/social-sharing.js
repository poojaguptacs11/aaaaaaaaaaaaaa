// social sharing buttons
// facebook share
jQuery(document).ready(function($){
    $.fbShare = function() { 
        var urlFb = location.href;
	    var titleFb = document.title;
	    var fbShareHeight = window.innerHeight / 2 - 225;
		var fbShareWidth = window.innerWidth / 2 - 325;
	    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(urlFb)+'&t='+encodeURIComponent(titleFb),'facebookShare','resizable=yes,width=650,height=450,top='+fbShareHeight+',left='+fbShareWidth);
    }
    $(".share-facebook").click(function(){
        $.fbShare();
    });
});
//twitter share
jQuery(document).ready(function($){
    $.tweetShare = function() { 
        var urlTweet = location.href;
	    var titleTweet = document.title;
	    var tweetHeight = window.innerHeight / 2 - 225;
		var tweetWidth = window.innerWidth / 2 - 325;
	    window.open('http://twitter.com/share?url='+encodeURIComponent(urlTweet)+'&text='+encodeURIComponent(titleTweet),'twitterShare','resizable=yes,width=650,height=450,top='+tweetHeight+',left='+tweetWidth);
    }
    $(".share-twitter").click(function(){
        $.tweetShare();
    });
});
//pinterest share
jQuery(document).ready(function($){
    $.pinShare = function() { 
        var urlPin = location.href;
	    var titlePin = document.title;
		var pinShareHeight = window.innerHeight / 2 - 225;
		var pinShareWidth = window.innerWidth / 2 - 350;
		if ( $('img').hasClass('size-shop_single') ) {
	    	var imagePin = $('.size-shop_single').attr('src');
	    } else {
			var imagePin = $('.post img').attr('src');
	    }
	    window.open('http://pinterest.com/pin/create/button/?url='+encodeURIComponent(urlPin)+'&amp;media='+encodeURIComponent(imagePin)+'&amp;description='+encodeURIComponent(titlePin), 'pinterestShare', 'resizable=yes,width=700,height=450,top='+pinShareHeight+',left='+pinShareWidth);
    }
    $(".share-pinterest-p").click(function(){
        $.pinShare();
    });
});
//google plus share
jQuery(document).ready(function($){
    $.googleShare = function() { 
        var urlGplus = location.href;
        var urlGplusHeight = window.innerHeight / 2 - 275;
		var urlGplusWidth = window.innerWidth / 2 - 175;
		window.open('https://plus.google.com/share?url='+encodeURIComponent(urlGplus), 'googleShare', 'resizable=yes,width=350,height=550,top='+urlGplusHeight+',left='+urlGplusWidth);
    }
    $(".share-google-plus").click(function(){
        $.googleShare();
    });
});
//linkedin share
jQuery(document).ready(function($){
    $.linkedinShare = function() { 
        var urlLinked = location.href;
	    var titleLinked = document.title;
	    var linkedinShareHeight = window.innerHeight / 2 - 225;
		var linkedinShareWidth = window.innerWidth / 2 - 325;
	    window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url='+encodeURIComponent(urlLinked)+'&title='+encodeURIComponent(titleLinked),'linkedinShare','resizable=yes,width=650,height=450,top='+linkedinShareHeight+',left='+linkedinShareWidth);
    }
    $(".share-linkedin").click(function(){
        $.linkedinShare();
    });
});
http://www.tumblr.com/share/link?url=www.google.com&name=Google&description=something
//Tumblr share
jQuery(document).ready(function($){
    $.tumblrShare = function() { 
        var urlTumblr = location.href;
        var titleTumblr = document.title;
	    var tumblrShareHeight = window.innerHeight / 2 - 225;
		var tumblrShareWidth = window.innerWidth / 2 - 325;
	    window.open('http://www.tumblr.com/share/link?url='+encodeURIComponent(urlTumblr)+'&name='+encodeURIComponent(titleTumblr)+'&description'+encodeURIComponent(titleTumblr),'tumblrShare','resizable=yes,width=650,height=450,top='+tumblrShareHeight+',left='+tumblrShareWidth);
    }
    $(".share-tumblr").click(function(){
        $.tumblrShare();
    });
});
//VK share
jQuery(document).ready(function($){
    $.vkShare = function() { 
        var urlVk = location.href;
	    var vkShareHeight = window.innerHeight / 2 - 225;
		var vkShareWidth = window.innerWidth / 2 - 325;
	    window.open('https://vk.com/share.php?url='+encodeURIComponent(urlVk),'vkShare','resizable=yes,width=650,height=450,top='+vkShareHeight+',left='+vkShareWidth);
    }
    $(".share-vk").click(function(){
        $.vkShare();
    });
});
//Reddit share
jQuery(document).ready(function($){
    $.redditShare = function() { 
        var urlReddit = location.href;
	    var redditShareHeight = window.innerHeight / 2 - 225;
		var redditShareWidth = window.innerWidth / 2 - 450;
	    window.open('https://www.reddit.com/submit?url='+encodeURIComponent(urlReddit),'redditShare','resizable=yes,width=850,height=450,top='+redditShareHeight+',left='+redditShareWidth);
    }
    $(".share-reddit-alien").click(function(){
        $.redditShare();
    });
});

//Stumbleupon share
jQuery(document).ready(function($){
    $.stumbleuponShare = function() { 
        var urlStumbleupon = location.href;
        var titleStumbleupon = document.title;
	    var stumbleuponShareHeight = window.innerHeight / 2 - 225;
		var stumbleuponShareWidth = window.innerWidth / 2 - 325;
	    window.open('http://www.stumbleupon.com/submit?url='+encodeURIComponent(urlStumbleupon)+'&amp;title='+encodeURIComponent(titleStumbleupon),'stumbleuponShare','resizable=yes,width=650,height=450,top='+stumbleuponShareHeight+',left='+stumbleuponShareWidth);
    }
    $(".share-stumbleupon").click(function(){
        $.stumbleuponShare();
    });
});

//Digg share
jQuery(document).ready(function($){
    $.diggShare = function() { 
        var urlDigg = location.href;
	    var diggShareHeight = window.innerHeight / 2 - 225;
		var diggShareWidth = window.innerWidth / 2 - 325;
	    window.open('http://www.digg.com/submit?url='+encodeURIComponent(urlDigg),'diggShare','resizable=yes,width=650,height=450,top='+diggShareHeight+',left='+diggShareWidth);
    }
    $(".share-digg").click(function(){
        $.diggShare();
    });
});

//Email share
jQuery(document).ready(function($){
    $.emailShare = function() { 
        var urlMail = location.href;
	    var titleMail = document.title;
	    location.href = 'mailto:?subject='+encodeURIComponent(titleMail)+'&body=Thought%20you%20might%20like%20this:%20'+encodeURIComponent(urlMail);
    }
    $(".share-envelope").click(function(){
        $.emailShare();
    });
});

//Xing share
jQuery(document).ready(function($){
    $.xingShare = function() { 
        var urlXing = location.href;
	    var xingShareHeight = window.innerHeight / 2 - 225;
		var xingShareWidth = window.innerWidth / 2 - 325;
	    window.open('https://login.xing.com/continue?application_name=XING+Share&dest_url='+encodeURIComponent(urlXing),'xingShare','resizable=yes,width=650,height=450,top='+xingShareHeight+',left='+xingShareWidth);
    }
    $(".share-xing").click(function(){
        $.xingShare();
    });
});

jQuery(document).ready(function($) {
	$("#tm-sharing-expand").click(function() {
		$('.tm-sharing-wrapper').addClass('display');
	});
});

jQuery(document).ready(function($) {
	$('#tm-sharing-wrapper').on('click', function (e) {
	    if (e.target.id == "tm-sharing-wrapper") {
	        $('.tm-sharing-wrapper').removeClass('display');
	    }
	});
});

jQuery(document).ready(function($) {
	$('.tm-close-sharing').click(function() {
		$('.tm-sharing-wrapper').removeClass('display');
	});
});