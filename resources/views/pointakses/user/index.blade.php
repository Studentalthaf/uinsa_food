<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UINSA FOOD</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bistro-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/zerogrid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">

</head>

<body>

    <!--Loader-->
    @include('frontend.include.loader')
    <!--Header-->
    @include('frontend.include.header')


    <!-- REVOLUTION SLIDER -->

    <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34"
        style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul> <!-- SLIDE  -->
                <li data-index="rs-129" data-transition="fade" data-slotamount="default" data-rotate="0"
                    data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                    data-title="Welcome &nbsp; Back" data-description="Siap Menemani Hari-Hari mu">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('frontend/images/banner2.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYER NR. 2 -->
                    <h1 class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="70"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="500" data-splitin="none" data-splitout="none" style="z-index: 6;">
                        <span class="small_title"></span> <br> Selamat &nbsp; Datang &nbsp; KAK &nbsp;<span
                            class="color"> {{ Auth::user()->nama_lengkap }}</span>
                    </h1>
                    <!-- LAYER NR. 2 -->
                    <p class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="210"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="800" style="z-index: 9;">Siap Menemani Hari-harimu!
                    </p>

                </li>

                <li class="text-center" data-index="rs-130" data-transition="slideleft" data-slotamount="default"
                    data-rotate="0" data-title="Teman &nbsp; Roti" data-description="Siap Menemani Hari-harimu!">
                    <img src="{{ asset('frontend/images/banner1.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        class="rev-slidebg" data-no-retina>
                    <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="15" data-y="70"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="500" data-splitin="none" data-splitout="none" style="z-index: 6;">
                        <span class="small_title"> Roti Sebagai Teman</span> <br> Rapat &nbsp; Dengan &nbsp; <span
                            class="color">Isian &nbsp; Coklat Lumer</span>
                    </h1>
                    <p class="tp-caption tp-resizeme" data-x="center" data-hoffset="15" data-y="210"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="800" style="z-index: 9;">Siap Menemani Hari-harimu!
                    </p>


                    <div class="tp-caption fade tp-resizeme" data-x="center" data-hoffset="15" data-y="280"
                        data-width = "full"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1200" style="z-index: 12;">
                        <a href="#specialities" class="btn-common btn-white page-scroll">Tentang &nbsp; Kami</a>
                        &nbsp; <a href="#order-form" class="btn-common btn-orange page-scroll">Beli &nbsp;
                            Sekaramg</a>
                    </div>



                </li>

                <li class="text-right" data-index="rs-131" data-transition="slideleft" data-rotate="0"
                    data-title="Makanan &nbsp; Cepat Saji" data-description="Siap Menemani Hari-harimu!">
                    <img src="{{ asset('frontend/images/b3.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <h1 class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="70"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="500" data-splitin="none" data-splitout="none" style="z-index: 6;">
                        <span class="small_title">Tersedia</span> <br> Makanan &nbsp; Cepat Saji &nbsp; <span
                            class="color">ENAK</span>
                    </h1>
                    <p class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="210"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="800" style="z-index: 9;">Siap Menemani Hari-harimu!
                    </p>

                    <div class="tp-caption fade tp-resizeme" data-x="right" data-hoffset="" data-y="280"
                        data-width = "full" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1200" style="z-index: 12;">
                        <a href="#" class="btn-common btn-white page-scroll">Beli Sekarang</a>
                    </div>
                </li>
                <!-- SLIDE  -->
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!--Features Section-->
    <section class="feature_wrap padding-half" id="specialities">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading ">Menu &nbsp; Spesial</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="icon-food"></i>
                    <h3><a href="#">Makanan Berat</a></h3>
                    <p> Enjoy Delicious Food!</p>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="icon-coffee"></i>
                    <h3><a href="#">Sarapan</a></h3>
                    <p> Enjoy Delicious Food!</p>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="icon-glass"></i>
                    <h3><a href="#">Minuman Segar</a></h3>
                    <p> Enjoy Delicious Food!</p>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="icon-food"></i>
                    <h3><a href="#">Makanan Cepat Saji</a></h3>
                    <p> Enjoy Delicious Food!</p>
                </div>
            </div>

        </div>
    </section>


    <!-- image with content -->
    <section class="info_section paralax">
        <div class="container">
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-8">
                    <div class="text-center">
                        <h2 class="heading_space">Nikmati kemudahan</h2>
                        <p class="heading_space detail">dalam memesan makanan</p>
                        <a href="#" class="btn-common-white page-scroll">Order Now</a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- MAKANAN BERAT -->
    @include('frontend.include.content.makanan_berat')
    <!-- jumlah -->
    <section id="facts">
        <div class="container">
            <div class="row number-counters">
                <!-- first count item -->
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <div class="counters-item row">
                        <i class="icon-smile"></i>
                        <h2><strong data-to="4680">0</strong></h2>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="counters-item  row">
                        <i class="icon-food"></i>
                        <h2><strong data-to="865">0</strong></h2>
                        <p>Dishes Served</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="900ms">
                    <div class="counters-item  row">
                        <i class="icon-glass"></i>
                        <h2><strong data-to="510">0</strong></h2>
                        <p>Total Beverages</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
                    data-wow-delay="1200ms">
                    <div class="counters-item  row">
                        <i class="icon-coffee"></i>
                        <h2><strong data-to="1350">0</strong></h2>
                        <p>Cup of coffees</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- dESSERT -->
    @include('frontend.include.content.dessert')
    <!-- Our cheffs -->
    <section id="cheffs2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading">Our &nbsp; Kitchen &nbsp; Staff</h2>
                    <hr class="heading_space">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cheffs_wrap_slider">
                        <div id="our-cheffs" class="owl-carousel">
                            <div class="item">
                                <div class="cheffs_wrap">
                                    <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                                    <h3>Stafeny Rose</h3>
                                    <small>Head Of Kitchen</small>
                                    <p>Enjoy Delicious Food!</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cheffs_wrap">
                                    <img src="{{ asset('frontend/images/our-cheffs2.jpg') }}" alt="Kitchen Staff">
                                    <h3>Michael Reubens</h3>
                                    <small>Food Supervisor</small>
                                    <p>Enjoy Delicious Food!</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cheffs_wrap">
                                    <img src="{{ asset('frontend/images/our-cheffs3.jpg') }}" alt="Kitchen Staff">
                                    <h3>Angle Maria</h3>
                                    <small>Head Cook</small>
                                    <p>Enjoy Delicious Food!</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cheffs_wrap">
                                    <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                                    <h3>Stafeny Rose</h3>
                                    <small>Food Supervisor</small>
                                    <p>Enjoy Delicious Food!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    @include('frontend.include.footer')

    <script src="{{ asset('frontend/js/jquery-2.2.3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/js/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/functions.js') }}" type="text/javascript"></script>


</body>

</html>
