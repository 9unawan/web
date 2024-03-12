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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Help Desk</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">HelpDesk</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
{{-- @foreach ($id as $item)
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xxl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-primary">
                                <img width="40" height="40" viewBox="0 0 24 24" fill="none" src="{{ Storage::url('public/dinas/'.$dt->image) }}" alt="">
                            </div>
                        </div>
                        <div class="media-body ml-3">
                            <a href="">
                                <h3>{{ $dt->title }}</h3>
                            </a>
                            <small class="text-muted">{{ $dt->sub_title }}</small>
                        </div>
                    </div>
                    <div class="social-avatar">
                        <div class="social-body">
                            <p>{{ $dt->content }}</p>
                            <div class="btn-group">
                                <a href="" class="pull-right"><strong><i class="fa fa-phone-square text-primary"></i>Lapor</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach --}}
        <div class="card-header">
            <a href="/helpdesk/dashboard" class="btn btn-success mb-4">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('lapor.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="layanan">Layanan</label>
                                    <input type="text" class="form-control  @error('tetle') is-invalid @enderror" value="{{ old('layanan') }}" name="layanan"
                                        id="" aria-describedby="TitlelHelp" placeholder="layanan">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small> --}}
                                </div>
                                @error('layanan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id=""
                                        placeholder="input" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                <label for="kategori">kategori</label>
                                <select name="kategori" class="form-control" id="kategori">
                                    <option value="">Pilih Kategori</option>
                                        <option value="2">Lainnya</option>
                                        <option value="3">Server down</option>
                                        <option value="4">Tidak dapat login</option>
                                        <option value="5">Error pada aplikasi</option>
                                        <option value="6">Gagal membuat akun</option>
                                        <option value="7">Aplikasi tidak dapat diakses</option>
                                        <option value="8">Tidak dapat melakukan input data</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="summernote1" placeholder="content" rows="10">{{ old('content') }}</textarea>
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