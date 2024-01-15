@extends('frontend.customer.layouts.menu')
@section('menu')
@include('frontend.include.header')
<!--Page header & Title-->
<section id="page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">TENTANG KAMI</h2>
                    <p>UINSA FOOD</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.include.content.dessert')
@include('frontend.include.content.dessert')
@include('frontend.include.content.menu_content')
@endsection


