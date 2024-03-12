@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="" id="">
    @foreach ($id as $artikel)
    <div class="container ">
    <div class="col-md-6 col-lg-8 shadow">
        <div class="card">
            <div class="card-body mt-2">
                <img class="pt-2 pb-5" src="{{ Storage::url('public/artikel/'.$artikel->image) }}" width="100%" />
                <h5 class="mb-3">Figma Design System</h5>
                <p class="text-muted">
                    Check the live preview of Able Pro Figma design file. Figma
                    file included in all licenses.
                </p>
                <a class="btn btn-light-dark mt-3" href="">Read More <i class="ti ti-external-link"></i></a>
            </div>
        </div>
    </div>
    </div>
    @endforeach

    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h2 class="mb-3">All Post</h2>
                <p class="mb-0">
                    Able Pro caters to the needs of both developers and designers,
                    whether they are beginners or experts.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            @forelse ($data as $artikel)
                
            
            <div class="col-md-6 col-lg-4">
                <div class="card rounded shadow">
                    <div class="card-body mt-2 ">
                        <h5 class="mb-3">{{ $artikel->title }}</h5>
                        <p class="text-muted">
                            {{ Str::limit( $artikel->content,70)}}
                        </p>
                        <img class=" rounded" src="{{ Storage::url('public/posts/'.$artikel->image) }}" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="/artikel/{{ $artikel->id }}">Read More <i class="ti ti-external-link"></i></a>
                    </div>
                </div>
            </div>
            @empty
                
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body mt-2">
                        <h5 class="mb-3">Figma Design System</h5>
                        <p class="text-muted">
                            Check the live preview of Able Pro Figma design file. Figma
                            file included in all licenses.
                        </p>
                        <img class="pt-2" src="assets/images/landing/feature-figma.png" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="https://links.codedthemes.com/mQZrX"
                            target="_blank">Read More <i class="ti ti-external-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body mt-2">
                        <h5 class="mb-3">Read more</h5>
                        <p class="text-muted">
                            Access all components of Able Pro in one place to make your
                            development work easier.
                        </p>
                        <img class="pt-2" src="assets/images/landing/feature-components.png" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="elements/bc_alert.html" target="_blank">View All
                            Components <i class="ti ti-external-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body mt-2">
                        <h5 class="mb-3">Documentation</h5>
                        <p class="text-muted">
                            Find solutions and navigate through our helper guide with
                            ease.
                        </p>
                        <img class="pt-2" src="assets/images/landing/feature-documentation.png" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="https://codedthemes.gitbook.io/able-pro-bootstrap/"
                            target="_blank">Check
                            Documentation <i class="ti ti-external-link"></i></a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
