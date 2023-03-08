@extends('client.shares.master')
@section('content')

 <!-- hero start -->
@include('client.component.home1.hero')
   <!-- hero end -->
@include('client.component.home1.banner')

@include('client.component.home1.offer_section')

@include('client.component.home1.menu_section')

@include('client.component.home1.booking')

@include('client.component.home1.presentation')

@include('client.component.home1.testimonials')

@include('client.component.home1.recent_section')


@endsection
