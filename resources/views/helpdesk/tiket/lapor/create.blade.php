@extends('helpdesk.components.app')
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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Lapor</a></li>
                        </ul>
                    </div>
                    <style>
                        .page-header-title{
                            margin-left: 3%
                        }
                        .card-header{
                            margin-left: 3%
                        }
                    </style>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Lapor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="card-header">
            <a href="/user/tiket" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label class="form-label" for="layanan">Layanan</label>
                                <input type="text" name="layanan" class="form-control @error('layanan') is-invalid @enderror" id=""placeholder="layanan" value="{{ old('layanan') }}">
                            </div>
                            @error('layanan')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id=""placeholder="title" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
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
