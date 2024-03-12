{{-- @extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg- overflow-hidden">
    @foreach ($layanan as $item)
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
                <h5 class="mb-3">Layanan utama</h5>
                <p>{{ $item->content }}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection --}}

@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg-primary overflow-hidden">
    @foreach ($layanan as $item)
        
    
    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h2 class="mb-3 text-white">{{ $item->heading }}</h2>
                <p class="mb-0 text-white text-opacity-75"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 app_dotsContainer">
                <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_1">
                    <h4 class="text-white f-w-500">Layanan Utama</h4>
                    <p class="mb-0 text-white text-opacity-1000">
                        {!! $item->layanan_utama !!}
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_2">
                    <h4 class="text-white f-w-500">Layanan Tambahan</h4>
                    <p class="mb-0 text-white text-opacity-1000">
                        {!! $item->layanan_tambahan !!}
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.4s" href="#app_3">
                    <h4 class="text-white f-w-500">Prosedur Aduan</h4>
                    <p class="mb-0 text-white text-opacity-1000">
                        {!! $item->prosedur_aduan !!}
                    </p>
                </a>
                {{-- <a class="app-link wow fadeInUp" data-wow-delay="0.6s" href="#app_4">
                    <h4 class="text-white f-w-500">User Management</h4>
                    <p class="mb-0 text-white text-opacity-75">
                        Detailed pages for User Management like Profile settings, role,
                        account settings, social profile and more to explore.
                    </p> --}}
                </a>
            </div>
            <div class="col-md-6 position-relative wow fadeInRight" data-wow-delay="0.4s">
                <div class="owl-carousel owl-theme screen-slide img-app-moke">
                    {{-- <div class="item" data-hash="app_1">
                        <img src="assets/images/landing/chat.png" alt="img" class="img-fluid rounded" />
                    </div>
                    <div class="item" data-hash="app_2">
                        <img src="assets/images/landing/e-commerce.png" alt="img" class="img-fluid rounded" />
                    </div>
                    <div class="item" data-hash="app_3">
                        <img src="assets/images/landing/mail.png" alt="img" class="img-fluid rounded" />
                    </div>
                    <div class="item" data-hash="app_4">
                        <img src="assets/images/landing/social.png" alt="img" class="img-fluid rounded" />
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection