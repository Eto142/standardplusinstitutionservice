@include('home.header')  
  
  <div id="content" role="main"> 
    <div class="row" data-sf-element="Row">
        <div id="Main_C051_Col00" class="sf_colsIn col-lg-12 feature-hero-with-fade pt-5" data-sf-element="Column 1" data-placeholder-label="Column 1"><div id="Main_C052_Col00" class="sf_colsIn container text-block text-center pt-4 pt-lg-5" data-sf-element="Container" data-placeholder-label="Container">
    <div >
        <div ><h1>Contact Us</h1><p>We're here to support you.</p><p style="font-size:36px;"><b><a href="" style="color:white;text-decoration:none;" data-sf-ec-immutable="">support@standardplusinstitutionservice.online</a></b></p><p><img src="images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></p><!--- <hr style="background-color:rgba(255,255,255,.6);" />  -->
    <p><b>24/7 automated banking is always available.</b><br />Check your balance, review recent activity, transfer funds, and more.</p><p><b>Representatives are available to assist you:</b><br />Monday - Sunday, 24/7 CT<br /></p><p>&nbsp;</p></div>    
    </div>
    </div>
    
        </div>
    </div>
    <!--<div class="row" data-sf-element="Row">-->
    <!--    <div id="Main_C053_Col00" class="sf_colsIn col-lg-12 whiteBackground" data-sf-element="Column 1" data-placeholder-label="Column 1"><div id="Main_C054_Col00" class="sf_colsIn container py-4 py-lg-5" data-sf-element="Container" data-placeholder-label="Container"><div class="row" data-sf-element="Row">-->
    <!--    <div id="Main_C074_Col00" class="sf_colsIn col-lg-12 p-4" data-sf-element="Column 1" data-placeholder-label="Column 1"><div class="row" data-sf-element="Row">-->
    <!--    <div id="Main_C055_Col00" class="sf_colsIn col-lg-6 px-0" data-sf-element="Column 1" data-placeholder-label="Column 1">-->
    <!--    </div>-->
    <!--    <div id="Main_C055_Col01" class="sf_colsIn col-lg-6 navyBackground p-5 justify-content-center align-items-center" data-sf-element="Column 2" data-placeholder-label="Column 2">-->
    <!--<div >-->
    <!--    <div ><h2>Visit a banking center</h2><p><img src="images/default-source/default-album/linef27a.png?sfvrsn=3e8e9b68_0" aria-hidden="true" sf-size="209" alt="Orange line" /></p><p>Convenient locations across Kansas, Oklahoma, and Northwest Arkansas. Find a banking center near you, view available lobby and drive-thru hours, and get directions.</p><p><a href="locations.html" class="btn btn-primary mx-0">Find a Location</a></p></div>    -->
    <!--</div>-->
    <!--    </div>-->
    <!--</div>-->
    
    <!--    </div>-->
    <!--</div>-->
    <div class="row" data-sf-element="Row">
        <div id="Main_C056_Col00" class="sf_colsIn col-lg-12 pt-5 pb-3 text-center" data-sf-element="Column 1" data-placeholder-label="Column 1">
    <div >
        <div ><h2>Mailing Addresses</h2></div>    
    </div>
        </div>
    </div>
    <div class="row" data-sf-element="Row">
        <div id="Main_C057_Col00" class="sf_colsIn col-lg-3 mb-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
    <div >
        <div ><div class="p-3 address-card" style="border:1px solid #dedede;"><p><b>Bank Mailing Address</b></p><address>Standard plus institution service Trust Bank<br />support@standardplusinstitutionservice.online<br />
        </address></div></div>    
    </div>
        </div>
         
    
    </div>
    
        </div>
    </div>
    
    
    
    
    
      <main>
  <!-- Banner section start -->
  

<div class="map-section">
 
</div>


  <!-- End Map Section -->
  
  <!-- Contact Page Section -->
  <div class="contact-page-section">
    <div class="auto-container">
     
      </div>
  
      <!-- Form Boxed -->
      <div class="form-boxed">
        <div class="sec-title centered">
         
          <h2>We Always Here <span>To Help You</span></h2>
        </div>
  
  
        <div class="boxed-inner">
          <!-- Contact Form -->
          <div class="contact-form">
           <div class="col-xl-12">
                        <div class="card">
                            @if (session('error'))
                            <div class="alert box-bdr-red alert-dismissible fade show text-red" role="alert">
                                <b>Error!</b>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @elseif (session('status'))
                            <div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
                                <b>Success!</b> {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @elseif (session('message'))
                            <div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
                                <b>Success!</b> {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="card-body">
                                <h4 class="card-title mb-4"></h4>
                                <form id="inter_form" action="{{ route('send.mail')}}" method="POST">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="horizontal-firstname-input"
                                            class="col-sm-3 col-form-label">Email*</label>
                                        <div class="col-sm-9">
                                            <input type="email" value="support@standardplusinstitutionservice.online" class="form-control"
                                                id="bank_name" name="email" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="horizontal-firstname-input"
                                            class="col-sm-3 col-form-label">Subject*</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bank_name" name="subject">
                                        </div>
                                    </div>




                                    <div class="row mb-4">
                                        <label for="horizontal-firstname-input"
                                            class="col-sm-3 col-form-label">Message*</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4"
                                            name="message"></textarea>
                                    </div>


                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button id="send_pin"
                                                    class="btn btn-primary btn-rounded waves-effect waves-light"
                                                    type="submit">Send Mail</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="response"></p>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
    
    
    
    
    
    
    
    
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">

    
    
    <!-- Inner Tiles -->
    <section class="inner-tiles" aria-label="Inner Tiles">
        <div class="container">
            <div id="Main_C058_Col00" class="sf_colsIn" data-placeholder-label="Product Card Header">
    <div >
        <div ><h2>More Ways to Find Help</h2></div>    
    </div></div>
    
            <div id="Main_C058_Col01" class="sf_colsIn row" data-placeholder-label="Product Card CTAs">
    <article class="tile col-md-4" aria-label="Checking Tile">
        <!-- Needs to be clickable -->
        <a href="{{url('faq')}}" class="box " data-redirect-message="" title="">
            <div class="hoverIcon">
                <i class="far fa-arrow-alt-circle-right" aria-label="Hover Icon for Frequently Asked Questions" role="img"></i>
            </div>
            <div class="content">
    
                <div class="icon">
                    <span class="helper"></span>
                    <img src="images/default-source/icons/icon-questions-navy-600x6000fcb.png?sfvrsn=467e7998_0" alt="Outline of a persons head with a question mark inside" title="icon-questions-navy-600x600" />
                </div>
    
                <h2 class="title">Frequently Asked Questions</h2>
    
                <div class="blurb">
                    Find answers to some of our most commonly asked questions.
                </div>
            </div>
        </a>
    </article>
    </div>
        </div>
    </section>
     </div> 
    
    
    
    
    
  
@include('home.footer')