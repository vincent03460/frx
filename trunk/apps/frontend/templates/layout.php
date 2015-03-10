<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.bfsforex.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2015 03:19:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Forex Trading | Forex Broker | Forex Platforms-BFSforex.com</title>
    <link href="/css/base.css" type="text/css" rel="stylesheet" />
    <link href="/css/model.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>
<!--S-Global head-->

<div class="header">
    <div class="inner cl">
        <div class="layer1 fl">
            <!--S-logo Module-->
            <div class="logo">
                <a href="/home" title="BFS"></a>
            </div>
            <!--E-logo Module-->
        </div>
        <div class="logo2"><span>Best STP/ECN Foreign Exchange Provider</span><font>EUROPEANCEO AWARDS 2013</font></div>
        <div class="layer2 fr">
            <!--S-The function navigation at the top of module-->

            <div class="topbar cl">
                <ul>
                    <li><a class="chat" href="https://secure.livechatinc.com/licence/1941741/open_chat.cgi?groups=3" target="_blank">Live Chat</a></li>
                    <li class="mouseon">

                        <a class="en" href="en.html">English</a>
                        <div class="language">
                            <a href="en.html" class="en">English</a><a href="cn.html" class="cn">简体中文</a><a href="tw.html" class="tw">繁体中文</a><a href="es.html" class="es">Español</a><a href="ar.html" class="ar">ﺎﻠﻋﺮﺒﻳﺓ</a><a href="ms.html" class="ms">Bahasa Melayu</a><a href="de.html" class="de">Deutsch</a><a href="ru.html" class="ru">Русский</a><a href="fr.html" class="fr">Français</a>

                            <!--<a href="/in" class="in">Indonesia</a>-->
                        </div>
                    </li>
                    <li><a class="content" href="en/support/Contact.html">Contact Us</a></li>
                    <li><a class="sitemap" href="en/Index/sitemap.html">Site Map</a></li>
                </ul>
            </div>
            <!--E-The function navigation at the top of module-->
        </div>
        <div class="layer3 fr">
            <!--S-Member Login Module-->
            <div class="login cl">
                <form action="http://account.bfsforex.com/Public/doLogins/l/en" method="post">
                    <input class="login-txt" type="text" name="username" value="username" id="login_username" />
                    <input class="login-txt" type="password" name="pass2word" value="password" id="login_password" />
                    <input type="hidden" name="jumpUrl" value="aHR0cDovL2FjY291bnQuYmZzZm9yZXguY29tL01lbWJlcg=="/>
                    <input class="login-btn" type="submit" value="Login" />
                    <input type="hidden" name="__hash__" value="6666cd76f96956469e7be39d750cc7d9_bf58a126bafac7d88124d75fcacef356" /></form>
                <p><a href="http://account.bfsforex.com/Public/reg/l/en">&gt;&gt;Open Live Account</a><a href="Public/forget.html">&gt;&gt;Forgot password?</a></p>
            </div>
            <!--E-Member Login Module-->
        </div>
        <!-- Main Menu -->
    </div>
</div>
<!--E-Global head-->
<!--S-Global main-->
<div class="container">
    <?php echo $sf_data->getRaw('sf_content') ?>
