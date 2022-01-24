@extends('frontend.master_home')
@section('main_content')


<!--====== SLIDER PART START ======-->

    @include('frontend.body.slider')

    <!--====== SLIDER PART ENDS ======-->

@include('frontend.body.services')

    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

@include('frontend.body.portfolio')
    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== PRINICNG START ======-->

   @include('frontend.body.pricing')

    <!--====== PRINICNG ENDS ======-->

    <!--====== ABOUT PART START ======-->

    @include('frontend.body.about')

    <!--====== ABOUT PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

   @include('frontend.body.testimon')

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== TEAM START ======-->
@include('frontend.body.team')
    

    <!--====== TEAM  ENDS ======-->

    <!--====== CONTACT PART START ======-->

    @include('frontend.body.contact')

    @endsection