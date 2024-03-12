@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="" id="">
    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h2 class="mb-3">All Post</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-auto"><button class="btn btn-primary">Search</button></div>
                <div class="col"><input type="email" class="form-control" placeholder="Search ..." /></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            @forelse ($artikel as $post)
            <div class="col-md-6 col-lg-4 ">
                <div class="card shadow">
                    <div class="card-body mt-2">
                        <h5 class="mb-3">{{ $post->title }}</h5>
                        <p class="text-muted">
                            {{ Str::limit($post->content,70)}}
                        </p>
                        <img class=" rounded" src="{{ Storage::url('public/artikel/'.$post->image) }}" width="100%" />
                        <a class="btn btn-light-dark mt-3" href="{{ 'artikel/', $post->id }}">Read More <i class="ti ti-external-link"></i></a>
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
            @endforelse
        </div>
        <div>
            <a  class="btn btn-outline-info" href="">Show all</a>
        </div>
    </div>
</section>
@endsection