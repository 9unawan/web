@extends('website.app')
@section('content')
@include('website.components.navbar')
<section class="bg-dark overflow-hidden">
    @foreach ($rfc as $item)
        

    <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-8 col-xl-6">
                <h2 class="mb-3 text-white">{{ $item->heading }}</h2>
                <p class="mb-0 text-white text-opacity-75"></p>
            </div>
        </div>
    </div>
    <div class="container justify-content-center text-center ">
        {{-- <object class="border-2 shadow" data="{{ Storage::url('public/rfc/' . $item->file) }}" width="800" height="600" type=""></object> --}}
        <iframe src="{{ Storage::url('public/rfc/' . $item->file) }}" align="top" height="600" width="800" frameborder="0" scrolling="auto"></iframe>
    </div>
    @endforeach
</section>
@endsection