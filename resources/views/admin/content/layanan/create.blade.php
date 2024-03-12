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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Layanan</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Layanan</h2>
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
                            <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" class="form-control  @error('tetle') is-invalid @enderror" value="{{ old('heading') }}" name="heading"
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
                                    <label class="form-label" for="layanan_utama">Layanan Utama</label>
                                    <textarea class="form-control  @error('layanan_utama') is-invalid @enderror" name="layanan_utama" id="summernote" placeholder="layanan_utama" rows="3">{!! old('layanan_utama') !!} </textarea>
                                </div>
                                @error('layanan_utama')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label class="form-label" for="layanan_tambahan">Layanan Tambahan</label>
                                    <textarea class="form-control  @error('layanan_tambahan') is-invalid @enderror" name="layanan_tambahan" id="summernote" placeholder="layanan_tambahan" rows="3">{!! old('layanan_tambahan') !!} </textarea>
                                </div>
                                @error('layanan_tambahan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label class="form-label" for="prosedur_aduan">Prosedur Aduan</label>
                                    <textarea class="form-control  @error('prosedur_aduan') is-invalid @enderror" name="prosedur_aduan" id="summernote" placeholder="prosedur_aduan" rows="3">{!! old('prosedur_aduan') !!} </textarea>
                                </div>
                                @error('prosedur_aduan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
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
        {{-- <script src="{{ asset('../assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
        <script>
        (function () {
            ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
            console.error(error);
            });
        })();
        </script> --}}


        {{-- @include('admin.components.404') --}}

        <!-- [ Main Content ] end -->
    </div>
@endsection