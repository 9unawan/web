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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card-header">
            <a href="/admin/profile/" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" class="form-control  @error('tetle') is-invalid @enderror" value="{{ old('heading') }}" name="heading"
                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                @error('heading')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                {{-- <div class="form-group">
                                    <label class="form-label" for="sub_title">Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control  @error('sub_tetle') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('sub_title') }}">
                                </div>
                                @error('sub_title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            
                                {{-- <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" name="heading" class="form-control  @error('heading') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('heading') }}">
                                </div>
                               @error('heading')
                                   <div class="alert alert-danger">
                                    {{ $message }}
                                   </div>
                               @enderror --}}
                               {{--  --}}
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="summernote" placeholder="content" rows="10">{{ old('content') }}</textarea>
                                </div>
                                @error('content')
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