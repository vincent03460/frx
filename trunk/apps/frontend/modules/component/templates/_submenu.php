<?php
use_helper('I18N');
$culture = $sf_user->getCulture();
?>
<div class="layer4 fr">
    <!--S-The main navigation module-->
    <div class="nav cl">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:viod(0)">About us</a>
                <ul>
                    <li><a href="en/about/intro.html" target="_self">About BFSforex</a></li><li><a href="en/about/business_model.html" target="_self">ECN Business model</a></li><li><a href="en/about/Small_money.html" target="_self">For Small Investors</a></li><li><a href="en/about/Best_choice.html" target="_self">Best IB Choice</a></li><li><a href="en/about/Hedging_insurance.html" target="_self">Hedging insurance</a></li><li><a href="en/about/video.html" target="_self">BFSforex TV</a></li><li><a href="en/about/regulation.html" target="_self">Safety of Funds</a></li><li><a href="en/about/Licenses_and_Regulations.html" target="_self">Licenses and Regulations</a></li><li><a href="en/about/Awards.html" target="_self">Awards</a></li><li><a href="en/about/policy.html" target="_self">Anti-Money Laundering</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Trading Products</a>
                <ul>
                    <li><a href="en/trading_products/Forex.html" target="_self">Forex</a></li><li><a href="en/trading_products/metals.html" target="_self">Gold & Silver</a></li><li><a href="en/trading_products/CFD.html" target="_self">CFDs</a></li><li><a href="en/trading_products/futures.html" target="_self">Futures</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Trading Account</a>
                <ul>
                    <li><a href="en/trading_account/micro.html" target="_self">Micro account</a></li><li><a href="en/trading_account/standard.html" target="_self">Standard account</a></li><li><a href="en/trading_account/premium.html" target="_self">Premium account</a></li><li><a href="en/trading_account/discount.html" target="_self">Discount account</a></li><li><a href="en/trading_account/stp.html" target="_self">STP/ECN account</a></li><li><a href="en/trading_account/Spread.html" target="_self">Spreads</a></li><li><a href="en/trading_account/deposit.html" target="_self">Deposits &Withdrawals</a></li><li><a href="en/trading_account/Statements.html" target="_self">Risk Disclosure Statement</a></li><li><a href="en/trading_account/Privacy.html" target="_self">Privacy Policy</a></li><li><a href="en/trading_account/leverage.html" target="_self">Trading leverage</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Trading Platforms</a>
                <ul>
                    <li><a href="en/trading_platforms/mt4.html" target="_self">MT4</a></li><li><a href="en/trading_platforms/iPhone.html" target="_self">iPhone Trader</a></li><li><a href="en/trading_platforms/Android.html" target="_self">Android Trader</a></li><li><a href="en/trading_platforms/Blackberry.html" target="_self">Blackberry Trader</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Promotions</a>
                <ul>
                    <li><a href="en/promotions/bonus.html" target="_self">50% Welcome Bonus</a></li><li><a href="en/promotions/refer_a_friend.html" target="_self">Refer a friend</a></li><li><a href="en/promotions/discount.html" target="_self">Discount account</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Partnership</a>
                <ul>
                    <li><a href="en/partnership/Partners.html" target="_self">Affiliate program</a></li><li><a href="en/partnership/area-agent.html" target="_self">Regional Representatives</a></li><li><a href="en/partnership/whitelabel.html" target="_self">White Label Solution</a></li>                        </ul>                    </li><li><a href="javascript:viod(0)">Support</a>
                <ul>
                    <li><a href="en/support/Contact.html" target="_self">Contact Us</a></li><li><a href="en/support/Legal_documentation.html" target="_self">Legal documentation</a></li>                        </ul>                    </li>                </ul>
    </div>
    <!--E-The main navigation module-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var url = "<?php echo "/" . $module . ($action == "index" ? "" : "/" . $action) ?>";
        var menu = $("div.menu > ul li a[href$=\"" + url + "\"]");
        menu.parent().addClass("current_page_item");
        menu.parent().parent().parent('li.page_item').addClass("current_page_item");
    });
</script>
