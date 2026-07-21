
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .footer2 {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .footer-container .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .footer-container a {
            color: #fff;
            text-decoration: none;
        }
        .footer-container a:hover {
            text-decoration: underline;
        }
        .footerCol {
            flex: 1 1 200px;
            margin: 10px;
        }
        .footerCol p {
            font-weight: bold;
        }
        .socialIcons ul {
            list-style: none;
            padding: 0;
            display: flex;
        }
        .socialIcons li {
            margin: 0 10px;
        }
        .socialIcons a {
            color: #fff;
            font-size: 20px;
        }
        .address .vcard {
            display: flex;
            flex-direction: column;
        }
        .address .vcard div {
            margin: 5px 0;
        }
        .copyright-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<footer class="footer2" aria-label="Page Footer">
    <div class="container footer-container">
        <div class="row">
            <a href="/" class="brand" title="Link to home">
                <img src="images/default-source/default-album/intrust-logo-(2)0fab.png?sfvrsn=91c53d6b_2" alt="intrust-logo" title="intrust-logo" style="max-width: 150px;">
            </a>
        </div>
        <div class="row">
            <!-- Col 1 - Social Media -->
            <section class="footerCol socialMedia" aria-label="Footer Social Media Links">
                <p>CONNECT WITH US</p>
                <nav class="socialIcons" aria-label="Social Media Links">
                    <ul>
                        <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-label="Facebook Icon"></i></a></li>
                        <li><a href="#" title="X" target="_blank"><i class="fab fa-x-twitter" aria-label="X Icon"></i></a></li>
                        <li><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram" aria-label="Instagram Icon"></i></a></li>
                        <li><a href="#" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in" aria-label="LinkedIn Icon"></i></a></li>
                    </ul>
                </nav>
            </section>
            <!-- Col 2 - Contact Us -->
            <section class="footerCol contactUs" aria-label="Contact Us - Customer Service">
                <p>CONTACT US</p>
                <div class="routing">
                    <strong>Customer Service: </strong><br>
                    <a href="mailto:firstonline.kruggercoin@consultant.com"><span class="custServNum">firstonline.kruggercoin@consultant.com</span></a><br>
                    <a href="mailto:stvalrservice@consultant.com"><span class="custServNum">stvalrservice@consultant.com</span></a>
                </div>
                <div class="routing">
                    <strong>Phone: </strong><span class="routingNum">+27849866544</span>
                </div>
            </section>
            <!-- Col 3 - Address -->
            <section class="footerCol address" aria-label="Address Information">
                <p>GET IN TOUCH</p>
                <address itemscope itemtype="http://schema.org/Organization" aria-label="Silvertech Savings Bank Address">
                    <div class="vcard">
                        <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <div class="street-address" itemprop="streetAddress">
                                <i class="fas fa-map-marker-alt"></i> Standard Bank Centre, 5 SIMMONDS Street, Johannesburg, 2001 South African.
                            </div>
                            <span class="postal-code" itemprop="postalCode"></span>
                        </div>
                        <div>
                            <span itemprop="email">
                                <i class="fas fa-envelope"></i> firstonline.kruggercoin@consultant.com<br>
                                <i class="fas fa-envelope"></i> stvalrservice@consultant.com
                            </span>
                            </div>
                            <br>
                            <span class="tel" itemprop="telephone">
                                <i class="fas fa-phone-alt"></i> +27849866544
                            </span>
                        </div>
                    </div>
                </address>
            </section>
            <!-- Col 4 - Links -->
            <!--<section class="footerCol links" aria-label="Careers, Site User Agreement, Privacy Policy">-->
            <!--    <p>QUICK LINKS</p>-->
            <!--    <div>-->
            <!--        <p><a href="careers.html" title="Careers" class="footerLinks">Careers</a></p>-->
            <!--        <p><a href="disclosure/site-user-agreement.html" title="Site User Agreement" class="footerLinks">Site User Agreement</a></p>-->
            <!--        <p><a href="website-accessibility.html" title="Website Accessibility" class="footerLinks">Website Accessibility</a></p>-->
            <!--        <p><a href="privacy-policy.html" title="Privacy Policy" class="footerLinks">Privacy Policy</a></p>-->
            <!--        <p><a href="docs/default-source/default-document-library/intrust-annual-report385c.pdf?sfvrsn=aad96651_13" title="Annual Report" class="footerLinks">Annual Report</a></p>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- Col 5 - App Buttons -->
            <!--<section class="footerCol appButtons" aria-label="App Download Buttons">-->
            <!--    <p>DOWNLOAD OUR APP</p>-->
            <!--    <div>-->
            <!--        <a href="#"><img src="images/app-store.png" alt="App Store" style="max-width: 120px;"></a>-->
            <!--        <a href="#"><img src="images/google-play.png" alt="Google Play" style="max-width: 120px;"></a>-->
            <!--    </div>-->
            <!--</section>-->
        </div>
        <div class="row">
            <section class="copyright-footer" aria-label="copyright">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="copyrightInfo">
                                &copy; Standard plus institution service. All rights reserved.
                                <img src="images/default-source/default-album/logo_ehl_white_53x445973.png?sfvrsn=e7074368_2" alt="logo_ehl_white_53x44" title="logo_ehl_white_53x44" style="vertical-align:initial; max-width: 14px;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>

</body>
</html>

    
    
    
    <script src="bundles/js9905?v=I7asbiXaxTyGbun_zPoLjtkyeq3aKDUMcTxWiJRzU-41"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script> <script type="text/javascript" charset="utf8" src="../cdn.datatables.net/v/bs4/dt-1.10.18/cr-1.5.0/kt-2.5.0/r-2.2.2/datatables.min.js"></script> <script src="../cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script> <!-- Start dependancies for RatesExporter --> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.css"> <script src="bundles/ratesjse1dc?v=0IlXCkCT9gQYSFJv-Cdq2eHXZevnd82uqUo3wKDOCUw1"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.js"></script> <script src="../cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script> <!-- End dependancies for RatesExporter --> <!-- mainES6.js == debug file. main,js == production--> <script src="bundles/mainjs6042?v=_C3tTO-QlNQ1cfYqZvUcwKr8CQ5pt57JNatQpEN0Sjg1"></script> <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCHIYZUBpk78GNW7bU0EAWw6wX2K8XTleo"></script> <script>
                if ($('.location-search').length) {
                    CreateLocationsMap();
                }
                if ($('.location-detail-map').length) {
                    CreateLocationDetailMap();
                }
            </script> <script type="application/json" id="PersonalizationTracker">
        {"IsPagePersonalizationTarget":false,"IsUrlPersonalizationTarget":false,"PageId":"5fb889c4-5c63-4da8-8639-0ff49faccf2e"}
    </script><script type="text/javascript" src="WebResource24f5.js?d=NjxTqR2bqTw1rewxxlkHPu5OCASj8DZeouzLteGlvK8IRkJNzcz824I_lvvzgd6LZCA4dPYklvTQZa57mzYRaXTUWxQE7BZXQXNTZZwTKh0fKmrdHx8HiwnttX2SA69kIADTFhdscDheBnfS6GWqKXka5rfrHpjvQSVrKKxaPwlM8tqsLZmNsFtIbliA8Cu1DJgvYcr0_4Sm36DVy-T5iO41tQk9vBpzl8sr1kXI04E1&amp;t=638385112280000000">
    
    </script> </div> </body> 
    <!-- Mirrored from www.intrustbank.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2024 17:59:39 GMT -->
    </html>
    