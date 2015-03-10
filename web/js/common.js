$(function(){
	$("#login_username").focus(function(){
		$(this).val('');
	})
	$("#login_username").blur(function(){
		if($(this).val()==''||$(this).val()=='username'){
			$(this).val('username');
		}

	})
	$("#login_password").focus(function(){
		$(this).val('');
	})
	$("#login_password").blur(function(){
		if($(this).val()==''||$(this).val()=='password'){
			$(this).val('password');
		}
	})
	 $('.language').mousemove(function(){
  	$('.language-block').css("display","block");
  });
  $('.language').mouseleave(function(){
  	$('.language-block').css("display","none");
  });
  $('.user-photo').mouseover(function(){
  	$('.photo').animate({top:"-5px"},200);
  });
  $('.user-photo').mouseout(function(){
  	$('.photo').animate({top:0},200);
  });
  $('.nav ul li').mousemove(function(){
  $(this).find('ul').css("display","block");
  });
  $('.nav ul li').mouseleave(function(){
  $(this).find('ul').css("display","none");
  });
  $('.mouseon').mousemove(function(){
  $('.language').css("display","block");
  });
  $('.mouseon').mouseleave(function(){
  $('.language').css("display","none");
  });
});
function nTabs(thisObj, Num) {
	if (thisObj.className == "active") return;
	var tabObj = thisObj.parentNode.id;
	var tabList = document.getElementById(tabObj).getElementsByTagName("li");
	for (i = 0; i < tabList.length; i++) {
		if (i == Num) {
			thisObj.className = "active";
			document.getElementById(tabObj + "_Content" + i).style.display = "block";
		} else {
			tabList[i].className = "normal";
			document.getElementById(tabObj + "_Content" + i).style.display = "none";
		}
	}
};
