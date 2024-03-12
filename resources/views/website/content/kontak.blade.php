{{-- @extends('website.app')
@section('content')
@include('website.components.navbar')


@endsection --}}

@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg-primary overflow-hidden">
    @foreach ($kontak as $item)
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
                    <h4 class="text-white f-w-500"></h4>
                    <p class="mb-0 text-white text-opacity-1000">
                        {{ $item->kontak }}
                    </p>
                </a>
                <a class="app-link wow fadeInUp" data-wow-delay="0.2s" href="#app_2">
                    <h4 class="text-white f-w-500"></h4>
                    <p class="mb-0 text-white text-opacity-1000">
                        {{ $item->alamat }}
                    </p>
                </a>
                <div style="">
                    <div class="style">
                        {!! $item->map !!}
                    </div>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21095.48926686604!2d116.24105200119236!3d-8.688616223426465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb04e3f4f8d7f%3A0x35b2b45c89ea29fb!2sKantor%20Bupati%20Lombok%20Tengah!5e0!3m2!1sen!2sid!4v1709103216991!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
                
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