<!--head-->
<?php
include 'head.php';
?>

<body>

    <!--header-->
    <?php
    include 'header.php';
    ?>
    <style>
        .service-carousel .item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #006F6F;
            padding: 10px;
            border-radius: 5px;
            margin: 0 10px;
        }

        .service-carousel img {
            width: 100px;
            height: 156px;
        }

        .service-carousel h5 {
            color: #da9e63;
            margin-top: 10px;
        }

        @media (max-width: 767px) {
            .service-carousel .item {
                padding: 34px;
                margin: 0 67px;
            }

            .service-carousel img {
                width: 80px;
                height: 125px;
            }

            .service-carousel h5 {
                font-size: 14px;
                margin-top: 5px;
            }
        }

        @media (max-width: 576px) {
            .service-carousel .item {
                padding: 34px;
                margin: 0 67px;
            }

            .service-carousel img {
                width: 60px;
                height: 100px;
            }

            .service-carousel h5 {
                font-size: 12px;
                margin-top: 5px;
            }
        }
    </style>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 desktop" src="img/sliders/web1.jpg" alt="Image">
                     <img class="w-100 mobile" src="img/sliders/mobile-web1.jpg" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100 desktop" src="img/sliders/desktop-slider.jpg" alt="Image">
                     <img class="w-100 mobile" src="img/sliders/mobile-web2.jpg" alt="Image">
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- fixed form starts here  -->

    <section class="fixed-form-main">
        <div class="fixed-form-container p-container">
            <form action="thankyou.php" class="fixed-form" method="POST" autocomplete="off"
                onsubmit="return validateCaptcha()">
                <input type="text" placeholder="ENTER NAME" name="name" oninput="validateName(event)" required />
                <div style="
              display: flex;
              align-items: center;
              color: black;
              height: 22%;
              width: 36%;
            ">
                    <select name="countrycode" id=""
                        style="width: 32%;padding: 9px 0 5.5px 0;border-right: none !important;border-radius: 1rem 0 0 1rem;"
                        required>
                        <option value="91" selected>+91 (IND)</option>
                        <option value="1">+1 (USA)</option>
                        <option value="44">+44 (UK)</option>
                        <option value="81">+81 (Japan)</option>
                        <option value="86">+86 (China)</option>
                        <option value="33">+33 (France)</option>
                        <option value="49">+49 (Germany)</option>
                        <option value="7">+7 (Russia)</option>
                        <option value="61">+61 (Australia)</option>
                        <option value="55">+55 (Brazil)</option>
                        <option value="91">+91 (Canada)</option>
                        <option value="82">+82 (South Korea)</option>
                        <option value="39">+39 (Italy)</option>
                        <option value="34">+34 (Spain)</option>
                        <option value="81">+81 (Japan)</option>
                        <option value="65">+65 (Singapore)</option>
                        <option value="41">+41 (Switzerland)</option>
                        <option value="31">+31 (Netherlands)</option>
                        <option value="46">+46 (Sweden)</option>
                        <option value="52">+52 (Mexico)</option>
                        <option value="971">+971 (UAE)</option>
                        <option value="91">+91 (India)</option>
                        <option value="92">+92 (Pakistan)</option>
                        <option value="60">+60 (Malaysia)</option>
                        <option value="63">+63 (Philippines)</option>
                        <option value="64">+64 (New Zealand)</option>
                        <option value="55">+55 (Argentina)</option>
                        <option value="234">+234 (Nigeria)</option>
                        <option value="27">+27 (South Africa)</option>
                        <option value="20">+20 (Egypt)</option>
                        <option value="27">+27 (South Africa)</option>
                        <option value="31">+31 (Netherlands)</option>
                        <option value="32">+32 (Belgium)</option>
                        <option value="33">+33 (France)</option>
                        <option value="34">+34 (Spain)</option>
                        <option value="36">+36 (Hungary)</option>
                        <option value="39">+39 (Italy)</option>
                        <option value="41">+41 (Switzerland)</option>
                        <option value="43">+43 (Austria)</option>
                        <option value="45">+45 (Denmark)</option>
                        <option value="46">+46 (Sweden)</option>
                        <option value="47">+47 (Norway)</option>
                        <option value="48">+48 (Poland)</option>
                        <option value="51">+51 (Peru)</option>
                        <option value="52">+52 (Mexico)</option>
                        <option value="54">+54 (Argentina)</option>
                        <option value="55">+55 (Brazil)</option>
                        <option value="56">+56 (Chile)</option>
                        <option value="57">+57 (Colombia)</option>
                        <option value="58">+58 (Venezuela)</option>
                        <option value="60">+60 (Malaysia)</option>
                        <option value="61">+61 (Australia)</option>
                        <option value="62">+62 (Indonesia)</option>
                        <option value="63">+63 (Philippines)</option>
                        <option value="64">+64 (New Zealand)</option>
                        <option value="65">+65 (Singapore)</option>
                        <option value="66">+66 (Thailand)</option>
                        <option value="82">+82 (South Korea)</option>
                    </select>

                   <input type="tel" onkeypress="return isInputNumber(event)" 
    oninput="validatePhoneNumber(this)" 
    placeholder="PHONE NUMBER" minlength="10" maxlength="10" 
    style="flex-grow: 1; border-left:none;border-radius: 0 1rem 1rem 0;" 
    name="phone" required />

