@include('home.header')   
         


<div id="content" role="main"> 
    <div class="left-right-image-cta leftTree whiteBackground" role="complementary">
    
        <div class="container">
            <div id="Main_TEED5C155007_Col00" class="sf_colsIn" data-placeholder-label="Breadcrumb">
    <section class="breadcrumbs" aria-label="Breadcrumbs">
        <div class="container">
            <ul>
                        <li><a href="../index.html" title="BreadCrumb - Home">Home</a></li>
                        <li><a href="../personal.html" title="BreadCrumb - Personal">Personal</a></li>
                        <li class="current">Foreign Currency</li>
            </ul>
        </div>
    </section>
    </div>
    
            <div class="row">
                <div id="Main_TEED5C155007_Col01" class="sf_colsIn cta-content productTree col-md-4" data-placeholder-label="Left Nav">
    
        <div class="">
            <ul>
                <li class="left-nav-title active">
                    <div class="wrapper">
                        <a href="foreign-currency.html" target="_self">
                            Foreign Currency
                        </a>
                    </div>
                </li>
    
            </ul>
        </div>
    
    
    </div>
    
                <div id="Main_TEED5C155007_Col02" class="sf_colsIn cta-content content col-md-8" data-placeholder-label="Content Area">
    <div >
        <div ><h1>Foreign Currency</h1><div class="orangeDivider"><img src="../images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></div><h2>Buy and sell foreign currency at INTRUST</h2><p>INTRUST offers services to the international traveler that are not available just anywhere, including foreign currency exchange and wire transfers. Our experienced professionals can provide the services you need to travel the world.</p></div>    
    </div></div>
    
            </div>
        </div>
    
    </div>
    <div class="grayContainer">
        <div id="Main_C037_Col00" class="sf_colsIn container text-block" data-sf-element="Container" data-placeholder-label="Container">
    <div >
        <div ><h2 style="text-align:center;">Buying foreign currency from INTRUST Bank</h2><p style="text-align:center;"><img src="../images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></p><p style="text-align:center;">Currencies are available daily at <a href="../locations/douglas-main.html">105 N. Main in Wichita</a>. In addition, currencies may be ordered and delivered to the banking center most convenient to you. Use the converter below for current rates.</p></div>    
    </div>
    <script type="text/javascript">
        var _buy = {
            'AUD': 0.6148, 		'CAD': 0.6745, 		'CNY': 0.126, 		'DKK': 0.1327, 		'EUR': 0.9926, 		'JPY': 0.005731, 		'MXN': 0.05, 		'NZD': 0.5614, 		'NOK': 0.08577, 		'SEK': 0.08711, 		'CHF': 1.02194, 		'GBP': 1.1706, 	}
    </script>
    
    <fieldset class="purchaseForeignCurrency">
        <legend>
            Buy currency
        </legend>
        I would like to purchase
        $<input type="text" id="buycurrency" value="100" maxlength="15" style="width: 100px; text-align: center;" />
        worth of
        <label for="buycode" class="WCAG20">Select a Currency</label>
        <select id="buycode">
            <option value="0">Select a Currency          </option>
            <option value="AUD">Australian Dollars (AUD  </option>
            <option value="GBP">British Pounds (GBP)     </option>
            <option value="CAD">Canadian Dollars (CAD)   </option>
            <option value="CNY">Chinese Yuan (CNY)       </option>
            <option value="DKK">Danish Krones (DKK)      </option>
            <option value="EUR">European Euros (EUR)     </option>
            <option value="JPY">Japanese Yen (JPY)       </option>
            <option value="MXN">Mexican Pesos (MXN)      </option>
            <option value="NZD">New Zealand Dollars (NZD)</option>
            <option value="NOK">Norwegian Krones (NOK)   </option>
            <option value="SEK">Swedish Kronas (SEK)     </option>
            <option value="CHF">Swiss Francs (CHF)       </option>
        </select>.<br />
        <span id="buyconfig">
            At our current exchange rate of <span id="buyrate">0.0</span>, you will receive
            <span id="buyvalue">100</span> in <span id="buycountry">USD</span>.
        </span>
    </fieldset>
    <span class="currentRatesDate">Rates are current as of 7/1/2024.</span>
    
    <script>
        function UpdateBuy() {
            var code = $('#buycode :selected').val();
            if (code == '0') {
                $("#buyconfig").hide();
            }
            else if ($("#buycurrency").val() == "0" || $("#buycurrency").val() == "") {
                $("#buyconfig").hide();
            }
            else {
                $("#buyconfig").show();
                $("#buyrate").text(_sell[code]);
                var buyvalue = $("#buycurrency").val() / _sell[code];
                if (isNaN(parseFloat(buyvalue))) {
                    $("#buyvalue").text('');
                }
                else {
                    $("#buyvalue").text(buyvalue.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
                }
                $("#buycountry").text(code);
            }
        }
    
        function ForeignCurrencyInit() {
            $("#buycurrency").on("mouseup keyup", this.UpdateBuy)
                .inputmask("decimal", { radixPoint: ".", groupSeparator: ",", digits: 2, autoGroup: true, prefix: '', autoUnmask: true, rightAlign: false });
    
            $("#sellcurrency").on("mouseup keyup", this.UpdateSell)
                .inputmask("decimal", { radixPoint: ".", groupSeparator: ",", digits: 2, autoGroup: true, prefix: '', autoUnmask: true, rightAlign: false });
    
            $('#buycode').on('change', function () {
                UpdateBuy();
            });
            $('#buycurrency').on('change', function () {
                UpdateBuy();
            });
    
            $('#sellcode').on('change', function () {
                UpdateSell();
            });
            $('#sellcurrency').on('change', function () {
                UpdateSell();
            });
    
            if ($("#buycurrency").length) {
                UpdateBuy();
            }
            if ($("#sellcurrency").length) {
                UpdateSell();
            }
        }
    
        $(function () {
            ForeignCurrencyInit();
        });
    
    </script>
    <div >
        <div ><hr /><p>Amount of foreign currency will be rounded to the current available denominations.  For additional currencies available for purchase, please <a href="../contact.html">contact Customer Service</a>, who can put you in touch with our Foreign Currency Desk.</p></div>    
    </div>
        </div>
    </div><div class="whiteContainer">
        <div id="Main_C038_Col00" class="sf_colsIn container text-block" data-sf-element="Container" data-placeholder-label="Container">
    <div >
        <div ><h2 style="text-align:center;">Selling foreign currency to INTRUST Bank</h2><p style="text-align:center;"><img src="../images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></p><p style="text-align:center;">If you have leftover currency from your trip abroad, you can sell it to INTRUST Bank. Simply bring it in to one of our banking centers. Legal tender for the following currencies may be redeemed for immediate credit at our buy rate:</p></div>    
    </div>
    <script type="text/javascript">
                                            var _sell = {											'AUD': 0.7211 , 		'CAD': 0.7833 , 		'CNY': 0.1489 , 		'DKK': 0.156 , 		'EUR': 1.1527 , 		'JPY': 0.006665 , 		'MXN': 0.05909 , 		'NZD': 0.6584 , 		'NOK': 0.1016 , 		'SEK': 0.1024 , 		'CHF': 1.1957 , 		'GBP': 1.3594 , 	}
    </script>
    
    <fieldset class="sellForeignCurrency">
        <legend>
            Selling currency
        </legend>
        I would like to sell
        <input type="text" id="sellcurrency" value="100" maxlength="15" style="width: 100px; text-align: center;" />
        worth of
        <label for="sellcode" class="WCAG20">Select a Currency</label>
        <select id="sellcode">
            <option value="0">Select a Currency          </option>
            <option value="AUD">Australian Dollars (AUD) </option>
            <option value="GBP">British Pounds (GBP)     </option>
            <option value="CAD">Canadian Dollars (CAD)   </option>
            <option value="CNY">Chinese Yuan (CNY)       </option>
            <option value="DKK">Danish Krones (DKK)      </option>
            <option value="EUR">European Euros (EUR)     </option>
            <option value="JPY">Japanese Yen (JPY)       </option>
            <option value="MXN">Mexican Pesos (MXN)      </option>
            <option value="NZD">New Zealand Dollars (NZD)</option>
            <option value="NOK">Norwegian Krones (NOK)   </option>
            <option value="SEK">Swedish Kronas (SEK)     </option>
            <option value="CHF">Swiss Francs (CHF)       </option>
        </select>.<br />
        <span id="sellconfig">
            At our current exchange rate of <span id="sellrate">0.0</span>, you will receive
            $<span id="sellvalue">100</span> in U.S. Dollars.
        </span>
    </fieldset>
    <span class="currentRatesDate">Rates are current as of 7/1/2024.</span>
    
    <script>
    
        function UpdateSell() {
            var code = $('#sellcode :selected').val();
            if (code == '0') {
                $("#sellconfig").hide();
            }
            else if ($("#sellcurrency").val() == "0" || $("#sellcurrency").val() == "") {
                $("#sellconfig").hide();
            }
            else {
                $("#sellconfig").show();
                $("#sellrate").text(_buy[code]);
                var sellvalue = $("#sellcurrency").val() * _buy[code];
                if (isNaN(parseFloat(sellvalue))) {
                    $("#sellvalue").text('');
                }
                else {
                    $("#sellvalue").text(sellvalue.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
                }
            }
        }
    
        function ForeignCurrencyInit() {
            $("#buycurrency").on("mouseup keyup", this.UpdateBuy)
                .inputmask("decimal", { radixPoint: ".", groupSeparator: ",", digits: 2, autoGroup: true, prefix: '', autoUnmask: true, rightAlign: false });
    
            $("#sellcurrency").on("mouseup keyup", this.UpdateSell)
                .inputmask("decimal", { radixPoint: ".", groupSeparator: ",", digits: 2, autoGroup: true, prefix: '', autoUnmask: true, rightAlign: false });
    
            $('#buycode').on('change', function () {
                UpdateBuy();
            });
            $('#buycurrency').on('change', function () {
                UpdateBuy();
            });
    
            $('#sellcode').on('change', function () {
                UpdateSell();
            });
            $('#sellcurrency').on('change', function () {
                UpdateSell();
            });
    
            if ($("#buycurrency").length) {
                UpdateBuy();
            }
            if ($("#sellcurrency").length) {
                UpdateSell();
            }
        }
    
        $(function () {
            ForeignCurrencyInit();
        });
    
    </script>
    <div >
        <div ><hr /><p>Coins not accepted. Other currencies are redeemable at the discretion of the issuing bank and may incur a fee to redeem. Limitations to currencies available for buyback and non-customer transactions may apply.</p></div>    
    </div>
        </div>
    </div><div class="grayContainer">
        <div id="Main_C039_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
    <div class="text-block" >
        <div ><h2 style="text-align:center;">Travel Tips</h2><p style="text-align:center;"><img src="../images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></p><p>When traveling, the last thing you want to worry about is money. Review our travel tips below to help prepare you for using your money overseas.</p><h4><b>Using a Credit Card</b></h4><h5><b>Credit cards offer the best rate of exchange</b></h5><p>You will receive the best rate of exchange of the day when using a credit card, even though the rate of exchange could fluctuate many times throughout each day. Keep in mind, however, that except for cash advances, the rate is not applied to your transaction on the date of your purchase; it's applied on the date that your transaction reaches the credit card clearinghouse. Some card issuers may have an additional foreign transaction fee.</p><h5><b>Notify your card issuer in advance</b></h5><p>If you anticipate using a credit card on your trip, we recommend that you call your card issuer ahead of time to advise them of your plans to use the card in a foreign country. Doing so may avoid delayed transactions on your trip. Because many card issuers
        monitor your spending habits (such as where you frequently purchase and how much you spend), if you haven't notified your card issuer ahead of time, the issuer may assume that your card has been stolen.</p><h4><b>Using a Debit Card</b></h4><p>Debit cards are widely accepted for purchases, but you may encounter problems when using them for hotel and car reservations. Like credit cards above, debit cards offer the best rate of exchange, and if you plan to use your debit card on your trip, we
        recommend that you notify your debit card issuer in advance.</p><h4><b>Using an ATM</b></h4><p>Automated Teller Machines (ATMs) are widely accessible in major metropolitan areas. You will be charged a usage fee by the foreign ATM operator as well as your ATM card issuer. The exchange rate for using an ATM will be the same as using a credit card.</p><h4><b>Buying and Selling Foreign Currency</b></h4><h5><b>Get the best exchange rate</b></h5><p>While traveling in a foreign country, we recommend that you avoid using the exchange services of hotels and off-hours exchange windows at train stations and airports. Banks, American Express offices and well known bureau de change operations are more
        likely to offer competitive rates. It's also wise to limit your purchase of foreign currency to what you actually expect to spend</p><h5><b>Excess foreign currency after your trip</b></h5><p>INTRUST can exchange excess foreign currency for immediate credit at our buy rate. For more information, contact Customer Service, who can put you in touch with our Foreign Currency Desk.</p></div>    
    </div>
        </div>
    </div>
    <div class="left-right-image-cta whiteBackground" role="complementary">
    
        <div class="container">
            <div class="row">
                <div class="cta-content col-md-6">
                    <h2 class="headline">Contact Us</h2>
    
                    <div class="orangeDivider">
                        <img src="../ResourcePackages/ST/library/img/line.png" role="presentation" alt=""/>
                    </div>
    
                    <p>
                        Have questions or want to get started? Give us a call at the number below and we'll be happy to help.
                    </p>
    
                    <div class="row links">
                                                <div class="col-md-6 col-xs-12">
                                <a href="tel:8008952265">
                                    <i class="fas fa-phone" aria-label="Phone Number Phone Icon"></i>
                                    800-895-2265
                                </a>
                            </div>
                    </div>
    
                </div>
                <div class="cta-content col-md-6 mobile-first">
                    <img src="../images/default-source/cta-images/illustration-branch-480x3302f6b.png?sfvrsn=92666fac_2" alt="Illustration of an INTRUST banking center" title="illustration-branch-480x330" />
                </div>
    
            </div>
        </div>
    
    </div>
    
    
     </div> 

@include('home.footer')