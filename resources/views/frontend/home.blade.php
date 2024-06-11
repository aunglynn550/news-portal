@extends('frontend.layouts.master')

@section('content')
 
   
   <!-- breaking news  carousel-->
   @include('frontend.home-components.breaking-news')
    <!-- End breaking news carousel -->

    <!-- Hero news Secion-->
    @include('frontend.home-components.hero-slider')
    <!-- End Hero news Section-->

    <!-- Popular news category -->
    @include('frontend.home-components.main-news')
    <!-- End Popular news category -->
 
@endsection
