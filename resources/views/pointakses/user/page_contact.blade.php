@extends('frontend.customer.layouts.menu')
@section('menu')
    @include('frontend.include.header')

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Kontak</h2>
                        <p>PUSAT BISNIS UIN SUNAN AMPEL SURABAYA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Contact Form & Address-->
    <section class="padding">
        <div class="container order-page">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="heading">Get in Touch</h2>
                    <hr class="heading_space">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.261930651734!2d112.7326924!3d-7.324448800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb630f2ea01b%3A0x3b7988de8ec93660!2sCafe%20Maqha!5e0!3m2!1sen!2sid!4v1704768485203!5m2!1sen!2sid"
                            width="100%" height="92%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 bistro">
                    <h2 class="heading">bistro</h2>
                    <hr class="heading_space">
                    <p><strong>Contact Office:</strong> +6231-8410298 ext. 2103</p>
                    <p><strong>Email:</strong> <a href="mailto:support@bistro.com"> pusbisuinsasurabaya@gmail.com</a></p>
                    <p><a href="#.">https://uinsa.ac.id/pusbis</a></p>
                    <p><strong>Address:</strong>  Kantin Maqha lt 2 UIN Sunan Ampel Surabaya, Jl. Ahmad Yani No.117, Jemur Wonosari, Wonocolo, Surabaya</p>
                    <ul class="social_icon">
                        <li class="black"><a href="#." class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li class="black"><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                        <li class="black"><a href="#." class="google"><i class="icon-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
