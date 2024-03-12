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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Panduan</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Panduan</h2>
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
                            <form action="{{ route('panduan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">File</label>
                                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                                    @error('file')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id=""placeholder="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label" for="size">Size</label>
                                    <input type="text" name="size" class="form-control @error('size') is-invalid @enderror" id=""placeholder="size" value="{{ old('size') }}">
                                </div>
                                @error('size')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
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
                                {{-- <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="" placeholder="content" rows="3">{{ old('content') }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label for="exampleCheck1">Check me out</label>
                                </div> --}}
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
