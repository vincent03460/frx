if ($(".lookvideobtn").length>0) {
	$(".lookvideobtn").live("click",function(){
		var videoname = $(this).attr("videoname");
		var p2inner = $(this).parent().parent().find(".p2").text();
		var p3inner = $(this).parent().parent().find(".p3").text();

		var newdivceng = $("<div class='videoiframecengbg' id='videoiframecengbg'></div>");

		$("body").append(newdivceng);
		var iframediv = $("<div class='videoiframeinner'></div>");
		iframedivleft=(document.documentElement.clientWidth-521)/2+document.documentElement.scrollLeft+"px";
		iframediv.css({
			"left":iframedivleft,
			"top":150
		})

		var iframecontdiv = $("<div class='videoiframeinner_cont'></div>");
		iframecontdiv.appendTo(iframediv);


		var titdiv = $("<div class='videoiframeinner_tit'></div>");
		titdiv.appendTo(iframecontdiv);

		var titdiv_p1 = $("<p class='videoiframeinner_tit_p1'>"+p2inner+"</p>")
		titdiv_p1.appendTo(titdiv);
		var titdiv_gbbtn = $("<div class='videoiframeinner_tit_gbbtn' >X 关闭</div>")
		titdiv_gbbtn.appendTo(titdiv);

		var iframediv_d2 = $("<div class='videoiframeinner_videowin'><iframe src='http://www.bfsforex.com/Public/Front/video/indexvideo/"+videoname+".html' scrolling='no' width='448px' height='323px' frameborder='0'></iframe></div>")
		iframediv_d2.appendTo(iframecontdiv);

		//var iframediv_jsd3 = $("<div class='videoiframeinner_jieshaod3'>"+p3inner+"</div>");
		//iframediv_jsd3.appendTo(iframecontdiv);

		$("body").append(iframediv);

	})

};
$(".videoiframeinner_tit_gbbtn").live("click",function(){
	$("#videoiframecengbg").remove();
	$(".videoiframeinner").remove();
})
