
@extends('layouts.app')

@section('content')
<!-- <div style="margin-top: 50px;">
<h1>Home</h1>
</div> -->

@include('inc.header')

<!-- <section id="about">
<div class="container">
<div class="row">
<div data-aos="zoom-in" class="col-lg-12 text-center">
<h2 class="section-heading text-uppercase">About</h2>
<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
</div>
</div>
</div> -->

@include('inc.about')
@include('inc.products')
@include('inc.portfolio')

@section('sidebar')

@endsection
<!-- @parent
<p>This is appended for sidebar</p> -->
@endsection