</div>
<!--E-Global main-->
<script src="Public/Front/en/js/jquery.js" type="text/javascript"></script>
<script src="Public/Front/en/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="Public/Front/en/js/swfobject.js"></script>
<script type="text/javascript">
    var flashvars = {
        file : '/Public/Front/en/img/flv/BFS_reports_01.flv',
        image: '/Public/Front/en/img/flv/BFS_reporrts_01.jpg',
        bufferlength : 5,
        volume : 100,
        controlbar : 'over',
        autostart : 'false',
        backcolor : '333333',
        frontcolor : 'cccccc',
        lightcolor : 'ffffff',
        screencolor : 'ffffff',
        skin:'/Public/Front/en/swf/skin.swf'
    };
    var params = {
        bgcolor: '#ffffff',
        wmode: 'transparent',
        allowfullscreen : 'true',
        allowscriptaccess : 'never'
    };
    var attributes = {};
    swfobject.embedSWF('Public/Front/en/swf/player.swf', 'player', '260', '200', '9.0.0', 'expressInstall.html', flashvars, params, attributes);

    function newindexsplis(){
        for (var i = 0;i< $(".newindexaddd2 .newindexsplis").length;i++) {
            var li = $(".newindexaddd2 .newindexsplis").eq(i).find(".splis ul li");

            if (li.length>4) {
                $(".newindexaddd2 .newindexsplis").eq(i).find(".rightbtn").addClass("select");
            };
        };
    }
    newindexsplis();

    var splisn = 0;
    $(".newindexaddd2 .newindexsplis").find(".leftbtn").live("click",function(){
        splisn--;
        var li = $(this).parent().find("li");
        if (li.length>4) {
            $(this).parent().find(".rightbtn").addClass("select");
        }else{
            $(this).parent().find(".rightbtn").removeClass("select");
        }
        if (splisn <= 0) {
            splisn = 0 ;
            $(this).removeClass("select");
            splisremove($(this),splisn);
            return false;
        };
        splisremove($(this),splisn);
    })
    $(".newindexaddd2 .newindexsplis").find(".rightbtn").live("click",function(){
        $(this).parent().find(".leftbtn").addClass("select");
        var li = $(this).parent().find("li");
        splisn++;
        if ( splisn >= li.length-4) {
            splisn = li.length-4;
            $(this).removeClass("select");
            $(this).parent().find(".leftbtn").addClass("select");
            splisremove($(this),splisn);
            return false;
        };
        splisremove($(this),splisn);
    })
    function splisremove(_this,_n){
        var li = _this.parent().find("li");
        var liwidth = li.eq(0).width()+35;
        var gdd = _this.parent().find(".splis");
        gdd.stop().animate({
            "scrollLeft":(_n*liwidth)
        },500)

    }
    $(".newindexaddd1 li").live("click",function(){
        var indexthis = $(".newindexaddd1 li").index(this);
        $(this).addClass("select").siblings().removeClass("select");
        $(".newindexaddd2").find(".newindexsplis").eq(indexthis).show().siblings().hide();
    })
    $(".newindexaddd1 li").eq(1).click();
</script>
<script type="text/javascript" src="Public/Front/video/indexvideo/indexspwin.js"></script>
<!--S-Global bottom of the-->
<!--S-Live Chat-->
<script type="text/javascript">
    var __lc = {};
    __lc.license = 1941741;

    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<!--E-Live Chat-->
<!--S-google-->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37161290-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<div class="newfooterinnerd3">
    <a href="content/Customer_Agreement.pdf">Customer Agreement</a>
    <a href="content/Commercial_terms.pdf" target="_blank">Terms of Business</a><span></span>
    <a href="en/trading_accounts/Statements.html">Trading and Execution Risks</a><span></span>
    <a href="en/trading_accounts/leverage.html">Leverage</a><span></span>
    <a href="en/trading_accounts/Privacy.html">Privacy Policy</a><span></span>
    <a href="en/trading_accounts/Statements.html">Risk Disclosure Statement</a><span></span>

