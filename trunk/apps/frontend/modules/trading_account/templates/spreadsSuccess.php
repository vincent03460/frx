<div class="main">
    <h3>Spreads</h3>
    <style type="text/css">
        .greentable td {
            border: 1px solid #ddd;
            zoom: 1;
        }

        .greentable thead td {
            border: 1px solid #333;
            border-bottom: 2px solid #C00;
            background: #666;
            color: #FFF;
        }</style>
    <div class="account">
        <div class="tab-card">
            <ul class="cl" id="myTab1">
                <li class="active" onclick="nTabs(this,0);">
                    <a style="padding:0 40px;">Micro</a></li>
                <li onclick="nTabs(this,1);">
                    <a style="padding:0 40px;">Standard</a></li>
                <!--
                <li onclick="nTabs(this,3);">
                    <a style="padding:0 40px;">Premium</a></li>-->
                <li onclick="nTabs(this,2);">
                    <a style="padding:0 40px;">STP/ECN</a></li>
            </ul>
        </div>
        <div class="tab-con">
            <div id="myTab1_Content0">
                <div class="td_0 active">
                    <table class="greentable" id="tradeforexmicro" style="width: 100%; letter-spacing: 0pt; font-family: Arial;">
                        <thead>
                        <tr>
                            <td>
                                Symbol
                            </td>
                            <td>
                                Description
                            </td>
                            <td>
                                Lot Size
                            </td>
                            <td>
                                Spread *
                            </td>
                            <td>
                                Swap Short
                            </td>
                            <td>
                                Swap Long
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                AUDCAD
                            </td>
                            <td>
                                Australian Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -7.96
                            </td>
                            <td>
                                7.23
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDCHF
                            </td>
                            <td>
                                Australian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                -11.03
                            </td>
                            <td>
                                10.32
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDJPY
                            </td>
                            <td>
                                Australian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -8.64
                            </td>
                            <td>
                                7.98
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDNZD
                            </td>
                            <td>
                                Australian Dollar vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                12
                            </td>
                            <td>
                                -5.04
                            </td>
                            <td>
                                3.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDUSD
                            </td>
                            <td>
                                Australian Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -10.00
                            </td>
                            <td>
                                7.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADCHF
                            </td>
                            <td>
                                Canadian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                0.21
                            </td>
                            <td>
                                -0.31
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADJPY
                            </td>
                            <td>
                                Canadian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                0.2
                            </td>
                            <td>
                                -0.3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CHFJPY
                            </td>
                            <td>
                                Swiss Franc v.s. Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                0.17
                            </td>
                            <td>
                                -0.82
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURAUD
                            </td>
                            <td>
                                Euro vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                12.24
                            </td>
                            <td>
                                -13.73
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCAD
                            </td>
                            <td>
                                Euro vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                2.60
                            </td>
                            <td>
                                -4.06
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCHF
                            </td>
                            <td>
                                Euro vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                -1.50
                            </td>
                            <td>
                                -0.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURGBP
                            </td>
                            <td>
                                Euro vs Great Britain Pound
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                0.16
                            </td>
                            <td>
                                -1.37
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURJPY
                            </td>
                            <td>
                                Euro vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -0.10
                            </td>
                            <td>
                                -0.75
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURNZD
                            </td>
                            <td>
                                Euro vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                12
                            </td>
                            <td>
                                8.99
                            </td>
                            <td>
                                -13.80
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURUSD
                            </td>
                            <td>
                                Euro vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                0.75
                            </td>
                            <td>
                                -1.90
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPAUD
                            </td>
                            <td>
                                Great Britain Pound vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                13.19
                            </td>
                            <td>
                                -16.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCAD
                            </td>
                            <td>
                                Great Britain Pound vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                1.66
                            </td>
                            <td>
                                -3.63
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCHF
                            </td>
                            <td>
                                Great Britain Pound vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.50
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPJPY
                            </td>
                            <td>
                                Great Britain Pound vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -2.44
                            </td>
                            <td>
                                1.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPNZD
                            </td>
                            <td>
                                Great Britain Pound vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                15
                            </td>
                            <td>
                                10.41
                            </td>
                            <td>
                                -14.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPUSD
                            </td>
                            <td>
                                Great Britain Pound vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -1.20
                            </td>
                            <td>
                                0.53
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCAD
                            </td>
                            <td>
                                New Zealand Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.97
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCHF
                            </td>
                            <td>
                                New Zealand Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                0.47
                            </td>
                            <td>
                                -0.59
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDJPY
                            </td>
                            <td>
                                New Zealand Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -4.89
                            </td>
                            <td>
                                4.14
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDUSD
                            </td>
                            <td>
                                New Zealand Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -7.00
                            </td>
                            <td>
                                5.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCAD
                            </td>
                            <td>
                                US Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                1.80
                            </td>
                            <td>
                                -2.77
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCHF
                            </td>
                            <td>
                                US Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -1.56
                            </td>
                            <td>
                                1.01
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDJPY
                            </td>
                            <td>
                                US Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                -0.86
                            </td>
                            <td>
                                0.31
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GOLD
                            </td>
                            <td>
                                GOLD Spot
                            </td>
                            <td>
                                troy oz 100
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SILVER
                            </td>
                            <td>
                                SILVER Spot
                            </td>
                            <td>
                                troy oz 5000
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" rowspan="1">
                                <sup>*</sup>&nbsp;Fixed spread may be expanded moments appear in the news, or if the difference is greater than the fixed-point difference in actual market.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="none" id="myTab1_Content1">
                <div class="td_1">
                    <table class="greentable" id="tradeforexmicro" style="width: 100%; letter-spacing: 0pt; font-family: Arial;">
                        <thead>
                        <tr>
                            <td>
                                Symbol
                            </td>
                            <td>
                                Description
                            </td>
                            <td>
                                Lot Size
                            </td>
                            <td>
                                Spread *
                            </td>
                            <td>
                                Swap Short
                            </td>
                            <td>
                                Swap Long
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                AUDCAD.stp
                            </td>
                            <td>
                                Australian Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -7.96
                            </td>
                            <td>
                                7.23
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDCHF.stp
                            </td>
                            <td>
                                Australian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                -11.03
                            </td>
                            <td>
                                10.32
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDJPY.stp
                            </td>
                            <td>
                                Australian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -8.64
                            </td>
                            <td>
                                7.98
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDNZD.stp
                            </td>
                            <td>
                                Australian Dollar vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                12
                            </td>
                            <td>
                                -5.04
                            </td>
                            <td>
                                3.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDUSD.stp
                            </td>
                            <td>
                                Australian Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -10.00
                            </td>
                            <td>
                                7.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADCHF.stp
                            </td>
                            <td>
                                Canadian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                0.1
                            </td>
                            <td>
                                -0.2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADJPY.stp
                            </td>
                            <td>
                                Canadian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                0.1
                            </td>
                            <td>
                                -0.1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CHFJPY.stp
                            </td>
                            <td>
                                Swiss Franc v.s. Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                0.17
                            </td>
                            <td>
                                -0.82
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURAUD.stp
                            </td>
                            <td>
                                Euro vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                12.24
                            </td>
                            <td>
                                -13.73
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCAD.stp
                            </td>
                            <td>
                                Euro vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                2.60
                            </td>
                            <td>
                                -4.06
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCHF.stp
                            </td>
                            <td>
                                Euro vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                -1.50
                            </td>
                            <td>
                                -0.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURGBP.stp
                            </td>
                            <td>
                                Euro vs Great Britain Pound
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                0.16
                            </td>
                            <td>
                                -1.37
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURJPY.stp
                            </td>
                            <td>
                                Euro vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -0.10
                            </td>
                            <td>
                                -0.75
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURNZD.stp
                            </td>
                            <td>
                                Euro vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                12
                            </td>
                            <td>
                                8.99
                            </td>
                            <td>
                                -13.80
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURUSD.stp
                            </td>
                            <td>
                                Euro vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                0.75
                            </td>
                            <td>
                                -1.90
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPAUD.stp
                            </td>
                            <td>
                                Great Britain Pound vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                13.19
                            </td>
                            <td>
                                -16.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCAD.stp
                            </td>
                            <td>
                                Great Britain Pound vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                1.66
                            </td>
                            <td>
                                -3.63
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCHF.stp
                            </td>
                            <td>
                                Great Britain Pound vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPJPY.stp
                            </td>
                            <td>
                                Great Britain Pound vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -2.44
                            </td>
                            <td>
                                1.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPNZD.stp
                            </td>
                            <td>
                                Great Britain Pound vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                15
                            </td>
                            <td>
                                10.41
                            </td>
                            <td>
                                -14.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPUSD.stp
                            </td>
                            <td>
                                Great Britain Pound vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -1.20
                            </td>
                            <td>
                                0.53
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCAD.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.97
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCHF.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                0.4
                            </td>
                            <td>
                                -0.9
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDJPY.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                -4.89
                            </td>
                            <td>
                                4.14
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDUSD.stp
                            </td>
                            <td>
                                New Zealand Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -7.00
                            </td>
                            <td>
                                5.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCAD.stp
                            </td>
                            <td>
                                US Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                1.80
                            </td>
                            <td>
                                -2.77
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCHF.stp
                            </td>
                            <td>
                                US Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -1.56
                            </td>
                            <td>
                                1.01
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDJPY.stp
                            </td>
                            <td>
                                US Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                -0.86
                            </td>
                            <td>
                                0.31
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GOLD.stp
                            </td>
                            <td>
                                GOLD
                            </td>
                            <td>
                                troy oz 100
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SILVER.stp
                            </td>
                            <td>
                                SILVER
                            </td>
                            <td>
                                troy oz 5000
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" rowspan="1">
                                <sup>*</sup></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="none" id="myTab1_Content2">
                <div class="td_2">
                    <table class="greentable" id="tradeforexmicro" style="width: 100%; letter-spacing: 0pt; font-family: Arial;">
                        <thead>
                        <tr>
                            <td>
                                Symbol
                            </td>
                            <td>
                                Description
                            </td>
                            <td>
                                Lot Size
                            </td>
                            <td>
                                Spread *
                            </td>
                            <td>
                                Swap Short
                            </td>
                            <td>
                                Swap Long
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                AUDCAD.stp
                            </td>
                            <td>
                                Australian Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -7.96
                            </td>
                            <td>
                                7.23
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDCHF.stp
                            </td>
                            <td>
                                Australian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                -11.03
                            </td>
                            <td>
                                10.32
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDJPY.stp
                            </td>
                            <td>
                                Australian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                -8.64
                            </td>
                            <td>
                                7.98
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDNZD.stp
                            </td>
                            <td>
                                Australian Dollar vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -5.04
                            </td>
                            <td>
                                3.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AUDUSD.stp
                            </td>
                            <td>
                                Australian Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -10.00
                            </td>
                            <td>
                                7.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADCHF.stp
                            </td>
                            <td>
                                Canadian Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                0.1
                            </td>
                            <td>
                                -0.2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CADJPY.stp
                            </td>
                            <td>
                                Canadian Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                0.1
                            </td>
                            <td>
                                -0.1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CHFJPY.stp
                            </td>
                            <td>
                                Swiss Franc v.s. Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                0.17
                            </td>
                            <td>
                                -0.82
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURAUD.stp
                            </td>
                            <td>
                                Euro vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                12.24
                            </td>
                            <td>
                                -13.73
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCAD.stp
                            </td>
                            <td>
                                Euro vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                2.60
                            </td>
                            <td>
                                -4.06
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURCHF.stp
                            </td>
                            <td>
                                Euro vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -1.50
                            </td>
                            <td>
                                -0.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURGBP.stp
                            </td>
                            <td>
                                Euro vs Great Britain Pound
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                0.16
                            </td>
                            <td>
                                -1.37
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURJPY.stp
                            </td>
                            <td>
                                Euro vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -0.10
                            </td>
                            <td>
                                -0.75
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURNZD.stp
                            </td>
                            <td>
                                Euro vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                8.99
                            </td>
                            <td>
                                -13.80
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EURUSD.stp
                            </td>
                            <td>
                                Euro vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                0.4
                            </td>
                            <td>
                                0.75
                            </td>
                            <td>
                                -1.90
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPAUD.stp
                            </td>
                            <td>
                                Great Britain Pound vs Australian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                13.19
                            </td>
                            <td>
                                -16.29
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCAD.stp
                            </td>
                            <td>
                                Great Britain Pound vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1.66
                            </td>
                            <td>
                                -3.63
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPCHF.stp
                            </td>
                            <td>
                                Great Britain Pound vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPJPY.stp
                            </td>
                            <td>
                                Great Britain Pound vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                -2.44
                            </td>
                            <td>
                                1.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPNZD.stp
                            </td>
                            <td>
                                Great Britain Pound vs New Zealand Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                8
                            </td>
                            <td>
                                10.41
                            </td>
                            <td>
                                -14.20
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GBPUSD.stp
                            </td>
                            <td>
                                Great Britain Pound vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -1.20
                            </td>
                            <td>
                                0.53
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCAD.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -3.80
                            </td>
                            <td>
                                2.97
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDCHF.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                0.4
                            </td>
                            <td>
                                -0.9
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDJPY.stp
                            </td>
                            <td>
                                New Zealand Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                -4.89
                            </td>
                            <td>
                                4.14
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NZDUSD.stp
                            </td>
                            <td>
                                New Zealand Dollar vs US Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -7.00
                            </td>
                            <td>
                                5.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCAD.stp
                            </td>
                            <td>
                                US Dollar vs Canadian Dollar
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1.80
                            </td>
                            <td>
                                -2.77
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDCHF.stp
                            </td>
                            <td>
                                US Dollar vs Swiss Franc
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -1.56
                            </td>
                            <td>
                                1.01
                            </td>
                        </tr>
                        <tr>
                            <td>
                                USDJPY.stp
                            </td>
                            <td>
                                US Dollar vs Japanese Yen
                            </td>
                            <td>
                                USD 100000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                -0.86
                            </td>
                            <td>
                                0.31
                            </td>
                        </tr>
                        <tr>
                            <td>
                                GOLD.stp
                            </td>
                            <td>
                                GOLD
                            </td>
                            <td>
                                troy oz 100
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SILVER.stp
                            </td>
                            <td>
                                SILVER
                            </td>
                            <td>
                                troy oz 5000
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                -1.15
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" rowspan="1">
                                <sup>*</sup></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="side">
    <ul>
        <li><a href="/promotions"><img src="/img/side1.png"></a></li>
        <li><a href="/promotions/discountAccount"><img src="/img/side2.png"></a></li>
        <li><a href=""><img src="/img/side3.png"></a></li>
        <!--
        <li>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="220" height="370" accesskey="index" tabindex="index" title="index">
                <param name="movie" value="/swf/side.swf">
                <param name="quality" value="high">
                <param name="wmode" value="transparent">
                <embed src="/swf/side.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="220" height="370">
            </object>
        </li>
-->
    </ul>
</div>