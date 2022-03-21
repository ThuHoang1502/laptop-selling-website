@extends('layout')

@section('çontent')

<div class="hero-wrap hero-bread"
    style="background-image: url('/laptop-selling-website/public/template/users/images/bg-11.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="{{ URL::to('/trang-chu')}}">Trang chủ</a></span> <span></span></p>
                <h1 class="mb-0 bread"> {{ $title }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Tìm thấy kết quả với từ khóa <span style="color: #82ae46;">"{{ $keyword }}"</span>
                </h2>
                <br><br>
            </div>
        </div>
        <div class="row">

            @include('products.list')

        </div>
    </div>
</section>

@endsection