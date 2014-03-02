var allNavLi;
var totalHOffset;
var myPlayer;
$(document).ready(function(){
	myPlayer = videojs('my_video_1');
	var s = skrollr.init({
		// forceHeight: false
	});
	// skrollr.menu.init(s);

    allNavLi = $(".navPoints li");
						
	var f = $("#firstScreen").offset().top;
	var s = $("#secondScreen").offset().top;
	var t = $("#thirdScreen").offset().top;
	var fo = $("#fourthScreen").offset().top;
	var footer = $("#footer").offset().top;
	var totalH = $(document).height();
	totalHOffset = totalH - $(window).height();
	$(window).scroll(function() {
		var wst = $(window).scrollTop();
		testOffsetTop(wst);
	});

	$("#videoPopup").click(function(e){
		if(e.target == $(this)[0])
		{
			$("#videoPopup").hide();
			myPlayer.pause();
		}
	});

	$("#playVideoBtn").click(function(e){
		$("#videoPopup").show();
		myPlayer.play();
	});

	$('#androidDownloadBtn').click(function(e){
		$("#androidDownloadBlock").toggle();
		$("#androidDownloadBlock").css("left",$("#androidDownloadBtn").offset().left);
		var h = $("#androidDownloadBlock").height();
		var t = 446 - (h-92);
		$("#androidDownloadBlock").css("top",t);
		e.preventDefault();
	});

	$("#androidDownloadBlockCloseBtn").click(function(e){
		$("#androidDownloadBlock").hide();
		e.preventDefault();
	});

	var wst = $(window).scrollTop();
	testOffsetTop(wst);
});
// videojs("my_video_1").ready(function(){
//   myPlayer = this;

//   // EXAMPLE: Start playing the video.
//   // myPlayer.play();

// });

function testOffsetTop(wst)
{
	if(wst>=0 && wst<917)
	{
		updateNav(0);
    }

	if(wst>900 && wst<1660)
	{
	  updateNav(1);
	}

	if(wst>1660 && wst<2430)
	{
	  updateNav(2);
	}

	if(wst>2430 && wst<3190)
	{
	  updateNav(3);
	}

	if(wst>=totalHOffset-50)
	{
	  updateNav(4);
	}
}
function updateNav(cur)
{
	if(allNavLi.index($(".current")) == cur)
	{
		return
	}
	allNavLi.removeClass();
	$(allNavLi[cur]).addClass("current");
}