</div><div class="newindexrhjx">
    <div class="newindexrhjxinner">
        <div class="titd1">Awards</div>
        <div class="titd2">
            <p>BFSforex is a global financial services company, depending on its professional technology, automation features and low-threshold,to participate in the international foreign</p>
            <p>exchange transactions,not only won the admiration of customers, but also won the praises by various circles of society , which is a shining star in the FX market.</p>
        </div>
        <ul class="ul1">
            <li>
                <div class="d1">
                    <p class="p1 huojianghezuo1"></p>
                    <div class="d1_d2">
                        <p class="d1_d2_p1">Best STP/ECN FX Provider</p>
                        <p class="d1_d2_p2">Best STP/ECN Foreign Exchange Provider <br /> EUROPEANCEO AWARDS 2013</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="d2">
                    <p class="d2_p1">“Best STP/ECN Foreign Exchange Provider-2013” by EUROPEANCEO</p>
                    <a class="d2_a1" href="#" target="_blank">&gt;More</a>
                    <div class="clear"></div>
                </div>
            </li>
            <li style="float:right;">
                <div class="d1">
                    <p class="p1 huojianghezuo2"></p>
                    <div class="d1_d2">
                        <p class="d1_d2_p1">Best Forex Broker in Asia-2013</p>
                        <p class="d1_d2_p2">Best Forex Broker Asia 2013 The 11th China <br />(Guangzhou)International <br /> Investment&Finance Expo</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="d2">
                    <p class="d2_p1">Best Forex Broker in Asia-2013</p>
                    <a class="d2_a1" href="#" target="_blank">&gt;More</a>
                    <div class="clear"></div>
                </div>
            </li>
            <p class="clear"></p>
        </ul>
        <ul class="ul1">
            <li>
                <div class="d1">
                    <p class="p1 huojianghezuo3"></p>
                    <div class="d1_d2">
                        <p class="d1_d2_p1">the Most Growing FX Company</p>
                        <p class="d1_d2_p2">2013 Lead The Chinese Advance  The annual awards of Financial Industry</p>
                    </div>
                </div>
                <div class="d2">
                    <p class="d2_p1">“the Most Growing Foreign Exchange Company-2013” by “Lead The Chinese Advance -The annual awards of Financial Industry”</p>
                    <a class="d2_a1" href="#" target="_blank">&gt;More</a>
                </div>
            </li>
            <li style="float:right;">
                <div class="d1">
                    <p class="p1 huojianghezuo4"></p>
                    <div class="d1_d2">
                        <p class="d1_d2_p1">The Best Forex Broker In China</p>
                        <p class="d1_d2_p2">Awarded by Hexun who is the leader of financial institutes in China</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="d2">
                    <p class="d2_p1">“The Best Forex Broker In China -2013“by Hexun- the leader of financial institutes in China。</p>
                    <a class="d2_a1" href="#" target="_blank">&gt;More</a>
                    <div class="clear"></div>
                </div>
            </li>
            <p class="clear"></p>
        </ul>
    </div>
