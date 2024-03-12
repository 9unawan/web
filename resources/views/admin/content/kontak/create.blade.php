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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Kontak</h2>
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
                            <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" class="form-control  @error('heading') is-invalid @enderror" value="{{ old('heading') }}" name="heading"
                                        id="" aria-describedby="TitlelHelp" placeholder="heading">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small> --}}
                                </div>
                                @error('heading')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label class="form-label" for="kontak">Kontak</label>
                                    <input type="text" name="kontak" class="form-control  @error('kontak') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('kontak') }}">
                                </div>
                                @error('kontak')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                               
                                <div class="form-group">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control  @error('alamat') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('alamat') }}">
                                </div>
                               @error('alamat')
                                   <div class="alert alert-danger">
                                    {{ $message }}
                                   </div>
                               @enderror
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Map</label>
                                    <textarea class="form-control  @error('map') is-invalid @enderror" name="map" id="" placeholder="map" rows="3">{{ old('map') }}</textarea>
                                </div>
                                @error('map')
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