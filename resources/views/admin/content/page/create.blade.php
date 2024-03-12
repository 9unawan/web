@extends('admin.app')
@section('content')
    <div class="pc-content">

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Data Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Page</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Page</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card-header">
            <a href="/admin/beranda/" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">Favicon</label>
                                    <input type="file" class="form-control @error('favicon') is-invalid @enderror" name="favicon">
                                    @error('favicon')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="web_name">Web Name</label>
                                    <input type="text" class="form-control  @error('tetle') is-invalid @enderror" value="{{ old('web_name') }}" name="web_name"
                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                @error('web_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="font-weight-bold">Logo</label>
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                                    @error('logo')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="map">Map</label>
                                    <input type="text" name="map" class="form-control  @error('sub_tetle') is-invalid @enderror" id=""
                                        placeholder="Link" value="{{ old('map') }}">
                                </div>
                                @error('map')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
                                <div class="form-group">
                                    <label class="form-label" for="article_category">Article Category</label>
                                    <input type="text" name="article_category" class="form-control  @error('article_category') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('article_category') }}">
                                </div>
                                @error('article_category')
                                    <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                <label class="form-label" for="latest_article">Latest Article</label>
                                <input type="text" name="latest_article" class="form-control  @error('latest_article') is-invalid @enderror" id=""
                                    placeholder="input" value="{{ old('latest_article') }}">
                                </div>
                                @error('latest_article')
                                <div class="alert alert-danger">
                                {{ $message }}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Contact</label>
                                    <textarea class="form-control  @error('contact') is-invalid @enderror" name="contact" id="" placeholder="contact" rows="3">{{ old('contact') }}</textarea>
                                </div>
                                @error('contact')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-4">Save</button>
                                <button type="reset" class="btn btn-warning mb-4">reset</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>

            </div>
        </div>



        {{-- @include('admin.components.404') --}}

        <!-- [ Main Content ] end -->
    </div>
@endsection