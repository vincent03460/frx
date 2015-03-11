<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>

<style type="text/css">
    div#first a {
        font-size: 11px;
    }
</style>

<div class="banner">
    <!--S-flash Carousel Module-->
    <div class="flash">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="980" height="345" accesskey="index" tabindex="index" title="index">
            <param name="movie" value="/swf/en_index_new.swf">
            <param name="quality" value="high">
            <param name="wmode" value="transparent">
            <embed src="/swf/en_index_new.swf" width="980" height="345" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash">
        </object>
    </div>
    <!--E-flash Carousel Module-->
    <!--S-flash Carousel button module-->
    <div class="flash-btn">
        <ul class="cl en">
            <li class="cur"><a class="f-b1" href="/promotions"></a></li>
            <li><a class="f-b2" href="/promotions/discountAccount"></a></li>
            <li><a class="f-b3" href="http://account.bfsforex.com/Public/reg/l/en"></a></li>
        </ul>
    </div>
    <!--E-flash Carousel button module-->
</div>
<div class="inner cl">
    <div class="layer5 fl">
        <!--S-Image ads module-->
        <div class="addiv">
            <div class="ad-block"><a href="/partnership_program" target="_blank"></a></div>
            <div class="ad-block"><a href="http://account.bfsforex.com/Public/reg/l/en" target="_blank"></a></div>
            <div class="ad-block"><a href="/about_us/awards" target="_blank"></a></div>
        </div>
        <!--E-Image ads module-->
    </div>
    <div class="layer6 fr">
        <!--S-Account type form module-->
        <div class="account">
            <div class="tab-card">
                <ul id="myTab1" class="cl">
                    <li class="active" onclick="nTabs(this,0);"><a>Micro account</a></li>
                    <li onclick="nTabs(this,1);"><a>Standard account</a></li>
                    <li onclick="nTabs(this,2);"><a>Premium account</a></li>
                    <li onclick="nTabs(this,3);"><a>STP account</a></li>
                    <li onclick="nTabs(this,4);"><a>Discount account</a></li>
                </ul>
            </div>
            <div class="tab-con">
                <div id="myTab1_Content0">
                    <div class="account-table fl">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>Trading Platform</td>
                                <td>MetaTrader 4</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Deposit</td>
                                <td class="gray">$5</td>
                            </tr>
                            <tr>
                                <td>Leverage</td>
                                <td>Up to 1:1000</td>
                            </tr>
                            <tr>
                                <td class="gray">Pricing Format</td>
                                <td class="gray">5th decimal pricing </td>
                            </tr>
                            <tr>
                                <td>Spreads</td>
                                <td>Fixed. From 2 pips </td>
                            </tr>
                            <tr>
                                <td class="gray">Commissions</td>
                                <td class="gray">No commissions.</td>
                            </tr>
                            <tr>
                                <td>Welcome Bonus</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Transaction Size</td>
                                <td class="gray">0.01 lot (1K)</td>
                            </tr>
                            <tr>
                                <td>Maximum Transaction Size</td>
                                <td>10 lot（1000K)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="account-txt fr">
                        <p><span>&lt;</span>Leverage up to 1:1000;</p>
                        <p><span>&lt;</span>$5 minimum deposit; </p>
                        <p><span>&lt;</span>*28 currency pairs, gold, silver;</p>
                        <p><span>&lt;</span>Minimal lot 0.01;</p>
                        <p><span>&lt;</span>*Zero commissions on spot trading, Instant execution with no slippage;</p>
                        <p><span>&lt;</span>*Mobile trading capability for BlackBerry and iPhone to trade on-the-go.</p>
                    </div>
                    <div class="account-btn cl">
                        <a href="http://account.bfsforex.com/Public/reg/l/en">Open Live Account</a>
                        <a href="Download/bfs4setup.exe">Download BFSforex MT4</a>
                        <a href="en/Public/login.html">Login BFS Trading Office</a>
                    </div>
                </div>
                <div id="myTab1_Content1" class="none">
                    <div class="account-table fl">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>Trading Platform</td>
                                <td>MetaTrader 4</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Deposit</td>
                                <td class="gray">$100</td>
                            </tr>
                            <tr>
                                <td>Leverage</td>
                                <td>Up to 1:500</td>
                            </tr>
                            <tr>
                                <td class="gray">Pricing Format</td>
                                <td class="gray">5th decimal pricing </td>
                            </tr>
                            <tr>
                                <td>Spreads</td>
                                <td>** Dynamic. </td>
                            </tr>
                            <tr>
                                <td class="gray">Commissions</td>
                                <td class="gray">No commissions.</td>
                            </tr>
                            <tr>
                                <td>Welcome Bonus</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Transaction Size</td>
                                <td class="gray">0.1 lot (10K)</td>
                            </tr>
                            <tr>
                                <td>Maximum Transaction Size</td>
                                <td>100 lot（10,000K)</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="account-txt fr">
                        <p><span>&lt;</span>Leverage up to 1:500;</p>
                        <p><span>&lt;</span>Dynamic spread from 1.8 pips;</p>
                        <p><span>&lt;</span>$100 minimum deposit;</p>
                        <p><span>&lt;</span>40% welcome bonus;</p>
                        <p><span>&lt;</span>*28 currency pairs, gold, silver;</p>
                        <p><span>&lt;</span>*Mobile trading capability for BlackBerry and iPhone to trade on-the-go;</p>
                        <p><span>&lt;</span>*Multilingual trading, account support and live chat.</p>
                    </div>
                    <div class="account-btn cl">
                        <a href="http://account.bfsforex.com/Public/reg/l/en">Open Live Account</a>
                        <a href="Download/bfs4setup.exe">Download BFSforex MT4</a>
                        <a href="en/Public/login.html">Login BFS Trading Office</a>
                    </div>
                </div>
                <div id="myTab1_Content2" class="none">
                    <div class="account-table fl">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>Trading Platform</td>
                                <td>MetaTrader 4</td>
                            </tr>
                            <tr>
                                <td class="gray">Annual equivalent rate</td>
                                <td class="gray">7.5%</td>
                            </tr>
                            <tr>
                                <td>Leverage</td>
                                <td>Up to 1:500</td>
                            </tr>
                            <tr>
                                <td class="gray">Pricing Format</td>
                                <td class="gray">5th decimal pricing </td>
                            </tr>
                            <tr>
                                <td>Spreads</td>
                                <td>** Dynamic. </td>
                            </tr>
                            <tr>
                                <td class="gray">Commissions</td>
                                <td class="gray">No commissions.</td>
                            </tr>
                            <tr>
                                <td>Welcome Bonus</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Transaction Size</td>
                                <td class="gray">0.1 lot (10K)</td>
                            </tr>
                            <tr>
                                <td>Maximum Transaction Size</td>
                                <td>Not Limited</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="account-txt fr">
                        <p><span>&lt;</span>Annual equivalent rate 7.5%;</p>
                        <p><span>&lt;</span>*$10,000 minimum deposit; </p>
                        <p><span>&lt;</span>Dynamic spread from 1.6 pips;</p>
                        <p><span>&lt;</span>*40% welcome bonus;</p>
                        <p><span>&lt;</span>Zero commissions on spot trading, Instant execution with no slippage;</p>
                        <p><span>&lt;</span>**28 currency pairs, gold, silver;</p>
                        <p><span>&lt;</span>*Leverage up to 1:200;</p>
                        <p><span>&lt;</span>*Minimal lot 0.01;</p>
                    </div>
                    <div class="account-btn cl">
                        <a href="http://account.bfsforex.com/Public/reg/l/en">Open Live Account</a>
                        <a href="Download/bfs4setup.exe">Download BFSforex MT4</a>
                        <a href="en/Public/login.html">Login BFS Trading Office</a>
                    </div>
                </div>
                <div id="myTab1_Content3" class="none">
                    <div class="account-table fl">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td>Trading Platform</td>
                                <td>MetaTrader 4</td>
                            </tr>
                            <tr>
                                <td class="gray">Minimum Deposit</td>
                                <td class="gray">$10,000</td>
                            </tr>
                            <tr>
                                <td>Pricing Format</td>
                                <td>5th decimal pricing ; Interbank liquidity</td>
                            </tr>
                            <tr>
                                <td class="gray">Leverage</td>
                                <td class="gray">1:100</td>
                            </tr>
                            <tr>
                                <td>Spreads</td>
                                <td>The minimum spread for all pairs from 0 pips.</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="account-txt fr">
                        <p><span>&lt;</span>*$10,000 minimum deposit;</p>
                        <p><span>&lt;</span>*28 currency pairs, gold, silver;</p>
                        <p><span>&lt;</span>*Direct access to interbank prices and top-tier Liquidity Providers;</p>
                        <p><span>&lt;</span>*Trading from 0.1 lots;</p>
                        <p><span>&lt;</span>*Without stop/limit and freeze levels;</p>
                        <p><span>&lt;</span>*Multilingual trading, account support and live chat.</p>
                    </div>
                    <div class="account-btn cl">
                        <a href="http://account.bfsforex.com/Public/reg/l/en">Open Live Account</a>
                        <a href="Download/bfs4setup.exe">Download BFSforex MT4</a>
                        <a href="en/Public/login.html">Login BFS Trading Office</a>
                    </div>
                </div>
                <div id="myTab1_Content4" class="none">
                    <div class="account-txt" style="width:550px;">
                        <p><span>&lt;</span>We are the first foreign exchange trader in the banking industry to offer discount accounts.</p>
                        <p><span>&lt;</span>Unbelievable discount rate:</p>
                        <p><span>&lt;</span>the discounted amount will be returned to the clients immediately without waiting.</p>
                        <p><span>&lt;</span>Original Price $ 10,000 trading account<br />Discount 20%$ 8000<br />Discount 30%$ 7000<br />Discount 40%$ 6000</p>
                        <p><span>&lt;</span>The clients choose a 60% Discount Account and deposit $10000 into it, and we’ll return $4000 to the clients’ bank card.</p>
                    </div>
                    <div class="account-btn cl">
                        <a href="http://account.bfsforex.com/Public/reg/l/en">Open Live Account</a>
                        <a href="Download/bfs4setup.exe">Download BFSforex MT4</a>
                        <a href="en/Public/login.html">Login BFS Trading Office</a>
                    </div>
                </div>
            </div>
        </div>
        <!--E-Account type form module-->
    </div>
    <div class="layer7 fl">
        <!--S-Platform selection module-->
        <div class="platform">
            <div class="tab-card">
                <ul id="myTab2" class="cl">
                    <li class="active" onclick="nTabs(this,0);"><a>MT4</a></li>
                    <li onclick="nTabs(this,1);"><a>iPhone Trader</a></li>
                    <li onclick="nTabs(this,2);"><a>Android Trader</a></li>
                    <li onclick="nTabs(this,3);"><a>Blackberry Trader</a></li>
                </ul>
            </div>
            <div class="tab-con">
                <div id="myTab2_Content0">
                    <div class="mt4">
                        <h3>BFS MT4</h3>
                        <p>BFSforex MetaTrader  offers forex traders fast, low latency, forex execution and highly competitive low interbank spreads. </p>
                        <a href="Download/bfs4setup.exe">Download</a>
                    </div>
                </div>
                <div id="myTab2_Content1" class="none">
                    <div class="iphone">
                        <h3>BFS iPhone Trader</h3>
                        <p>BFSforex MT4 iPhone Trader ensures the Forex market is easily available at the touch of a button. Take full control of your trading today - Download the BFSforex MT4 iPhone Trader now!</p>
                        <a href="https://itunes.apple.com/en/app/metatrader-4/id496212596" target="_blank">Download</a>                        </div>
                </div>
                <div id="myTab2_Content2" class="none">
                    <div class="android">
                        <h3>BFS Android Trader</h3>
                        <p>BFSforex MT4 Android Trader ensures the Forex market is easily available at the touch of a button. Take full control of your trading today - Download the BFSforex MT4 Android Trader now!</p>
                        <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4&amp;hl=en" target="_blank">Download</a>                        </div>
                </div>
                <div id="myTab2_Content3" class="none">
                    <div class="blackberry">
                        <h3>BFS Blackberry Trader</h3>
                        <p>BFSforex Blackberry Trader ensures the Forex market is easily available at the touch of a button. Take full control of your trading today - Download the BFSforex  MT4 BlackBerry Trader now!</p>
                        <a href="http://appworld.blackberry.com/webstore/content/19110045/" target="_blank">Download</a>                        </div>
                </div>
            </div>
        </div>
        <!--E-Platform selection module-->
    </div>
    <div class="layer11 fr">
        <!--S-BFS Video Module-->
        <div class="video">
            <div class="title">
                <h2>BFSforex TV</h2>
            </div>
            <div id="player"></div>
        </div>
        <!--E-BFS Video Module-->
    </div>
    <div class="layer9 fl">
        <!--S-Company News module-->
        <div class="company-news">
            <div class="title">
                <h2>Company News<a href="en/News/displist.html" style="float:right;color:#C00">More</a></h2>
            </div>
            <div class="contect">
                <dl>
                    <dd class="time">January 22 ,2015</dd>
                    <dt><a href="en/News/content/id/382.html">Swiss franc did not affect to BFSforex</a></dt>
                    <dd class="info"></dd>
                </dl><dl>
                    <dd class="time">December 23 ,2014</dd>
                    <dt><a href="en/News/content/id/363.html">Trading Suspended Notice 2014-2015</a></dt>
                    <dd class="info"></dd>
                </dl><dl>
                    <dd class="time">November 27 ,2014</dd>
                    <dt><a href="en/News/content/id/357.html">Trading Suspended Notice 2014</a></dt>
                    <dd class="info"></dd>
                </dl>                </div>
        </div>
        <!--E-Company News module-->
    </div>
    <div class="layer10 fl">
        <!--S-Industry News module-->
        <div class="forex-news">
            <div class="title">
                <h2>Industry News<a href="en/News/displist/cid/4.html" style="float:right;color:#C00">More</a></h2>
            </div>
            <div class="contect">
                <dl>
                    <dd class="time">November 22 ,2013</dd>
                    <dt><a href="en/News/content/id/305.html">Canada Dollar at Weakest Since September</a></dt>
                    <dd class="info"></dd>
                </dl><dl>
                    <dd class="time">November 22 ,2013</dd>
                    <dt><a href="en/News/content/id/306.html">Yen Touches 4-Month Low After Kuroda’s Rate Pledge; Aussie Falls</a></dt>
                    <dd class="info"></dd>
                </dl><dl>
                    <dd class="time">November 22 ,2013</dd>
                    <dt><a href="en/News/content/id/307.html">Goldman Says Currency Unit Didn’t Post Third-Quarter Loss</a></dt>
                    <dd class="info"></dd>
                </dl>                </div>
        </div>
        <!--E-Industry News module-->
    </div>
    <div class="layer12 fr">
        <!--S-Rates Table Module-->
        <div class="rate">
            <div class="title"><h3>Central Banks Interest Rates</h3></div>
            <div class="contect">
                <dl class="rate-head cl">
                    <dt>Bank</dt>
                    <dd>Rate</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="European"></span><em>European Central Bank</em></dt>
                    <dd>1%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="England"></span><em>Bank of England</em></dt>
                    <dd>0.5%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Swiss"></span><em>Swiss National Bank</em></dt>
                    <dd>0.25%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="China"></span><em>Bank of China</em></dt>
                    <dd>1%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Australia"></span><em>Bank of Australia</em></dt>
                    <dd>4.5%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="US"></span><em>U.S Federal Reserve</em></dt>
                    <dd>0.25%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Japan"></span><em>Bank of Japan</em></dt>
                    <dd>0.1%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Canada"></span><em>Bank of Canada</em></dt>
                    <dd>6.31%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Russia"></span><em>Bank of Russia</em></dt>
                    <dd>7.75%</dd>
                </dl>
                <dl class="cl">
                    <dt><span class="Zealand"></span><em>Bank of New Zealand</em></dt>
                    <dd>2.5%</dd>
                </dl>
            </div>
        </div>
        <!--E-Rates Table Module-->
    </div>
    <div class="clear"></div>
    <div class="newindexaddd1">
        <ul>
            <li class="select">Awarded Video</li>
            <li>The NYSE live broadcast</li>
            <li>BFS viewpoint</li>
        </ul>
    </div>
    <div class="newindexaddd2">
        <div class="newindexsplis">
            <div class="leftbtn btn"></div>
            <div class="rightbtn btn"></div>
            <div class="splis">
                <ul>
                </ul>
            </div>
        </div>
        <div class="newindexsplis" style="display:none;">
            <div class="leftbtn btn"></div>
            <div class="rightbtn btn"></div>
            <div class="splis">
                <ul>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-1' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-1.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-2' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-2.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-3' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-3.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-4' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-4.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-5' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-5.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                    <li>
                        <p class="p1"><a videoname='bfsvideo-6' class="lookvideobtn" href="javascript:;" ><img src="/video/indexvideo/bfsvideo-6.jpg" alt="" /></a></p>
                        <p class="p2">BFSforex The NYSE live...</p>
                        <p class="p3">Fresh Forex News from New York NYSE by BFSforex</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="newindexsplis" style="display:none;">
            <div class="leftbtn btn"></div>
            <div class="rightbtn btn"></div>
            <div class="splis">
                <ul>
                </ul>
            </div>
        </div>
    </div>
</div>