</div>
<!--newfooter-->
<div class="newfooter">
    <div class="newfooterinner">
        <div class="d1">
            <div class="d1_1">
                <div class="d1_1d">
                    <p class="tit2">Trading Account</p>
                    <ul>
                        <li><a href="en/trading_accounts/micro.html">Micro account</a></li>
                        <li><a href="en/trading_accounts/standard.html">Standard account</a></li>
                        <li><a href="en/trading_accounts/premium.html">Premium account</a></li>
                        <li><a href="en/trading_accounts/discount.html">Discount account</a></li>
                        <li><a href="en/trading_accounts/stp.html">STP/ECN account</a></li>
                        <li><a href="en/trading_accounts/spread.html">Spreads</a></li>
                        <li><a href="en/trading_accounts/deposit.html">Deposits &Withdrawals</a></li>
                        <li><a href="en/trading_accounts/Statements.html">Risk Disclosure Statement</a></li>
                        <li><a href="en/trading_accounts/Privacy.html">Privacy Policy</a></li>
                        <li><a href="en/trading_accounts/leverage.html">Trading leverage</a></li>
                    </ul>
                </div>
                <div class="d1_1d">
                    <p class="tit2">About Us</p>
                    <ul>
                        <li><a href="en/about/intro.html">About BFSforex</a></li>
                        <li><a href="en/about/business_model.html">ECN Business model</a></li>
                        <li><a href="en/about/Small_money.html">For Small Investors</a></li>
                        <li><a href="en/about/Best_choice.html">Best IB Choice</a></li>
                        <li><a href="en/about/Hedging_insurance.html">Hedging insurance</a></li>
                        <li><a href="en/about/video.html">BFSforex TV</a></li>
                        <li><a href="en/about/regulation.html">Safety of Funds</a></li>
                        <li><a href="en/about/Licenses_and_Regulations.html">Licenses and Regulations</a></li>
                        <li><a href="en/about/Awards.html">Awards</a></li>
                        <li><a href="en/about/policy.html">Anti-Money Laundering</a></li>
                    </ul>
                </div>
                <div class="d1_1d">
                    <p class="tit2">Trading Products</p>
                    <ul>
                        <li><a href="en/trading_products/Forex.html">Forex</a></li>
                        <li><a href="en/trading_products/metals.html">Gold & Silver</a></li>
                        <li><a href="en/trading_products/CFD.html">CFDs</a></li>
                        <li><a href="en/trading_products/futures.html">Futures</a></li>
                    </ul>
                    <div class="ge1"></div>
                    <p class="tit2">Trading platform</p>
                    <ul>
                        <li><a href="en/trading_platform/mt4.html">MT4</a></li>
                        <li><a href="en/trading_platform/iPhone.html">iPhone Trader</a></li>
                        <li><a href="en/trading_platform/Android.html">Android Trader</a></li>
                        <li><a href="en/trading_platform/Blackberry.html">Blackberry Trader</a></li>
                    </ul>
                </div>
                <div class="d1_1d">
                    <p class="tit2">Promotions</p>
                    <ul>
                        <li><a href="en/promotions/bonus.html">50% Welcome Bonus</a></li>
                        <li><a href="en/promotions/refer_a_friend.html">Refer a friend</a></li>
                        <li><a href="en/promotions/discount.html">Discount account</a></li>
                    </ul>
                    <div class="ge2"></div>
                    <p class="tit2">Partnership program</p>
                    <ul>
                        <li><a href="en/partnership_program/Partners.html">Affiliate program</a></li>
                        <li><a href="en/partnership_program/multiple_system.html">Multilevel Program</a></li>
                        <li><a href="en/partnership_program/area-agent.html">Advanced Partner</a></li>
                    </ul>
                    <div class="ge2"></div>
                    <p class="tit2">Support</p>
                    <ul>
                        <li><a href="en/support/Contact.html">Contact Us</a></li>
                        <li><a href="en/trading_accounts/leverage.html">Legal documentation</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="d1_2">
                <div class="d2_d1">
                    <div class="logod"></div>
                    <p class="p1">Copyright © 2011-2013 <br /> BFSforex All rights reserved.</p>
                    <div class="btn">
                        <a href="https://secure.livechatinc.com/licence/1941741/open_chat.cgi?groups=3" target="_blank" class="a1"></a>
                        <a href="http://account.bfsforex.com/Public/login" target="_blank" class="a2"></a>
                        <a href="en/support/Contact.html" class="a3"></a>
                        <a href="en/Index/sitemap.html" class="a4"></a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="d2">
            <p>＊ Note:rading on the Forex market involves significant risks, including complete possible loss of funds. Trading is not suitable for all investors and traders. By increasing leverage risk increases (Notice of Risk).
                The service is not available for US residents</p>
            <p>BFSforex provides you with educational resources to help you become familiar with all the trading features and tools in the trading platform. With the BFSforex practice account you can test any trading strategies you wish in a risk-free environment. Please bear in mind that the results of the transactions of the practice account are virtual, and do not reflect to any real profit or loss or real trading environment, whereas market conditions may affect both the quotation and execution. Forex products are leveraged products and trading forex therefore involves a high level of risk that may not be suitable for everyone. BFSforex recommends that you ensure that you fully understand the risks involved before making any decision concerning BFSforex's products. Independent advice should be sought if necessary. </p>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!--/newfooter-->
<div id="service_cnt">
    <a class="s_red" href="http://account.bfsforex.com/Public/reg/l/en" target="_blank">Register<br />Trading Office</a>
    <a class="s_blue" href="http://account.bfsforex.com/Public/login/l/en" target="_blank">Login<br />Trading Office</a>
    <a class="s_green" href="Download/bfs4setup.exe" target="_blank">Download<br />BFSforex MT4</a>
</div>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 990553351;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">;
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/990553351/?value=0&amp;guid=ON&amp;script=0"/>;
    </div>
</noscript>

</body>

<!-- Mirrored from www.bfsforex.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2015 03:22:20 GMT -->
</html>