<script>
    function isInputNumber(event) {
        var char = String.fromCharCode(event.which);
        if (!/^\d+$/.test(char)) {
            event.preventDefault();
        }
    }

    function validatePhoneNumber(input) {
        if (input.value.length > 10) {
            input.value = input.value.slice(0, 10);
        }
    }
</script>
                </div>
                <input type="email" placeholder="ENTER EMAIL ID" name="email" required />
                <!--<div class="g-recaptcha" data-sitekey="6LeMIH0pAAAAALxwlYhUKgQw5sVtu-xh83Riwfqf"></div>-->
                <!-- Error message container -->
                <div class="captcha-container" style="width:25%;
                padding:16.5px 0rem;
                color: white;
                 border: 2px solid white;">
                    <span id="captcha"><?php include 'captcha.php'; ?></span>
                    <input type="text" id="captchaInput" name="captcha" required>
                </div>
                <div id="errorMessage" style="color: red"></div>
                <!-- Submit button -->
                <input type="submit" value="SUBMIT" class="contact-btn" name="submit-from" />
            </form>
        </div>
    </section>

    <!--fixed form end here-->

    <!-- About Start -->
    <div class="container-fluid bg-light view" id="over-view">
        <div class="container">
            <div class="row">
                <h1 class="mb-4 section-title"
                    style="color:#da9e63;font-family: Mrs Eaves Roman;letter-spacing: 3px;font-size: 33px;">
                    Discover a Unique Living Experience at Krishé Pearl
                </h1>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center  h-100 py-5 px-3">
                        <!--<i class="flaticon-office  display-1 font-weight-normal text-secondary mb-3"></i>-->
                        <!-- <h4 class="display-3 mb-3">25+</h4> -->
                        <!--<h1 class="m-0">Project Over View</h1>-->
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/f7MwhxET5Cs?si=vou1e00MU8WbPvFW&rel=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen style="margin-top:13px;width:100%;"></iframe>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <p
                        style="color: #fff;font-weight: 300;font-family: Palantino Light;font-size: 17px;transition: opacity .8s ease;text-align: justify;">
                        When you think of owning a house, one thing that remains constant is the sense of security and
                        stability it provides. Regardless of the size, location, or style of the house, owning a home
                        typically brings a feeling of permanence and belonging. At Krishé Pearl by Sri Krishna
                        Developpers, we are committed to offering you just that</p>
                    <p style="color: #fff; font-weight: 300;
    font-family: Palantino Light;
    font-size: 17px;
    text-align: justify;
    transition: opacity .8s ease;
    ">
                        Krishé Pearl is the first-of-its-kind Premium Lifestyle Gated Community in Chengicherla, Uppal.
                        Unparalleled in style and design aesthetics, Krishé Pearl offers the best-in-class amenities
                        crafted for your ease of living. Located in the upcoming development corridor of
                        Chengicherla-Uppal, Krishé Pearl is a significant step up from regular living.
                    </p>
                    <!--  <h1 class="mb-4 section-title" style="color: #fff; font-size: 14px;">-->
                    <!--TS RERA NO. P02200006236-->
                    <!--</h1>-->
                    <!--<div class="row py-2">-->
                    <!--    <div class="col-sm-6">-->
                    <!--        <div class="d-flex align-items-center mb-4">-->
                    <!--            <h1 class="flaticon-house font-weight-normal  m-0 mr-3" style="font-size:2rem; color:#dfb163"></h1>-->
                    <!--            <h5 class="text-truncate m-0" style="color: #fff;">6.1 acres</h5>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-sm-6">-->
                    <!--        <div class="d-flex align-items-center mb-4">-->
                    <!--            <h1 class="flaticon-stairs font-weight-normal  m-0 mr-3"  style="font-size:2rem; color:#dfb163"></h1>-->
                    <!--            <h5 class="text-truncate m-0" style="color: #fff;">G+9 floors</h5>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-sm-6">-->
                    <!--        <div class="d-flex align-items-center mb-4">-->
                    <!--            <h1 class="flaticon-office font-weight-normal  m-0 mr-3"  style="font-size:2rem; color:#dfb163"></h1>-->
                    <!--            <h5 class="text-truncate m-0" style="color: #fff;">690 units</h5>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-sm-6">-->
                    <!--        <div class="d-flex align-items-center mb-4">-->
                    <!--            <h1 class="flaticon-living-room font-weight-normal  m-0 mr-3"  style="font-size:2rem; color:#dfb163"></h1>-->
                    <!--            <h5 class="text-truncate m-0" style="color: #fff;">35+ amenities</h5>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--      <h1 class="mb-4 section-title" style="color: #fff; font-size: 14px;">-->
                    <!--TS RERA NO. P02200006236-->
                    <!--</h1>-->
                    <!--</div>-->
                </div>
                <p style="color: #fff;
    font-weight: 300;
    font-family: Palantino Light;
    font-size: 17px;
    transition: opacity .8s ease;
    ">
                    We offer 2 & 3 BHK flats, spread over G+9 floors across 3 towers, comprising a total of 690 units.
                    Spread across 6.1 acres, Krishé Pearl promises a blend of aesthetics and essential amenities,
                    ensuring a comfortable and secure lifestyle for you. With over 35 amenities at your disposal, we
                    promise nothing but the best.

                </p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-house font-weight-normal  m-0 mr-3"
                                style="font-size:2rem; color:#dfb163"></h1>
                            <h5 class="text-truncate m-0" style="color: #fff;">6.1 acres</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-stairs font-weight-normal  m-0 mr-3"
                                style="font-size:2rem; color:#dfb163"></h1>
                            <h5 class="text-truncate m-0" style="color: #fff;">G+9 floors</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-office font-weight-normal  m-0 mr-3"
                                style="font-size:2rem; color:#dfb163"></h1>
                            <h5 class="text-truncate m-0" style="color: #fff;">690 units</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-living-room font-weight-normal  m-0 mr-3"
                                style="font-size:2rem; color:#dfb163"></h1>
                            <h5 class="text-truncate m-0" style="color: #fff;">35+ amenities</h5>
                        </div>
                    </div>
                    <h1 class="mb-4 section-title" style="color: #fff; font-size: 14px;">
                        TS RERA NO. P02200006236
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="amenties">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3"
                        style="color: #122223!important;font-size: 19px;font-weight: 600;">Only the Best for You at
                        Krishe
                        Pearl</h6>
                    <h1 class="mb-4 section-title" style="color:#da9e63">High-end Amenities</h1>
                    <p style="color: #122223;
    font-weight: 500;
    font-family: Palantino Light;
    font-size: 20px;
    transition: opacity .8s ease;
    line-height: 138%;">Building a legacy of luxurious living
                        meant we had to bring you
                        exceptional amenities. Nestled in the verdant serenity of lush greenery, we have crafted only
                        the very best for you. Meticulous attention to detail allows us to present to you amenities that
                        are sure to become an integral part of your everyday living.</p>
                    <p
                        style="color: #122223; font-weight: 500; font-family: Palantino Light; font-size: 20px;transition: opacity .8s ease;line-height: 138%;">
                        Everyone wants to build a comfortable
                        life around them with everyday
                        essential necessities. From outdoor adventures for every season to cozy indoor retreats for
                        every day, we all want it. This is why Krishe Pearl by Sri Krishna Developpers was designed to
                        give you everything you need for a congenial life.</p>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0" style="margin-top: 20px;">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="item">
                            <img src="img/super-market.png" class="ament" alt="Super Market">
                            <h5 class="mb-3">Super Market</h5>
                        </div>
                        <div class="item">
                            <img src="img/pharmacy.png" class="ament" alt="Pharmacy">
                            <h5 class="mb-3">Pharmacy</h5>
                        </div>
                        <div class="item">
                            <img src="img/banquet-hall.png" class="ament" alt="Banquet Hall">
                            <h5 class="mb-3">Banquet Hall</h5>
                        </div>
                        <div class="item">
                            <img src="img/spa.png" class="ament" alt="Spa">
                            <h5 class="mb-3">Spa</h5>
                        </div>
                        <div class="item">
                            <img src="img/swimming-pool.png" class="ament" alt="Swimming Pool">
                            <h5 class="mb-3">Swimming Pool</h5>
                        </div>
                        <div class="item">
                            <img src="img/skating.png" class="ament" alt="Skating Rink">
                            <h5 class="mb-3">Skating Rink</h5>
                        </div>
                        <div class="item">
                            <img src="img/gym.png" class="ament" alt="Gym">
                            <h5 class="mb-3">Gym</h5>
                        </div>
                        <div class="item">
                            <img src="img/pet-park.png" class="ament" alt="Pet Park">
                            <h5 class="mb-3">Pet Park</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Features Start -->
    <div class="container-fluid bg-light master" id="master-plans">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Designed to perfection</h6>
                    <h1 class="mb-4 section-title" style="color: #da9e63;
    font-family: Mrs Eaves Roman;
    letter-spacing: 3px;
    font-size: 33px">Master Plan </h1>
                    <p class="mb-4" style="color: #fff;
                    text-align: justify;
    font-weight: 400;
    font-family: Palantino Light;
    font-size: 21px;
    transition: opacity .8s ease;
    line-height: 130%;">Spread over 6.1 acres, Krishe Pearl is crafted with finesse with 3 imposing towers of 9 floors
                        each and wide open spaces all around. If you believe in a quiet, serene and yet a
                        packed-with-amenities living space, we present to you our MASTER PLAN.</p>


                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center  ">
                        <a data-fancybox="master" href="img/Master Layout for Website.jpg">
                            <img class="responsive" src="img/Master Layout for Website.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features End -->


    <!-- Projects Start -->
    <section class="floorplans-main overflow background-image-transparent" id="floorplan">
        <div class="floorplans-main-container p-container">
            <div class="dropdown">
                <button id="unitPlansButton" class="btn btn-primary mt-3 py-2 px-4" style="color: #fff;
                        background-color:#122223" onclick="toggleUtilityDropdown()">UNIT
                    Plans</button>
                <button id="siteProgressButton" class="btn btn-primary mt-3 py-2 px-4" style="color: #fff;
                        background-color:#122223;" onclick="toggleSiteProgressDropdown()">Site Progress</button>

                <div id="siteProgressDropdownContainer" style="margin-top: 2rem; display: none;">
                    <select name="siteProgress" id="siteProgressSelect" required onchange="showSiteProgressOption(this)"
                        class="dropdown-content">
                        <option value="progress7">July 2024</option>
                        <option value="progress6">June 2024</option>
                        <option value="progress5">May 2024</option>
                        <option value="progress4">April 2024</option>
                        <option value="progress3">March 2024</option>
                        <option value="progress2">February 2024</option>
                        <option value="progress1">January 2024</option>

                    </select>
                </div>
            </div>
        </div>
    </section>

    <section class="floorplans-main overflow unitplans-main container-fluid background-image-transparent" id="plans">
        <div class="floorplans-main-container  p-container">
            <div class="floorplans-mains-wrapper p-flex">
                <div class="unitplan">
                    <div class="floorplans-towerA-wrapper unit-plans-wrappercomplete">
                        <div class="two-d-unitplans" style="margin-top: -30px">
                            <h1 class="mb-4">2D & 3D PLANS</h1>
                            <div class="2d-unitplans-wrapper unitplans">
                                <!--1-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\mobile-1.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-1.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-1.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-1.png"
                                            alt="Desktop 2D Image">
                                    </a>
                                </div>
                                <!--2-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\mobile-2.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-2.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-2.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-2.png" alt="">
                                    </a>
                                </div>
                                <!--3-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\mobile-3.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-3.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-3.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-3.png" alt="">
                                    </a>
                                </div>
                                <!--4-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\mobile-4.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-4.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-4.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-4.png" alt="">
                                    </a>
                                </div>
                                <!--5-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\mobile-5.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-5.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-5.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-5.png" alt="">
                                    </a>
                                </div>
                                <!--6-->
                                <div class="floorplans-slider-img">
                                    <a data-fancybox="master" href="img\2D & 3D Plans\dmobile-6.png">
                                        <img class="mobile-slider" src="img\2D & 3D Plans\mobile-6.png"
                                            alt="Mobile 2D Image">
                                    </a>
                                    <a data-fancybox="master" href="img\2D & 3D Plans\desk-7.png">
                                        <img class="desk-slider" src="img\2D & 3D Plans\desk-7.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="construction-img-container p-container" id="januaryConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500; margin-top: 57px "><strong>"Construction
                Update"</strong></h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/c-4.jpg">
                    <img src="./img/construction/c-4.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/c-5.jpg">
                    <img src="./img/construction/c-5.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/c-7.jpg">
                    <img src="./img/construction/c-7.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/c-1.jpg">
                    <img src="./img/construction/c-1.jpg">
                </a>
            </div>
        </div>
    </div>

    <div class="construction-img-container p-container" id="februaryConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500; margin-top: 57px "><strong>"Construction
                Update"</strong></h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/Feb4.jpg">
                    <img src="./img/construction/Feb4.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/Feb5.jpg">
                    <img src="./img/construction/Feb5.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/Feb3.jpg">
                    <img src="./img/construction/Feb3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/Feb2.jpg">
                    <img src="./img/construction/Feb2.jpg">
                </a>
            </div>
            <!--5-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/Feb1.jpg">
                    <img src="./img/construction/Feb1.jpg">
                </a>
            </div>
        </div>
    </div>
    <div class="construction-img-container p-container" id="marchConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500;"><strong>"Construction update"</strong></h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/March1.jpg">
                    <img src="./img/construction/March1.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./media/construction/March2.jpg">
                    <img src="./img/construction/March2.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/March3.jpg">
                    <img src="./img/construction/March3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/March4.jpg">
                    <img src="./img/construction/March4.jpg">
                </a>
            </div>
            <!--5-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/March5.jpg">
                    <img src="./img/construction/March5.jpg">
                </a>
            </div>
            <!--6-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/March6.jpg">
                    <img src="./img/construction/March6.jpg">
                </a>
            </div>
        </div>
    </div>

    <!--April    -->
    <div class="construction-img-container p-container" id="aprilConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500;"><strong>"Construction Update"</strong> </h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april1.jpg">
                    <img src="./img/construction/april1.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april2.jpg">
                    <img src="./img/construction/april2.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april3.jpg">
                    <img src="./img/construction/april3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april4.jpg">
                    <img src="./img/construction/april4.jpg">
                </a>
            </div>
            <!--5-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april5.jpg">
                    <img src="./img/construction/april5.jpg">
                </a>
            </div>
            <!--6-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/april6.jpg">
                    <img src="./img/construction/april6.jpg">
                </a>
            </div>
        </div>
    </div>

    <!--may-->
    <div class="construction-img-container p-container" id="mayConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500;"><strong>"Construction Update"</strong></h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may1.jpg">
                    <img src="./img/construction/may1.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may2.jpg">
                    <img src="./img/construction/may2.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may3.jpg">
                    <img src="./img/construction/may3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may4.jpg">
                    <img src="./img/construction/may4.jpg">
                </a>
            </div>
            <!--5-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may5.jpg">
                    <img src="./img/construction/may5.jpg">
                </a>
            </div>
            <!--6-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/may6.jpg">
                    <img src="./img/construction/may6.jpg">
                </a>
            </div>
        </div>
    </div>
    <!--june-->
    <div class="construction-img-container p-container" id="juneConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500;"><strong>"Construction Updates"</strong> </h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june1.jpg">
                    <img src="./img/construction/june1.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june2.jpg">
                    <img src="./img/construction/june2.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june3.jpg">
                    <img src="./img/construction/june3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june4.jpg">
                    <img src="./img/construction/june4.jpg">
                </a>
            </div>
            <!--5-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june5.jpg">
                    <img src="./img/construction/june5.jpg">
                </a>
            </div>
            <!--6-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/june6.jpg">
                    <img src="./img/construction/june6.jpg">
                </a>
            </div>
        </div>
    </div>
    <!--july-->
    <div class="construction-img-container p-container" id="julyConstructionImagesContainer"
        style="display: none; margin-top: -5rem ">
        <h5 style="font-size: 20px; font-weight: 500;"><strong>"Construction Updates"</strong> </h5>
        <div class="construction-img-wrapper">
            <!--1-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/july1.jpg">
                    <img src="./img/construction/july1.jpg">
                </a>
            </div>
            <!--2-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/july2.jpg">
                    <img src="./img/construction/july2.jpg">
                </a>
            </div>
            <!--3-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/july3.jpg">
                    <img src="./img/construction/july3.jpg">
                </a>
            </div>
            <!--4-->
            <div class="construction-img">
                <a data-fancybox="construction" href="./img/construction/july4.jpg">
                    <img src="./img/construction/july4.jpg">
                </a>
            </div>
        </div>
    </div>

    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div
                        class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <!-- <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6> -->
                        <h1 class="mb-0 text-center" style="color: #da9e63;
    font-family: Mrs Eaves Roman;
    letter-spacing: 1px;
    font-size: 33px;">Our Gallery</h1>
                        <a href="https://www.krishepearl.com/gallery.php"
                            class="btn btn-primary mt-3 py-2 px-4" style="color: #da9e63;
                     
    background-color: #025A55;;">View More</a>
                    </div>

                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <a data-fancybox="master" href="img\main-gallery\g-23.jpg">
                                    <img class="img-fluid " src="img\main-gallery\g-23.jpg" alt="">
                                </a>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 style="color:#da9e63;">Banquet</h5>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <a data-fancybox="master" href="img\main-gallery\g-19.jpg">
                                    <img class="img-fluid w-200" src="img\main-gallery\g-19.jpg" alt="">
                                </a>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 style="color:#da9e63;">Gym View</h5>

                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <a data-fancybox="master" href="img\main-gallery\g-18.jpg">
                                    <img class="img-fluid w-100" src="img\main-gallery\g-18.jpg" alt="">
                                </a>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 style="color:#da9e63;">Children Play Area</h5>

                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img\gallery\g-4.jpg" alt="">
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 style="color:#da9e63;">Over View</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <sections class="specification backgroundsp-image-transparent" id="specifications">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3"></h6>
                <h1 class="mb-4">Specifications</h1>
            </div>
        </div>
        <div class="mains">
            <!--left-->
            <div class="accordian1">
                <!--1-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Structure</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li>RCC Structured Frame work</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--2-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Doors/Windows & Ventilators</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li><strong>Main Door :</strong> Engineered wood / Hardwood frame with flush shutter fitted
                                with Reputed make Hardware.</li>
                            <li><strong>Internal Doors :</strong> Engineered wood / Hardwood frame with flush shutter
                                fitted with reputed make.</li>
                            <li><strong>Toilet Doors :</strong> Engineered wood frame with ISI mark Water proof Flush
                                shutter fitted with reputed make hardware.</li>
                            <li><strong>French Doors :</strong> UPVC door frames with sliding.</li>
                            <li><strong>Windows :</strong> UPVC windows with provision for mosquito mesh.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--3-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Tile Cladding</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li><strong>Toilets :</strong> Vitrified tiles dado up to 8 feet ceiling height of reputed
                                make.</li>
                            <li><strong>Utility Area :</strong> Vitrified tile dado up to Balcony railing height of
                                reputed make.</li>
                            <li><strong>Kitchen :</strong> Platform & Sink with Vitrified tile dado above kitchen
                                platform (optional). Provision for fixing of water purifier, exhaust fan and chimney.
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--4-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Walls</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li>200mm thickness external walls & 100mm thickness internal walls</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <!--right-->
            <div class="accordion2">
                <!--1-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>CP & Sanitary Fixtures</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li>All toilets are fitted with wall mounted EWC with concealed flush valve of reputed make.
                            </li>
                            <li>All C.P. Fittings and sanitary fixtures are of reputed make. </li>
                            <li>Single lever wall mixer with shower of reputed make in all the bathrooms.</li>
                            <li>Provision for Geysers and exhaust fans in all bathrooms.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--2-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Electrical</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li>Concealed copper wire of reputed make.</li>
                            <li>Power outlets for Air Conditioners in MBR, GBR and Living / Drawing Room.</li>
                            <li>Power outlets for Washing Machine, Dish washer, Mixer, Micro oven, Refrigerator, Water
                                Purifier, Chimney.</li>
                            <li>Modular switches of reputed make.</li>
                            <li>Three phase power supply for each unit and individual Prepaid Dual Source Energy Meters
                                for recording DG & EB Power consumption.</li>
                            <li>100% power backup for all flats, corridors & common areas.</li>
                            <li>Solar power panels will be installed as per the Government norms.</li>
                            <li>Well illuminated energy efficient led lighting for Lift Lobbies, Parking area,
                                Corridors.</li>
                            <li><strong>Telephone Points :</strong> Telephone points in master bed room, drawing /
                                living rooms.</li>
                            <li><strong>Intercom Facility :</strong> Intercom facility to all the units connecting
                                security.</li>
                            <li><strong>Cable TV :</strong> Provision for cable connection in Master bedroom & living
                                room.</li>
                            <li><strong>Internet :</strong> Provision for internet connection in each flat.</li>
                            <li><strong>Passenger Lifts :</strong> High speed automatic passenger lifts with Auto rescue
                                devise with VVVF drive for energy efficiency of reputed make for each tower with CCTV
                                Camera’s inside the lift cabins.</li>
                            <li><strong>Fire / Service Lifts :</strong> High speed automatic passenger and service lift
                                per block with Auto rescue device with VVVF drive for energy efficiency of reputed make
                                for each tower with CCTV Camera’s inside the lift cabins.</li>
                            <li><strong>Centralized Billing :</strong> : Billing shall be done for consumption of
                                electricity, DG, Water & Gas with prepaid meters system.</li>
                            <li><strong>STP :</strong> : Sewage Treatment Plant of adequate capacity as per norms will
                                be provided inside the project & Recycled water shall be used for flushing and
                                landscaping works.</li>
                            <li><strong>WTP :</strong> Fully Treated water made available through exclusive Water
                                Softening & Purification plant.</li>
                            <li><strong>Fire & Safety :</strong> Sprinklers in basements & wet risers in all floors
                                shaft & basements (as per Fire Safety Authority regulations).</li>
                            <li><strong>Car wash facility :</strong> Provision for Car wash facility at Cellar Parking
                                Area.</li>
                            <li><strong>EV Charging Point :</strong> Provision will be given at visitors parking area.
                            </li>
                            <li><strong>Security / BMS :</strong>
                                <ul>
                                    <li>Sophisticated round-the-clock security / Surveillance System.</li>
                                    <li>Security for screening of visitors.</li>
                                    <li>Panic Button and intercom is provided in the lifts connected to security room.
                                    </li>
                                    <li>Surveillance cameras at the main security, entrance of each block, inside lifts,
                                        entrance of each lift in every floor and other important points to monitor.</li>
                                </ul>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--3-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Flooring</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li><strong>Living /Kitchen / all Bed rooms :</strong> 1200mmx600mm high quality Vitrified
                                Tiles of reputed make.</li>
                            <li><strong>Toilets / Utility :</strong> 600mm x 600mm Anti-skid vitrified tiles of reputed
                                make.</li>
                            <li><strong>Corridors :</strong> 1200mm x 600mm Vitrified Tiles.</li>
                            <li><strong>Balcony :</strong> 195 mm x 1200 mm wood finish vitrified tiles.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!--4-->
                <div class="accordions">
                    <div class="acc-btn">
                        <h3>Painting</h3>
                    </div>
                    <div class="content">
                        <p>
                        <ul>
                            <li><strong>External :</strong> Weather proof Texture paint.</li>
                            <li><strong>Internal :</strong> Two coats of premium emulsion paint with smooth Finish.</li>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </sections>
    <!-- Testimonial End -->
    <div class="container-fluid bg-light connectivity">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5 left">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Bringing your world closer</h6>
                    <h1 class="mb-4 section-title" style="color: #da9e63;
    font-family: Mrs Eaves Roman;
    letter-spacing: 1px;
    font-size: 33px;">Krishé Pearl Connectivity</h1>
                    <!--1-->
                    <div class="accordions">
                        <div class="acc-btn">
                            <h3>WORKPLACES</h3>
                        </div>
                        <div class="content">
                            <p>
                            <ul>
                                <li style="color:#fff"><strong>BEL:</strong> 10 minutes</li>
                                <li style="color:#fff"><strong>Mellon Technologies:</strong> 17 minutes</li>
                                <li style="color:#fff"><strong>Infosys SEZ Campus:</strong> 24 minutes</li>
                                <li style="color:#fff"><strong>Genpact:</strong> 23 minutes</li>
                                <li style="color:#fff"><strong>NSL ARENA:</strong> 25 minutes</li>
                                <li style="color:#fff"><strong>GGK Technologies:</strong> 28 minutes</li>
                                <li style="color:#fff"><strong>Infotech:</strong> 40 minutes</li>
                                <li style="color:#fff"><strong>Wipro:</strong> 45 minutes</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <!--2-->
                    <div class="accordions">
                        <div class="acc-btn">
                            <h3>ACADEMIC</h3>
                        </div>
                        <div class="content">
                            <p>
                            <ul>
                                <li style="color:#fff"><strong>Meridian School:</strong> 1 minute</li>
                                <li style="color:#fff"><strong>Krishnaveni Talent School:</strong> 5 minutes</li>
                                <li style="color:#fff"><strong>Little Flower School:</strong> 20 minutes</li>
                                <li style="color:#fff"><strong>Kendriya Vidyalaya:</strong> 25 minutes</li>
                                <li style="color:#fff"><strong>St. Ann's High School:</strong> 26 minutes</li>
                                <li style="color:#fff"><strong>Anurag University:</strong> 20 minutes</li>
                                <li style="color:#fff"><strong>VBIT:</strong> 28 minutes</li>
                                <li style="color:#fff"><strong>Anurag College of Engineering:</strong> 29 minutes</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <!--3-->
                    <div class="accordions">
                        <div class="acc-btn">
                            <h3>HOSPITALS </h3>
                        </div>
                        <div class="content">
                            <p>
                            <ul>
                                <li style="color:#fff"><strong>Sri SVS Hospitals:</strong> 5 minutes</li>
                                <li style="color:#fff"><strong>Kakathiya Hospital:</strong> 7 minutes</li>
                                <li style="color:#fff"><strong>Save Hospitals:</strong> 13 minutes</li>
                                <li style="color:#fff"><strong>Chitra Hospital:</strong> 14 minutes</li>
                                <li style="color:#fff"><strong>Spandhana Hospital:</strong> 14 minutes</li>
                                <li style="color:#fff"><strong>Ankura:</strong> 15 minutes</li>
                                <li style="color:#fff"><strong>Spark Hospitals:</strong> 15 minutes</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <!--4-->
                    <div class="accordions">
                        <div class="acc-btn">
                            <h3>ENTERTAINMENT</h3>
                        </div>
                        <div class="content">
                            <p>
                            <ul>
                                <li style="color:#fff"><strong>Shantivanam Park:</strong> 5 minutes</li>
                                <li style="color:#fff"><strong>Nandanavanam Park:</strong> 10 minutes</li>
                                <li style="color:#fff"><strong>Asian Muktha Cinemas:</strong> 12 minutes </li>
                                <li style="color:#fff"><strong>Asian Cinesquare:</strong> 15 minutes</li>
                                <li style="color:#fff"><strong>DSL Virtue Mall:</strong> 25 minutes</li>
                                <li style="color:#fff"><strong>Rajiv Gandhi International Stadium:</strong> 23 minutes
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="accordions">
                        <div class="acc-btn">
                            <h3>TRANSIT</h3>
                        </div>
                        <div class="content">
                            <p>
                            <ul>
                                <li style="color:#fff"><strong>Uppal Metro:</strong> 5 minutes</li>
                                <li style="color:#fff"><strong>Charlapalli Rly (Upcoming):</strong> 10 minutes</li>
                                <li style="color:#fff"><strong>ORR:</strong> 12 minutes </li>
                                <li style="color:#fff"><strong>Secunderbad/ Kachiguda Rly:</strong> 15 minutes</li>
                                <li style="color:#fff"><strong>RGIA:</strong> 25 minutes</li>
                                <!--<li><strong>Rajiv Gandhi International Stadium :</strong> 23 minutes</li>-->
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 right">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a data-fancybox="master" href="img/pear-location.jpg">
                            <img src="img/pear-location.jpg" alt="" class="location">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-#d2b48c87  emi-background-image" id="contact">
        <div class="container">
            <div class="row get-in">
                <div class="left">
                    <div class="contact-form">
                        <div id="success"></div>
                        <div class="card">
                            <h4 data-aos="slide-up" data-aos-delay="150" data-aos-duration="800">CONTACT US</h4>
                            <p data-aos="slide-up" data-aos-delay="150" data-aos-duration="800">Leave us your details
                                and rest assured someone from our team will reach out to you soon</p>
                            <form action="thankyou.php" id="contact-form" method="POST" autocomplete="off">
                                <input type="text" placeholder="ENTER NAME" name="name" oninput="validateName(event)"
                                    required style="width: 91%;">

                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <select name="countrycode" id=""
                                            style="border-right:none!important; margin-left: -15px" required>
                                            <option value="91" selected>+91 (IND)</option>
                                            <option value="1">+1 (USA)</option>
                                            <option value="44">+44 (UK)</option>
                                            <option value="81">+81 (Japan)</option>
                                            <option value="86">+86 (China)</option>
                                            <option value="33">+33 (France)</option>
                                            <option value="49">+49 (Germany)</option>
                                            <option value="7">+7 (Russia)</option>
                                            <option value="61">+61 (Australia)</option>
                                            <option value="55">+55 (Brazil)</option>
                                            <option value="91">+91 (Canada)</option>
                                            <option value="82">+82 (South Korea)</option>
                                            <option value="39">+39 (Italy)</option>
                                            <option value="34">+34 (Spain)</option>
                                            <option value="81">+81 (Japan)</option>
                                            <option value="65">+65 (Singapore)</option>
                                            <option value="41">+41 (Switzerland)</option>
                                            <option value="31">+31 (Netherlands)</option>
                                            <option value="46">+46 (Sweden)</option>
                                            <option value="52">+52 (Mexico)</option>
                                            <option value="971">+971 (UAE)</option>
                                            <option value="91">+91 (India)</option>
                                            <option value="92">+92 (Pakistan)</option>
                                            <option value="60">+60 (Malaysia)</option>
                                            <option value="63">+63 (Philippines)</option>
                                            <option value="64">+64 (New Zealand)</option>
                                            <option value="55">+55 (Argentina)</option>
                                            <option value="234">+234 (Nigeria)</option>
                                            <option value="27">+27 (South Africa)</option>
                                            <option value="20">+20 (Egypt)</option>
                                            <option value="27">+27 (South Africa)</option>
                                            <option value="31">+31 (Netherlands)</option>
                                            <option value="32">+32 (Belgium)</option>
                                            <option value="33">+33 (France)</option>
                                            <option value="34">+34 (Spain)</option>
                                            <option value="36">+36 (Hungary)</option>
                                            <option value="39">+39 (Italy)</option>
                                            <option value="41">+41 (Switzerland)</option>
                                            <option value="43">+43 (Austria)</option>
                                            <option value="45">+45 (Denmark)</option>
                                            <option value="46">+46 (Sweden)</option>
                                            <option value="47">+47 (Norway)</option>
                                            <option value="48">+48 (Poland)</option>
                                            <option value="51">+51 (Peru)</option>
                                            <option value="52">+52 (Mexico)</option>
                                            <option value="54">+54 (Argentina)</option>
                                            <option value="55">+55 (Brazil)</option>
                                            <option value="56">+56 (Chile)</option>
                                            <option value="57">+57 (Colombia)</option>
                                            <option value="58">+58 (Venezuela)</option>
                                            <option value="60">+60 (Malaysia)</option>
                                            <option value="61">+61 (Australia)</option>
                                            <option value="62">+62 (Indonesia)</option>
                                            <option value="63">+63 (Philippines)</option>
                                            <option value="64">+64 (New Zealand)</option>
                                            <option value="65">+65 (Singapore)</option>
                                            <option value="66">+66 (Thailand)</option>
                                            <option value="82">+82 (South Korea)</option>
                                        </select>
                                        <input type="tel"
                                            onkeypress="isInputNumber(event); if(this.value.length >= 10) return false;"
                                            onpaste="return isPasteValid(event);" placeholder="ENTER PHONE NUMBER" type="number"
                                            name="phone" minlength="10" maxlength="10" required style="width: 70%">

                                    </div>
                                </div>

                                <input type="email" placeholder="ENTER EMAIL ID" name="email" required
                                    style="width: 91%;">



                                <div class="captcha-container" style=" color:#1f1c1c; border: 2px solid white; ">
                                    <span id="anotherCaptcha">
                                        <?php include 'another_captcha.php'; ?>
                                    </span>
                                    <input type="text" id="anotherCaptchaInput" name="anotherCaptcha" required>

                                </div>
                                <!--<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">-->

                                <!--<div class="g-recaptcha" data-sitekey="6LeMIH0pAAAAALxwlYhUKgQw5sVtu-xh83Riwfqf"></div>-->

                                <button type="submit" class="button" onclick="this.classList.toggle('button--loading')"
                                    name="submit-from" value="SUBMIT"
                                    style="width: 100%;height: 7vh; background-color:#122223;">
                                    <span class="button__text">Submit</span>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="right">
                    <div class="contact-left">


                        <div class="contact-map" data-aos="zoom-out" data-aos-delay="400" data-aos-duration="800">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15227.11207112179!2d78.6028125!3d17.4224375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x28abcc223e95f7cf%3A0x44a3b866437fea36!2sKrishe%20Pearl!5e0!3m2!1sen!2sin!4v1698387712985!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php

    include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"
        integrity="sha512-iSVaq9Huv1kxBDAOH7Il1rwIJD+uspMQC1r4Y73QquhbI2ia+PIXUoS5rBjWjYyD03S8t7gZmON+Dk6yPlWHXw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGG3634J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        $('.slider-main').slick({
            // dots: true,
            arrows: true,
            speed: 300,
            autoplay: true,
            duration: 2000,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>'

        });



        // responsive sliders 
        $('.floorplans').slick({
            dots: true,
            arrows: true,
            speed: 300,
            autoplay: true,
            duration: 2000,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>'

        });


        // unit plans 
        $('.unitplans').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',

            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        // BANK PARTNERS 
        $('.bank-partners').slick({
            dots: true,
            infinite: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',

            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }

            ]
        });


        // construction imges 
        $('.construction-img-wrapper').slick({
            dots: true,
            infinite: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',

            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="sliders.js"></script>
    <!--Fancy Box-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.min.js"></script>

    <script>
        Fancybox.bind('[data-fancybox="master"]', {
            hideScrollbar: false,
        });

        // calculation table  
        document.getElementById("calculateBtn").addEventListener("click", function () {
            document.getElementById("calculations").style.display = "block";
        });
    </script>
</body>

</html>