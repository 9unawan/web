@extends('website.app')
@section('content')
    <!-- [ Header ] End -->
    <!-- [ Top Features apps ] start -->
    <header class="sec" id="home">
        <!-- [ Nav ] start -->
        @include('website.components.navbar')

        <!-- [ Nav ] end -->
        <!-- [ Container ] start -->
        
        <div class="container">
            @foreach ($home as $dt)
            <div class="row justify-content-center ">
                <div class="col-md-10 text-center">
                    <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        {{ $dt->heading }}
                        {{-- <span class="hero-text-gradient">{{ $dt->title }}</span> --}}
                        
                    </h1>
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-md-8">
                            <p class="text-muted f-16 mb-0">
                                {{ $dt->content }}
                            </p>
                        </div>
                    </div>
                    <div class="my-4 my-sm-5 wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('profile') }}" class="btn btn-outline-secondary me-2">Read More</a>
                        <a target="_blank" href="/helpdesk" class="btn btn-primary">Lapor Insiden</a>
                    </div>
                    <div class="row g-5 mt-1 justify-content-center text-center wow fadeInUp" data-wow-delay="1s">
                        <div class="col-auto">
                            {{-- <p class="mb-4 text-muted">
                                - Click Below Icon to Preview Each Tech Demos -
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- logo bottom --}}
        {{-- <div class="technology-block">
            <ul class="list-inline mb-0">
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Click to Preview Bootstrap 5">
                    <a href="dashboard/index.html" target="_blank"><img src="assets/images/landing/tech-bootstrap.svg"
                            alt="img" class="img-fluid" /></a>
                </li>

                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Gulp"><img
                        src="assets/images/landing/tech-gulp.svg" alt="img" class="img-fluid" /></li>

                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Click to Preview React MUI">
                    <a href="react/index.html" target="_blank"><img src="assets/images/landing/tech-react.svg"
                            alt="img" class="img-fluid" /></a>
                </li>
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Click to Preview Angular Material">
                    <a href="angular/default/index.html" target="_blank"><img
                            src="assets/images/landing/tech-angular.svg" alt="img" class="img-fluid" /></a>
                </li>
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Click to Preview CodeIgniter">
                    <a href="codeigniter/default/public/index.html" target="_blank"><img
                            src="assets/images/landing/tech-codeigniter.svg" alt="img" class="img-fluid" /></a>
                </li>
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Click to Preview ASP.net">
                    <a href="https://able-pro.azurewebsites.net/" target="_blank"><img
                            src="assets/images/landing/tech-net.svg" alt="img" class="img-fluid" /></a>
                </li>
                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Figma Design System">
                    <a href="https://links.codedthemes.com/mQZrX" target="_blank"><img
                            src="assets/images/landing/tech-figma.svg" alt="img" class="img-fluid" /></a>
                </li>
            </ul>
        </div> --}}
    </header>

    {{-- s 1 --}}
    <section class="" id="post">
        
        <div class="container title">
            <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-8 col-xl-6">
                    <h1 class="mb-3 fs-90">Last Post</h1>
                    <p class="mb-0">
                        Able Pro caters to the needs of both developers and designers,
                        whether they are beginners or experts.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            
            <div class="row align-items-center justify-content-center ">
                @foreach ($artikel as $post)   
                
                <div class="col-md-6 col-lg-4 ">
                    <div class="card shadow">
                        <div class="card-body mt-2">
                            <h5 class="mb-3">{{ $post->title }}</h5>
                            <p class="text-muted">
                                {{ Str::limit($post->content,70)}}
                            </p>
                            <img class=" rounded" src="{{ Storage::url('public/artikel/'.$post->image) }}" width="100%" />
                            <a class="btn btn-light-dark mt-3" href="artikel/{{ $post->id }}">Read More <i class="ti ti-external-link"></i></a>
                        </div>
                    </div>
                </div>
                {{-- @empty --}}


                {{-- <div class="col-md-6 col-lg-4"> --}}
                {{-- <div class="card rounded shadow"> --}}
                    {{-- <div class="card-body mt-2 ">
                        <h5 class="mb-3">{{ $post->title }}</h5>
                        <p class="text-muted">
                            {{ Str::limit( $post->content,70)}}
                        </p>
                        <img class=" rounded" src="{{ Storage::url('public/artikel/'.$post->image) }}" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="/artikel/{{ $post->id }}">Read More <i class="ti ti-external-link"></i></a>
                    </div> --}}
                {{-- </div> --}}
                @endforeach
            </div>  
            {{-- <a class="btn btn-outline-primary mt-3" href="/artikel">Read More <i class="ti ti-link"></i></a> --}}
        </div>
        
    </section>
    <!-- [ Top Features ] End -->
    <!-- [ working apps ] start -->
    {{-- s2 --}}
    
@endsection
