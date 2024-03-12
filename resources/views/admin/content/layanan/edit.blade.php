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
                    
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    {{-- < class="card-header"> --}}
                        <a href="/admin/beranda/" class="btn btn-success mb-4">Back</a>
                    
                    <h5>Form Edit</h5>
                    <hr>

                    
                    <div class="row">
                        <div class="col-md-6 content-center align-center">
                            <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text"  class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $layanan->title) }}"
                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label class="form-label" for="content">Content</label>
                                    <input type="text" name="content"  class="form-control @error('content') is-invalid @enderror" value="{{ old('content', $layanan->content) }}" id="1summernote"
                                        placeholder="input" >
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
    <script src="{{ asset('../assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
    <script>
    (function () {
        ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
        console.error(error);
        });
    })();
    </script>

    <script>
        CKEDITOR.replace( 'content' )
    </script>
@endsection