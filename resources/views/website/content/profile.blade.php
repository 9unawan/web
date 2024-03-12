{{-- @extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg-primary overflow-hidden">
    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h2 class="mb-3 text-white">Profil PerayaKota-CSIRT</h2>
                <p class="mb-0 text-white text-opacity-75"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 app_dotsContainer">
                <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_1">
                    <h4 class="text-white f-w-500">Chat</h4>
                    <p class="mb-0 text-white text-opacity-75">
                        Power your web apps with the conceptual chat app of Able Pro
                        Dashboard Template.
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_2">
                    <h4 class="text-white f-w-500">E-commerce</h4>
                    <p class="mb-0 text-white text-opacity-75">
                        Collection, Filter, Product Detail, Add New Product, and
                        Checkout pages makes your e-commerce app complete.
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.4s" href="#app_3">
                    <h4 class="text-white f-w-500">Inbox</h4>
                    <p class="mb-0 text-white text-opacity-75">
                        Compose Message, List Message (email), Detailed Inbox pages well
                        suited for any conversation based web apps.
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.6s" href="#app_4">
                    <h4 class="text-white f-w-500">User Management</h4>
                    <p class="mb-0 text-white text-opacity-75">
                        Detailed pages for User Management like Profile settings, role,
                        account settings, social profile and more to explore.
                    </p>
                </a>
            </div>
            <div class="col-md-6 position-relative wow fadeInRight" data-wow-delay="0.4s">
                <div class="owl-carousel owl-theme screen-slide img-app-moke">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}

@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg- overflow-hidden">
    @foreach ($profile as $item)
    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h1 class="mb-3">{{ $item->heading }}</h1>
                <p class="mb-0 text-white text-opacity-75"></p>
            </div>
        </div>
    </div>
    <div class="container title">
        <div class="row justify-content-betwean text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h5 class="mb-3"></h5>
                <p>{!! $item->content !!}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection